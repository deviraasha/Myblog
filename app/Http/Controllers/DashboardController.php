<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $perPage = 5;

    public function index(Request $request)
    {

        if ($request->search) {
            $data = Biodata::where('name', "LIKE", "%" . $request->search . "%")->with('result.category')->orderBy('created_at', 'desc')->paginate($this->perPage);
        } else {
            $data = Biodata::with('result.category')->orderBy('created_at', 'desc')->paginate($this->perPage);
        }
        // dd($data);
        return view('dashboard.index', compact('data'));
    }
}
