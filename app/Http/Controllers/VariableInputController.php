<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\VariableInput;
use Illuminate\Http\Request;

class VariableInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(decrypt($_COOKIE['biodata_id']));

        //find biodata
        try {
            $cacheBio = $_COOKIE['biodata_id'];
        } catch (\Throwable $th) {
            return redirect('/biodata');
        }
        $idBio = decrypt($cacheBio);
        $data = Result::where('biodata_id', $idBio)->with('category.variable')->paginate(1);
        return view('fuzzy.testing', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VariableInput  $variableInput
     * @return \Illuminate\Http\Response
     */
    public function show(VariableInput $variableInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VariableInput  $variableInput
     * @return \Illuminate\Http\Response
     */
    public function edit(VariableInput $variableInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VariableInput  $variableInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VariableInput $variableInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VariableInput  $variableInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(VariableInput $variableInput)
    {
        //
    }
}