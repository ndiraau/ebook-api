<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return 
        [
            "NIS" => "3103118100",
            "Name" => "Nadira",
            "Gender" => "Perempuan",
            "Phone" => "087837482332",
            "Class" => "XII RPL 3",
        ];
    }
}