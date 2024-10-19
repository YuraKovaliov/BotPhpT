<?php


class ReplyKeyboardMarkup
{
    public static function Reply($button)
    {
        $keyboard = new \TelegramBot\Api\Types\ReplyKeyboardMarkup($button, true, true);
        return $keyboard;
    }
}