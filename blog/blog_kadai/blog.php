<?php
// dbcファイルの読み込み
require_once('dbc.php');

// Dbcクラスを継承
class Blog extends Dbc {

    // データベースのテーブル名
    protected $table_name = 'blog';

    // ブログのカテゴリー名の表示する関数
    public function setCategoryName($category) {
        if ($category === 1) {
            return '日常';
        } else if ($category === 2) {
            return 'プログラミング';
        } else {
            return 'その他';
        }
    }

    // ブログを新規作成する関数
    public function blogCreate($blogs) {

        // INSERT文の実行
        $sql = "INSERT INTO
                    $this->table_name(title, content, category, publish_status)
                        VALUES
                            (:title, :content, :category, :publish_status)";

        // DBを接続する
        $dbh = $this->dbConnect();
        // トランザクションの設定
        $dbh->beginTransaction();

        // 通常実行処理
        try {
            // ステートメントにSQL文を送る
            $stmt = $dbh->prepare($sql);
            // 入力した値
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':publish_status', $blogs['publish_status'], PDO::PARAM_INT);
            // 実行する
            $stmt->execute();
            // 結果をコミットする
            $dbh->commit();
            echo 'ブログを投稿しました!';
        // 例外処理
        } catch (PDOException $e) {
            // エラー時にはロールバックする
            $dbh->rollBack();
            exit($e);
        }
    }

    // ブログの更新処理をする関数
    public function blogUpdate($blogs) {

        // INSERT文の実行
        $sql = "UPDATE $this->table_name SET
                    title = :title, content = :content, category = :category, publish_status = :publish_status
                        WHERE id = :id";

        // DBを接続する
        $dbh = $this->dbConnect();
        // トランザクションの設定
        $dbh->beginTransaction();

        // 通常実行処理
        try {
            // ステートメントにSQL文を送る
            $stmt = $dbh->prepare($sql);
            // 入力した値
            $stmt->bindValue(':title', $blogs['title'], PDO::PARAM_STR);
            $stmt->bindValue(':content', $blogs['content'], PDO::PARAM_STR);
            $stmt->bindValue(':category', $blogs['category'], PDO::PARAM_INT);
            $stmt->bindValue(':publish_status', $blogs['publish_status'], PDO::PARAM_INT);
            $stmt->bindValue(':id', $blogs['id'], PDO::PARAM_INT);
            // 実行する
            $stmt->execute();
            // 結果をコミットする
            $dbh->commit();
            echo 'ブログを更新しました!';
        // 例外処理
        } catch (PDOException $e) {
            // エラー時にはロールバックする
            $dbh->rollBack();
            exit($e);
        }
    }

    // ブログのバリデーションをする関数
    public function blogValidate($blogs) {
        // タイトルの入力
        if (empty($blogs['title'])) {
            exit('タイトルを入力して下さい。');
        }
        // タイトルの文字数
        if (mb_strlen($blogs['title']) > 191) {
            exit('タイトルは191文字以下にして下さい。');
        }
        // 本文の入力
        if (empty($blogs['content'])) {
            exit('本文を入力して下さい。');
        }
        // カテゴリーのチェック
        if (empty($blogs['category'])) {
            exit('カテゴリーは必須です。');
        }
        // 公開ステータスのチェック
        if (empty($blogs['publish_status'])) {
            exit('公開ステータスは必須です。');
        }
    }
}
