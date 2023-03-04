# Uçak Bileti Fiyatı Sorgulama

Bu kod, uçak bileti fiyatını sorgulamak için bir API kullanır. İstek parametreleri olarak kalkış yeri, varış yeri ve tarih gönderilir ve API, bilet fiyatını döndürür.

Yapımcı: Emre Karademir
Web Sitesi: https://emrekarademir.com/
E-posta: social@emrekarademir.com

## Gereksinimler

- PHP 5.6 veya üstü (PHP için)
- Python 3.6 veya üstü (Python için)
- PHP cURL eklentisi (PHP için)
- requests kütüphanesi (Python için)

## Kurulum

Python için:

pip install requests


PHP için:

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
```

Python için:

```
import requests

# API endpoint
url = "https://api.sample.com/flights/search"

# Request parameters
params = {
    "origin": "IST",
    "destination": "DXB",
    "date": "2023-03-10"
}

## Make API request
response = requests.get(url, params=params)

Check if the request is successful
if response.status_code == 200:
# Parse the response JSON data
data = response.json()
# Get the ticket price
ticket_price = data.get("price")

# Print the ticket price
print("Uçak bileti fiyatı:", ticket_price, "TL")
else:
print("API request failed.")

## Notlar

- API endpoint'i ve parametreleri gerçek bir API sunucusu ve verileri temsil etmez.
- Bu örnek kodlar sadece bir fikir vermek içindir ve direkt olarak kullanılamaz. API endpoint'inin ve istek yapılacak verilerin doğru olduğundan emin olun.
