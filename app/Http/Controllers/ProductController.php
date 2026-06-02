<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'nama_layanan' => 'Website Development',
            'deskripsi' => 'Pembuatan website company profile dan landing page.',
            'harga' => 5000000,
            'kategori' => 'Web Development'
        ],
        [
            'id' => 2,
            'nama_layanan' => 'Mobile App Development',
            'deskripsi' => 'Pengembangan aplikasi Android dan iOS.',
            'harga' => 15000000,
            'kategori' => 'Mobile Development'
        ],
        [
            'id' => 3,
            'nama_layanan' => 'UI/UX Design',
            'deskripsi' => 'Desain antarmuka dan pengalaman pengguna aplikasi.',
            'harga' => 3000000,
            'kategori' => 'Design'
        ]
    ];

    public function index() {
        return $this->products;
    }

    public function show($id) {
        foreach($this->products as $item) {
            if($item['id'] == $id) {
                return $item;
            }
        }
    }
}
