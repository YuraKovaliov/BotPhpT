<?php
namespace controllers;

class LinkPat
{

    public function weapon($Bot,$chatID){
        $text2 = "Оружие🔫  (нужно спрашивать)";
        $button1 =[
            [['text'=> '☄️мк14', 'callback_data'=> '1']],
            [['text'=> '🔫вк', 'callback_data'=> '1']],
            [['text'=> '🔫сф', 'callback_data'=> '1']],
            [['text'=> '🔫кб', 'callback_data'=> '1']],
            [['text'=> ' мг3', 'callback_data'=> '1']],
            [['text'=> '🔫вк', 'callback_data'=> '1']],
            [['text'=> '🔫сф', 'callback_data'=> '1']],
            [['text'=> '🔫кб', 'callback_data'=> '1']],
            [['text' => "◀️назад", 'callback_data' => 'glavnaya']]
        ];
//        $text3 = "🐍Броня 6️⃣ Кобра🐍";
//        $button2 = [
//            [['text'=> '🪖Шлем ❶❺ грн   / ② ⑤руб', 'callback_data'=> '1']],
//            [['text'=> '🧥Броня ❶❺ грн  / ② ⑤руб', 'callback_data'=> '1']],
//            [['text'=> '🎒Рюкзак ❶⓿ грн /② ⓪руб', 'callback_data'=> '1']]
//        ];
//        $text4 = '🥇Броня 6️⃣ СФ🦾';
//        $button3 = [
//            [['text'=> '🪖Шлем ❶❺ грн   / ② ⑤руб', 'callback_data'=> '1']],
//            [['text'=> '🧥Броня ❶❺ грн  / ② ⑤руб', 'callback_data'=> '1']],
//            [['text'=> '🎒Рюкзак ❶⓿ грн /② ⓪руб', 'callback_data'=> '1']]
//        ];

        $Bot->sendMessage($chatID,$text2,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button1));
//        $Bot->sendMessage($chatID,$text3,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button2));
//        $Bot->sendMessage($chatID,$text4,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button3));


    }







//public function klavaPat(){
//    $klava = [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
//    return $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
//}
//
//public function textlins(){
//    return $links = "https://t.me/tiktokplayua_bot?start=";
//}
//
//public function sendLinkPat($chat_id_callback,$bot,$message_id,$connect){
//    $resultUser_ID = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `user_id` FROM `Tiktok` WHERE `user_id` = $chat_id_callback"));
//    $bot->editMessageText($chat_id_callback,$message_id,$this->textlins().$resultUser_ID['user_id'],'html');
//    $bot->editMessageReplyMarkup($chat_id_callback,$message_id,$this->klavaPat());
//
//}
}