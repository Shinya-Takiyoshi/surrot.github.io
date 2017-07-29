<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php


if(!empty($_POST['battle'])){
  $value = $_POST['battle'];
  $hp = $_POST['HP'];
  if(empty($hp)){
      $hp = 10;
  }

    switch($value){
    case '攻撃':
    echo "モンスターに攻撃<br>"; 
     $hp = $hp -1;
        break;
    case '道具':
        echo "道具を使用した";
        break;
    case '逃げる':
        echo "逃げ出した";
        include("..//kaisi.html"); 
        break;
    case '作戦':
        echo "作戦を変更した";
        break;
    default:
        echo "主人公は立ち止った";
    }
    if($hp == 0){
      echo "敵を倒しました、経験値1獲得";
      include("..//datasave.html");
  }else{
    $url = "http://localhost/rpg/battle.html?damage=".$hp;
        echo $url;
            class Main{
        public function location($url){
                header( "Location:".$url ); 
            }
        }
        
        $main = new Main();
        echo $main->location($url);
  }
  
} 
    
   
    
?>