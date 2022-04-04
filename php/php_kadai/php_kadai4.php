<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 配列課題</title>
</head>
<body>
    <h3>配列課題</h3>

    <div class="q1">
        <h5>(1)</h5>
        <h5>
            arrayを使用して、平日の曜日の文字列だけの配列を作成し、
            表示するプログラムを作ろう。
        </h5>
        <?php
            // 平日だけの配列
            $weekDay = array('月曜日', '火曜日', '水曜日', '木曜日', '金曜日');

            // forで要素を出力
            for($i = 0; $i < count($weekDay); $i++){
                echo $weekDay[$i];
                echo '<br>';
            }
        ?>
    </div>

    <div class="q2">
        <h5>(2)</h5>
        <h5>
            「"英語" => "日本語"」の形式として、
            色んな英単語の連想配列を作成し、表示するプログラムを作ろう。<br>
            "Cat" => "猫" など
        </h5>
        <?php
            // 連想配列を作成
            $translation = array('Apple' => 'りんご', 'Orange' => 'みかん', 'Cherry' => 'さくらんぼ');

            // foreachで要素を出力
            foreach($translation as $key => $fruit){
                echo '英語で'.$key.'の日本語は'.$fruit.'です。<br>';
            }
            echo '<br>';
        ?>
    </div>

    <div class="q3">
        <h5>(3)</h5>
        <h5>
            問題(1)と(2)で作った配列から、それぞれ好きな値を選んで、
            表示するプログラムを作ろう。
        </h5>
        <?php
            // 問題(1)から値を出力
            for($i = 0; $i < count($weekDay); $i++){
                // 配列の要素が4番目の値のみ取り出す
                if($weekDay[$i] === $weekDay[4]){
                    // 配列の要素を出力
                    echo $weekDay[$i];
                    echo '<br>';
                // それ以外なら
                } else {
                    // スキップする
                    continue;
                }
            }
            echo '<br>';

            // 問題(2)から値を出力
            foreach($translation as $key => $fruit){
                // Orangeだけ出力
                if($key === 'Orange'){
                    echo '英語で'.$key.'の';
                // それ以外ならスキップ
                } else {
                    continue;
                }
                // みかんだけを出力
                if($fruit === 'みかん'){
                    echo '日本語は'.$fruit.'です。';
                    echo '<br>';
                // それ以外ならスキップ
                } else {
                    continue;
                }
            }
            echo '<br>';
        ?>
    </div>

    <div class="q4">
        <h5>(4)</h5>
        <h5>
            問題(1)と問題(2)の配列の要素を数えて、表示するプログラムを作ろう。
        </h5>
        <?php
            // 問題(1)の配列の要素数
            $cnt1 = count($weekDay);
            echo '問題(1)の配列の要素数は'.$cnt1.'です。<br>';
            // 問題(2)の配列の要素数
            $cnt2 = count($translation);
            echo '問題(2)の配列の要素数は'.$cnt2.'です。<br>';
        ?>
    </div>

    <div class="q5">
        <h5>(5)</h5>
        <h5>
            多次元の連想配列を作り、表示するプログラムを作ろう。<br>
            ただし、「リテラル」や「マジックナンバー」の意味をネットで調べ、
            リテラルやマジックナンバーを使わないこと。
        </h5>
        <?php
            // 多次元連想配列
            $family = [
                '私' => [
                    '名前' => '古谷',
                    '出身地' => '茨城県',
                    '趣味' => '旅行'
                ],
                '父' => [
                    '名前' => 'father',
                    '出身地' => 'xxx',
                    '趣味' => 'xxx'
                ],
                '母' => [
                    '名前' => 'mother',
                    '出身地' => 'xxx',
                    '趣味' => 'xxx'
                ],
                '弟' => [
                    '名前' => 'brother',
                    '出身地' => 'xxx',
                    '趣味' => 'xxx'
                ],
            ];

            // foreachで取得
            foreach($family as $fam => $person){
                // $familyから取得し出力
                echo $fam.'の';
                foreach($person as $personData => $data){
                    // $familyからネストしたデータから取得
                    echo $personData.'は'.$data.'です。<br>';
                }
                echo '<br>';
            }
        ?>
    </div>

</body>
</html>