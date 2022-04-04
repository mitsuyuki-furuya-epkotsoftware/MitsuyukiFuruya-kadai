<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 制御文課題</title>
</head>
<body>
    <h3>制御文課題</h3>

    <div class="q1">
        <h5>(1)</h5>
        <h5>
            条件分岐のチェック<br>
            表示する度に、ランダムで、if,elseif,else,のどれかの処理が行われるプログラムを作ろう。<br>
            PHPに標準で備わっているrand()関数をネットで調べよう。
        </h5>
        <?php
            // for文で5回繰り返す
            for($i = 0; $i <= 5; $i++){
                // 生成した乱数を変数に代入
                $num = rand(0, 10);
                if($num % 2 == 0 && $num != 0){
                    // 2で割り切れた場合
                    echo $num.'は偶数です。<br>';
                } else if($num % 2 == 1){
                    // 2で余りが生じた場合
                    echo $num.'は奇数です。<br>';
                } else {
                    // 0の場合
                    echo $num.'はゼロです。<br>';
                }
            }
            echo '<br>';
        ?>
    </div>

    <div class="q2">
        <h5>(2)</h5>
        <h5>
            三項演算子を使用して、表示する度にランダムで表示する
            メッセージが変わるプログラムを作ろう。
        </h5>
        <?php
            // 乱数を生成し変数に代入
            $rand_num = rand(0, 100);
            // 変数に固定値として50を代入
            $def_num = 50;
            // 三項演算子を用いて判断
            $ans = $def_num < $rand_num ? '乱数は50より大きい。' : '乱数は50より小さい。';
            // 結果を出力
            echo $ans;
            echo '<br>';
        ?>
    </div>

    <div class="q3">
        <h5>(3)</h5>
        <h5>
            「1～4」の数値をランダムに変数へ保存し、
            その変数がどの値であるか、
            switch文でチェックし表示するプログラムを作ろう。
        </h5>
        <?php
            // 乱数を生成し変数に代入
            $r_num = rand(1, 4);

            switch($r_num){
                // 1の場合
                case 1:
                    echo '変数の値は1です。<br>';
                    break;
                // 2の場合
                case 2:
                    echo '変数の値は2です。<br>';
                    break;
                // 3の場合
                case 3:
                    echo '変数の値は3です。<br>';
                    break;
                // 4の場合
                case 4:
                    echo '変数の値は4です。<br>';
                    break;
            }
            echo '<br>';
        ?>
    </div>

    <div class="q4">
        <h5>(4)</h5>
        <h5>
            問題(3)で作ったプログラムをコピーし、break文を抜いたら、処理はどうなるか。<br>
            予測した後、コピーしたプログラムを修正して検証しよう。
        </h5>
        <?php
            // 乱数を生成し変数に代入
            $r_num = rand(1, 4);

            /*
                switch文にbreak文が無い為、
                その結果以降のecho文も出力される
            */
            switch($r_num){
                case 1:
                    echo '変数の値は1です。<br>';
                case 2:
                    echo '変数の値は2です。<br>';
                case 3:
                    echo '変数の値は3です。<br>';
                case 4:
                    echo '変数の値は4です。<br>';
            }
            echo '<br>';
        ?>
    </div>

    <div class="q5">
        <h5>(5)</h5>
        <h5>
            問題(3)で作ったプログラムをコピーし、「1～6」の数値をランダムに変数へ保存するよう変更。<br>
            default文を使用して「1～4」以外の数値の時は、エラーを示すような文章を表示するプログラムを作ろう。
        </h5>
        <?php
            // 乱数を生成し変数に代入
            $r_num = rand(1, 6);

            switch($r_num){
                // 1の場合
                case 1:
                    echo '変数の値は1です。<br>';
                    break;
                // 2の場合
                case 2:
                    echo '変数の値は2です。<br>';
                    break;
                // 3の場合
                case 3:
                    echo '変数の値は3です。<br>';
                    break;
                // 4の場合
                case 4:
                    echo '変数の値は4です。<br>';
                    break;
                // 5と6の場合
                default:
                    echo 'エラーです。<br>';
                    break;
            }
            echo '<br>';
        ?>
    </div>

    <div class="q6">
        <h5>(6)</h5>
        <h5>
            問題(3)で作ったプログラムをコピーし、endswitch文を使用した、switch文に修正しよう。
        </h5>
        <?php
             // 乱数を生成し変数に代入
             $r_num = rand(1, 4);
             // endswitch
             switch($r_num):
                case 1:
        ?>
                    <p>変数の値は1です。</p>
                    <?php break; ?>
                <?php case 2: ?>
                    <p>変数の値は2です。</p>
                    <?php break; ?>
                <?php case 3: ?>
                    <p>変数の値は3です。</p>
                    <?php break; ?>
                <?php case 4: ?>
                    <p>変数の値は4です。</p>
                    <?php break; ?>
        <?php endswitch; ?>
        <br>
    </div>

    <div class="q7">
        <h5>(7)</h5>
        <h5>
            whileループで、10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数iを宣言し初期化
            $i = 1;
            // 10回繰り返す
            while($i <= 10){
                // ループ数を出力
                echo $i.'回目のループです。<br>';
                // 変数iをインクリメント
                $i++;
            }
            echo '<br>';
        ?>
    </div>

    <div class="q8">
        <h5>(8)</h5>
        <h5>
            do～whileで10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。
        </h5>
        <?php
            // 変数jを宣言し初期化
            $j = 1;
            do{
                // ループ数を出力
                echo $j.'回目のループです。<br>';
                // 変数jをインクリメント
                $j++;
            // 10回繰り返す
            }while($j <= 10);
            echo '<br>';
        ?>
    </div>

    <div class="q9">
        <h5>(9)</h5>
        <h5>
            下記のソースにbreak文を加えて「ゼロで割り算する事」を避けるプログラムを作ろう。<br>
            for($counter = -3; $counter < 10; $counter++){ <br>
            &nbsp;&nbsp; echo 100/$counter; <br>
            }
        </h5>
        <?php
            /* break文で0以降の計算がされない */
            for($counter = -3; $counter < 10; $counter++){
                // 変数が0の時
                if($counter === 0){
                    // 処理を抜ける
                    break;
                }
                echo 100 / $counter;
                echo '<br>';
            }
            echo '<br>';
        ?>
    </div>

    <div class="q10">
        <h5>(10)</h5>
        <h5>
            問題(9)で作ったプログラムをコピーし、
            break文の代わりにcontinue文を使用するとどうなるか。<br>
            予測した後、プログラムを書いて検証しよう。
        </h5>
        <?php
            for($counter = -3; $counter < 10; $counter++){
                // 変数が0の時
                if($counter === 0){
                    // 0の処理がスキップされる
                    continue;
                }
                echo 100 / $counter;
                echo '<br>';
            }
            echo '<br>';
        ?>
    </div>

</body>
</html>