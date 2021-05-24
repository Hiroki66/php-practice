<?php
function write_data_to_csv()
{
    $restaurants = [];
    $response = "hugahuga";

    if (isset($response["results"]["error"])) {
        return print("エラーが発生しました！");
    }

    if (isset($response["results"]["shop"])) {
        foreach ($response["shop"] as &$i) {
            $restaurant_name = $i["name"];
            $restaurants[] = $restaurant_name;
        }
    }
    
    return print_r($restaurants);
}

write_data_to_csv();
