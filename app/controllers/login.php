<?php

class Login extends Controller{
    function index($a = '', $b = '', $c = ''){
        $data["page_title"] = "login";
        $this->view("minima/login", $data);
    }
}