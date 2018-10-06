<?php

namespace App\Http\Controllers\Api\V1;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDepartmentsRequest;
use App\Http\Requests\Admin\UpdateDepartmentsRequest;

class DepartmentsController extends Controller
{
    public function index()
    {
        return Department::all();
    }

    public function show($id)
    {
        return Department::findOrFail($id);
    }

    public function update(UpdateDepartmentsRequest $request, $id)
    {
        $department = Department::findOrFail($id);
        $department->update($request->all());
        
        $users           = $department->user;
        $currentUserData = [];
        foreach ($request->input('users', []) as $index => $data) {
            if (is_integer($index)) {
                $department->user()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentUserData[$id] = $data;
            }
        }
        foreach ($users as $item) {
            if (isset($currentUserData[$item->id])) {
                $item->update($currentUserData[$item->id]);
            } else {
                $item->delete();
            }
        }

        return $department;
    }

    public function store(StoreDepartmentsRequest $request)
    {
        $department = Department::create($request->all());
        
        foreach ($request->input('users', []) as $data) {
            $department->user()->create($data);
        }

        return $department;
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return '';
    }
}
