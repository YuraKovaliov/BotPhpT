<?php
require __DIR__ . '/../../autoloader.php';

function initRouter($Bot,$Update)
{
    //error_log('Данные в роутере: ' . print_r($Update, true));
    $chatID = null;
    $firstname = null;
    $username = null;



    // Проверяем, пришло ли обычное сообщение
    if (isset($Update['message'])) {
        $chatID = $Update['message']['chat']['id'];
        $message = $Update['message']['text'];
        $firstname = $Update['message']['chat']['first_name'];
        $username = $Update['message']['chat']['username'];

        //Проверка Команд
        if (strpos($message, '/') === 0) {
            switch ($message) {
                case '/start':
                    $start = new controllers\comandStart();
                    $start->starter($Bot, $chatID, $firstname);
                    break;
                default:
                    $Bot->sendMessage($chatID, 'Неизвестная команда.');
                    break;
            }
        } else {
            //Проверка обычных сообщений
            switch ($message) {
                case '💵Купить UC':
                    $Partner = new controllers\Partners();
                    $Partner->Pat($Bot, $chatID);
                    break;
                    case '👊Броня';
                    $b = new controllers\Stat();
                    $b->brona($Bot,$chatID);
                    break;
                    case '🏹Оружие':
                     $v = new controllers\LinkPat();
                     $v->weapon($Bot,$chatID);
                    break;
                default:
                    $Bot->sendMessage($chatID, 'Неизвестная команда.');
                    break;
            }
        }

    }
        //проверяю есть или нет callback запроса
    if (isset($Update['callback_query'])) {
        $callbackQuery = $Update['callback_query'];
        $chatID = $callbackQuery['message']['chat']['id'];
        $callbackData = $callbackQuery['data'];

      // error_log('Получен callback запрос: ' . print_r($callbackQuery, true));

         switch($callbackData) {
             case 'glavnaya':
                 $os = new controllers\Mainmenu();
                 $os->Menu($Bot,$chatID);
                break;
             default:
                 $Bot->sendMessage($chatID, 'Извините проблема с клавиатурой ');
                 break;
        }

    }
}

