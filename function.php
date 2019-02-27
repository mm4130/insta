<?php
header('Content-Type: application/json');
function furl($url){
    $curl = curl_init();
    $agent = 'Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120716 Firefox/15.0a2';
    $header = array('Accept-Charset: UTF-8');
    curl_setopt($curl, CURLOPT_FAILONERROR, TRUE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl, CURLOPT_MAXREDIRS, 2);
    curl_setopt($curl, CURLOPT_USERAGENT, $agent);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 3); 
    curl_setopt($curl, CURLOPT_URL, $url);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}
function match($match,$su,$ss=1){
    preg_match($match,$su,$sp);
    return $sp[$ss];
}
function match_all($match,$su,$ss=1,$ne=0){
    preg_match_all($match,$su,$sp);
    return $sp[$ss][$ne];
}
function jsen($data){
    return json_encode($data, (JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}
function jsde($data,$var=true){
    return json_decode($data,$vaaar);   
}
?>
