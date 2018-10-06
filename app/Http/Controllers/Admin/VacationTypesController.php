<?php

namespace App\Http\Controllers\Admin;

use App\VacationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVacationTypesRequest;
use App\Http\Requests\Admin\UpdateVacationTypesRequest;

class VacationTypesController extends Controller
{
    /**
     * Display a listing of VacationType.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('vacation_type_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('vacation_type_delete')) {
                return abort(401);
            }
            $vacation_types = VacationType::onlyTrashed()->get();
        } else {
            $vacation_types = VacationType::all();
        }

        return view('admin.vacation_types.index', compact('vacation_types'));
    }

    /**
     * Show the form for creating new VacationType.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('vacation_type_create')) {
            return abort(401);
        }
        return view('admin.vacation_types.create');
    }

    /**
     * Store a newly created VacationType in storage.
     *
     * @param  \App\Http\Requests\StoreVacationTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVacationTypesRequest $request)
    {
        if (! Gate::allows('vacation_type_create')) {
            return abort(401);
        }
        $vacation_type = VacationType::create($request->all());



        return redirect()->route('admin.vacation_types.index');
    }


    /**
     * Show the form for editing VacationType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('vacation_type_edit')) {
            return abort(401);
        }
        $vacation_type = VacationType::findOrFail($id);

        return view('admin.vacation_types.edit', compact('vacation_type'));
    }

    /**
     * Update VacationType in storage.
     *
     * @param  \App\Http\Requests\UpdateVacationTypesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVacationTypesRequest $request, $id)
    {
        if (! Gate::allows('vacation_type_edit')) {
            return abort(401);
        }
        $vacation_type = VacationType::findOrFail($id);
        $vacation_type->update($request->all());



        return redirect()->route('admin.vacation_types.index');
    }


    /**
     * Display VacationType.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('vacation_type_view')) {
            return abort(401);
        }
        $vacations = \App\Vacation::where('vacation_type_id', $id)->get();

        $vacation_type = VacationType::findOrFail($id);

        return view('admin.vacation_types.show', compact('vacation_type', 'vacations'));
    }


    /**
     * Remove VacationType from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('vacation_type_delete')) {
            return abort(401);
        }
        $vacation_type = VacationType::findOrFail($id);
        $vacation_type->delete();

        return redirect()->route('admin.vacation_types.index');
    }

    /**
     * Delete all selected VacationType at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('vacation_type_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = VacationType::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore VacationType from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('vacation_type_delete')) {
            return abort(401);
        }
        $vacation_type = VacationType::onlyTrashed()->findOrFail($id);
        $vacation_type->restore();

        return redirect()->route('admin.vacation_types.index');
    }

    /**
     * Permanently delete VacationType from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('vacation_type_delete')) {
            return abort(401);
        }
        $vacation_type = VacationType::onlyTrashed()->findOrFail($id);
        $vacation_type->forceDelete();

        return redirect()->route('admin.vacation_types.index');
    }
}
