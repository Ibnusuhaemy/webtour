<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;

class pageController extends Controller
{
    public function index()
    {
        $client = new Client();
        // FETCH API PAKET POPULER
        $response = $client->request('GET', '45.32.105.117:7094/api/home/getpopulerpaket');
        $body = json_decode($response->getBody()->getContents());
        $data = $body->data;

        // FETCH API TESTIMONNI
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/gettestimoni3');
        $bodyTesti = json_decode($responseTesti->getBody()->getContents());
        $dataTesti = $bodyTesti->data;
        // var_dump($dataTesti);
        $title = 'Home';
        

        return view('pages.home', [ 'data' => $data,'title' => $title, 'dataTesti' => $dataTesti]);
    }
    public function detailPaket($id)
    {
        $client = new Client();
        // FETCH API Detail blog by id
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/getpaket/'.$id);
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);
        $title = 'Detail Paket';
        return view('pages.detailPackage',[ 'title' => $title, 'data' => $data]);
    }
    public function checkout()
    {
        $title = 'Checkout';
        return view('pages.checkout')->with('title', $title);
    }
    public function contact()
    {
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }
    public function kebijakanPrivasi()
    {
        $title = 'Kebijakan Privasi';
        return view('pages.kebijakan')->with('title', $title);
    }
    public function FAQ()
    {
        $title = 'FAQ';
        return view('pages.faq')->with('title', $title);
    }
    public function SK()
    {
        $title = 'Syarat Ketentuan';
        return view('pages.SK')->with('title', $title);
    }
    public function blog()
    {
        $client = new Client();
        // FETCH API DAFTAR Blog
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/blog/pageblog');
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);

        $title = 'Blog';
        return view('pages.blog',['title' => $title, 'data' => $data]);
    }
    public function blogList()
    {
        $client = new Client();
        // FETCH API DAFTAR Blog All
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/blog/getall');
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body->data;
        // var_dump($data);
        $title = 'Blog List';
        return view('pages.blogList', ['title' => $title, 'data' => $data]);
    }
    public function blogDetail($id)
    {
        $client = new Client();
        // FETCH API Detail blog by id
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/blog/getblog/'.$id);
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);
        $title = 'Detail';
        return view('pages.blogDetail',[ 'title' => $title, 'data' => $data]);
    }
    public function postKomentar($id_blog, Request $req)
    {
        $client = new Client();
        // FETCH API Detail blog by id
        $client->request('POST', '45.32.105.117:7094/api/blog/komentar/'.$id_blog, [
            'form_params' => [
                'id_blog' => $id_blog,
                'nama_komentar' => $req->input('nama_komentar'),
                'komentar' => $req->input('komentar'),
                ]
            ]);
        return redirect('/blog-detail'.'/'.$id_blog);
    }
    public function about()
    {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function corporateTrip()
    {
        $client = new Client();
        // FETCH API TESTIMONNI
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/gettestimoni3');
        $bodyTesti = json_decode($responseTesti->getBody()->getContents());
        $dataTesti = $bodyTesti->data;
        // var_dump($dataTesti);

        // FETCH API DAFTAR PAKET
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/corporate/getpaketday');
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);

        $title = 'Corporate trip';
        return view('pages.corporate', ['dataTesti' => $dataTesti , 'title' => $title, 'data' => $data]);
    }
    public function familyTrip()
    {
        $client = new Client();
        // FETCH API TESTIMONNI
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/gettestimoni3');
        $bodyTesti = json_decode($responseTesti->getBody()->getContents());
        $dataTesti = $bodyTesti->data;
        // var_dump($dataTesti);

        // FETCH API DAFTAR PAKET
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/family/getpaketday');
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);

        $title = 'Family trip';
        return view('pages.family', ['dataTesti' => $dataTesti , 'title' => $title, 'data' => $data]);
    }
    public function gallery()
    {
        $client = new Client();
        // FETCH API DAFTAR PAKET
        $responseTesti = $client->request('GET', '45.32.105.117:7094/api/galeri/getgaleritestimoni');
        $body = json_decode($responseTesti->getBody()->getContents());
        $data = $body;
        // var_dump($data);

        $title = 'Gallery & Testimoni';
        return view('pages.gallery',['title' => $title, 'data' => $data]);
    }
}
