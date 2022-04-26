<?php

/*      
define("SITE_URL","https://kun.uz");
echo SITE_URL;

const OZGARUVCHI = 440025;
echo OZGARUVCHI; */


/*
$age = 21;
$name = "Doni";
echo $age ."<br>", $name;
*/


/*
$int = 123456789;
$num = 3e10;
echo $num;


$float = 3.14;
echo $float;

*/





//var_damp
//Boolean

/*
$a = "Adham aka";
var_dump($a);

$true = true;
var_dump($true);
$false = false;
var_dump($false);
*/




// Massive
/*
$arr = array("Olma", "Behi", "Banan");
var_dump($arr);
echo $arr[2];
echo " Men ".$arr[0]."ni yaxshi ko\'raman";

$array = ["Olma", "Behi", "Banan"];
var_dump($array);
echo $array[2];
echo " Men ".$array[0]."ni yaxshi ko\'raman";
*/



// 17-dars
// Object
//  sinf yaratish
/*

class greeting {
    // xossa
    public $str = "Axmadboy nayrahlari";
    // Metod
    function display_result(){
        echo $this -> str;
    }
}

// Sinfda object yaratish
$message = new greeting;
$message -> display_result();

*/




// NULL
/*
$b = null;
var_dump($b);
echo $b;
*/






// Resurslar
/*
echo file_get_contents("eslatma.txt");


*/




// Escape 
/*
$name = "Josh";
$addfalse = 'Devid and $name is freinds each other';
$addtrue = "Devid and $name is freinds each other";
$addspace = "Devid and $name is fre \t inds each other";
$adddown = "Devid and $name is fre\ninds each other";
$dollar = "Narxi : $200";
$dollartrue = "Narxi : \$200";
echo $addfalse."<br>";
echo $addtrue."<br>";
echo $addspace."<br>";
echo $adddown."<br>";
echo $dollar."<br>";
echo $dollartrue."<br>";

*/


// Satr uzunligi va uning ichidagi so'zlar sonini aniqlash
/*
$fraza = "Men dasturlashga qiziqaman";
echo strlen($fraza);
echo str_word_count($fraza);

*/




// Almashtirish O'zgartirish
/*
$frazareplace = "Men dasturlashga qiziqaman";
echo str_replace("qiziqaman", " qiziqmayman vapshe kerak emas",$frazareplace);
echo strrev($frazareplace);  // reverse


*/



// Substring

/*

$substring = "Hammasi yaxshi b'ladi";
// echo substr($substring,10);
// echo substr($substring,-6);

// satr ichidagi harflarni katta yoki kichik qilish

// echo strtolower($substring);
echo strtoupper($substring);

*/



// is string
/*
// $isstr = "Ahmad Kashshey";
$isstr = 5;
$copy = is_string($isstr);
echo is_string($isstr);

var_dump($copy);

*/




// Trim
// echo trim("   notSpace");
// echo trim("notSpace","not");


/*

// explode
$word = "this sections more diffucult";
print_r(explode("i",$word));

// implode
$word = ["Mardlar","vatanni","qo'riqlaydi"];
print_r(implode(" ",$word));

*/




// Arfimetik amallar

// $a = 10;
// $b = 65;
// echo $a + $b;
// echo $a - $b;
// echo $a / $b;
// echo $a * $b;
// echo $a % $b;
// echo $a ** $b;







// Belgilash operatorlari

// $x = 10;
// $x += 7;
// echo $x;




// Taqqoslash operatori

// $x = 100;
// $y = 200;
// $z = "100";

// var_dump($x < $y);
// var_dump($x > $y);
// var_dump($x <= $y);
// var_dump($x >= $y);
// var_dump($x == $z);
// var_dump($x === $y);




// Oshirish va Kamaytirish operatorlari (increment and decrement)
// post increment and pre-icrement 

// $num = 5;
// echo $num++."\n";
// echo $num--."\n";
// echo $num;

// $son = 5;
// echo ++$son."\n";
// echo $son;







// Shart konstruktorlari

// if
// $x = 5 + 6;
// if ($x == 11) {
//     # code...
//     echo "siz tugri topdingiz!!!";
// }

// $d = date("D");
// // echo $d;
// if($d === "Fri"){
//     echo "Bugun Yakshanba";
// }else{
//     echo "Bugun Dushanba emas";
// }


// $age = 10;
// if ($age >= 18) {
//     # code...
//     echo "you must merry";
// }else{
//     echo "Yoshsan hali Bolakay";
// }





// ifelse
/*
$id = 14;
if ($id === 10) {
    # code...
    echo "This is upper than it";
}elseif($id === 15){
    echo "Bu son katta";
}elseif($id === 14){
    echo "14 son TUG'RI";
}else{
    echo "son kiriting";
}
*/





// IFELSENING SODDA KO'RINISHI

/*

$water = 100;
if ($water === 100) {
    # code...
    echo "Suv qaynadi";
} else {
    # code...
    echo "suv hali qaynagani yuq";
}

echo ($water === 100) ?  "Suv qaynadi" : "suv hali qaynagani yuq";

*/


// Switch case
/*
$today = date("D");

switch ($today) {
    case 'Sunn':
        echo "Bugun yakshanba";
        break;
    case 'Mon':
         echo "Bugun Dushanba";
         break;
    default:
         echo "Bugun  $today ";
        break;
}

*/





// Massivalar 




/*
//  boglangan massivlar
$ages = ["Jeck"=>25, "Ahmad"=>32, "Samandar"=>95];
echo $ages["Ahmad"];
// Alohida berib chiqsak ham bo'ladi... $ages["Ahmad"]=22;

*/



