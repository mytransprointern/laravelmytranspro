<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;

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
        $users = User::all();
        return view('home', compact('users'));

        $migrations = Migration::all();
    }

    public function getUsers()
    {
        return DataTables::of(User::query())
        ->addIndexColumn()
        ->addColumn('action', function(User $users){
            return view('action', compact('users'));
        })
        ->make(true);
        // return DataTables::of(Migration::query())->make(true);
    }
}
