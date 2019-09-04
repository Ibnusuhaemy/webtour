<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class pageController extends Controller
{
    public function index (){
        $title = 'Home';
        return view('pages.home')->with('title',$title);
    } 
    public function detailPaket (){
        $title = 'Detail Paket';
        return view('pages.detailPackage')->with('title',$title);
    }
    public function checkout (){
        $title = 'Checkout';
        return view('pages.checkout')->with('title',$title);
    }  
    public function contact (){
        $data = array(
            'title' => 'Contact Us',
            'header' => 'active',
            'val' => 6
        );
        return view('pages.contact')->with($data);
    }
    public function kebijakanPrivasi (){
        $title = 'Kebijakan Privasi';
        return view('pages.kebijakan')->with('title',$title);
    } 
    public function FAQ (){
        $title = 'FAQ';
        return view('pages.faq')->with('title',$title);
    }
    public function SK (){
        $title = 'Syarat Ketentuan';
        return view('pages.SK')->with('title',$title);
    }  
    public function blog (){
        $data = array(
            'title' => 'Blog',
            'header' => 'active',
            'val' => 5
        );
        return view('pages.blog')->with($data);
    }
    public function blogList (){
        $title = 'Blog List';
        return view('pages.blogList')->with('title',$title);
    }
    public function blogDetail (){
        $title = 'Detail';
        return view('pages.blogDetail')->with('title',$title);
    }
    public function about (){
        $title = 'About Us';
        return view('pages.about')->with('title',$title);
    }  
    public function corporateTrip (){
        $data = array(
            'title' => 'Corporate Trip',
            'header' => 'active',
            'val' => 3
        );
        return view('pages.corporate')->with($data);
    }
    public function familyTrip (){
        $data = array(
            'title' => 'Family Trip',
            'header' => 'active',
            'val' => 2
        );
        return view('pages.family')->with($data);
    }
    public function gallery (){
        $data = array(
            'title' => 'Contact Us',
            'header' => 'active',
            'val' => 4
        );
        return view('pages.gallery')->with($data);
    }
}