<?php

namespace App\Http\Controllers;

use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //find biodata
        try {
            $cacheBio = $_COOKIE['biodata_id'];
        } catch (\Throwable $th) {
            return redirect('/biodata');
        }
        $idBio = decrypt($cacheBio);
        $data = Result::where('biodata_id', $idBio)->with('biodata', 'category')->get();
        return view('fuzzy.result', compact('data'));
    }
    public function destroy()
    {

        setcookie('biodata_id', '');

        return redirect('/');

    }

}
