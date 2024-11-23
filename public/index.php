<?php

require __DIR__ . '/../vendor/autoload.php'; // بارگذاری autoload

use Kavenegar\KavenegarApi;  // فضای نام درست

$sender = "1000689696";
$receptor = "09146491018";
$message = "وب سرویس پیام کوتاه کاوه نگار";
$apiKey = "444F62484B5A6C505754447738312F3662314E5948456468667974456A786D5276454A79726C7047334F593D"; // کلید API

// ساخت شی از کلاس KavenegarApi
$api = new KavenegarApi($apiKey);

// ارسال پیامک
$api->Send($sender, $receptor, $message);
