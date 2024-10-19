<?php
namespace controllers ;

class comandStart
{

    public function starter($Bot,$chatID,$firstname)
    {

        $button =[
            [['text'=> '👌Ознайомлений', 'callback_data'=> 'glavnaya']]
        ];

        $Bot->sendPhoto(
            $chatID,
            "AgACAgIAAxkBAAIBzWbrPV_Gcve-IP8-7mfXUuWIRH4_AAIu5zEbRzlYS-hsIlDPVEXrAQADAgADeQADNgQ",
            "Вітаю".'   '.$firstname."\n\n Мы шоколадный магазин дарам шоколадные крендели\n\nПри нажатии на кнопку *Ознакомлений*\n вы принимаете все права этого магазина",
            null,
            $keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button)
        );
    }
}