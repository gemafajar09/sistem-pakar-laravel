<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\minatM;
use App\diagnosaModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('halaman.home');
    }

    public function project()
    {
        $data = DB::table('minat')->get();
        return view('halaman.project',compact('data'));
    }

    public function simpan(Request $r)
    {
        $G01 = $r->G01;
        $G02 = $r->G02;
        $G03 = $r->G03;
        $G04 = $r->G04;
        $G05 = $r->G05;
        $G06 = $r->G06;
        $G07 = $r->G07;
        $G08 = $r->G08;
        $G09 = $r->G09;
        $G10 = $r->G10;
        $G11 = $r->G11;
        $G12 = $r->G12;
        $G13 = $r->G13;
        $G14 = $r->G14;
        $G15 = $r->G15;
        $G16 = $r->G16;
        $G17 = $r->G17;
        $G18 = $r->G18;
        $G19 = $r->G19;
        $G20 = $r->G20;
        $G21 = $r->G21;
        $G22 = $r->G22;
        $G23 = $r->G23;
        $G24 = $r->G24;
        $G25 = $r->G25;
        $G26 = $r->G26;
        $G27 = $r->G27;
        $G28 = $r->G28;
        $G29 = $r->G29;
        $G30 = $r->G30;
        $G31 = $r->G31;
        $G32 = $r->G32;
        $G33 = $r->G33;
        $G34 = $r->G34;
        $G35 = $r->G35;
        $G36 = $r->G36;
        $G37 = $r->G37;
        $G38 = $r->G38;
        $G39 = $r->G39;
        $G40 = $r->G40;
        $G41 = $r->G41;
        $G42 = $r->G42;
        $G43 = $r->G43;
        $G44 = $r->G44;

        $cfp1 = 0.18;
        $rule1 =(($cfp1 * $G01)+($cfp1 * $G02)+($cfp1 * $G03)+($cfp1 * $G04)+($cfp1 * $G05)+($cfp1 * $G06)+($cfp1 * $G07)+($cfp1 * $G08)+($cfp1 * $G09)+($cfp1 * $G10)+($cfp1 * $G11))*100;

        $cfp2 = 0.26;
        $rule2 = (($cfp2 * $G01)+($cfp2 * $G04)+($cfp2 * $G12)+($cfp2 * $G13)+($cfp1 * $G14)+($cfp1 * $G15)+($cfp1 * $G16)+($cfp1 * $G17))*100;
        
        $cfp3 = 0.18;
        $rule3 = (($cfp3 * $G18)+($cfp3 * $G19)+($cfp3 * $G20)+($cfp3 * $G21)+($cfp1 * $G22)+($cfp1 * $G23)+($cfp1 * $G24)+($cfp1 * $G25)+($cfp1 * $G26)+($cfp1 * $G27)+($cfp1 * $G28)+($cfp1 * $G29))*100;
        
        $cfp4 = 0.12;
        $rule4 = (($cfp4 * $G04)+($cfp4 * $G07)+($cfp4 * $G17)+($cfp4 * $G30)+($cfp4 * $G31)+($cfp4 * $G32)+($cfp4 * $G33)+($cfp1 * $G34)+($cfp1 * $G35)+($cfp1 * $G36)+($cfp1 * $G37)+($cfp1 * $G38)+($cfp1 * $G39))*100;
        
        $cfp5 = 0.14;
        $rule5 = (($cfp5 * $G02)+($cfp5 * $G04)+($cfp5 * $G14)+($cfp5 * $G15)+($cfp5 * $G34)+($cfp5 * $G35)+($cfp1 * $G40)+($cfp1 * $G41)+($cfp1 * $G42)+($cfp1 * $G43)+($cfp1 * $G44))*100;

        $hasil = max($rule1,$rule2,$rule3,$rule4,$rule5);
        if ($hasil === $rule1) {
        $id_penyakit = 'P01';

            $input = diagnosaModel();
            $input->nama = $r->nama;
            $input->nim = $r->nim;
            $input->jurusan = $r->jurusan;
            $input->id_minat = $id_penyakit;
            $input->rule1 = $rule1;
            $input->rule2 = $rule2;
            $input->rule3 = $rule3;
            $input->rule4 = $rule4;
            $input->rule5 = $rule5;
            $input->hasil = $hasil;
            $input->tanggal = date('Y-m-d');
            $input->save();
        }elseif ($hasil === $rule1) {
        $id_penyakit = 'P02';

            $input = diagnosaModel();
            $input->nama = $r->nama;
            $input->nim = $r->nim;
            $input->jurusan = $r->jurusan;
            $input->id_minat = $id_penyakit;
            $input->rule1 = $rule1;
            $input->rule2 = $rule2;
            $input->rule3 = $rule3;
            $input->rule4 = $rule4;
            $input->rule5 = $rule5;
            $input->hasil = $hasil;
            $input->tanggal = date('Y-m-d');
            $input->save();
        }elseif ($hasil === $rule1) {
        $id_penyakit = 'P03';

            $input = diagnosaModel();
            $input->nama = $r->nama;
            $input->nim = $r->nim;
            $input->jurusan = $r->jurusan;
            $input->id_minat = $id_penyakit;
            $input->rule1 = $rule1;
            $input->rule2 = $rule2;
            $input->rule3 = $rule3;
            $input->rule4 = $rule4;
            $input->rule5 = $rule5;
            $input->hasil = $hasil;
            $input->tanggal = date('Y-m-d');
            $input->save();
        }elseif ($hasil === $rule1) {
        $id_penyakit = 'P04';

            $input = diagnosaModel();
            $input->nama = $r->nama;
            $input->nim = $r->nim;
            $input->jurusan = $r->jurusan;
            $input->id_minat = $id_penyakit;
            $input->rule1 = $rule1;
            $input->rule2 = $rule2;
            $input->rule3 = $rule3;
            $input->rule4 = $rule4;
            $input->rule5 = $rule5;
            $input->hasil = $hasil;
            $input->tanggal = date('Y-m-d');
            $input->save();
        }elseif ($hasil === $rule1) {
        $id_penyakit = 'P05';

            $input = diagnosaModel();
            $input->nama = $r->nama;
            $input->nim = $r->nim;
            $input->jurusan = $r->jurusan;
            $input->id_minat = $id_penyakit;
            $input->rule1 = $rule1;
            $input->rule2 = $rule2;
            $input->rule3 = $rule3;
            $input->rule4 = $rule4;
            $input->rule5 = $rule5;
            $input->hasil = $hasil;
            $input->tanggal = date('Y-m-d');
            $input->save();
        }

        return back()->with('pesan', 'Hasil Diagnosa Berhasil');
    }
}
