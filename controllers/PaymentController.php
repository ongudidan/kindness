<?php

namespace app\controllers;

use Yii;
use yii\helpers\Json;

class PaymentController extends \yii\web\Controller
{
    public $layout = 'FrontendLayout';
    
    public function actionIndex()
    {
        // return $this->render('index');
        if (Yii::$app->request->isPost) {
            $name = Yii::$app->request->post('form_name');
            $email = Yii::$app->request->post('form_email');
            $phone = Yii::$app->request->post('form_phone');
            $amount = Yii::$app->request->post('amount');

            // Process the payment
            $response = $this->makePaymentRequest($name, $email, $phone, $amount);

            return $this->render('payment-result', ['response' => $response]);
        }

        return $this->render('mpesa-form');
    }


    protected function makePaymentRequest($name, $email, $phone, $amount)
    {
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $headers = [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->getAccessToken()
        ];
        $data = [
            'BusinessShortCode' => 'your_shortcode',
            'Password' => 'your_password',
            'Timestamp' => date('YmdHis'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phone,
            'PartyB' => 'your_shortcode',
            'PhoneNumber' => $phone,
            'CallBackURL' => 'your_callback_url',
            'AccountReference' => 'payment',
            'TransactionDesc' => 'Payment for ' . $name
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return Json::decode($response);
    }

    protected function getAccessToken()
    {
        // Implement token fetching
        // For example, you might use a separate function to get the access token
        return 'your_access_token';
    }

    public function actionMpesaForm()
    {

        $this->layout = 'FrontendLayout';
        return $this->render('mpesa-form');
    }
}
