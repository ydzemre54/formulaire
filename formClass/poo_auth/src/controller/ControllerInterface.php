<?php

interface ControllerInterface
{
    public function __construct();
    public function doGET();
    public function doPOST();
}