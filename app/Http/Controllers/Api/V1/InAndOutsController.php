<?php

namespace App\Http\Controllers\Api\V1;

use App\InAndOut;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInAndOutsRequest;
use App\Http\Requests\Admin\UpdateInAndOutsRequest;

class InAndOutsController extends Controller
{
    public function index()
    {
        return InAndOut::all();
    }

    public function show($id)
    {
        return InAndOut::findOrFail($id);
    }

    public function update(UpdateInAndOutsRequest $request, $id)
    {
        $in_and_out = InAndOut::findOrFail($id);
        $in_and_out->update($request->all());
        

        return $in_and_out;
    }

    public function store(StoreInAndOutsRequest $request)
    {
        $in_and_out = InAndOut::create($request->all());
        

        return $in_and_out;
    }

    public function destroy($id)
    {
        $in_and_out = InAndOut::findOrFail($id);
        $in_and_out->delete();
        return '';
    }
}
