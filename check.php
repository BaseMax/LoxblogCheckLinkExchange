<?php
include "netphp.php";
$input=file_get_contents("subdomains.txt");
$subdomains=explode("\n", $input);
$subdomains=array_filter($subdomains);
print_r($subdomains);
$output=[];
foreach($subdomains as $subdomain) {
	$response=get("http://".$subdomain);
	preg_match('/(\'|\")(captcha_code_filec\.php)(\'|\")/i', $response[0], $has);
	if(isset($has[2]) && $has[2] == "captcha_code_filec.php") {
		$output[$subdomain]=true;
	}
}
foreach($output as $item=>$bool) {
	print $item."\n";
}
