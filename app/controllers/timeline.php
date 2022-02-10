<?php
class Timeline extends Controller
{
    public function __construct()
    {
        //echo "Contact class instantiated";
    }

    public function index()
    {
        $this->view('Timeline/timeline');
    }
}