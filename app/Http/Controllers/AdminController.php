<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Pseudocode;
use App\Models\Sourcecode;

class AdminController extends Controller
{
    public function getDataPeserta()
    {
        $data = User::where('role', '=', 'Peserta')->get();

        return response()->json($data, 200);
    }

    public function getDataLevel()
    {
        $data = Level::get();

        return response()->json($data, 200);
    }

    public function getDataPseudocode()
    {
        $data = Pseudocode::with('level')->get();

        return response()->json($data, 200);
    }

    public function getDataSourcecode()
    {
        $data = Sourcecode::with('level', 'pseudocode')->get();

        return response()->json($data, 200);
    }
}
