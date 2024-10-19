<?php
require __DIR__ . '/../models/InlineKeyboardMarkup.php';

class Helper
{
    public static function helpers($Bot,$chatID)
    {
        $button =[[['text' => "🇺🇦Зв'язатися📡", 'url' => 'https://t.me/ogr2034']], [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        $fileAlminPhoto = "AgACAgIAAxkBAAIEJmXUEXPmr27mD1PDIp5uGwtvNaW7AAJz3zEbDTahSiYCsGjoxyVZAQADAgADeAADNAQ";
        $helptext = "👤Адмін Бота\n\n📡Зв'язатися з адміном можна, натиснувши кнопку нижче📡";
        //$keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button);
        //$Bot->sendPhoto($chatID,$fileAlminPhoto,$helptext,null,$keyboard);
        $Bot->sendMessage($chatID,'хелпер','html',false,null,InlineKeyboardMarkup::Markup($button));

    }
}