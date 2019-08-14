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
use App\komentar;
use App\blog;

class deleteController extends Controller
{

    public $successStatus = [
        'message' => 'Successfully Delete Data',
        'status' => 200
    ];

    public $unsuccessStatus = [
        'message' => 'Failed Delete Data',
        'status' => 406
    ];

    public function deletePaket($id){

            destinasi::where('id_paket','=',$id)->delete();
            fasilitas::where('id_paket','=',$id)->delete();
            testimoni::where('id_paket','=',$id)->delete();
            hotel::where('id_paket','=',$id)->delete();
            rencana::where('id_paket','=',$id)->delete();
            durasi::where('id_paket','=',$id)->delete();
            faqs::where('id_paket','=',$id)->delete();
            paket::where('id',$id)->delete();

            return response()->json($this->successStatus);
    }

    public function deleteDestinasi($id){
        destinasi::where('id',$id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteFasilitas($id){
        fasilitas::where('id',$id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteTestimoni($id){
        testimoni::where('id',$id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteHotel($id){
        hotel::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteRencana($id){
        rencana::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteDurasi($id){
        durasi::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteFaqs($id){
        faqs::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteGaleri($id){
        galeri::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteKomentar($id){
        komentar::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }

    public function deleteBlog($id){
        komentar::where('id_blog', $id)->delete();
        blog::where('id', $id)->delete();

        return response()->json($this->successStatus);
    }
}
