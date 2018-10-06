<?php

namespace App\Http\Controllers\Api\V1;

use App\Vacation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVacationsRequest;
use App\Http\Requests\Admin\UpdateVacationsRequest;

class VacationsController extends Controller
{
    public function index()
    {
        return Vacation::all();
    }

    public function show($id)
    {
        return Vacation::findOrFail($id);
    }

    public function update(UpdateVacationsRequest $request, $id)
    {
        $vacation = Vacation::findOrFail($id);
        $vacation->update($request->all());
        

        return $vacation;
    }

    public function store(StoreVacationsRequest $request)
    {
        $vacation = Vacation::create($request->all());
        

        return $vacation;
    }

    public function destroy($id)
    {
        $vacation = Vacation::findOrFail($id);
        $vacation->delete();
        return '';
    }
}
