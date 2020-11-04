<?php
namespace sffi\phlegethon\util;

class RequestUtil
{
    public static function curlPostJson($url, $data, $heads, $method="POST")
    {
        $curl = curl_init();
        $requestHead = [];
        foreach ($heads as $key => $head) {
            $requestHead[] = $key.': '.$head;
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "UTF-8",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS =>json_encode($data),
            CURLOPT_HTTPHEADER => $requestHead,
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }
}