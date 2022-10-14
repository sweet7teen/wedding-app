<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ucapan;
use Carbon\Carbon;

class UcapanController extends Controller
{
    
    public function index()
    {
        $doa = Ucapan::all()
        ->sortByDesc('created_at');
        return view('index', ['tamu' => 'Tamu Undangan']);
    }

    public function show($tamu)
    {
        $doa = Ucapan::all()
        ->sortByDesc('created_at');
        // dd($doa);
        return view('index', ['tamu' => $tamu], ['ucapan' => $doa]);
    }

    public function read ()
    {
        $data = Ucapan::all()
        ->sortByDesc('created_at');
        return view('show-read')->with([
            'ucapan' => $data
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //cara ajax

        $doa['nama'] = $request->nama;
        $doa['ucapan'] = $request->ucapan;
        $doa['created_at'] = Carbon::now();


        // $doa = Ucapan::insert($request->all());
        Ucapan::insert($doa);

        
        // $request->validate([
        //     'nama' => 'required',
        //     'ucapan' => 'required',
        // ]);

        // $doa = Ucapan::create([
        //     'nama' => $request->input('nama'),
        //     'ucapan' => $request->input('ucapan'),
        // ]);
        //cara manual
        // $doa = new Ucapan;
        // $doa->nama = $request->nama;
        // $doa->ucapan = $request->ucapan;
        // $doa->save();

        //mass asignment
        // $doa = Ucapan::create($request->all());
        //lalu rubah ke Model Ucapan untuk add fillable
        

        //redirect
        // session()->flash('guestbook', 'success');
        return 'success';
        // return response()->json(['return' => 'some data']);
    }

   
}