// ko'p o'lchamli massivlar
// ichma ich massivlar
/*
$contacts = [
    [
        "ism"=> "Doniyorov Ahmad",
        "pochta"=> "ahmad@gmail.com",
        "number"=> 996795407    
    ],
    [
        "ism"=> "Mannayev Begi",
        "pochta"=> "Begi@gmail.com",
        "number"=> 5518215    
    ]
];

echo "Dostimning ism  familiyasi :-> ".$contacts[1]["ism"]. " Pochtasi ".$contacts[1]["pochta"]; 

*/




// var_dump print_r
/*
$cities = ["London","Tashkent","New York"];
print_r($cities);
var_dump($cities);

*/




// Massivlarni saralash sort() rsort()

/*
$shaharlar = ["Zootopiya","Hirot","Boku",  "O'sh"];
sort($shaharlar);
rsort($shaharlar);
print_r($shaharlar);


*/






// Boglangan massivlarni saralash ksort() arsort()
/*
$people = ["Jeck"=>25, "Ahmad"=>32, "Samandar"=>95];
ksort($people);
arsort($people);
print_r($people);

*/













// skillar
/*
$i = 1;
while($i <= 10){
    $i++;
    echo "son :--> ".$i."\n";
}
*/

// Do...While

/*
// $i = 1;
$i = 11;  //shu holat uchun do whiledan foydalanamiz!!!!!!!!!

do {
    $i++;
    echo "Do while son :--> ".$i."\n";
} while ($i <= 10);

*/





// For
/*
for ($i=0; $i <=15 ; $i++) { 
    echo "For son :--> ".$i."\n";
}


// Foreach
// massivlarni interatsiya qilish uchun ishlatiladi!!!

$colors = ["green","red","blue","yellow"];
foreach ($colors as $color) {
    echo $color."\n";
}
*/








// Function
/*
function whatIsToday(){
    echo "Today is ".date('l');
}

whatIsToday();
*/


/*
// Parametrli function
function greeting($name)
{
    echo "Assalomu aleykum ".$name;
}
greeting("Malik");


function powNumber($pow, $number){
    echo "Darajaga oshishi ".$number ** $pow;
}
powNumber(5, 5);
*/


// Boshlangich qiymat olishi
/*
function powNumber2($number,$pow = 2){
    echo "Darajaga oshishi ".$number ** $pow;
}
powNumber2(5);
*/

// function ichidan qiymat qaytarish 
/*
function powNumber3($number,$pow = 2){
   return "Darajaga oshishi ".$number ** $pow;
}
echo powNumber3(5,3);
*/



// O'zgaruvchi muhiti haqida GLOBAL AND LOCAL
// GLOBAL
// Anonim funksiyalar use konstiroktori
/*
$name = "Doniyor";
function greeting(){
    global $name;
    echo "Salom ".$name;
}
greeting();
*/


// Anonim funksiyalar use konstiroktori
/*
$name = "Doniyor";
$greeting = function () use($name){
    // global $name;
    echo "Salom ".$name;
};
$greeting();
*/



// Matematik funksiyalar

// echo pow(2,5);        //darajaga oshirish 
// echo abs(88);         //minus son kiritadigan bolsak plusda chiqarib beradi
// echo round(5.4);      //yaxlitlab beradi
// echo ceil(5.4);       //yaxlitlab beradi  bitta tepadagi son qilib beradi
// echo floor(5.4);      //yaxlitlab beradi  bitta pastdagi son qilib beradi
// echo sqrt(9);         //ildizini topib beradi
// echo rand();          //randomlaydi
// echo rand(1,50);      //randomlaydi
// echo decbin(2);       //onlik sonlarni ikkilikka o'giradi
// echo bindec(10);














// GET
/*
<?php
// echo $_GET['name'];
if (isset($_GET['submit'])) {
    echo $_GET['name'];
}
?>
    <form action="index.php" metho="get">
        <input type="text" name="name" >
        <button name="submit" type="submit">Submit</button>
    </form>
*/



// POST
/*
<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
}
?>
    <form action="index.php" method="post">
        <input type="text" name="name" >
        <button name="submit" type="submit">Submit</button>
    </form>
    */



// FROM WITH POST
/*
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    echo "Men ".$name." ".$surname." ".$age." yoshdaman";
}
?>
    <form action="index.php" method="post">
        <label>
            <p>Name</p>
            <input type="text" name="name" >
        </label>
        <label>
            <p>Surname</p>
        <input type="text" name="surname" >

        </label>
        <label>
            <p>Age</p>
        <input type="text" name="age" >

        </label><br>
        <button name="submit" type="submit">Submit</button>
    </form>
*/



// INCLUDE 

// include "form2.php"; //topilmagan filening o'ziga ERROR beradi
// include "form.php";


// REQUIRE

// require "form3.php";
// require "form.php";  // agar file topilmasa Fotal ERROR beradi!!!


// _ONCE
// include "form.php";
// include_once "form.php";  //bir xil fileni chaqirib qo'ymasligimiz uchun ..._ONCE ishlatamiz





// DATE
// d-date, l-weeks day, m-moth, y-year;
// h-hour, i-minut, s-second, a-AM or PM
/*
echo date('d')."\n";
echo date('l')."\n";
echo date('m')."\n";
echo date('y')."\n";
echo date('h')."\n";
echo date('i')."\n";
echo date('s')."\n";
echo date('a')."\n";
*/

// echo date("d/m/Y")."\t";
// echo date("d-m-Y")."\n";

// echo date("h/i/s")."\n";
// echo date("h:i:s-a")."\n";

// time zonani belgilash 

// date_default_timezone_set("Asia/Tashkent");
// echo date("h:i:s-a")."\n";

echo "Salom";