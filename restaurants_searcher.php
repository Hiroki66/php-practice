<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$KEYID = "メールに記載されていたアクセスキーをここに入力";
$HIT_PER_PAGE = 100;
$PREF = "Z011";
$FREEWORD = "渋谷駅";
$FORMAT = "json";

$PARAMS = array("keyid"=> $KEYID, "count"=>$HIT_PER_PAGE, "pref"=>$PREF, "keyword"=>$FREEWORD, "format"=>$FORMAT);

function write_data_to_csv($params)
{
    $restaurants = [];
    $client = new Client();
    try {
        $json_res = $client->request('GET', "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/", ['query' => $params])->getBody();
    } catch (Exception $e) {
        return print("エラーが発生しました。");
    }
    $response = json_decode($json_res, true);
    
    if (isset($response["results"]["error"])) {
        return(print("エラーが発生しました！"));
    }
    
    foreach ($response["results"]["shop"] as &$restaurant) {
        $restaurants[] = $restaurant["name"];
    }
    $handle = fopen("restaurants_list.csv", "wb");
    fputcsv($handle, $restaurants);
    fclose($handle);
    return print_r($restaurants);
}

write_data_to_csv($PARAMS);
