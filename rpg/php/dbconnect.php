<?php
class connection{
    function DBdata(){
        try {

            /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */

            // データベースに接続
            $pdo = new PDO(
                'mysql:dbname=test;host=localhost;charset=utf8mb4',
                'root',
                'mysql',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
            $stmt = $pdo->query('SELECT * FROM playdata');
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $pdo = null;
            return $result;
            /* データベースから値を取ってきたり， データを挿入したりする処理 */

        } catch (PDOException $e) {

            // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
            // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
            // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
            header('Content-Type: text/plain; charset=UTF-8', true, 500);
            exit($e->getMessage()); 

        }
    }

}
