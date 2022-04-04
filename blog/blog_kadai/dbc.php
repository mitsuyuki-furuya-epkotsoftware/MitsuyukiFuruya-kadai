<?php
// envファイルの読み込み
require_once('env.php');

// Dbcクラス
class Dbc {

    // データベースのテーブル名
    protected $table_name;

    // データベースへ接続する関数
    protected function dbConnect() {

        // 各変数に定数を代入
        $host   = DB_HOST;
        $dbname = DB_NAME;
        $user   = DB_USER;
        $pass   = DB_PASS;
        $dsn    = "mysql:host=$host;dbname=$dbname;charset=utf8";

        // 通常実行処理
        try {
            // データベースへの接続処理
            $dbh = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            ]);
        // 例外処理
        } catch (PDOException $e) {
            // 接続失敗ならエラー文を表示
            echo '接続失敗<br>' . $e->getMessage();
            exit();
        }
        // 戻り値として返す
        return $dbh;
    }

    // データを取得する関数
    public function getAll() {

        // dbConnectからデータを取得
        $dbh = $this->dbConnect();
        // blogテーブルから全件取得
        $sql = "SELECT * FROM $this->table_name";
        // ステートメントの準備
        $stmt = $dbh->query($sql);
        // 結果を受け取る
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        // 戻り値として返す
        return $result;
    }

    // IDを用いて検索する関数
    public function getById($id) {

        // idが空だった場合
        if (empty($id)) {
            exit('IDが不正です。');
        }
        // dbConnectからデータを取得
        $dbh = $this->dbConnect();
        // SQL準備
        $stmt = $dbh->prepare("SELECT * FROM $this->table_name WHERE id = :id");
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        // SQL実行
        $stmt->execute();
        // 結果を取得
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // 結果が空だった場合
        if (!$result) {
            exit('ブログがありません。');
        }
        // 戻り値として返す
        return $result;
    }

    // 削除処理する関数
    public function delete($id) {

        // idが空だった場合
        if (empty($id)) {
            exit('IDが不正です。');
        }
        // dbConnectからデータを取得
        $dbh = $this->dbConnect();
        // SQL準備
        $stmt = $dbh->prepare("DELETE FROM $this->table_name WHERE id = :id");
        $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
        // SQL実行
        $stmt->execute();
        // 実行結果メッセージ
        echo 'ブログを削除しました!';
    }
}
