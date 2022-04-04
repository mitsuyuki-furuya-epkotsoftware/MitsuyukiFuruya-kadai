<?php
    // blogファイルの読み込み
    require_once('blog.php');

    // dbcのインスタンスを生成
    $blog = new Blog();

    // idを取得し結果を返す
    $result = $blog->delete($_GET['id']);
?>
<p><a href="/">戻る</a></p>