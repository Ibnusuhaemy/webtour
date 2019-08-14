<?php

namespace App\Http\Controllers;

use http\Env\Response;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\paket;
use App\destinasi;
use App\fasilitas;
use App\testimoni;
use App\hotel;
use App\rencana;
use App\durasi;
use App\galeri;
use App\faqs;
use App\blog;
use App\type_blog;
use App\komentar;

class postController extends Controller
{
    public $successStatus = [
        'message' => 'Successfully Insert Data',
        'status' => 201
    ];

    public $unsuccessStatus = [
        'message' => 'Failed Insert Data',
        'status' => 406
    ];

    public function storePaket(Request $request){
        $request->validate([
            'id_type' => 'required',
            'nama_paket' => 'required',
            'gambar_paket' => 'required',
            'harga_dewasa' => 'required',
            'harga_anak' => 'required',
            'booked' => 'required',
        ]);

        $photo = $request->file('gambar_paket');
        $gambar_paket = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_paket')->put($gambar_paket,File::get($photo));

        paket::insert([
            'id_type' => $request->input('id_type'),
            'nama_paket' => $request->input('nama_paket'),
            'gambar_paket' => $gambar_paket,
            'harga_dewasa' => $request->input('harga_dewasa'),
            'harga_anak' => $request->input('harga_anak'),
            'booked' => $request->input('booked'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return response()->json($this-> successStatus);
    }

    public function storeDestinasi(Request $request, $id_paket){
        $request->validate([
            'nama_tempat_destinasi' => 'required',
            'kota_destinasi' => 'required',
            'gambar_destinasi' => 'required',
        ]);

        $photo = $request->file('gambar_destinasi');
        $gambar_destinasi = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_destinasi')->put($gambar_destinasi,File::get($photo));

        $paket = paket::where('id','=',$id_paket);

        if ($paket != null){
            destinasi::insert([
                'id_paket' => $id_paket,
                'nama_tempat_destinasi' => $request->input('nama_tempat_destinasi'),
                'kota_destinasi' => $request->input('kota_destinasi'),
                'gambar_destinasi' => $gambar_destinasi,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);

            return response()->json($this->successStatus);
        }
        else{
         return response()->json($this->unsuccessStatus);
        }
    }

    public function storeFasilitas(Request $request, $id_paket){
        $request->validate([
            'fasilitas1' => 'required',
            'fasilitas2' => 'required',
            'fasilitas3' => 'required',
            'fasilitas4' => 'required'
        ]);

        $fasilitas = fasilitas::where('id_paket','=',$id_paket);
        $paket = paket::where('id','=',$id_paket);
        if ($paket != null && $fasilitas == null){
            fasilitas::insert([
                'id_paket' => $id_paket,
                'fasilitas1' => $request->input('fasilitas1'),
                'fasilitas2' => $request->input('fasilitas2'),
                'fasilitas3' => $request->input('fasilitas3'),
                'fasilitas4' => $request->input('fasilitas4'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
        else{
            return response()->json($this-> unsuccessStatus);
        }
    }

    public function storeTestimoni(Request $request, $id_paket){
        $request->validate([
            'nama_testimoni' => 'required',
            'kota_testimoni' => 'required',
            'testimoni' => 'required',
            'foto_testimoni' => 'required',
        ]);

        $photo = $request->file('foto_testimoni');
        $foto_testimoni = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_foto_testimoni')->put($foto_testimoni,File::get($photo));

        $paket = paket::where('id','=',$id_paket);
        if ($paket != null) {
            testimoni::insert([
                'id_paket' => $id_paket,
                'nama_testimoni' => $request->input('nama_testimoni'),
                'kota_testimoni' => $request->input('kota_testimoni'),
                'testimoni' => $request->input('testimoni'),
                'foto_testimoni' => $foto_testimoni,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this->successStatus);
        }
        else{
            return response()->json($this->unsuccessStatus);
        }
    }

    public function storeHotel(Request $request, $id_paket){
        $hotel = hotel::where('id_paket','=',$id_paket);
        $paket = paket::where('id','=',$id_paket);
        if ($paket != null && $hotel == null) {
            hotel::insert([
                'id_paket' => $id_paket,
                '1' => $request->input('1'),
                '2' => $request->input('2'),
                '3' => $request->input('3'),
                '4' => $request->input('4'),
                '5' => $request->input('5'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
        else{
            return response()->json($this-> unsuccessStatus);
        }
    }

    public function storeRencana(Request $request, $id_paket){
        $request->validate([
            'rencana' => 'required',
            'gambar_rencana' => 'required',
            'deskripsi' => 'required'
        ]);

        $photo = $request->file('gambar_rencana');
        $gambar_rencana = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_rencana')->put($gambar_rencana,File::get($photo));

        $paket = paket::where('id','=',$id_paket);
        if ($paket != null) {
            rencana::insert([
                'id_paket' => $id_paket,
                'rencana' => $request->input('rencana'),
                'gambar_rencana' => $gambar_rencana,
                'deskripsi' => $request->input('deskripsi'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
        else{
            return response()->json($this-> unsuccessStatus);
        }
    }

    public function storeDurasi(Request $request, $id_paket){

        $durasi = durasi::where('id_paket','=',$id_paket);
        $paket = paket::where('id','=',$id_paket);
        if($durasi == null && $paket != null) {
            durasi::insert([
                'id_paket' => $id_paket,
                'jam' => $request->input('jam'),
                'hari' => $request->input('hari'),
                'malam' => $request->input('malam'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this->successStatus);
        }
        else{
            return response()->json($this-> unsuccessStatus);
        }
    }

    public function storeGaleri(Request $request){
        $request->validate([
            'gambar_galeri' => 'required',
        ]);

        $photo = $request->file('gambar_galeri');
        $gambar_galeri = $photo->getFilename().'.'.$photo->getClientOriginalExtension();Storage::disk('folder_gambar_galeri')->put($gambar_galeri,File::get($photo));
        galeri::insert([
            'gambar_galeri' => $gambar_galeri,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return response()->json($this-> successStatus);
    }

    public function storeFaqs(Request $request, $id_paket){
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $paket = paket::where('id','=',$id_paket);
        if ($paket != null) {
            faqs::insert([
                'id_paket' => $id_paket,
                'pertanyaan' => $request->input('pertanyaan'),
                'jawaban' => $request->input('jawaban'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
        else{
            return response()->json($this-> unsuccessStatus);
        }
    }

    public function storeBlog(Request $request){
        $request->validate([
            'judul' => 'required',
            'id_type' => 'required',
            'gambar_blog' => 'required',
            'deskripsi' => 'required'
        ]);

        $photo = $request->file('gambar_blog');
        $gambar_blog = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_blog')->put($gambar_blog,File::get($photo));

        $featured = $request->input('featured');
        $blog = blog::where('featured','=',1)->count();

        if($blog == 5 && $featured == 1) {
            return response()->json($this->unsuccessStatus);
        }
        else{
            blog::insert([
                'judul' => $request->input('judul'),
                'id_type' => $request->input('id_type'),
                'gambar_blog' => $gambar_blog,
                'deskripsi' => $request->input('deskripsi'),
                'featured' => $featured,
                'created_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
    }


    public function storeKomentar(Request $request, $id_blog){
        $request->validate([
            'nama_komentar' => 'required',
            'komentar' => 'required',
        ]);

        $blog = blog::where('id','=',$id_blog);
        if ($blog == null) {
            return response()->json($this-> unsuccessStatus);
        }
        else{
            komentar::insert([
                'id_blog' => $id_blog,
                'nama_komentar' => $request->input('nama_komentar'),
                'komentar' => $request->input('komentar'),
                'created_at' => \Carbon\Carbon::now()
            ]);
            return response()->json($this-> successStatus);
        }
    }

}
