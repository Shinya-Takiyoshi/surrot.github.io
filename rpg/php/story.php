<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if(!empty($_POST['story'])){
$story = "\\story1\\story.txt";
$fileName = dirname( __FILE__ ).$story;
 $fh = fopen($fileName, "r");
  while (($line = fgets($fh))) {
    echo $line."<br>";
  }
  if(fclose($fh)){
include("..//kaisi.html");
  }; 
}else if(!empty($_POST['kaisi'])){
  
  $url = "http://localhost/rpg/gamestart.html?";
    echo $url;
        class Main{
    public function location($url){
            header( "Location:".$url ); 
        }
    }
    
    $main = new Main();
    echo $main->location($url);
}


  
?>