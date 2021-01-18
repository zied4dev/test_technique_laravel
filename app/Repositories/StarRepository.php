<?php


namespace App\Repositories;


use App\Models\Star;
use mysql_xdevapi\Exception;

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
        // TODO: Implement store() method.
    }

    public function update(StarRequest $request, Star $star)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
