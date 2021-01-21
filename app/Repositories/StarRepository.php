<?php


namespace App\Repositories;


use App\Helper\Files;
use App\Http\Requests\Star\StarRequest;

use App\Models\Star;

class StarRepository implements StarRepositoryInterface
{
    /**
     * @var Star
     */
    private $star;

    public function __construct(Star $star)
    {

        $this->star = $star;
    }


    public function displayAll()
    {
        return $this->star->paginate(10);

    }

    public function store(StarRequest $request)
    {
        try {
            $star = new Star();
            $star->nom = $request->nom;
            $star->prenom = $request->prenom;
            $star->description = $request->description;
            if ($files = $request->file('url_image')) {
                $destinationPath = 'photos/avatar/'; // upload path
                $profileImage = $star->nom . '-' . date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $star->url_image = "$profileImage";
            }

            $star->save();
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }


    }

    public function update(StarRequest $request, Star $star)
    {

        try {
            $star->nom = $request->nom;
            $star->prenom = $request->prenom;
            $star->description = $request->description;
            if ($files = $request->file('url_image')) {
                $destinationPath = 'photos/avatar/'; // upload path
                if (file_exists('photos/avatar/' . $star->url_image))
                {

                    unlink('photos/avatar/' . $star->url_image);
                }
                $profileImage = $star->nom . '-' . date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $profileImage);
                $star->url_image = "$profileImage";
            }
            $star->save();
            return true;

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        try {
            if ($this->star->where('id', $id)->delete()) {
                return true;
            } else {
                return false;
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
