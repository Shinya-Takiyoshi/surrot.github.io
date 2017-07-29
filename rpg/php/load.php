<?php
require('dbconnect.php');
if(empty($_POST['filename'])){
   echo "データを選択してください"; 
}else{
    $fileName = dirname( __FILE__ ).'\\'.$_POST['filename'].'.txt';
    if(file_exists($fileName)){
    echo "データをロードしました<br>";
    $fh = fopen($fileName, "r");

  
  while (($line = fgets($fh))) {
    echo $line."<br>";
  }
  fclose($fh);
  include("..//bouken.html");
    }else{
      //　DB接続
      $db = new connection();
      $data = $db->DBdata();
      echo $data['name'];
      echo "ファイル名:".$fileName;
        touch($fileName);
        $current = file_get_contents($fileName);
// 初期データをファイルに追加します
$current .= "name:".$data['name']."\n";
$current .= "lv:1\n";
$current .= "体力:".$data['hitpoint']."\n";
$current .= "攻撃力:".$data['power']."\n";
$current .= "防御力:".$data['defence']."\n";
$current .= "EXP:".$data['experience_point']."\n";
$current .= "プレイ時間:".$data['playtime']."\n";
// 結果をファイルに書き出します
file_put_contents($fileName, $current);
    echo "新規セーブデータを作成しました";
        
    }
}

?>
