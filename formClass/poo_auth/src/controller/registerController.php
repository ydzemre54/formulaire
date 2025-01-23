<?php


namespace App\controller;

class RegisterController implements ControllerInterface
{
    public function __construct() {}

    public function doGET(): void
    {
        include('formClass/poo_auth/src/view/register.html');
    }

    public function doPOST(): void {}
}