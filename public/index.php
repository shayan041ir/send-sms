<?php

require __DIR__ . '/../vendor/autoload.php'; // بارگذاری autoload

use Kavenegar\KavenegarApi;  // فضای نام درست

$sender = "1000689696";
$receptor = "09146491018";
$message = "وب سرویس پیام کوتاه کاوه نگار";
$apiKey = "your api key"; // کلید API

// ساخت شی از کلاس KavenegarApi
$api = new KavenegarApi($apiKey);

// ارسال پیامک
$api->Send($sender, $receptor, $message);
