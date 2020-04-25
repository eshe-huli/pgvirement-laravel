<?php


namespace App\Services;


class Cinetpay
{
    protected $baseUrl = "https://client.cinetpay.com/v1/";

    protected $siteId;
    protected $apiKey;

    protected $lot;
    protected $amount;
    protected $operator;
    protected $receiver;
    protected $transaction_id;
    protected $treatment_status;
    protected $client_transaction_id;


    public function __construct(String $apiKey,String $siteId)
    {
    }

    public final function authentication() :String{
        $url = $this->baseUrl."auth/login";
        $token = "Api CAll";
        return $token;
    }


    public function getBalance(){
        $url = $this->baseUrl."auth/login";

    }

    public function addContact(){
        $url = $this->baseUrl. "transfer/check/balance";
    }

    public function doPayment(){
        $url = $this->baseUrl. "transfer/check/balance";
    }

    public function checkPaymentStatus(){
        $url = $this->baseUrl. "transfer/check/balance";
    }
}
