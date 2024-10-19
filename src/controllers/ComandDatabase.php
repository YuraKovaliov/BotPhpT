<?php


class ComandDatabase
{

    public static function Database($chat_id,$conn,$bot,$username,$firstname)
    {
            $select = "SELECT * FROM `lokis` WHERE user_id = $chat_id";
            $result_select = mysqli_query($conn, $select);
            if ($result_select === false) {
                $bot->sendMessage($chat_id, "Ошибка в запросе SELECT: " . mysqli_error($conn));
            } else {
                // Если запрос SELECT выполнен успешно
                $row_count = mysqli_num_rows($result_select);
                if ($row_count > 0) {
                     //Запись существует, выполняем UPDATE
                    $update = "UPDATE `lokis` SET `username` = '$username',`firstname`= '$firstname' WHERE `user_id` = $chat_id";
                    $result_update = mysqli_query($conn, $update);
                    if ($result_update === true) {
                        // Обновление выполнено успешно
                    } else {
                        $bot->sendMessage($chat_id, "Ошибка в запросе UPDATE: " . mysqli_error($conn));
                    }
                } else {
                    // Записи нет, выполняем INSERT
                    $insert = "INSERT INTO `lokis`(`user_id`, `username`, `firstname`,`user_many`) VALUES ($chat_id,'$username','$firstname',0)";
                    $result_insert = mysqli_query($conn, $insert);
                    if ($result_insert === true) {
                        //  выполнена успешно
                    } else {
                        $bot->sendMessage($chat_id, "Ошибка в запросе INSERT: " . mysqli_error($conn));
                    }
                }
            }
        }

}