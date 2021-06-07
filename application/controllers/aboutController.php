<?php

class aboutController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $this->view('aboutus/aboutus');
    }

}