<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('static.home');
    }

    public function about() {
        $team = [
            [
                'name' => 'Susi Similikiti',
                'position' => 'CEO',
                'photo' => 'matheus-ferrero-pg_WCHWSdT8-unsplash.jpg'
            ],
            [
                'name' => 'Tuti Astuti',
                'position' => 'Designer & Programmer',
                'photo' => 'matheus-ferrero-W7b3eDUb_2I-unsplash.jpg'
            ],
            [
                'name' => 'Lailatul Jannah',
                'position' => 'System Analyst & Programmer',
                'photo' => 'michael-dam-mEZ3PoFGs_k-unsplash.jpg'
            ],
            [
                'name' => 'Siti Badriah',
                'position' => 'Software Enginer',
                'photo' => 'roberto-delgado-webb-AxI9niqj_60-unsplash.jpg'
            ]
        ];
        return view('static.about', compact('team'));
    }

    public function products() {
        $products = [
            [
                'title' => 'K2 Company Apps',
                'tagline' => 'improve your business better than others',
                'subtitle' => 'K2 Company App',
                'description' => 'Solutions for companies that manage information effectively and efficiently in accordance with company needs.',
                'bgcolor' => '#007bff'
            ],
            [
                'title' => 'K2 Company Apps',
                'tagline' => 'improve your business better than others',
                'subtitle' => 'K2 Company App',
                'description' => 'Solutions for companies that manage information effectively and efficiently in accordance with company needs.',
                'bgcolor' => '#dc3545'
            ],
            [
                'title' => 'K2 Company Apps',
                'tagline' => 'improve your business better than others',
                'subtitle' => 'K2 Company App',
                'description' => 'Solutions for companies that manage information effectively and efficiently in accordance with company needs.',
                'bgcolor' => '#28a745'
            ],
            [
                'title' => 'K2 Company Apps',
                'tagline' => 'improve your business better than others',
                'subtitle' => 'K2 Company App',
                'description' => 'Solutions for companies that manage information effectively and efficiently in accordance with company needs.',
                'bgcolor' => '#fd7e14'
            ]
        ];
        return view('static.products', compact('products'));
    }

    public function services() {
        $services = [
            [
                'title' => 'Software Development',
                'description' => 'K2 BUKAN IT will help provide the best solution for your company in developing specialized software in a variety of multiplatform (Mobile Apps and Websites)',
                'icon' => 'fas fa-desktop'
            ],
            [
                'title' => 'Enterprise Software Solutions',
                'description' => 'ERP offers a variety of valuable information for management so that management can predict resource requirements, reports and analysis.',
                'icon' => 'fas fa-user-cog'
            ],
            [
                'title' => 'Network & Infrastructure',
                'description' => 'Network infrastructure solutions to consolidate and optimize IT resources, increase client business productivity by providing high availability and high-performance network solutions.',
                'icon' => 'fas fa-network-wired'
            ],
            [
                'title' => 'Intelligence Security Solution',
                'description' => 'K2 BUKAN IT will help provide security intelligence solutions, standards, policies, and management practices that are applied to information to stay safe',
                'icon' => 'fas fa-user-shield'
            ],
            [
                'title' => 'Training Center And Incubation',
                'description' => 'Public training is training that is carried out regularly at the SOLUSI training center. IN-HOUSE TRAINING In-house training is training that is carried out in a group of companies.',
                'icon' => 'fas fa-universal-access'
            ]
        ];
        return view('static.services', compact('services'));
    }

    public function porfolio(){
        return view('static.porfolio');
    }
}
