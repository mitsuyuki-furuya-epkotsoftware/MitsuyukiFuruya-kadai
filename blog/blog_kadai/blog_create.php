<?php
    // blogファイルの読み込み
    require_once('blog.php');

    // 値を受け取る
    $blogs = $_POST;

    // dbcのインスタンスを生成
    $blog = new Blog();

    // 受け取った値を各場所へ
    $blog->blogValidate($blogs);
    $blog->blogCreate($blogs);
?>
<p><a href="/">戻る</a></p>