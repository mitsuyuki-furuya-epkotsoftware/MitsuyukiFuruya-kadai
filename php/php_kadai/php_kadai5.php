<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 関数課題</title>
</head>
<body>
    <h3>関数課題</h3>

    <div class="func_1">
        <h5>関数課題1</h5>
        <h5>
            第一引数と第二引数の値で、
            足し算、引き算、掛け算、割り算、剰余のそれぞれ計算を行って、
            結果を返す各関数を作成し、呼び出そう。<br>
            ただし、関数は別のphpファイルに書き、
            呼び出す時は、includeで関数定義を読み込もう。
            また、各関数名は処理に合った名前を付ける事。<br>
            また、関数内の処理で、計算結果は、第一引数に上書き保存し、
            その第一引数を結果として返すようにしよう。
        </h5>
        <?php
            // includeで別ファイルを参照
            include('./php_kadai5_function.php');

            // 足し算の結果
            $add_result = addition(3, 5);
            echo '3 + 5 = ';
            echo $add_result;
            echo '<br>';

            // 引き算の結果
            $sub_result = subtraction(10, 5);
            echo '10 - 5 = ';
            echo $sub_result;
            echo '<br>';

            // 掛け算の結果
            $mult_result = multiplication(1, 3);
            echo '1 × 3 = ';
            echo $mult_result;
            echo '<br>';

            // 割り算の結果
            $div_result = division(10, 5);
            echo '10 ÷ 5 = ';
            echo $div_result;
            echo '<br>';

            // 剰余の結果
            $mod_result = modulo(5, 3);
            echo '5 % 3 = ';
            echo $mod_result;
            echo '<br>';
        ?>
    </div>

    <div class="func_2">
        <h5>関数課題2</h5>
        <h5>
            関数課題1の関数をコピーして、引数を参照渡しにした関数を作り、呼び出そう。<br>
            作った参照渡しの各関数を呼び出す時は、常に第一引数を変数aに。第二引数を変数bにしよう。<br>
            その上で、事前に変数aとbには、好きな数値を入れて、その値がどうなるか予測しながら、
            実際の値をプログラムに書いて、検証しよう。
        </h5>
        <?php
            // 足し算の結果
            $a = 5;
            $b = 10;

            add($a, $b);
            echo '5 + 10 = ';
            echo $a;
            echo '<br>';

            // 引き算の結果
            $a = 40;
            $b = 30;

            sub($a, $b);
            echo '40 - 30 = ';
            echo $a;
            echo '<br>';

            // 掛け算の結果
            $a = 4;
            $b = 8;

            mult($a, $b);
            echo '4 × 8 = ';
            echo $a;
            echo '<br>';

            // 割り算の結果
            $a = 60;
            $b = 20;

            div($a, $b);
            echo '60 ÷ 20 = ';
            echo $a;
            echo '<br>';

            // 剰余の結果
            $a = 7;
            $b = 4;

            mod($a, $b);
            echo '7 % 4 = ';
            echo $a;
            echo '<br>';
        ?>
    </div>

</body>
</html>