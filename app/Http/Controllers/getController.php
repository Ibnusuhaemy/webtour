<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\paket;
use App\destinasi;
use App\fasilitas;
use App\testimoni;
use App\hotel;
use App\durasi;
use App\rencana;
use App\faqs;
use App\galeri;
use App\blog;
use App\type_blog;
use App\komentar;

class getController extends Controller
{
    public function getPaketAll(){

        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->with('hotel')
            ->with('fasilitas')
            ->with('destinasi')
            ->with('rencana')
            ->with('faqs')
            ->with('testimoni')
            ->get([
                'paket.id',
                'paket.nama_paket',
                'type_paket.type',
                'paket.url',
                'paket.directory',
                'paket.gambar_paket',
                'paket.harga_dewasa',
                'paket.harga_anak',
                'paket.meet_point',
                'paket.booked',
                'durasi.jam',
                'durasi.hari',
                'durasi.malam',
                ]);

        //RESPONSE
        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketFamily(){
        $paket1day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',1)
            ->where('paket.id_type','=',1)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url', 'paket.directory','paket.gambar_paket','durasi.hari']);

        $paket2day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',2)
            ->where('paket.id_type','=',1)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url','paket.directory','paket.gambar_paket','durasi.hari']);

        $response = [
            '1day' => $paket1day,
            '2day' => $paket2day
        ];
        return response()->json($response);
    }

    public function getPaketCorporate(){
        $paket1day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',1)
            ->where('paket.id_type','=',2)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url', 'paket.directory','paket.gambar_paket','durasi.hari']);

        $paket2day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',2)
            ->where('paket.id_type','=',2)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url', 'paket.directory','paket.gambar_paket','durasi.hari']);

        $response = [
            '1day' => $paket1day,
            '2day' => $paket2day
        ];
        return response()->json($response);
    }

    public function getPaketCustom(){
        $paket1day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',1)
            ->where('paket.id_type','=',3)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url', 'paket.directory','paket.gambar_paket','durasi.hari']);

        $paket2day = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('durasi.hari','=',2)
            ->where('paket.id_type','=',3)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.url', 'paket.directory','paket.gambar_paket','durasi.hari']);

        $response = [
            '1day' => $paket1day,
            '2day' => $paket2day
        ];
        return response()->json($response);
    }

    public function getPaketbyid($id){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->where('paket.id','=',$id)
            ->with('hotel')
            ->with('fasilitas')
            ->with('destinasi')
            ->with('rencana')
            ->with('faqs')
            ->with('testimoni')
            ->get([
                'paket.id',
                'paket.nama_paket',
                'type_paket.type',
                'paket.url',
                'paket.directory',
                'paket.gambar_paket',
                'paket.harga_dewasa',
                'paket.harga_anak',
                'paket.meet_point',
                'paket.booked',
                'durasi.jam',
                'durasi.hari',
                'durasi.malam',
            ]);

        $paketlain = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->inRandomOrder()
            ->limit(9)
            ->get(['paket.id','paket.nama_paket','paket.url', 'paket.directory','paket.gambar_paket','type_paket.type','durasi.jam','durasi.hari','durasi.malam']);

        //RESPONSE
        $response = [
            'data' => $paket,
            'paketlainnya' => $paketlain
        ];
        return response()->json($response);
    }

    public function getGaleri(){
        $galeri = galeri::get(['id','url','directory','gambar_galeri']);

        $testimoni = testimoni::get();

        $response = [
            'galeri' => $galeri,
            'testimoni' => $testimoni
        ];
        return response()->json($response);
    }

    public function getBlog(){
        $featured = blog::join('type_blog','type_blog.id','=','blog.id_type')
            ->where('featured',1)
            ->limit(5)
            ->get(['blog.id','type_blog.type_blog','blog.judul','blog.url', 'blog.directory','blog.gambar_blog','blog.created_at']);

        $blog = blog::join('type_blog','type_blog.id','=','blog.id_type')
            ->withCount('komentar')
            ->with(['komentar' => function($query){
                $query->orderBy('id','desc');
            }])
            ->get(['blog.id','blog.judul','type_blog.type_blog','blog.created_at','blog.url', 'blog.directory','blog.gambar_blog','blog.deskripsi','blog.featured']);

        //NESTED ARRAY TABEL HOTEL
        $komentar = komentar::where('id_blog',$blog)
            ->orderBy('komentar.id','desc')
            ->limit(1)
            ->get(['id','id_blog','nama_komentar','komentar','created_at']);


        $response = [
            'featured' => $featured,
            'allblog' => $blog
        ];
        return response()->json($response);
    }

    public function getBlogById($id){
        $blog = blog::join('type_blog','type_blog.id','=','blog.id_type')
            ->where('blog.id',$id)
            ->withCount('komentar')
            ->with(['komentar' => function($query){
                $query->orderBy('id','desc');
            }])
            ->get(['blog.id','blog.judul','type_blog.type_blog','blog.created_at','blog.url', 'blog.directory','blog.gambar_blog','blog.deskripsi','blog.featured']);

        //NESTED ARRAY TABEL HOTEL
            komentar::where('id_blog',$blog)
            ->get(['id','id_blog','nama_komentar','komentar','created_at']);

        $bloglain = blog::join('type_blog','type_blog.id','=','blog.id_type')
            ->withCount('komentar')
            ->with(['komentar' => function($query){
                $query->orderBy('id','desc');
            }])
            ->get(['blog.id','blog.judul','type_blog.type_blog','blog.created_at','blog.url', 'blog.directory','blog.gambar_blog','blog.deskripsi','blog.featured']);

        //NESTED ARRAY TABEL HOTEL
        komentar::where('id_blog',$bloglain)
            ->get(['id','id_blog','nama_komentar','komentar','created_at']);


        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->inRandomOrder()
            ->limit(3)
            ->get(['paket.id','paket.nama_paket','paket.url', 'paket.directory','paket.gambar_paket','type_paket.type','durasi.jam','durasi.hari','durasi.malam']);

        $response = [
            'blog' => $blog,
            'bloglain' => $bloglain,
            'paket' => $paket
        ];
        return response()->json($response);
    }

    public function getAllBlog(){
        $blog = blog::join('type_blog','type_blog.id','=','blog.id_type')
            ->inRandomOrder()
            ->withCount('komentar')
            ->with(['komentar' => function($query){
                $query->orderBy('id','desc');
            }])
            ->get(['blog.id','blog.judul','type_blog.type_blog','blog.created_at','blog.url', 'blog.directory','blog.gambar_blog','blog.deskripsi','blog.featured']);

        //NESTED ARRAY TABEL HOTEL
        $komentar = komentar::where('id_blog',$blog)
            ->orderBy('komentar.id','desc')
            ->limit(1)
            ->get(['id','id_blog','nama_komentar','komentar','created_at']);

        $response = [
            'data' => $blog
        ];
        return response()->json($response);
    }

    public function getPopulerPaketHome()
    {
        $paket = paket::join('type_paket', 'type_paket.id', '=', 'paket.id_type')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->orderBy('booked','asc')
            ->limit(6)
            ->get(['paket.id', 'paket.nama_paket', 'type_paket.type', 'paket.url', 'paket.directory','paket.gambar_paket','durasi.jam','durasi.hari','durasi.malam']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getTestimoni3()
    {
        $testimoni = testimoni::inRandomOrder()
            ->limit(3)
            ->get();

        $response = [
            'data' => $testimoni
        ];
        return response()->json($response);
    }

    public function getBlogFooter()
    {
        $blog = blog::orderBy('id','desc')
            ->limit(4)
            ->get(['id','id_type','judul','blog.url', 'blog.directory','gambar_blog','created_at']);

        $response = [
            'data' => $blog
        ];
        return response()->json($response);
    }

}
