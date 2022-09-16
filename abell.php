<?php

function createAbell(){
		echo "Set email >> ";
		$get = trim(fgets(STDIN));
		$url = "https://www.abellworldvip.com/index/login/send_email";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
		   "Accept: */*",
		   "Content-Type: application/x-www-form-urlencoded",
		   "X-Requested-With: XMLHttpRequest",
		   "Sec-Ch-Ua-Mobile: ?0",
		   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36",
		   "Origin: https://www.abellworldvip.com",
		   "Sec-Fetch-Site: same-origin",
		   "Sec-Fetch-Mode: cors",
		   "Sec-Fetch-Dest: empty",
		   "Referer: https://www.abellworldvip.com/mobile/register.html?code=FKWSPV",
		   "Accept-Encoding: gzip, deflate",
		   "Accept-Language: en-US,en;q=0.9",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = "username=".$get."";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		$json = json_decode($resp, TRUE);
		$rest = $json['msg'];
		echo "\n>> ".$rest;
}
function verifAbell(){
		echo "\nSet email >> ";
		$get = trim(fgets(STDIN));
		echo "\nSet code  >>";
		$code = trim(fgets(STDIN));
		$url = "https://www.abellworldvip.com/index/login/reg_submit";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
		   "Cookie: PHPSESSID=70738119f1bd55c1d445b75584a19ea9; __session:0.20458563726981427:=https:; __session:0.20458563726981427:showLanguage=0",
		   "Accept: */*",
		   "Content-Type: application/x-www-form-urlencoded",
		   "X-Requested-With: XMLHttpRequest",
		   "Sec-Ch-Ua-Mobile: ?0",
		   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36",
		   "Origin: https://www.abellworldvip.com",
		   "Sec-Fetch-Site: same-origin",
		   "Sec-Fetch-Mode: cors",
		   "Sec-Fetch-Dest: empty",
		   "Referer: https://www.abellworldvip.com/mobile/register.html?code=FKWSPV",
		   "Accept-Encoding: gzip, deflate",
		   "Accept-Language: en-US,en;q=0.9",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = "username=".$get."&pwd=randomfuck&pwd_confirm=randomfuck&pay_pwd=randomfuck&pay_pwd_confirm=randomfuck&captcha=&tj_code=FKWSPV&email_code=".$code."";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		$json = json_decode($resp, TRUE);
		$rest = $json['msg'];
		echo "\n>> ".$rest;
}

function loginAbell(){
		echo "\nSet email >> ";
		$get = trim(fgets(STDIN));
		$url = "https://www.abellworldvip.com/index/login/login_submit";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
		   "Cookie: PHPSESSID=70738119f1bd55c1d445b75584a19ea9; __session:0.20458563726981427:=https:; __session:0.20458563726981427:showLanguage=0",
		   "Accept: */*",
		   "Content-Type: application/x-www-form-urlencoded",
		   "X-Requested-With: XMLHttpRequest",
		   "Sec-Ch-Ua-Mobile: ?0",
		   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36",
		   "Origin: https://www.abellworldvip.com",
		   "Sec-Fetch-Site: same-origin",
		   "Sec-Fetch-Mode: cors",
		   "Sec-Fetch-Dest: empty",
		   "Referer: https://www.abellworldvip.com/mobile/login.html",
		   "Accept-Encoding: gzip, deflate",
		   "Accept-Language: en-US,en;q=0.9",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = "name=".$get."&password=randomfuck";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		$json = json_decode($resp, TRUE);
		$rest = $json['msg'];
		echo "\n>> ".$rest;
}

createAbell();
verifAbell();
loginAbell();

?>
