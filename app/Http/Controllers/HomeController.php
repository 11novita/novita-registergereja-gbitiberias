<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\ibadah1;
use App\ibadah2;
use App\ibadah3;
use App\Category;
use File;
use App\kuota;


class HomeController extends Controller
{
    public function index()
    {

          // mengambil data dari table users
        $database = \App\User::all();

// kuota1
        
    $users = DB::table('kuota')
    ->select('kuota1')
    ->first();

    $count_user = '';

    foreach ($users as $key => $val) {
        $count_user = $val;
    }

    $count = ibadah1::count();

    $hasil = $count_user - $count;

// kuota2

     $users2 = DB::table('kuota')
    ->select('kuota2')
    ->first();

    $count_user2 = '';

    foreach ($users2 as $key2 => $val2) {
        $count_user2 = $val2;
    }

    $count2 = ibadah2::count();

    $hasil2 = $count_user2 - $count2;
 
 // kuota3

     $users3 = DB::table('kuota')
    ->select('kuota3')
    ->first();

    $count_user3 = '';

    foreach ($users3 as $key3 => $val3) {
        $count_user3 = $val3;
    }

    $count3 = ibadah3::count();

    $hasil3 = $count_user3 - $count3;



        // mengirim data users ke view admin
        return view('home',
            ['database' => $database,
             'hasil' => $hasil, 
             'hasil2' => $hasil2,  
             'hasil3' => $hasil3]);

    }

    // ADMIN

     public function admin()
    {

        // mengambil data dari table users
        $database = \App\User::all();
 
        // mengirim data users ke view admin
        return view('admin',['database' => $database]);
    }

    // HAPUS

    public function hapus()
{
    // menghapus data users berdasarkan id yang dipilih
    DB::table('users')->where('users_id')->delete();
        
    // alihkan halaman ke halaman admin
    return redirect('/admin');
}
    // QRCODE


    public function qrcode(){
    	$data = 'test';

    $datas = DB::table('users')->where('id', \DB::raw("(select max(`id`) from users)"))->get();

		$data = 'test';

		return view('qrcode', ['data' => $data, 'datas' => $datas]);
	
}

// IBADAH 1

  
    public function ibadah1(Request $request)
    {
        $s = $request->nohp;
        $d = DB::table('users')
        ->where('nohp','like',"%".$s."%")
        ->get()->first();

        $kode = $d->nohp;
        $nama = $d->name;
        $jeniskelamin = $d->jeniskelamin;
        $alamat = $d->alamat;
        $email = $d->email;

      DB::table('ibadah1s')->insert(
    ['kode' => $kode , 'nohp' => $kode , 'name' => $nama , 'jeniskelamin' => $jeniskelamin , 'alamat' => $alamat , 'email' => $email ]
);

       return view('qrcode', ['kode' => $kode]);
        
    }


// IBADAH 2

    public function ibadah2(Request $request)
    {
        $s = $request->nohp;
        $d = DB::table('users')
        ->where('nohp','like',"%".$s."%")
        ->get()->first();

        $kode = $d->nohp;
        $nama = $d->name;
        $jeniskelamin = $d->jeniskelamin;
        $alamat = $d->alamat;
        $email = $d->email;

      DB::table('ibadah2s')->insert(
    ['kode' => $kode , 'nohp' => $kode , 'name' => $nama , 'jeniskelamin' => $jeniskelamin , 'alamat' => $alamat , 'email' => $email ]
);

       return view('qrcode', ['kode' => $kode]);

    }

// IBADAH 3

    public function ibadah3(Request $request)
    {
        $s = $request->nohp;
        $d = DB::table('users')
        ->where('nohp','like',"%".$s."%")
        ->get()->first();

        $kode = $d->nohp;
        $nama = $d->name;
        $jeniskelamin = $d->jeniskelamin;
        $alamat = $d->alamat;
        $email = $d->email;

      DB::table('ibadah3s')->insert(
    ['kode' => $kode , 'nohp' => $kode , 'name' => $nama , 'jeniskelamin' => $jeniskelamin , 'alamat' => $alamat , 'email' => $email ]
);

       return view('qrcode', ['kode' => $kode]);

        
    }
}

