<?php

namespace App\Repositories;


use App\Http\Requests\Star\StarRequest;
use App\Models\Star;

interface StarRepositoryInterface
{
    public function displayAll();

    public function store(StarRequest $request);

    public function update(StarRequest $request, Star $star);

    public function destroy($id);
}
