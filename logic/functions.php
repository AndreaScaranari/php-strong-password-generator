<?php
// # Funzioni
function randomPassword($p_len) {
    $char_list = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = [];
    $char_list_length = strlen($char_list) - 1;

    for ($i = 0; $i < $p_len; $i++) {
        $random_number = rand(0, $char_list_length);
        $password[] = $char_list[$random_number];
    }

    return implode($password);
}
?>