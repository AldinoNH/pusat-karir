<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->AdminModel = new AdminModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function lowongankerja()
    {
        $data = [
            'lowongan' => $this->AdminModel->allDatalowongankerjatampil(),
        ];
        return view('lowongankerjatampil', $data);

    }

    public function arsiplowongan()
    {
        $data = [
            'lowongan' => $this->AdminModel->allDatalowongankerjaapprove(),
            'arsip'    => $this->AdminModel->allDatalowongankerjaarsip()
        ];
        return view('arsiplowongan', $data);

    }

    public function arsipevent()
    {
        $data = [
            'arsip'    => $this->AdminModel->allDataevebtarsip()
        ];
        return view('arsipevent', $data);

    }

    public function tampil()
    {
        $data = [
            'lowongan' => $this->AdminModel->allData(),
            'tbl_berita' => $this->AdminModel->allDataberita(),
        ];

        return view('dashboard', $data);

    }

    public function tampilevent()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        return view('event', $data);
    }

    public function tampileventupcoming()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        return view('upcomingevent', $data);
    }

    public function detail($id_lowongan)
    {
        if (!$this->AdminModel->detailData($id_lowongan)) {
            abort(404);
        }
        $data = [
            'lowongan' => $this->AdminModel->detailData($id_lowongan),
        ];
        return view('detaillowongan', $data);
    }

    public function detailberita($id_lowongan)
    {
        if (!$this->AdminModel->detailDataberita($id_lowongan)) {
            abort(404);
        }
        $data = [
            'tbl_berita' => $this->AdminModel->detailDataberita($id_lowongan),
        ];
        return view('detailberita', $data);
    }

    public function detailpengajuan($id_lowongan)
    {
        if (!$this->AdminModel->detailDatapengajuan($id_lowongan)) {
            abort(404);
        }
        $data = [
            'pengajuan' => $this->AdminModel->detailDatapengajuan($id_lowongan),
        ];
        return view('detaillowonganpengajuan', $data);
    }

    public function detailevent($id_event)
    {
        if (!$this->AdminModel->detailDataevent($id_event)) {
            abort(404);
        }
        $data = [
            'tbl_event' => $this->AdminModel->detailDataevent($id_event),
        ];
        return view('detailevent', $data);
    }

    public function inputlowongan()
    {
        return view('inputlowongankerja');
    }

    public function insert()
    {
        Request()->validate([
            'id_lowongan' => 'required|unique:lowongan,id_lowongan',
            'name' => 'required|min:4',
            'email' => 'required|email',
            'judul_lowongan' => 'required',
            'deskripsi' => 'required|max:20',
            'kategoriposisi' => 'required',
            'bidangindustri' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
            'kualifikasi' => 'required',
            'persyaratan' => 'required',
            'alamat' => 'required',
            'kabupatenkota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'id_lowongan.required' => 'id lowongan tidak boleh kosong !!!',
            'id_lowongan.unique' => 'id lowongan Sudah Ada !!!',
            'foto.max' => 'Ukuran foto max 1024kb',
            'foto.required' => 'Foto tidak boleh kosong !!!',
            'name.required' => 'Nama tidak boleh kosong !!!',
            'name.min' => 'Nama minimal 6 karakter',
            'email.required' => 'Email tidak boleh kosong !!!',
            'email.email' => 'Harus format email',

            'judul_lowongan.required' => 'judul lowongan kerja tidak boleh kosong !!!',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong !!!',
            'deskripsi.max' => 'deskripsi max 20 karakter !!!',
            'kategoriposisi.required' => 'Kategori Posisi harus dipilih !!!',
            'bidangindustri.required' => 'Bidang industri harus dipilih !!!',
            'tgl_awal.required' => 'tgl harus diisi !!!',
            'tgl_akhir.required' => 'tgl harus diisi !!!',
            'kualifikasi.required' => 'kualifikasi tidak boleh kosong !!!',
            'persyaratan.required' => 'persyaratan tidak boleh kosong !!!',
            'alamat.required' => 'alamat tidak boleh kosong !!!',
            'kabupatenkota.required' => 'kabupatenkota tidak boleh kosong !!!',
            'provinsi.required' => 'provinsi harus dipilih !!!',
            'kodepos.required' => 'kodepos tidak boleh kosong !!!',
        ]);

        $file = Request()->foto;
        $filename = Request()->id_lowongan . '.' . $file->extension();
        $file->move(public_path('foto'), $filename);

        $data = [
            'id_lowongan' => Request()->id_lowongan,
            'name' => Request()->name,
            'email' => Request()->email,
            'judul_lowongan' => Request()->judul_lowongan,
            'deskripsi' => Request()->deskripsi,
            'kategoriposisi' => Request()->kategoriposisi,
            'bidangindustri' => Request()->bidangindustri,
            'tgl_awal' => Request()->tgl_awal,
            'tgl_akhir' => Request()->tgl_akhir,
            'kualifikasi' => Request()->kualifikasi,
            'persyaratan' => Request()->persyaratan,
            'alamat' => Request()->alamat,
            'kabupatenkota' => Request()->kabupatenkota,
            'provinsi' => Request()->provinsi,
            'kodepos' => Request()->kodepos,
            'foto' => $filename,
        ];

        $this->AdminModel->addData($data);
        return view('inputlowongankerja')->with('pesan', 'Data Berhasil Di Submit !!!');
    }

    public function searchlowongan(Request $request) {

        return response()->json( $this->AdminModel->searchLowongan( $request->search ) ?? [] );

    }
}
