<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }    public function saran()
    {
        return view('saran');
    }    public function menu()
    {
        return view('menu');
    } public function validation()
    {
        return view('validation');
    }
    public function index()
    {
        return view('post.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
