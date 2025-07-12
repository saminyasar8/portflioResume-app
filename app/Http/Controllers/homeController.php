<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $aboutitam = [
            [
                'name' => 'Samin Yasar',
                'github-link'=>'https://github.com/saminyasar8',
                'linkedin-link'=>'https://www.instagram.com/Swee_tCandi/?fbclid=IwY2xjawLZMoFleHRuA2FlbQIxMABicmlkETFlTFlLNUN0RzI3MVVvWDBWAR6_d5WRwghPnrYDamDYWOH6UusFdG_xSgzFV-7OHUCEFgVy0jGtZzTPhTsw5A_aem_fCsnBu8VQWvCPvuISLq1yg#',
                'teitter-link'=>'https://twitter.com/Saminya83951277',
            ]
        ];
        return view('home' ,compact('aboutitam'));
    }
}
