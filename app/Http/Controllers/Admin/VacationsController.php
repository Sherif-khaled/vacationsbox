<?php

namespace App\Http\Controllers\Admin;

use App\Vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVacationsRequest;
use App\Http\Requests\Admin\UpdateVacationsRequest;

class VacationsController extends Controller
{
    /**
     * Display a listing of Vacation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('vacation_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('vacation_delete')) {
                return abort(401);
            }
            $vacations = Vacation::onlyTrashed()->get();
        } else {
            $vacations = Vacation::all();
        }

        return view('admin.vacations.index', compact('vacations'));
    }

    /**
     * Show the form for creating new Vacation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('vacation_create')) {
            return abort(401);
        }
        
        $vacation_types = \App\VacationType::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_alternatives = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.vacations.create', compact('vacation_types', 'employee_alternatives'));
    }

    /**
     * Store a newly created Vacation in storage.
     *
     * @param  \App\Http\Requests\StoreVacationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVacationsRequest $request)
    {
        if (! Gate::allows('vacation_create')) {
            return abort(401);
        }
        $vacation = Vacation::create($request->all());



        return redirect()->route('admin.vacations.index');
    }


    /**
     * Show the form for editing Vacation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('vacation_edit')) {
            return abort(401);
        }
        
        $vacation_types = \App\VacationType::get()->pluck('title', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $employee_alternatives = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $vacation = Vacation::findOrFail($id);

        return view('admin.vacations.edit', compact('vacation', 'vacation_types', 'employee_alternatives'));
    }

    /**
     * Update Vacation in storage.
     *
     * @param  \App\Http\Requests\UpdateVacationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVacationsRequest $request, $id)
    {
        if (! Gate::allows('vacation_edit')) {
            return abort(401);
        }
        $vacation = Vacation::findOrFail($id);
        $vacation->update($request->all());



        return redirect()->route('admin.vacations.index');
    }


    /**
     * Display Vacation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('vacation_view')) {
            return abort(401);
        }
        $vacation = Vacation::findOrFail($id);

        return view('admin.vacations.show', compact('vacation'));
    }


    /**
     * Remove Vacation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('vacation_delete')) {
            return abort(401);
        }
        $vacation = Vacation::findOrFail($id);
        $vacation->delete();

        return redirect()->route('admin.vacations.index');
    }

    /**
     * Delete all selected Vacation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('vacation_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Vacation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Vacation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('vacation_delete')) {
            return abort(401);
        }
        $vacation = Vacation::onlyTrashed()->findOrFail($id);
        $vacation->restore();

        return redirect()->route('admin.vacations.index');
    }

    /**
     * Permanently delete Vacation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('vacation_delete')) {
            return abort(401);
        }
        $vacation = Vacation::onlyTrashed()->findOrFail($id);
        $vacation->forceDelete();

        return redirect()->route('admin.vacations.index');
    }
}
