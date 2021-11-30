<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function allData()
    {
        return DB::table('lowongan')
        ->where('approved', 1)
        ->where('tgl_akhir' , '>=' , Carbon::now()->format('Y-m-d'))
        ->paginate(6);
    }

    public function allDatalowongankerjatampil()
    {
        return DB::table('lowongan')
        ->where('approved', 1)
        ->where('tgl_akhir' , '>=' , Carbon::now()->format('Y-m-d'))
        ->paginate(6);
    }

    public function allDatalowongankerjaapprove()
    {
        return DB::table('lowongan')
        ->where('approved', 1)
        ->get();
    }

    public function allDatalowongankerjaannotapproved()
    {
        return DB::table('lowongan')
        ->orWhere('approved', null)
        ->orWhere('approved' , 0)
        ->get();
    }

    public function allDatalowongankerjaarsip(){
        return DB::table('lowongan')
        ->where('approved' , 1)
        ->where('tgl_akhir' , '<' ,Carbon::now()->format('Y-m-d'))
        ->get();
    }

    public function allDataevebtarsip() {
        return DB::table('tbl_event')
        ->where('waktu' , '<' , Carbon::now()->format('Y-m-d'))
        ->get();
    }

    public function allDataadmin()
    {
        return DB::table('lowongan')->paginate(5);
    }
    public function allDatapengajuan()
    {
        return DB::table('pengajuan')->get();
    }
    public function allDataevent()
    {
        return DB::table('tbl_event')->where('waktu' , '>=' , Carbon::now()->format('Y-m-d'))->get();
    }
    public function allDataberita()
    {
        return DB::table('tbl_berita')->get();
    }

    public function detailData($id_lowongan)
    {
        return DB::table('lowongan')->where('id_lowongan', $id_lowongan)->first();
    }

    public function detailDataberita($id_berita)
    {
        return DB::table('tbl_berita')->where('id_berita', $id_berita)->first();
    }

    public function detailDatapengajuan($id_lowongan)
    {
        return DB::table('pengajuan')->where('id_lowongan', $id_lowongan)->first();
    }

    public function detailDataevent($id_event)
    {
        return DB::table('tbl_event')->where('id_event', $id_event)->first();
    }

    public function addData($data)
    {
        DB::table('lowongan')->insert($data);
    }

    public function addDatapengajuan($data)
    {
        DB::table('pengajuan')->insert($data);
    }

    public function addDataberita($data)
    {
        DB::table('tbl_berita')->insert($data);
    }

    public function editData($id_lowongan, $data)
    {
        DB::table('lowongan')
        ->where('id_lowongan', $id_lowongan)
        ->update($data);
    }

    public function editDataberita($id_berita, $data)
    {
        DB::table('tbl_berita')
        ->where('id_berita', $id_berita)
        ->update($data);
    }

    public function editDatapengajuan($id_lowongan, $data)
    {
        DB::table('pengajuan')
        ->where('id_lowongan', $id_lowongan)
        ->update($data);
    }

    public function editDataevent($id_event, $data)
    {
        DB::table('tbl_event')
        ->where('id_event', $id_event)
        ->update($data);
    }

    public function approve($id_lowongan)
    {
        DB::table('lowongan')
        ->where('id_lowongan', $id_lowongan)
        ->update(['approved'=>1]);
    }

    public function archive()
    {
        DB::table('lowongan')
        ->where('approved', 1)
        ->update(['approved'=>3]);
    }

    public function rejected($id_lowongan)
    {
        DB::table('lowongan')
        ->where('id_lowongan', $id_lowongan)
        ->update(['approved'=>0]);
    }

    public function deleteData($id_lowongan)
    {
        DB::table('lowongan')
        ->where('id_lowongan', $id_lowongan)
        ->delete();
    }

    public function deleteDataberita($id_berita)
    {
        DB::table('tbl_berita')
        ->where('id_berita', $id_berita)
        ->delete();
    }

    public function approveData($id_lowongan)
    {
        DB::table('lowongan')
        ->where('id_lowongan', $id_lowongan)
        ->insert($data);
    }

    public function deleteDatapengajuan($id_lowongan)
    {
        DB::table('pengajuan')
        ->where('id_lowongan', $id_lowongan)
        ->delete();
    }

    public function deleteDataevent($id_event)
    {
        DB::table('tbl_event')
        ->where('id_event', $id_event)
        ->delete();
    }

    public function addDataevent($data)
    {
        DB::table('tbl_event')->insert($data);
    }

    public function filterLowongan( $request ) {

        $search = $request['search'] ?? null;
        $industri = $request['industri'] ?? null;
        $posisi = $request['posisi'] ?? null;

        $query = DB::table('lowongan')->where('approved' , 1)->where('tgl_akhir' , '>=' , Carbon::now()->format('Y-m-d'));

        if( $search !== null ) {
            $query = $query->where(function($q) use ($search) {
                $searchval = '%' . $search . '%';
                $q->orWhere('judul_lowongan' , 'like' , $searchval)->orWhere('name' , 'like' , $searchval)->orWhere('deskripsi' , 'like' , $searchval);
            });
        }
        
        if($industri !== null){
            $query = $query->where('bidangindustri' , $industri);
        }

        if( $posisi !== null ){
            $query = $query->where('kategoriposisi' , $posisi);
        }

        return $query->get();
        
    }

    public function searchEvent($search , $a) {

        $searchval = '%' . $search . '%';

        if( $a ) {

            return DB::table('tbl_event')->where('waktu' , '<' , Carbon::now()->format('Y-m-d'))
            ->where(function ($q) use ($searchval) {
    
                $q->orWhere('nama_event' , 'like' , $searchval)
                ->orWhere('deskripsi' , 'like' , $searchval);
    
            })->get();

        }

        return DB::table('tbl_event')->where('waktu' , '>=' , Carbon::now()->format('Y-m-d'))
        ->where(function ($q) use ($searchval) {

            $q->orWhere('nama_event' , 'like' , $searchval)
            ->orWhere('deskripsi' , 'like' , $searchval);

        })->get();

    }

}
