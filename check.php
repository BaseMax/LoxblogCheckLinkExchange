<?php
include "netphp.php";
$input=file_get_contents("subdomains.txt");
$subdomains=explode("\n", $input);
$subdomains=array_filter($subdomains);
print_r($subdomains);
$output=[];
foreach($subdomains as $subdomain) {

}
foreach($output as $item=>$bool) {
	print $item."\n";
}
