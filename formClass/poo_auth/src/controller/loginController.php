<?php
namespace App\controller;

class LoginController implements ControllerInterface {
    public function __construct() {}

    public function doGET(): void {
        include('formClass/poo_auth/src/view/login.html');
    }

    public function doPOST(): void{}



}