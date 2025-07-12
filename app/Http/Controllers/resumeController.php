<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resumeController extends Controller
{
    public function index()
    {
        $experienceitem = [
            [
                'date' => '2024-2025',
                'post' => 'Web developer',
                'company' => 'Crative it',
                'address' => 'Dhanmondi-07 ,Dhaka-1200',
                'description' => 'I m a passionate web developer with over 1 years of experience creating beautiful
                            and functional websites.
                         Since then, I haveve worked with numerous clients from various industries, helping them establish their
                            online presence.
                        I specialize in front-end development using modern technologies like HTML5, CSS3, JavaScript,php
                            and frameworks like Bootstrap and laravel. I also have experience with back-end technologies
                            including  PHP and laravel.',
            ],
            [
                'date' => '2023-2024',
                'post' => 'It engineer ',
                'company' => 'miliniam it',
                'address' => 'Ganginaerpar ,Mymensingh-2100',
                'description' => 'I m a passionate web Design with over 1 years of experience creating beautiful
                            and functional websites.
                         Since then, I haveve worked with numerous clients from various industries, helping them establish their
                            online presence.
                        I specialize in front-end development using modern technologies like HTML5, CSS3, JavaScript,php
                            and frameworks like Bootstrap.',
            ]
            ];
        $educationItem = [
            [
                'year'=>'S.S.C -2018/19',
                'collage'=>'Singhojani ML hisgh school',
                'address'=>'Jamalpur',
                'depatment'=>'science',
                'cgpa'=>'4.98 out of 5',
                'description'=>'I started school in 2018 and passed S.S.C in 2019 from science and obtained GPA-4.98',
            ],
            [
                'year'=>'Diploma -2019/20',
                'collage'=>'Mymensingh Polytechnic Institute',
                'address'=>'Jamalpur',
                'depatment'=>'Computer science & Technology',
                'cgpa'=>'3.56 out of 4',
                'description'=>'I started polytechic in 2019 and passed S.S.C in 2023 from science and obtained GPA-4.56',

            ]
        ];
        $skillsitem =[
            [
                'name'=>'Web design',
            ],
            [
                'name'=>'Web developement',  
            ],
            [
                'name'=>'MS Office', 
            ],
            [
                'name'=>'Reporting', 
            ],
            [
                'name'=>'Monitoring', 
            ],
            [
                'name'=>'Reporting', 
            ],
            [
                'name'=>'Data entry', 
            ],
            

            
        ];
        $languages = [
            [
                'name'=>'Html',
            ],
            [
                'name'=>'Css',
            ],
            [
                'name'=>'JavaScript',
            ],
            [
                'name'=>'bootstrap',
            ],
            [
                'name'=>'php',
            ],
            [
                'name'=>'Laravel',
            ],
        ];
        return view('resume', compact('experienceitem','educationItem', 'skillsitem', 'languages'));
    }
    
}
