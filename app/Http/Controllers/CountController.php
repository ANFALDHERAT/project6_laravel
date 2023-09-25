<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\User;
use App\Models\Admin;
use App\Models\Item;
class CountController extends Controller
{
    public function index()
    {
        $Donations= Donation::all();
        $Users= User::all();
        $Admins= Admin::all();
        $Items= Item::all();
        return view('dashboardbage.home',compact('Users','Donations', 'Admins', 'Items'));

    }

}
