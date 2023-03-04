<?php

// API endpoint
$url = "https://api.sample.com/flights/search";

// İstek parametreleri
$params = array(
    "origin" => "IST",
    "destination" => "DXB",
    "date" => "2023-03-10"
);

// API isteğini yap
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url . "?" . http_build_query($params));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

// API cevabını kontrol et
if ($response !== false) {
    // API cevabını JSON formatına dönüştür
    $data = json_decode($response, true);

    // Bilet fiyatını al
    $ticket_price = $data["price"];

    // Bilet fiyatını ekrana yazdır
    echo "Uçak bileti fiyatı: " . $ticket_price . " TL";
} else {
    echo "API isteği başarısız.";
}
