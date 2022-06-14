<?php

class Signup extends Controller{
    function index($a = '', $b = '', $c = ''){
        $data["page_title"] = "signup";
        $this->view("minima/signup", $data);
    }
}