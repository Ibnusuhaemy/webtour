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
use App\rencana;
use App\durasi;
use App\galeri;
use App\faqs;
use App\blog;


class updateController extends Controller
{
    public $successStatus = [
        'message' => 'Successfully Update Data',
        'status' => 200
    ];

    public $unsuccessStatus = [
        'message' => 'Failed Update Data',
        'status' => 406
    ];


    public function updatePaket(Request $request,$id) {
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


        paket::where('id',$id)->update([
            'id_type' => $request->input('id_type'),
            'nama_paket' => $request->input('nama_paket'),
            'gambar_paket' => $gambar_paket,
            'harga_dewasa' => $request->input('harga_dewasa'),
            'harga_anak' => $request->input('harga_anak'),
            'booked' => $request->input('booked'),
            'overview' => $request->input('overview'),
            'grup_size' => $request->input('grup_size'),
            'lokasi' => $request->input('lokasi'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this -> successStatus);
    }

    public function updateDestinasi(Request $request, $id){
        $request->validate([
            'nama_tempat_destinasi' => 'required',
            'kota_destinasi' => 'required',
            'gambar_destinasi' => 'required',
        ]);

        $photo = $request->file('gambar_destinasi');
        $gambar_destinasi = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_destinasi')->put($gambar_destinasi,File::get($photo));

        destinasi::where('id',$id)->update([
            'nama_tempat_destinasi' => $request->input('nama_tempat_destinasi'),
            'kota_destinasi' => $request->input('kota_destinasi'),
            'gambar_destinasi' => $gambar_destinasi,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return response()->json($this-> successStatus);
    }

    public function updateFasilitas(Request $request, $id){
        $request->validate([
            'fasilitas' => 'required',
        ]);

        fasilitas::where('id',$id)->update([
            'fasilitas' => $request->input('fasilitas'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateTestimoni(Request $request, $id){
        $request->validate([
            'nama_testimoni' => 'required',
            'kota_testimoni' => 'required',
            'testimoni' => 'required',
            'foto_testimoni' => 'required',
        ]);

        $photo = $request->file('foto_testimoni');
        $foto_testimoni = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_foto_testimoni')->put($foto_testimoni,File::get($photo));

        testimoni::where('id',$id)->update([
            'nama_testimoni' => $request->input('nama_testimoni'),
            'kota_testimoni' => $request->input('kota_testimoni'),
            'testimoni' => $request->input('testimoni'),
            'foto_testimoni' => $foto_testimoni,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateHotel(Request $request, $id){
        $request->validate([
            'nama_hotel' => 'required',
        ]);

        hotel::where('id',$id)->update([
            'nama_hotel' => $request->input('nama_hotel'),
            'harga_hotel' => $request->input('harga_hotel'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateRencana(Request $request, $id){
        $request->validate([
            'rencana' => 'required',
            'gambar_rencana' => 'required'
        ]);

        $photo = $request->file('gambar_rencana');
        $gambar_rencana = $photo->getFilename().'.'.$photo->getClientOriginalExtension();
        Storage::disk('folder_gambar_rencana')->put($gambar_rencana,File::get($photo));

        rencana::where('id',$id)->update([
            'rencana' => $request->input('rencana'),
            'gambar_rencana' => $gambar_rencana,
            'deskripsi' => $request->input('deskripsi'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateDurasi(Request $request, $id){
        durasi::where('id',$id)->update([
            'jam' => $request->input('jam'),
            'hari' => $request->input('hari'),
            'malam' => $request->input('malam'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateFaqs(Request $request, $id){
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        faqs::where('id',$id)->update([
            'pertanyaan' => $request->input('pertanyaan'),
            'jawaban' => $request->input('jawaban'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return response()->json($this-> successStatus);
    }

    public function updateBlog(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'id_type' => 'required',
            'gambar_blog' => 'required'
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
            blog::where('id',$id)->update([
                'judul' => $request->input('judul'),
                'id_type' => $request->input('id_type'),
                'gambar_blog' => $gambar_blog,
                'deskripsi' => $request->input('deskripsi'),
                'featured' => $featured
            ]);
            return response()->json($this-> successStatus);
        }
    }
}
