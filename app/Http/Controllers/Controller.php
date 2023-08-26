<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index() {



            $articles = [
                [ 'title' => 'hello there1',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aperiam quasi eos, nemo ullam amet facere? Repellat non aperiam debitis.'
            ],
            [ 'title' => 'hello there2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aperiam quasi eos, nemo ullam amet facere? Repellat non aperiam debitis.'
            ],
            [ 'title' => 'hello there3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero aperiam quasi eos, nemo ullam amet facere? Repellat non aperiam debitis.'
            ]
            ];
            
                return view('home', ['articles' => $articles]);
            }
            


    
}
