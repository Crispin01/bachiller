<?php

namespace App\Http\Controllers;

use App\Models\Cuarto;
use App\Models\Inquilino;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $totalCuartos = Cuarto::count();
        $totalIquilinos = Inquilino::count();
        $totalUsuarios = User::count();
        return view('dashboard', compact('totalCuartos','totalIquilinos','totalUsuarios'));

    }

}
