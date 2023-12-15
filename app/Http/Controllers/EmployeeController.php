<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function home(){
       
       
        return view('home');
    }
    
    public function index(){
        $data = Employee::all();
       
        return view('datapegawai',compact('data'));
    }

    public function tambahpegawai(){
       
        return view('tambahdata');
    }

    public function insertdata(Request $request){
    
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Employee::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);  
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){
        $data = Employee::find($id);  
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus');

    }
}
