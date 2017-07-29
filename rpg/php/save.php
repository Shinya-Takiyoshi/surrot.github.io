<?php
if(empty($_POST['filename'])){
   echo "データを選択してください"; 
}else{
    $fileName = dirname( __FILE__ ).'\\'.$_POST['filename'].'.txt';
    if(file_exists($fileName)){
    echo "データをセーブします";
    $fr = fopen($fileName, "r");
    $array = array();
    $i = 0;
    while (($line = fgets($fr))) {
    $array[$i] = $line;
    $i++;
    
  }
  
    if(count($array) > 4){
        $array[4]= substr($array[4], 10, 1);
        $current= intval($array[4]) + 1;
        echo $current;
        $array[4] = "経験値:".strval($current)."\n"; 
    }
    
    fclose($fr);
    $fw = fopen($fileName, "w");
    $i = 0;
    while ($i < count($array)) {
        $currents .=$array[$i];
    $i++;
    echo $i."回目のループ:".$currents;
  }
    
   @fwrite($fw, $currents); 
    fclose($fw);
    
    }else{
        touch($fileName);
        $current = file_get_contents($fileName);
        // 新しい人物をファイルに追加します
        $current .= "lv:1\n";
        $current .= "体力:10\n";
        $current .= "攻撃力:1\n";
        $current .= "防御力:1\n";
        $current .= "経験値:1\n";
        // 結果をファイルに書き出します
        file_put_contents($fileName, $current);
    echo "新規セーブデータを作成しました";
        
    }
}

?>
