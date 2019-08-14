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
            ->join('hotel','hotel.id_paket','=','paket.id')
            ->join('fasilitas','fasilitas.id_paket','=','paket.id')
            ->join('durasi','durasi.id_paket','=','paket.id')
            ->with('destinasi')
            ->with('rencana')
            ->with('faqs')
            ->with('testimoni')
            ->get([
                'paket.id',
                'paket.nama_paket',
                'type_paket.type',
                'paket.gambar_paket',
                'paket.harga_dewasa',
                'paket.harga_anak',
                'paket.booked',
                'durasi.jam',
                'durasi.hari',
                'durasi.malam',
                'hotel.1',
                'hotel.2',
                'hotel.3',
                'hotel.4',
                'hotel.5',
                'fasilitas1',
                'fasilitas2',
                'fasilitas3',
                'fasilitas4']);


        //NESTED ARRAY TABEL DESTINASI
        $destinasi = destinasi::where('id_paket',$paket)
            ->get(['id','id_paket','nama_tempat_destinasi','kota_destinasi','gambar_destinasi']);

        $data = array();
        foreach ($destinasi as $destinasis){
            $data[] = $destinasis;
        }


        //NESTED ARRAY TABEL RENCANA
        $rencana = rencana::where('id_paket',$paket)
            ->get(['id','id_paket','rencana','gambar_rencana','deskripsi']);

        $data2 = array();
        foreach ($rencana as $rencanas){
            $data2[] = $rencanas;
        }


        //NESTED ARRAY TABEL FAQS
        $faqs = faqs::where('id_paket',$paket)
            ->get(['id','id_paket','pertanyaan','jawaban']);

        $data3 = array();
        foreach ($faqs as $faqss){
            $data3[] = $faqss;
        }


        //NESTED ARRAY TABEL TESTIMONI
        $testimoni = testimoni::where('id_paket',$paket)
            ->get(['id','id_paket','nama_testimoni','kota_testimoni','testimoni','foto_testimoni']);

        $data4 = array();
        foreach ($testimoni as $testimonis){
            $data4[] = $testimonis;
        }


        //RESPONSE
        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaket(){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.gambar_paket','paket.harga_dewasa','paket.harga_anak','paket.booked']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketFamily(){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->where('paket.id_type','=',1)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.gambar_paket','paket.harga_dewasa','paket.harga_anak','paket.booked']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketCorporate(){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->where('paket.id_type','=',2)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.gambar_paket','paket.harga_dewasa','paket.harga_anak','paket.booked']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketCustom(){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->where('paket.id_type','=',3)
            ->get(['paket.id','paket.nama_paket','type_paket.type','paket.gambar_paket','paket.harga_dewasa','paket.harga_anak','paket.booked']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getPaketbyid($id){
        $paket = paket::join('type_paket','type_paket.id', '=', 'paket.id_type')
            ->where('paket.id',$id)
            ->get(['paket.nama_paket','type_paket.type','paket.gambar_paket','paket.harga_dewasa','paket.harga_anak','paket.booked']);

        $response = [
            'data' => $paket
        ];
        return response()->json($response);
    }

    public function getDestinasi($id_paket){
        $data = destinasi::where('id_paket',$id_paket)
            ->get(['id','id_paket','nama_tempat_destinasi','kota_destinasi','gambar_destinasi']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getFasilitas($id_paket){
        $data = fasilitas::where('id_paket',$id_paket)
            ->get(['id','id_paket','fasilitas1','fasilitas2','fasilitas3','fasilitas4']);
        $response = [
          'data' => $data
        ];
        return response()->json($response);
    }

    public function getTestimoni($id_paket){
        $data = testimoni::where('id_paket',$id_paket)
            ->get(['id','id_paket','nama_testimoni','kota_testimoni','testimoni','foto_testimoni']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getHotel($id_paket){
        $data = hotel::where('id_paket',$id_paket)
            ->get(['id','id_paket','1','2','3','4','5']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getDurasi($id_paket){
        $data = durasi::where('id_paket',$id_paket)
            ->get(['id','id_paket','jam','hari','malam']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getRencana($id_paket){
        $data = rencana::where('id_paket',$id_paket)
            ->get(['id','id_paket','rencana','gambar_rencana','deskripsi']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getFaqs($id_paket){
        $data = faqs::where('id_paket',$id_paket)
            ->get(['id','id_paket','pertanyaan','jawaban']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getGaleri(){
        $data = galeri::get(['id','gambar_galeri']);
        $response = [
            'data' => $data
        ];
        return response()->json($response);
    }

    public function getBlog(){
        $blog = blog::join('type_blog','type_blog.id','=','blog.id_type')
        ->with('komentar')
        ->get(['blog.id','blog.judul','type_blog.type_blog','blog.created_at','blog.gambar_blog','blog.deskripsi','blog.featured']);

        //NESTED ARRAY TABEL DESTINASI
        $komentar = komentar::where('id_blog',$blog)
            ->get(['id','id_blog','nama_komentar','komentar','created_at']);
//        $komentar->created_at->format('d, M Y H:i');
//
        $data = array();
        foreach ($komentar as $komentars){
            $data[] = $komentars;
        }

        $response = [
            'data' => $blog
        ];
        return response()->json($response);
    }

}
