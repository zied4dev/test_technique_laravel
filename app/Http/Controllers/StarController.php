<?php

namespace App\Http\Controllers;

use App\Http\Requests\Star\StarRequest;
use App\Models\Star;
use App\Repositories\StarRepository;
use App\Repositories\StarRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use View;

class StarController extends Controller
{
    private $starRepository;

    public function __construct(StarRepositoryInterface $starRepository)
    {
        $this->starRepository=$starRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param StarRepositoryInterface $starRepository
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('star.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param StarRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeStar(StarRequest $request)
    {
        //


        if($this->starRepository->store($request)==true)
        {
            return redirect('dashboard')->with('alert-succes','Star est ajouté avec succes');

        }else
            {
                return redirect('dashboard')->with('alert-error','Star est ajouté avec succes');
            };

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

    /**
     * Afficher la liste de star dans le dashboard
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        $allStars=$this->starRepository->displayAll();
        return view('dashboard',compact('allStars'));
    }

}
