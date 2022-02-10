<?php
class Aboutus extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Aboutus/aboutus');
    }
}