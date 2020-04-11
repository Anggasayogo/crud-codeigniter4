<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class Mahasiswa extends Controller
{
    protected $MahasiswaModel;
    protected $request;

    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
        $this->request = \Config\Services::request();
    }

    public function index()
    {
        return view('mahasiswa');
    }
}