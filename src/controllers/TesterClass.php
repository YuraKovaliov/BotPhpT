<?php


class TesterClass
{
public static function message($Bot,$chatID){
    $Bot->sendMessage($chatID,"отработал калбек");
}
}