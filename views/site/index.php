<style>
    a{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    a li:hover{
        background-color: #d6d8d9;
    }
    li {
        list-style-type: none; /* Убираем маркеры */
    }
</style>
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Главная';
?>

<div class="container mt-5">

    <div class="card bg-light text-dark" style="height: 800px; background-color: rgba(255,0,0,.1);">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control m-1" placeholder="Введите пользователя..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary m-1" type="button" id="button-addon2">Поиск</button>
                    </div>
                    <ul style="height:710px; overflow-x:hidden;" data-spy="scroll" data-target="#myNavbar" data-offset="50" class="list-group list-group-flush ">
                        <?= $this->render('_list-dialog', ['users' => $users]) ?>
                    </ul>
                </div>

                <div class="col-8">
                    <?= $this->render('dialog') ?>
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Отправить сообщение..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="refreshButton">Отправить</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
