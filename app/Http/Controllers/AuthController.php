<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me() {
        return [
            "nis" =>"3103118036",
            "name" => "Christdio Pratama Putra",
            "gender" => "Laki-Laki",
            "phone" => "0858728364500",
            "class" => "XII RPL 1"
        ];
    }
}
