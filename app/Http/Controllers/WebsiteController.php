<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home(){
        $produtos = [
        [
            'nome' => 'Ingressos',
            'preco' => 49,99,
            'imagem' => 'assets/img/ingresso.png'
        ],

        [
            'nome' => 'Moletom',
            'preco' => 400,99,
            'imagem' => 'assets/img/moletom.png'
        ],

        [
            'nome' => 'Bandeira',
            'preco' => 59,99,
            'imagem' => 'assets/img/bandeira.png'
        ],

        [
            'nome' => 'Chapéu',
            'preco' => 59,99,
            'imagem' => 'assets/img/chapeu.png'
        ],

        [
            'nome' => 'Camisa',
            'preco' => 299,99,
            'imagem' => 'assets/img/camisa.png'
        ]
        
       ];

       
        return view ('home', compact('produtos'));
    
    }
}