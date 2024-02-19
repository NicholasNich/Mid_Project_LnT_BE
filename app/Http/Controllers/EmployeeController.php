<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function add() {
        return view('addEmployee');
    }

    public function store(Request $req) {
        Employee::create([
        'nama' => $req->nama,
        'umur' => $req->umur,
        'alamat' => $req->alamat,
        'nomor' => $req->nomor
        ]);

        return redirect('/');
    }

    public function viewEmployee() {
        $employee = Employee::all();
        return view('welcome')->with('employ',$employee);
    }

    public function viewDetails($nama) {
        $employee = Employee::findOrFail($nama);
        return view('employeeDetails')->with('emplo',$employee);
    }

    public function viewUpdate($nama) {
        $employee = Employee::findOrFail($nama);
        return view('updateData')->with('employy');
    }

    public function updateData($nama, Request $request) {
        $employee = Employee::findOrFail($nama)->update([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'alamat' => $request->alamat,
        'nomor' => $request->nomor
        ]);

        return redirect('/');
    }

    public function deleteEmployee($nama) {
        Employee::destroy($nama);
        return redirect('/');
    }
}
