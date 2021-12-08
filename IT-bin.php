<?php
$yellow = "\033[1;31m";
$red = "\033[2;31m";
system("clear");
error_reporting(0);
$lg = "\033[2;32m";
$yellow = "\033[1;3m";
echo  "$yellow
 ✟ Ϫ ✲ ✿ ❀ ❆ ❝ ❣ ♥️🌿🌨️ ϱ ❶ ❷ ❸ ❹
               

               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|             
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|                             ™IT
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|
               |✯|              |✯|             
 
 @Telegram = @s_cvd
•••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••
                                                      ┇
                                                      ┇
      [1]Visa Card💳      ◁▰▱▶   [2].Master Card💵 
                                                      ┇
                                                      ┇
•••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••

";
$num = readline("Choose Type: ");
                               echo"
•Programming : TIGER 𓆩𝗜𝗧𓆪 
•Telegram channel : @s_cvd
•check BIN : https://binlist.net
•generate card : https://namso-gen.com

[☆]_______________________________________________[☆]
";
if($num == '1'){
  while(1 < 10){
  $sum = rand(1,9).rand(1,9).rand(1,9).rand(1,9).rand(1,9)+rand(5,9).rand(1,9);
$visa = "4$sum";
//$visa = "417210";
$url = "https://lookup.binlist.net/$visa";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $h[] = "content-type:application/x-www-form-urlencoded";
  $h[] = 'Accept-Version: 3';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
$last = curl_exec($ch);
//echo $last;
$js = json_decode($last, true);
$type = $js['type'];
$pre = $js["prepaid"];
$done =  "$type$pre";
if($done === 'debit1'){
echo $yellow.'[#]-------------->'.$lg.$visa."\n$yellow";
file_put_contents("bins.txt", "$visa\n", FILE_APPEND);
}
    sleep(5);
  }

}elseif($num == '2'){
while(1 < 10){
  $sum2 = rand(1,9).rand(1,9).rand(1,9).rand(0,9).rand(1,9)+rand(5,9).rand(0,9).rand(0,9);
$master = "5$sum2";
$url = "https://lookup.binlist.net/$master";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $h[] = "content-type:application/x-www-form-urlencoded";
  $h[] = 'Accept-Version: 3';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
$last = curl_exec($ch);
//echo $last;
$js = json_decode($last, true);
$type = $js['type'];
$pre = $js["prepaid"];
$done =  "$type$pre";
if($done === 'debit1'){
echo $yellow.'[#]-------------->'.$lg.$master."\n $yellow";
file_put_contents("bins.txt", "$master\n", FILE_APPEND);
}
    sleep(5);
  }
}else{
  echo "Invalid Input!!\n";
}
?>
