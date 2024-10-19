<?php
require_once "vendor/autoload.php";

class InlineKeyboardMarkup
{
public static function Markup($button)
{
    $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($button);
    return $keyboard ;
}
}