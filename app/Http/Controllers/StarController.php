<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Repositories\StarRepository;
use App\Repositories\StarRepositoryInterface;
use Illuminate\Http\Request;

class StarController extends Controller
{
    private $starRepository;

    /**
     * Display a listing of the resource.
     *
     * @param StarRepositoryInterface $starRepository
     * @return \Illuminate\Http\Response
     */
    public function index(StarRepositoryInterface $starRepository)
    {
        //
        $this->starRepository=$starRepository;
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
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function show(Star $star)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function edit(Star $star)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Star $star)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function destroy(Star $star)
    {
        //
    }

    public function dashboard()
    {
        $allStars=$this->starRepository->displayAll();
        return view('dashboard',compact('allStars'));
    }

}
