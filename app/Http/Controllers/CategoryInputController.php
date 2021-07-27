<?php

namespace App\Http\Controllers;

use App\Models\CategoryInput;
use Illuminate\Http\Request;

class CategoryInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CategoryInput::all();

        dd($data);
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
     * @param  \App\Models\CategoryInput  $categoryInput
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryInput $categoryInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryInput  $categoryInput
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryInput $categoryInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryInput  $categoryInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryInput $categoryInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryInput  $categoryInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryInput $categoryInput)
    {
        //
    }
}
