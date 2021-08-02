<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\CategoryInput;
use App\Models\Result;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $_COOKIE['biodata_id'];
            return redirect('/testing-fuzzy');
        } catch (\Throwable $th) {
            return view('fuzzy.biodata');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Biodata::create($request->all());
        setcookie('biodata_id', encrypt($data->id));
        $getCatIn = CategoryInput::all();
        foreach ($getCatIn as $value) {
            Result::create(['biodata_id' => $data->id, 'category_input_id' => $value->id]);
        }

        if ($data) {
            return redirect('testing-fuzzy');
        } else {
            return view('fuzzy.biodata');
        }
    }

    public function destroy(Request $request)
    {
        // dd($request->all());
        Biodata::where('id', $request->id)->delete();
        Result::where('biodata_id', $request->id)->delete();
        Alert::success(
            "Deleted History",
            "History delete succesfully",
        );
        return redirect()->back();

    }
    public function destroys()
    {
        //find biodata
        try {
            $cacheBio = $_COOKIE['biodata_id'];
        } catch (\Throwable $th) {
            return redirect('/biodata');
        }
        $idBio = decrypt($cacheBio);

        Biodata::where('id', $idBio)->delete();
        Result::where('biodata_id', $idBio)->delete();

        return redirect('/');

    }

}
