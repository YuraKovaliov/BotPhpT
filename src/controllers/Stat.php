<?php
namespace controllers;

class Stat
{

    public function brona($Bot,$chatID){
        $text1 = "•☀️🥽Тепловизор❤️‍🔥 ❶⓿ грн /② ⓪руб\n\n
🦺🦺Броня🦺🦺\n
🪖Шлем ❶❺ грн  / ② ⑤руб\n
🧥Броня ❶❺ грн   / ② ⑤руб\n
🎒Рюкзак ❶⓿ грн  /② ⓪руб\n\n

🐍Броня 6️⃣ Кобра🐍\n
🪖Шлем ❶❺ грн   / ② ⑤руб\n
🧥Броня ❶❺ грн  / ② ⑤руб\n
🎒Рюкзак ❶⓿ грн /② ⓪руб\n\n


🥇Броня 6️⃣ СФ🦾\n
🪖Шлем ❷⓿ грн     / ③⓪руб\n
🧥Броня ❷⓿грн     / ③⓪руб\n
🎒рюкзак ❶⓿ грн /  ② ⓪руб";



        $text2 = "Броня Обычная🥉";
        $button1 =[
            [['text'=> '•☀️🥽Тепловизор❤️‍🔥 ❶⓿ грн /② ⓪руб', 'callback_data'=> '1']],
            [['text'=> '🪖Шлем ❶❺ грн  / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🧥Броня ❶❺ грн   / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🎒Рюкзак ❶⓿ грн  /② ⓪руб', 'callback_data'=> '1']],
        ];
        $text3 = "🐍Броня 6️⃣ Кобра🐍";
        $button2 = [
            [['text'=> '🪖Шлем ❶❺ грн   / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🧥Броня ❶❺ грн  / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🎒Рюкзак ❶⓿ грн /② ⓪руб', 'callback_data'=> '1']]
        ];
        $text4 = '🥇Броня 6️⃣ СФ🦾';
        $button3 = [
            [['text'=> '🪖Шлем ❶❺ грн   / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🧥Броня ❶❺ грн  / ② ⑤руб', 'callback_data'=> '1']],
            [['text'=> '🎒Рюкзак ❶⓿ грн /② ⓪руб', 'callback_data'=> '1']],
            [['text' => "◀️назад", 'callback_data' => 'glavnaya']]
        ];

        $Bot->sendMessage($chatID,$text1);
        $Bot->sendMessage($chatID,$text2,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button1));
        $Bot->sendMessage($chatID,$text3,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button2));
        $Bot->sendMessage($chatID,$text4,null,false,null,$keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button3));

    }

//    public function createInlineKeyboard12(){
//      $klava = [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
//        return $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
//    }
//
//    public function Statistics1($bot,$connect,$chat_id)
//    {
//        //СТАТИСТИКА
//            date_default_timezone_set('Europe/Kiev');
//            $date = date("d-m-Y H:i:s ");
//            $res32112 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) AS id FROM `Tiktok` "));
//            $res32113 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT SUM(user_many) AS user_many FROM `Tiktok` "));
//            $res321135 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT SUM(video_luking) AS video_luking FROM `Tiktok` "));
//            $bot->sendMessage($chat_id,"👥Статистика на ".$date."\n\n✋Користувачів Бота :".' '.$res32112['id']."\n💰Зароблено Користувачами :".' '.$res32113['user_many'].' '."₴\n🏦Виплачено : 9700₴\n👨‍💻 Переглянуто Відео :".' '.$res321135['video_luking']."\n\n\n",'html',false,null,$this->createInlineKeyboard12());
//    }
}