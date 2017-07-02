//　お買い物サイトページ遷移
function seni(page){
var title = page;
	window.location.href = title+".html";

}
// 枚数表示計算
function betstarted(){
var maisu = document.getElementsByClassName('maisu');

maisu[0].innerHTML = maisu[0].innerHTML -3;
if(maisu[0].innerHTML< 0){
maisu[0].innerHTML ="もうお金がありません。";
document.getElementsByName('STOP')[0].disabled = true;
document.getElementsByName('BET')[0].disabled = true;
}
document.getElementsByName('STOP')[0].disabled = false;

}

// 画像回転
function img(){
var pass = "../img/"
var pass1 = "kinniku.jpg";
var pass2 = "softcream.jpg";
var pass3 = "ramen.jpg";
var passArray = [pass+pass1,pass+pass2,pass+pass3];
var kensyo = document.getElementsByTagName('img');

for(var i = 0; i < kensyo.length; i++){
var rand = Math.floor( Math.random() * 3 ) ;
kensyo[i].src = passArray[rand];
}

// 画像一致の検証
var trueConut = 0;
for(var i = 0; i < kensyo.length; i++){
if(kensyo[i].src == kensyo[0].src){
trueConut++;
}

if(trueConut == 3){
seni('success');
}
}
document.getElementsByName('STOP')[0].disabled = true;
}
