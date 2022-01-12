<?php use yii\bootstrap4\Html;
use yii\helpers\Url;

foreach ($users as $user): ?>
    <a href="#">
        <li class="list-group-item text-truncate">
            <b><?php echo $user->first_name ?> <?php echo $user->last_name ?></b> (<?php echo $user->username ?>)<br>
        </li>
    </a>
    <?= Html::a( $user->first_name
        , Url::to(['', 'id' => $user->chat_id]), ['data-method' => 'POST']) ?>
<?php endforeach ?>
