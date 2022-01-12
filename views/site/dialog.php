<div class="card" style="height: 700px;">
    <div class="card-body">
        <ul id="chat" style="height:660px; overflow-x:hidden;" data-spy="scroll" data-target="#myNavbar" data-offset="50" class="list-group list-group-flush ">
            <?php foreach ($chats as $chat): ?>
                <li><p class="p-3 pt-0 pb-0 m-0" style="background-color: #a6e0ff; border-radius: 20px; max-width: 400px;"><?php echo $chat->message ?></p></li>
                <p class="m-1 text-muted"><?php echo Yii::$app->formatter->asDate($chat->created_at, 'dd.MM.yyyy HH:i') ?> </p>
            <?php endforeach ?>
        </ul>
    </div>
</div>