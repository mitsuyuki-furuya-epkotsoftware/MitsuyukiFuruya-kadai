<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 式と演算子課題1</title>
</head>
<body>
    <h3>式と演算子課題 (1)</h3>

    <div class="q1">
        <h5>(1)</h5>
        <h5>
            2つの文字列を比較し、同じ文字列かどうか、
            知らせる文を表示するプログラムを作ろう。<br>
            最低限、if文と、
            PHPに標準で備わっているstrcasecmp関数をネットで調べて、
            かつ使用する事。
        </h5>
        <?php
            // 変数で文字列を定義
            $str1 = 'hello';
            $str2 = 'HELLO';

            // if文のみだと
            // 大文字と小文字を区別して文字列比較をする
            if($str1 === $str2){
                echo '同じ文字列です。<br>';
            } else{
                echo '異なる文字列です。<br>';
            }
            // if文にstrcasecmp関数を用いると
            // 大文字と小文字を区別しないで文字列比較をする
            if(strcasecmp($str1, $str2) === 0){
                echo '同じ文字列です。<br>';
            } else{
                echo '異なる文字列です。<br>';
            }
        ?>
    </div>

    <div class="q2">
        <h5>(2)</h5>
        <h5>
            2つ以上の文字列を連結して表示するプログラムを作ろう。
        </h5>
        <?php
            // . で連結して表示
            echo 'こんにちは、'.'初めまして、'.'よろしくね。';
            echo '<br>';
        ?>
    </div>

    <div class="q3">
        <h5>(3)</h5>
        <h5>
            文字列と数値を結合して表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数で文字列を定義
            $mon1 = '今月は';
            $mon2 = '月です。';
            // 変数で数値を定義
            $num1 = 3;

            // 結果を出力
            echo $mon1.$num1.$mon2;
            echo '<br>';

            /* int型をstring型へキャストした方が丁寧？
            echo $mon1.(string)$num1.$mon2; */
        ?>
    </div>

    <div class="q4">
        <h5>(4)</h5>
        <h5>
            定数を使って文字列を作成し表示するプログラムを2つ作ろう。<br>
            ただし、定数の構文は2種類あるので、1種類ずつ使う事。
        </h5>
        <?php
            // defineを使用する場合
            define('STR_DE', 'define定数');
            echo STR_DE;
            echo '<br>';

            // constを使用する場合
            const STR_CON = 'const定数';
            echo STR_CON;
            echo '<br>';
        ?>
    </div>

    <div class="q5">
        <h5>(5)</h5>
        <h5>
            PHPに標準で備わっている定数を使用して、
            行番号とファイル名を表示するプログラムを作ろう。<br>
            PHPに標準で備わっている定数には、
            どんなものがあるか、自分で調べてみよう。
        </h5>
        <?php
            // 行番号を取得し表示
            echo '行番号:'.__LINE__.'<br>';

            // ファイル名を取得し表示
            echo 'ファイル名:'.__FILE__.'<br>';
        ?>
    </div>

    <div class="q6">
        <h5>(6)</h5>
        <h5>
            300の数値を変数に設定して、
            365の数値で割った答えを表示するプログラムを作ろう。
        </h5>
        <?php
            // 300を変数で定義
            $day = 300;
            // 変数と数値で割り算
            echo $day / 365;
            /*  表示結果はint型 / float型の割り算だが、
                暗黙の型変換でfloat型へキャストする */
            echo '<br>';
        ?>
    </div>

    <div class="q7">
        <h5>(7)</h5>
        <h5>
            好きな数値を入れた変数を用意して、後置加算演算子を使い、
            加算後の結果を表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数を宣言
            $like_num1 = 10;
            // 後置インクリメント
            $like_num1++;
            // 結果を出力
            echo $like_num1;
            echo '<br>';
        ?>
    </div>

    <div class="q8">
        <h5>(8)</h5>
        <h5>
            好きな数値を入れた変数を用意して、後置減算演算子を使い、
            減算後の結果を表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数を宣言
            $like_num2 = 20;
            // 後置デクリメント
            $like_num2--;
            // 結果を出力
            echo $like_num2;
            echo '<br>';
        ?>
    </div>

    <div class="q9">
        <h5>(9)</h5>
        <h5>
            前置演算子と後置演算子を組み合わせて使用し、
            その結果を表示するプログラムを作り、
            前置と後置の違いを体感しよう。
        </h5>
        <?php
            // 変数を宣言
            $i = 10;
            $j = 10;

            // iは後置インクリメント
            $i = $i++;
            // jは前置インクリメント
            $j = ++$j;

            echo '変数iの値:'.$i.'<br>';
            echo '変数jの値:'.$j.'<br>';
        ?>
    </div>

    <div class="q10">
        <h5>(10)</h5>
        <h5>
            3と2の数値を設定した変数を用意して、
            その変数を足し算した値を表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数を宣言
            $num_3 = 3;
            $num_2 = 2;

            // 結果を出力
            echo $num_3 + $num_2;
            echo '<br>';
        ?>
    </div>

    <div class="q11">
        <h5>(11)</h5>
        <h5>
            「1234」の数値を、文字列の値に変換して表示するプログラムを作ろう。<br>
            その際に、現在の値の型まで表示してくれる関数var_dump()を使おう。
        </h5>
        <?php
            // 変数を宣言
            $int_num = 1234;
            // var_dumpで出力 int型からstring型へキャスト
            var_dump((string)$int_num);
            echo '<br>';
        ?>
    </div>

    <div class="q12">
        <h5>(12)</h5>
        <h5>
            以下のソースの間違えを考え、修正し、
            正しい結果を表示するプログラムに変えよう。<br>
            3 = $locations;<br>
            2 + $locations = $c;<br>
            print($c);
        </h5>
        <?php
            $locations = 3;
            $c = $locations + 2;
            print($c);
            echo '<br>';
        ?>
    </div>

</body>
</html>