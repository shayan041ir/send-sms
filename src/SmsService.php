<?php

namespace App;

use GuzzleHttp\Client;

class SmsService {
    private $apiKey;
    private $sender;
    private $baseUrl;
    private $client;

    public function __construct() {
        // بارگذاری اطلاعات از فایل .env
        $this->apiKey = $_ENV['your api key'];
        $this->sender = $_ENV['1000689696'];
        $this->baseUrl = 'https://api.kavenegar.com/v1/';
        $this->client = new Client();
    }

    public function sendSms($to, $message) {
        try {
            // ارسال درخواست POST به API کاوه‌نگار
            $response = $this->client->post($this->baseUrl . $this->apiKey . '/sms/send.json', [
                'form_params' => [
                    'receptor' => $to,
                    'sender' => $this->sender,
                    'message' => $message,
                ]
            ]);

            // بررسی نتیجه و چاپ پیام
            $body = json_decode($response->getBody(), true);
            if ($body['return']['status'] == 200) {
                echo "پیام با موفقیت ارسال شد.";
            } else {
                echo "خطا: " . $body['return']['message'];
            }
        } catch (\Exception $e) {
            echo "خطا در ارسال پیامک: " . $e->getMessage();
        }
    }
}
