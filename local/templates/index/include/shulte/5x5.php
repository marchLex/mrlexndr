<link href="<?=SITE_TEMPLATE_PATH?>/include/shulte/assets/style.css" type="text/css" rel="stylesheet">

<script type="text/javascript" async="" charset="utf-8" src="<?=SITE_TEMPLATE_PATH?>/include/shulte/assets/all.js"></script><script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/include/shulte/assets/jquery-latest.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/include/shulte/assets/rc.js"></script>
<style>.table {border-collapse:collapse;}.table td,th,tr{border: solid 1px #333; font-size:35px; color:#112642; text-align:center;}.table td{width:90px; height:90px;}
@media screen and (max-width: 600px) {.table td{height:50px; width:50px;}}
</style>
<script>function shultz(){
clearALL();
findTIME();
var usef = $("#function").find("option:selected").val();
switch(usef) {
    case 'red':
        red();
        break;
    case 'green':
        green();
        break;
    case 'white':
        white();
        break;
    case 'randomp':
        randomp();
        break;
    case 'randomf':
        randomf();
        break;
    case 'norm':
    default:
        norm();
        break;
}

function rand (min, max) {
var argc = arguments.length;
if (argc === 0) { min = 0; max = 99999999;}
else if (argc === 1) {throw new Error('Warning: rand() expects exactly 2 parameters, 1 given');}
return Math.floor(Math.random() * (max - min + 1)) + min;}
var Numbers = new Array();
for (var i=1;i<=25;i++){Numbers[i] = i;	}
for (var i=1;i<=25;i++){
var randomer = rand(1,25);
var tmp = Numbers[i];
Numbers[i] = Numbers[randomer];
Numbers[randomer] = tmp;		}
var i3=1;
for (var i=1;i<=5;i++){
for (var i2=1;i2<=5;i2++){
document.getElementById('t_'+i+'_'+i2).innerHTML = Numbers[i3];
i3++;}}}

var base = 60; 
var clocktimer,dateObj,dh,dm,ds,ms; 
var readout=''; 
var h=1; 
var m=1; 
var tm=1; 
var s=0; 
var ts=0; 
var ms=0; 
var show=true; 
var init=0; 
var ii=0; 

function clearALL() { 
 clearTimeout(clocktimer); 
 h=1;m=1;tm=1;s=0;ts=0;ms=0; 
 init=0;show=true; 
 readout='00:00:00.00'; 
 document.clockform.clock.value=readout; 
 var CF = document.clockform; 
 ii = 0; } 

function startTIME() { 
var cdateObj = new Date(); 
var t = (cdateObj.getTime() - dateObj.getTime())-(s*1000); 

if (t>999) { s++; } 

if (s>=(m*base)) { ts=0; 
 m++; } else { 
 ts=parseInt((ms/100)+s); 
 if(ts>=base) { ts=ts-((m-1)*base); } } 

if (m>(h*base)) { tm=1; 
 h++; } else { 
 tm=parseInt((ms/100)+m); 
 if(tm>=base) { tm=tm-((h-1)*base); } } 

ms = Math.round(t/10); 
if (ms>99) {ms=0;} 
if (ms==0) {ms='00';} 
if (ms>0&&ms<=9) { ms = '0'+ms; } 

if (ts>0) { ds = ts; if (ts<10) { ds = '0'+ts; }} else { ds = '00'; } 
dm=tm-1; 
if (dm>0) { if (dm<10) { dm = '0'+dm; }} else { dm = '00'; } 
dh=h-1; 
if (dh>0) { if (dh<10) { dh = '0'+dh; }} else { dh = '00'; } 

readout = dh + ':' + dm + ':' + ds + '.' + ms; 
if (show==true) { document.clockform.clock.value = readout; } 

clocktimer = setTimeout("startTIME()",1); } 
function findTIME() { 
if (init==0) { dateObj = new Date(); 
 startTIME(); 
 init=1; 
 } else { if(show==true) { 
 show=false; 
 } else { show=true; } } }
    
    
function norm() {
    $(".table td").css({"background" : "#fff", "color" : "#333"});
}
    
function red() {
    $(".table tr:nth-child(odd) td:nth-child(even), .table tr:nth-child(even) td:nth-child(odd)").css({"background" : "#880000", "color" : "#fff"});
    $(".table tr:nth-child(odd) td:nth-child(odd), .table tr:nth-child(even) td:nth-child(even)").css({"background" : "#222", "color" : "#fff"});
}
function green() {
    $(".table tr:nth-child(odd) td:nth-child(even), .table tr:nth-child(even) td:nth-child(odd)").css({"background" : "#008800", "color" : "#fff"});
    $(".table tr:nth-child(odd) td:nth-child(odd), .table tr:nth-child(even) td:nth-child(even)").css({"background" : "#222", "color" : "#fff"});
}
function white() {
    $(".table tr:nth-child(odd) td:nth-child(even), .table tr:nth-child(even) td:nth-child(odd)").css({"background" : "#000000", "color" : "#fff"});
    $(".table tr:nth-child(odd) td:nth-child(odd), .table tr:nth-child(even) td:nth-child(even)").css({"background" : "#222", "color" : "#fff"});
}
    
function randomp() {
    var arr = [
        ['#800','#fff'],
        ['#080','#fff'],
        ['#008','#fff'],
        ['#888','#fff'],
        ['#fff','#888'],
        ['#880','#fff'],
        ['#088','#fff'],
        ['#333','#fff'],
        ['#808','#fff'],
        ['#300','#fff'],
        ['#030','#fff'],
    ];
    for (i = 1; i <= 5; i++) {
        for (l = 1; l <= 5; l++) {
            var num = getRandomInt(0,10);
            var back = arr[num][0];
            var font = arr[num][1];
            $(".table tr:nth-child("+ i +") td:nth-child(" + l + ")").css({"background" : back, "color" : font});
        }
    }
}
    
function getRandomInt(min, max)
{
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
    
function randomf() {
    for (g = 1; g <= 5; g++) {
        for (l = 1; l <= 5; l++) {
            var back = new just.RandomColor().toRGB().toCSS();
            var font = invert(back);
            $(".table tr:nth-child("+ g +") td:nth-child(" + l + ")").css({"background" : back, "color" : "rgb("+font+")"});
        }
    }
}
function invert(rgb) {
  rgb = Array.prototype.join.call(arguments).match(/(-?[0-9\.]+)/g);
  for (var i = 0; i < rgb.length; i++) {
    rgb[i] = (i === 3 ? 1 : 255) - rgb[i];

	rgb[i] = (rgb[i] < 124 ? (rgb[i] - 60) : (rgb[i] + 60));
  }
  return rgb;
}
</script>

    
<div align="center" style="background: whitesmoke; border:1px solid silver; padding: 5px 0; vertical-align: middle;padding-right:200px;">
    
    <select name="function" id="function" size="6">
        <option value="norm" selected>Стандарт</option>
        <option value="red">Красный-черный</option>
        <option value="green">Зеленый-черный</option>
        <option value="white">Белый-черный</option>
        <option value="randomp">Почти рандом</option>
        <option value="randomf">Рандом</option>
    </select>
	<form name="clockform" style="padding: 0; margin:0; display:inline-block; vertical-align: middle; width: 170px; text-align:center; height:250px; ">
		<input type="button" name="" value="Создать таблицу" onclick="shultz();" style=" padding: 10px 14px; width: 130px; margin: 30px 0;">
		<input name="clock" value="00:00:00.00" onclick="findTIME()" style="font-size:25px; text-align:center; border:none; color: #darkred;  margin: 0 10px; width:150px;;">  
		<input name="starter" type="button" value="СТАРТ/СТОП" onclick="findTIME()" style="display:inline-block; vertical-align: middle; padding: 10px 20px; width: 130px; margin: 10px 0;">
		<input name="clearer" type="button" value="Обнулить" onclick="clearALL()" style="display:inline-block; vertical-align: middle; padding: 10px 20px; width: 130px; margin: 10px 0;"><br />
        <input type="button" onclick="window.location.href='?type=6x6'" value="6x6" />
        <input type="button" onclick="window.location.href='?type=7x7'" value="7x7" />
	</form>
    
	<table class="table" style="background: white; display:inline-block; vertical-align: middle;">
	<tbody>
		<tr><td id="t_1_1"></td><td id="t_1_2"></td><td id="t_1_3"></td><td id="t_1_4"></td><td id="t_1_5"></td></tr> 
		<tr><td id="t_2_1"></td><td id="t_2_2"></td><td id="t_2_3"></td><td id="t_2_4"></td><td id="t_2_5"></td></tr> 
		<tr><td id="t_3_1"></td><td id="t_3_2"></td><td id="t_3_3"></td><td id="t_3_4"></td><td id="t_3_5"></td></tr> 
		<tr><td id="t_4_1"></td><td id="t_4_2"></td><td id="t_4_3"></td><td id="t_4_4"></td><td id="t_4_5"></td></tr> 
		<tr><td id="t_5_1"></td><td id="t_5_2"></td><td id="t_5_3"></td><td id="t_5_4"></td><td id="t_5_5"></td></tr> 
	</tbody>
	</table>
</div>