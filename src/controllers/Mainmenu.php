<?php
namespace controllers ;

class Mainmenu
{

    public function Menu($Bot,$chatID)
    {
        $button = [ [['text' => "💵Купить UC"]],
                    [['text' => '👊Броня'],['text' => '🏹Оружие']],
                    [['text' => '🗣Помощь']] ];

        $Bot->sendMessage(
            $chatID,
            "<i style='font-family: Times New Roman, serif;'>Головне меню</i>",
            'html',
            false,
            null,
            $keyboard2 = new \TelegramBot\Api\Types\ReplyKeyboardMarkup($button, true, true));
    }
}