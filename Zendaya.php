<?php
 
$botToken = "1909755035:AAHxG82l_erFdzj1me45qp1_ilsiW8-1ANw";
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 $e = print_r($update);
 
//$chatId = reply_to_message_id;
$chatId = $update["message"]["chat"]["id"];
//$chatId = "-490195907";
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];
$info = json_encode($update,JSON_PRETTY_PRINT);

 $cmds11 = "<b>Hey, welcome to this Bot! Below I show you all available commands:</b>%0A%0A<u>Bin lookup:</u> <code>/bin xxxxxx</code>%0A%0A<u>SK-Key Check:</u> <code>/sk sk_live_xxxxxxxxxxxx</code>%0A%0A<u>";
 
switch($message) {
       
        case "/start":
                sendMessage($chatId, "Hey! I am a Nishan ko bot bot with a few extras. Send /cmds for a list of all commands!");
                break;
        case "/cmds":
                sendMessage($chatId, $cmds11);
                break;
                case "/info":
                sendMessage($chatId,$info);
                break;
       
               
       
}
 if (strpos($message, "/bin") === 0) {
        $bin = substr($message, 5);
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$resul = curl_exec($ch);
$result = strtoupper($resul);
$fim = json_decode($result,true);
 $bank = $fim['BANK']['NAME'];
  $country = $fim['COUNTRY']['NAME'];
 $brand = $fim['SCHEME'];
 $type =$fim['TYPE'];
$level =$fim['BRAND'];
$flag = $fim['COUNTRY']['EMOJI'];
 $currency = $fim['country']['currency'];
 $type3 = strtoupper($fim['type']);
$response ='BinData:'.$type1.'-'.$type3.'-'.$country.'-'.$type.' -'.$bank.' BANK '.$flag.'';
$response = '✔️ Valid BIN <b>%0ABRAND: </b>'.$brand.'<b>%0ATYPE: </b>'.$type.'<b>%0ALEVEL: </b>'.$level.'<b>%0ABANK: </b>'.$bank.' <b>%0ACOUNTRY: </b>'.$country.' '.$flag.'%0A<b>CHECKED BY:</b> '.$username.'<b>%0ABOT BY:</b> Nishan';
##++++++++++++++++++++++++++++++++++++++++++++++++++++++++'
                sendMessage($chatId, $response);
                
                
}

if (strpos($message, "/stm") === 0) {
  $d ="I love u baby.$bin";
        $lista = substr($message, 5);
        $i     = explode("|", $lista);
$cc    = $i[0];
$mes    = $i[1];
$ano  = $i[2];
$ano1    = substr($yyyy, 2, 4);
$cvv   = $i[3];
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];


function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

//put you sk_live keys here
$skeys = array(
  1 => 'sk_live_69GKI0saLB8uIEnxzv8VTvRX', 
    ); 
    $skey = array_rand($skeys);
    $sk = $skeys[$skey];


#=====================================================================================================#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];
$emoji = $fim['emoji'];

if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);


 
 
 
 
?>