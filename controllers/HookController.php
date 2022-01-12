<?php

namespace app\controllers;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use app\services\UsersService;
use app\services\ChatsService;
use Yii;
use yii\base\Action;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class HookController
 * @package app\controllers
 */
class HookController extends Controller
{
    private ChatsService $chatsService;

    /**
     * @param $id
     * @param $module
     * @param ChatsService $chatsService
     * @param array $config
     */
    public function __construct(
        $id,
        $module,
        ChatsService $chatsService,
        array $config = []
    ) {
        parent::__construct($id, $module, $config);

        $this->chatsService = $chatsService;
    }

    /**
     * @param Action $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionHook(): void
    {
        try {
            $requestData = json_decode(file_get_contents("php://input"), true);

            $chatId = $requestData['message']['chat']['id'];
            $chatUsername = $requestData['message']['chat']['username'];
            $chatFirstName = $requestData['message']['chat']['first_name'];
            $chatLastName = $requestData['message']['chat']['last_name'];
            $messageText = $requestData['message']['text'];

            new Telegram(Yii::$app->params['token'], Yii::$app->params['botUsername']);

            $this->chatsService->createDialogs($chatId, $chatUsername, $chatFirstName, $chatLastName, $messageText);

        } catch (\Throwable $e) {
            Yii::error([
                'error_message' => $e->getMessage(),
            ]);
        }
    }
}
