<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index(){
        $project=[
            [
                'title'=>'Portflio',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!',
                'img-link'=>asset('assets/img/4f7fb2144641409.Y3JvcCwyMDcxLDE2MjAsMTUsMA.png'),
            ],
            [
                'title'=>'Blog Website',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!',
                'img-link'=>asset('assets/img/business-magazine-04-home-scaled-astra_template_preview.jpg'),
            ],
            [
                'title'=>'Blog Website',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius at enim eum illum aperiam placeat esse? Mollitia omnis minima saepe recusandae libero, iste ad asperiores! Explicabo commodi quo itaque! Ipsam!',
                'img-link'=>asset('assets/img/LP-Ingles-Loja_01.webp'),
            ],
        ];
        return view('projects' , compact('project'));
    }
}
