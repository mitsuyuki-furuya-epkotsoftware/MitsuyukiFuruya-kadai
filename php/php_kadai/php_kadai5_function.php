<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* ユーザー定義関数 */

        // 足し算
        function addition($add_num1, $add_num2){
            // 計算した値を第一引数に代入
            $add_num1 = $add_num1 + $add_num2;
            // 戻り値として返す
            return $add_num1;
        }

        // 引き算
        function subtraction($sub_num1, $sub_num2){
            // 計算した値を第一引数に代入
            $sub_num1 = $sub_num1 - $sub_num2;
            // 戻り値として返す
            return $sub_num1;
        }

        // 掛け算
        function multiplication($mult_num1, $mult_num2){
            // 計算した値を第一引数に代入
            $mult_num1 = $mult_num1 * $mult_num2;
            // 戻り値として返す
            return $mult_num1;
        }

        // 割り算
        function division($div_num1, $div_num2){
            // 計算した値を第一引数に代入
            $div_num1 = $div_num1 / $div_num2;
            // 戻り値として返す
            return $div_num1;
        }

        // 剰余
        function modulo($mod_num1, $mod_num2){
            // 計算した値を第一引数に代入
            $mod_num1 = $mod_num1 % $mod_num2;
            // 戻り値を返す
            return $mod_num1;
        }
    ?>

    <?php
        /* ユーザー定義関数 参照渡し */

        // 足し算
        function add(&$add_num1, $add_num2){
            // 計算結果を第一引数に入れる
            $add_num1 = $add_num1 + $add_num2;
        }

        // 引き算
        function sub(&$sub_num1, $sub_num2){
            // 計算結果を第一引数に入れる
            $sub_num1 = $sub_num1 - $sub_num2;
        }

        // 掛け算
        function mult(&$mult_num1, $mult_num2){
            // 計算結果を第一引数に入れる
            $mult_num1 = $mult_num1 * $mult_num2;
        }

        // 割り算
        function div(&$div_num1, $div_num2){
            // 計算結果を第一引数に入れる
            $div_num1 = $div_num1 / $div_num2;
        }

        // 剰余
        function mod(&$mod_num1, $mod_num2){
            // 計算結果を第一引数に入れる
            $mod_num1 = $mod_num1 % $mod_num2;
        }
     ?>

</body>
</html>