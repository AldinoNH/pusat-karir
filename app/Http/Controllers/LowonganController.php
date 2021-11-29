<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function __construct() 
    {
        $this->AdminModel = new AdminModel;
        $this->middleware('auth');
    }

    public function input(){
        return view('inputlowongan');
    }
    
    public function index()
    {

        $data = [
            'lowongan' => $this->AdminModel->allDataadmin(),
        ];
        return view('admin', $data);
    }

    public function pengajuan()
    {
        $data = [
            'pengajuan' => $this->AdminModel->allDatapengajuan(),
        ];
        return view('pengajuan', $data);
    }

    public function indexevent()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        return view('admin', $data);
    }

    public function event()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        return view('adminevent', $data);
    }

    public function berita()
    {
        $data = [
            'tbl_berita' => $this->AdminModel->allDataberita(),
        ];
        return view('adminberita', $data);
    }

    public function add()
    {
        return view('adminadd');
    }

    public function addberita()
    {
        return view('adminaddberita');
    }

    public function addpengajuan()
    {
        return view('adminaddpengajuan');
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
            'deskripsi.required' => 'judul lowongan kerja tidak boleh kosong !!!',
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
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ];

        $this->AdminModel->addData($data);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Tambahkan !!!');
    }

    public function insertpengajuan()
    {
        Request()->validate([
            'id_lowongan' => 'required|unique:pengajuan,id_lowongan',
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
            'deskripsi.required' => 'deskripsi tidak boleh kosong !!!',
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
        $file->move(public_path('fotopengajuan'), $filename);

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

        $this->AdminModel->addDatapengajuan($data);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Tambahkan !!!');
    }


    public function approve($id_lowongan)
    {
        if ($id_lowongan) {

            $data = [
                'lowongan' => $this->AdminModel->detailData($id_lowongan),
            ];

            $this->AdminModel->approve($id_lowongan);
        } 
        
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Upload !!!');
    }
    public function rejected($id_lowongan)
    {
        if ($id_lowongan) {

            $data = [
                'lowongan' => $this->AdminModel->detailData($id_lowongan),
            ];

            $this->AdminModel->rejected($id_lowongan);
        } 
        
        return redirect()->route('admin')->with('pesan', 'Lowongan Berhasil Di Batalkan !!!');
    }

    public function edit($id_lowongan)
    {
        if (!$this->AdminModel->detailData($id_lowongan)) {
            abort(404);
        }
        $data = [
            'lowongan' => $this->AdminModel->detailData($id_lowongan),
        ];
        return view('adminedit', $data);
    }

    public function editberita($id_berita)
    {
        if (!$this->AdminModel->detailDataberita($id_berita)) {
            abort(404);
        }
        $data = [
            'tbl_berita' => $this->AdminModel->detailDataberita($id_berita),
        ];
        return view('admineditberita', $data);
    }

    public function editpengajuan($id_lowongan)
    {
        if (!$this->AdminModel->detailDatapengajuan($id_lowongan)) {
            abort(404);
        }
        $data = [
            'pengajuan' => $this->AdminModel->detailDatapengajuan($id_lowongan),
        ];
        return view('admineditpengajuan', $data);
    }

    public function editevent($tbl_event)
    {
        if (!$this->AdminModel->detailDataevent($tbl_event)) {
            abort(404);
        }
        $data = [
            'tbl_event' => $this->AdminModel->detailDataevent($tbl_event),
        ];
        return view('admineditevent', $data);
    }

    public function update($id_lowongan)
    {
        Request()->validate([
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
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'foto.max' => 'Ukuran foto max 1024kb',
            'name.required' => 'Nama tidak boleh kosong !!!',
            'name.min' => 'Nama minimal 6 karakter',
            'email.required' => 'Email tidak boleh kosong !!!',
            'email.email' => 'Harus format email',

            'judul_lowongan.required' => 'judul lowongan kerja tidak boleh kosong !!!',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !!!',
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

        if ( Request()->foto <> "") {

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

            $this->AdminModel->editData($id_lowongan, $data);
        } else {
            $data = [
                'id_lowongan' => Request()->id_lowongan,
                'name' => Request()->name,
                'email' => Request()->email,
                'judul_lowongan' => Request()->judul_lowongan,
                'deskripsi' => Request()->judul_lowongan,
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
            ];

            $this->AdminModel->editData($id_lowongan, $data);
        }
        
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Update !!!');
    }

    public function updateberita($id_berita)
    {
        Request()->validate([
            'nama_berita' => 'required|min:4',
            'deskripsi' => 'required',
            'foto_berita' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'foto_berita.max' => 'Ukuran foto max 1024kb',
            'nama_berita.required' => 'Nama tidak boleh kosong !!!',
            'nama_berita.min' => 'Nama minimal 6 karakter',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !!!',

        ]);

        if ( Request()->foto_berita <> "") {

            $file = Request()->foto_berita;
            $filename = Request()->id_berita . '.' . $file->extension();
            $file->move(public_path('foto_berita'), $filename);

            $data = [
                'id_berita' => Request()->id_berita,
                'nama_berita' => Request()->nama_berita,
                'deskripsi' => Request()->deskripsi,
                'foto' => $filename,
            ];

            $this->AdminModel->editDataberita($id_berita, $data);
        } else {
            $data = [
                'id_berita' => Request()->id_berita,
                'nama_berita' => Request()->nama_berita,
                'deskripsi' => Request()->deskripsi,
            ];

            $this->AdminModel->editDataberita($id_berita, $data);
        }
        
        return redirect()->route('admin')->with('pesan', 'Berita Berhasil Di Update !!!');
    }

    public function updatepengajuan($id_lowongan)
    {
        Request()->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'judul_lowongan' => 'required',
            'deskripsi' => 'required',
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
            'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'foto.max' => 'Ukuran foto max 1024kb',
            'name.required' => 'Nama tidak boleh kosong !!!',
            'name.min' => 'Nama minimal 6 karakter',
            'email.required' => 'Email tidak boleh kosong !!!',
            'email.email' => 'Harus format email',

            'judul_lowongan.required' => 'judul lowongan kerja tidak boleh kosong !!!',
            'deskripsi.required' => 'deskripsi tidak boleh kosong !!!',
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

        if ( Request()->foto <> "") {

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

            $this->AdminModel->editDatapengajuan($id_lowongan, $data);
        } else {
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
            ];

            $this->AdminModel->editDatapengajuan($id_lowongan, $data);
        }
        
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Update !!!');
    }

    public function updateevent($id_event)
    {
        Request()->validate([
            'nama_event' => 'required|min:4',
            'waktu' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            'foto_event' => 'mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'foto_event.max' => 'Ukuran foto max 1024kb',
            'nama_event.required' => 'Nama tidak boleh kosong !!!',
            'nama_event.min' => 'Nama minimal 6 karakter',
            'waktu.required' => 'waktu tidak boleh kosong !!!',

            'tipe.required' => 'tipe harus diisi !!!',

        ]);

        if ( Request()->foto_event <> "") {

            $file = Request()->foto_event;
            $filename = Request()->id_event . '.' . $file->extension();
            $file->move(public_path('foto_event'), $filename);


            $data = [
                'id_event' => Request()->id_event,
                'nama_event' => Request()->nama_event,
                'waktu' => Request()->waktu,
                'tipe' => Request()->tipe,
                'deskripsi' => Request()->deskripsi,
                'foto_event' => $filename,
            ];

            $this->AdminModel->editDataevent($id_event, $data);
        } else {
            $data = [
                'id_event' => Request()->id_event,
                'nama_event' => Request()->nama_event,
                'waktu' => Request()->waktu,
                'tipe' => Request()->tipe,
                'deskripsi' => Request()->deskripsi,
            ];

            $this->AdminModel->editDataevent($id_event, $data);
        }
        
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Update !!!');
    }




    public function delete($id_lowongan)
    {
        $lowongan = $this->AdminModel->detailData($id_lowongan);
        if ($lowongan->foto <> "") {
            unlink(public_path('foto').'/'.$lowongan->foto);
        }
        $this->AdminModel->deleteData($id_lowongan);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }

    public function deleteberita($id_berita)
    {
        $tbl_berita = $this->AdminModel->detailDataberita($id_berita);
        if ($tbl_berita->foto_berita <> "") {
            unlink(public_path('foto_berita').'/'.$tbl_berita->foto_berita);
        }
        $this->AdminModel->deleteDataberita($id_berita);
        return redirect()->route('admin')->with('pesan', 'Berita Berhasil Di Hapus !!!');
    }

    public function deletepengajuan($id_lowongan)
    {
        $pengajuan = $this->AdminModel->detailDatapengajuan($id_lowongan);
        if ($pengajuan->foto <> "") {
            unlink(public_path('fotopengajuan').'/'.$pengajuan->foto);
        }
        $this->AdminModel->deleteDatapengajuan($id_lowongan);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }

    public function deleteevent($id_event)
    {
        $tbl_event = $this->AdminModel->detailDataevent($id_event);
        if ($tbl_event->foto_event <> "") {
            unlink(public_path('foto_event').'/'.$tbl_event->foto_event);
        }
        $this->AdminModel->deleteDataevent($id_event);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Hapus !!!');
    }

    public function print()
    {
        $data = [
            'lowongan' => $this->AdminModel->allData(),
        ];
        return view('printpdf', $data);
    }

    public function printpdfevent()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        return view('printpdfevent', $data);
    }

    public function printpdf()
    {
        $data = [
            'lowongan' => $this->AdminModel->allData(),
        ];
        $html = view('printpdfdownload', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function printpdfeventdownload()
    {
        $data = [
            'tbl_event' => $this->AdminModel->allDataevent(),
        ];
        $html = view('printpdfeventdownload', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function addevent()
    {
        return view('addevent');
    }

    public function insertevent()
    {
        Request()->validate([
            'id_event' => 'required|unique:tbl_event,id_event',
            'nama_event' => 'required',
            'waktu' => 'required',
            'tipe' => 'required',
            'deskripsi' => 'required',
            'foto_event' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'id_event.required' => 'id event tidak boleh kosong !!!',
            'id_event.unique' => 'id event Sudah Ada !!!',
            'foto_event.max' => 'Ukuran foto max 1024kb',
            'foto_event.required' => 'Foto tidak boleh kosong !!!',
            'nama_event.required' => 'Nama tidak boleh kosong !!!',

        ]);

        $file = Request()->foto_event;
        $filename = Request()->id_event . '.' . $file->extension();
        $file->move(public_path('foto_event'), $filename);

        $data = [
            'id_event' => Request()->id_event,
            'nama_event' => Request()->nama_event,
            'waktu' => Request()->waktu,
            'tipe' => Request()->tipe,
            'deskripsi' => Request()->deskripsi,
            'foto_event' => $filename,
        ];

       
        $this->AdminModel->addDataevent($data);
        return redirect()->route('admin')->with('pesan', 'Data Berhasil Di Tambahkan !!!');
    }

    public function insertberita()
    {
        Request()->validate([
            'id_berita' => 'required|unique:tbl_berita,id_berita',
            'nama_berita' => 'required',
            'deskripsi' => 'required',
            'foto_berita' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'id_berita.required' => 'id event tidak boleh kosong !!!',
            'id_berita.unique' => 'id event Sudah Ada !!!',
            'foto_berita.max' => 'Ukuran foto max 1024kb',
            'foto_berita.required' => 'Foto tidak boleh kosong !!!',
            'nama_berita.required' => 'Nama tidak boleh kosong !!!',

        ]);

        $file = Request()->foto_berita;
        $filename = Request()->id_berita . '.' . $file->extension();
        $file->move(public_path('foto_berita'), $filename);

        $data = [
            'id_berita' => Request()->id_berita,
            'nama_berita' => Request()->nama_berita,
            'deskripsi' => Request()->deskripsi,
            'foto_berita' => $filename,
        ];

       
        $this->AdminModel->addDataberita($data);
        return redirect()->route('admin')->with('pesan', 'Berita Berhasil Di Tambahkan !!!');
    }

    public function cetakform(){
        return view('print');
    }

    public function cetakformevent(){
        return view('printevent');
    }

    public function cetakpertanggal($tglawal, $tglakhir){
        //dd(["tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $lowongan = $this->AdminModel->allData()->whereBetween('tgl_awal', [$tglawal, $tglakhir]);
        return view('cetakpertanggal', compact('lowongan'));
    }

    public function cetakpertanggalevent($waktuawal, $waktuakhir){
        //dd(["tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $tbl_event = $this->AdminModel->allDataevent()->whereBetween('waktu', [$waktuawal, $waktuakhir]);
        return view('cetakpertanggalevent', compact('tbl_event'));
    }

}
