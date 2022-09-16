<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class Mhscontroller extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new Mahasiswa();
       $mahasiswa = $mahasiswaModel->findAll();
        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];

        return view('templates/header', $data)
            . view('pages/mahasiswa', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('templates/header', $data)
            . view('pages/create')
            . view('templates/footer');
    }
}