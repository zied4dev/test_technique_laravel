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
        $this->starRepository = $starRepository;
    }


    public function home()
    {
        $allStars=$this->starRepository->displayAll();

        return view('welcome',compact('allStars'));

    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('star.add');
    }

    /**
     * @param StarRequest $request
     * @return \Illuminate\Http\Response
     */
    public function storeStar(StarRequest $request)
    {
        //


        if ($this->starRepository->store($request) == true && $request->validated()) {

            return redirect('dashboard')->with('alert-succes', 'Le fichier star a été ajouté avec succès');

        }
        return redirect()->back()->withInput();


    }


    /**
     * @param \App\Models\Star $star
     * @return \Illuminate\Http\Response
     */
    public function editStar(Star $star)
    {
        //
        return view('star.edit',compact('star'));

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Star $star
     * @return \Illuminate\Http\Response
     */
    public function updateStar(StarRequest $request, Star $star)
    {
        //
        if ($this->starRepository->update($request,$star) == true && $request->validated()) {

            return redirect('dashboard')->with('alert-succes', 'Le fichier star a été modifié avec succès');

        }
        return redirect()->back()->withInput();
    }

    /**
     * @param \App\Models\Star $star
     * @return \Illuminate\Http\Response
     */
    public function deleteStar(Star $star)
    {
        //
        if (!$this->starRepository->destroy($star->id)) {
            return redirect('dashboard')->with('alert-error', 'Impossible de supprimer le fichier star ');
        }
        return redirect('dashboard')->with('alert-succes', 'Le fichier star a été supprimé avec succès');


    }

    /**
     * Afficher la liste de star dans le dashboard
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard()
    {
        $allStars = $this->starRepository->displayAll();
        return view('dashboard', compact('allStars'));
    }

}
