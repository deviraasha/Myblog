<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        if ($request->search) {
            $data = Biodata::where('name', "LIKE", "%" . $request->search . "%")->with('result.category')->orderBy('created_at', 'desc')->get();
        } else {
            $data = Biodata::with('result.category')->orderBy('created_at', 'desc')->get();
        }
        // dd($data);
        return view('dashboard.index', compact('data'));
    }
}
