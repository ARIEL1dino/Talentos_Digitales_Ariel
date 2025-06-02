<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('fronts/head_view');
        echo view('fronts/navbar_view');
        echo view('fronts/principal');
        echo view('fronts/footer_view');
    }
public function quienes_somos()
    {
        echo view('fronts/head_view');
        echo view('fronts/navbar_view');
        echo view('fronts/quienes_somos');
        echo view('fronts/footer_view');
    }
    public function acerca_de()
    {
        echo view('fronts/head_view');
        echo view('fronts/navbar_view');
        echo view('fronts/acerca_de');
        echo view('fronts/footer_view');
    }

    public function registro()
    {
        echo view('fronts/head_view');
        echo view('fronts/navbar_view');
        echo view('fronts/registro');
        echo view('fronts/footer_view');
    }

    public function login()
    {
        echo view('fronts/head_view');
        echo view('fronts/navbar_view');
        echo view('fronts/login');
        echo view('fronts/footer_view');
    }
    
}
