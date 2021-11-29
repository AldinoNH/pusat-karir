<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function allData()
    {
        return DB::table('lowongan')
        ->where('approved', 1)
        ->paginate(6);
    }

    public function allDatalowongankerjatampil()
    {
        return DB::table('lowongan')
        ->where('approved', 1)
        ->paginate(12);
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
        return DB::table('tbl_event')->get();
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

}
