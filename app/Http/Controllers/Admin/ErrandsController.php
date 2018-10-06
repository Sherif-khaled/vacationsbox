<?php

namespace App\Http\Controllers\Admin;

use App\Errand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreErrandsRequest;
use App\Http\Requests\Admin\UpdateErrandsRequest;

class ErrandsController extends Controller
{
    /**
     * Display a listing of Errand.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('errand_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('errand_delete')) {
                return abort(401);
            }
            $errands = Errand::onlyTrashed()->get();
        } else {
            $errands = Errand::all();
        }

        return view('admin.errands.index', compact('errands'));
    }

    /**
     * Show the form for creating new Errand.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('errand_create')) {
            return abort(401);
        }
        
        $employee_alternatives = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.errands.create', compact('employee_alternatives'));
    }

    /**
     * Store a newly created Errand in storage.
     *
     * @param  \App\Http\Requests\StoreErrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreErrandsRequest $request)
    {
        if (! Gate::allows('errand_create')) {
            return abort(401);
        }
        $errand = Errand::create($request->all());



        return redirect()->route('admin.errands.index');
    }


    /**
     * Show the form for editing Errand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('errand_edit')) {
            return abort(401);
        }
        
        $employee_alternatives = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $errand = Errand::findOrFail($id);

        return view('admin.errands.edit', compact('errand', 'employee_alternatives'));
    }

    /**
     * Update Errand in storage.
     *
     * @param  \App\Http\Requests\UpdateErrandsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateErrandsRequest $request, $id)
    {
        if (! Gate::allows('errand_edit')) {
            return abort(401);
        }
        $errand = Errand::findOrFail($id);
        $errand->update($request->all());



        return redirect()->route('admin.errands.index');
    }


    /**
     * Display Errand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('errand_view')) {
            return abort(401);
        }
        $errand = Errand::findOrFail($id);

        return view('admin.errands.show', compact('errand'));
    }


    /**
     * Remove Errand from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('errand_delete')) {
            return abort(401);
        }
        $errand = Errand::findOrFail($id);
        $errand->delete();

        return redirect()->route('admin.errands.index');
    }

    /**
     * Delete all selected Errand at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('errand_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Errand::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Errand from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('errand_delete')) {
            return abort(401);
        }
        $errand = Errand::onlyTrashed()->findOrFail($id);
        $errand->restore();

        return redirect()->route('admin.errands.index');
    }

    /**
     * Permanently delete Errand from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('errand_delete')) {
            return abort(401);
        }
        $errand = Errand::onlyTrashed()->findOrFail($id);
        $errand->forceDelete();

        return redirect()->route('admin.errands.index');
    }
}
