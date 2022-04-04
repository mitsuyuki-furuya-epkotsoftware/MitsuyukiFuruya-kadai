<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 式と演算子課題2</title>
</head>
<body>
    <h3>式と演算子課題(2)</h3>

    <div class="q1">
        <h5>(1)</h5>
        <h5>
            以下の文の値を予測して、その後、プログラムを書き、検証しよう。<br>
            ・2 + 4 - 5 <br> &nbsp;&nbsp; 4 - 5 + 2 <br>
            ・4 * 5 / 2 <br> &nbsp;&nbsp; 5 / 2 * 4
        </h5>
        <?php
            // 計算結果
            echo 2 + 4 - 5;
            echo '<br>';
            echo 4 - 5 + 2;
            echo '<br>';
            echo 4 * 5 / 2;
            echo '<br>';
            echo 5 / 2 * 4;
            echo '<br>';
        ?>
    </div>

    <div class="q2">
        <h5>(2)</h5>
        <h5>
            以下の文の値を予測して、その後、プログラムを書き、検証しよう。<br>
            2 * 3 + 4 + 1; <br>
            2 * (3 + 4 + 1);
        </h5>
        <?php
            // 計算結果
            echo 2 * 3 + 4 + 1;
            echo '<br>';
            echo 2 * (3 + 4 + 1);
            echo '<br>';
        ?>
    </div>

    <div class="q3">
        <h5>(3)</h5>
        <h5>
            else文とif文について、以下のソースを見て、以下の質問に答えよ。<br>
            ①trueが実行される条件を、画面上に表示しよう。<br>
            ②falseが実行されるには、どのような処理が追加で必要か、
            解説を画面上に表示しよう。<br>
            if($username == "Admin"){ <br>
            &nbsp;&nbsp; echo ("Welcome to the admin page."); <br>
            } else { <br>
            &nbsp;&nbsp; echo ("Welcome to the user page"); <br>
            }
        </h5>
        <?php
            // trueが実行される処理
            $username = "Admin";

            if($username == "Admin"){
                echo ("Welcome to the admin page.");
            } else {
                echo ("Welcome to the user page.");
            }
            echo '<br>';
            echo '$usernameがAdminだとtrueになる。<br>';
            echo '$usernameがAdmin以外だとfalseになる。<br>';
            echo 'else ifで $username != "Admin"と記述する。<br>';
            echo '<br>';
        ?>
    </div>

    <div class="q4">
        <h5>(4)</h5>
        <h5>
            適当な配列を作り、複数の値を保存する事。
            また、保存した値を、ループ処理で順番に表示するプログラムを作ろう。
        </h5>
        <?php
            // 配列に値を代入
            $day_of_week = [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ];

            // 配列の要素分取得
            for($i = 0; $i < count($day_of_week); $i++){
                // 結果を出力
                echo $day_of_week[$i];
                echo '<br>';
            }
            echo '<br>';
        ?>
    </div>

    <div class="q5">
        <h5>(5)</h5>
        <h5>
            問題(4)で作った配列の内容を、sort関数でアルファベット順で並べて、
            ループ処理で順番に表示するプログラムを作ろう。
        </h5>
        <?php
            // sort関数でアルファベット順に並び替え
            sort($day_of_week);

            // 配列の要素分取得
            for($i = 0; $i < count($day_of_week); $i++){
                // 結果を出力
                echo $day_of_week[$i];
                echo '<br>';
            }
        ?>
    </div>

    <div class="q6">
        <h5>(6)</h5>
        <h5>
            適当な多次元配列を作成し、foreachで内容を順番に表示するプログラムと、
            whileで内容を順番に表示するプログラムを作ろう。<br>
            ただし、「マジックナンバー」の意味をネットで調べ、
            マジックナンバーを使わないこと。
        </h5>
        <?php
            // 多次元配列 2次元配列で関東地方を定義
            $prefectures = [
                ['茨城県', '水戸市'],
                ['栃木県', '宇都宮市'],
                ['群馬県', '前橋市'],
                ['埼玉県', 'さいたま市'],
                ['千葉県', '千葉市'],
                ['東京都', '新宿区'],
                ['神奈川県', '横浜市']
            ];

            // foreachで出力
            echo "foreachで出力<br>";
            foreach($prefectures as $key){
                // 結果を出力
                echo $key[0].'の県庁所在地は'.$key[1].'です。';
                echo '<br>';
            }
            echo '<br>';

            /*
            変数iが配列の要素分whileでインクリメントし、
            結果を出力するプログラム
            */

            // 変数iを初期化
            $i = 0;
            //whileで出力
            echo 'whileで出力<br>';
            while($i < count($prefectures)){
                // 2次元配列を変数に代入
                $prefecture = $prefectures[$i];
                // 結果を出力
                echo $prefecture[0].'の県庁所在地は'.$prefecture[1].'です。';
                echo '<br>';
                // 変数iをインクリメント
                $i++;
            }
        ?>
    </div>

</body>
</html>