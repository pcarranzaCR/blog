<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index(): string
    {
        return 'Index message from Client Controller';
    }

    public function saludar(): string
    {
        return 'Hola';
    }
}
