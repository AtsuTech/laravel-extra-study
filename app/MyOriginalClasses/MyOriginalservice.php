<?php

namespace App\MyOriginalClasses;

class MyOriginalservice
{

    private $msg;
    private $data;

    public function __construct()
    {
        //echo 'MyOriginalservice';
        $this->msg = "これはオリジナルのサービスからのメッセージです";
        $this->data = [
            "apple",
            "banana",
            "cherry",
        ];
    }


    public function say()
    {
        return $this->msg;
    }

    public function data()
    {
        return $this->data;
    }
}