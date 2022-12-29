<?php

namespace App\Http\Controllers;

use App\Task;
use App\Imports\DadosImport;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use Maatwebsite\Excel\Facades\Excel;

class ImportadorController extends Controller
{
    public function index()
    {
        return view('importador');
    }

    public function store()
    {

            Excel::import(new DadosImport, request()->file('file'));

        return redirect('admin');
    }
    public function chart()
    {
        return view('chart');
        }
}
