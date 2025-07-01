<?php


namespace App\Telegram;


trait Commands
{


    public function start()  // название фунции соответствует команде в телеге /start
    {
        $this->reply("Привет новому пользователю");  // отправка текста
        //$this->chat->html("<i>Курсив</i>")->send();  //отправляем html
    }
}
