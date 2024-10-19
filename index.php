<?php
use TelegramBot\Api\Client;
require_once "vendor/autoload.php";

try {

    $TGtoken = "7227255254:AAFlJ4DWO0JzMOoNqu928G1cN_lZ3h6FojA";
    $Bot = new Client($TGtoken);

    $webhookUrl = "https://fa94-85-238-105-213.ngrok-free.app";
    $response = file_get_contents("https://api.telegram.org/bot{$TGtoken}/setWebhook?url={$webhookUrl}");
    //var_dump($response);//проверка хука

    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $port = "";
    // $conn = mysqli_connect($servername, $username, $password, $dbname,$port);

    //Получениее данных
    $Input = file_get_contents('php://input');
    $Update = json_decode($Input, true);

    error_log(print_r($Update, true)); //log

    if (isset($Update)){
//        $chatId = $Update['message']['chat']['id'];
//        //  $message = $Update['message']['text'];
//        $chat_id_callback = $Update['callback_query']['message']['chat']['id'];
//        $Photo_id = $Update['message']['photo']['2']['file_id'];
//        $callback_data = $Update['callback_query']['data'];
//        $username = $Update['message']['chat']['username'];
//        $firstname = $Update['message']['chat']['first_name'];
//        $callbak = $Update['callback_query']['data'];
//        $message_id = $Update['callback_query']['message']['message_id'];
//        $User_name = $Update['message']['chat']['first_name'];
//
        //error_log('Данные на индексе перед роутером: ' . print_r($Update, true));
        require __DIR__ . '/src/routs/Rout.php';
        initRouter($Bot,$Update);
  }else{
           error_log('Нет сообщения в запросе.');
        }

    $Bot->on(function (\TelegramBot\Api\Types\Update $Update) use ($Bot) {
    }, function () {
        return true;
    });
    $Bot->run();

} catch (\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}