<?php
namespace controllers ;

class Partners
{
    public function Pat($Bot,$chatID)
    {

        $button = [
            [['text' => "💵60🟰37💰", 'callback_data' => 'd']],
            [['text' => "💵355🟰195💰", 'callback_data' => 'd']],
            [['text' => "💵720🟰380💰", 'callback_data' => 'd']],
            [['text' => "💵1950🟰890💰", 'callback_data' => 'd']],
            [['text' => "💵4000🟰1800💰", 'callback_data' => 'd']],
            [['text' => "💵8400🟰3650💰", 'callback_data' => 'd']],
            [['text' => "💵16800🟰7100💰", 'callback_data' => 'd']],
            [['text' => "💵25200🟰10550💰", 'callback_data' => 'd']],
            [['text' => "💵33600🟰14140💰", 'callback_data' => 'd']],
            [['text' => "💸42000🟰17600💰", 'callback_data' => 'd']],
            [['text' => "💸84000🟰35000💰", 'callback_data' => 'd']],
            [['text' => "◀️назад", 'callback_data' => 'glavnaya']]
    ];

        $textPat = "‼️КУПУЄШ ДЕШЕВО🤯\n
❗️❗️Поповнюємо 💰 по вашому 🆔, 📛Без входу до облікового запису🔒 ";
            $Bot->sendMessage($chatID,
                $textPat,
                'html',
                false,
                null,
                $keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button));
    }
}