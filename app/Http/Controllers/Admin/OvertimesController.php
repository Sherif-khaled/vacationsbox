<?php

namespace App\Http\Controllers\Admin;

use App\Overtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOvertimesRequest;
use App\Http\Requests\Admin\UpdateOvertimesRequest;

class OvertimesController extends Controller
{
    /**
     * Display a listing of Overtime.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('overtime_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('overtime_delete')) {
                return abort(401);
            }
            $overtimes = Overtime::onlyTrashed()->get();
        } else {
            $overtimes = Overtime::all();
        }

        return view('admin.overtimes.index', compact('overtimes'));
    }

    /**
     * Show the form for creating new Overtime.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('overtime_create')) {
            return abort(401);
        }
        return view('admin.overtimes.create');
    }

    /**
     * Store a newly created Overtime in storage.
     *
     * @param  \App\Http\Requests\StoreOvertimesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOvertimesRequest $request)
    {
        if (! Gate::allows('overtime_create')) {
            return abort(401);
        }
        $overtime = Overtime::create($request->all());



        return redirect()->route('admin.overtimes.index');
    }


    /**
     * Show the form for editing Overtime.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('overtime_edit')) {
            return abort(401);
        }
        $overtime = Overtime::findOrFail($id);

        return view('admin.overtimes.edit', compact('overtime'));
    }

    /**
     * Update Overtime in storage.
     *
     * @param  \App\Http\Requests\UpdateOvertimesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOvertimesRequest $request, $id)
    {
        if (! Gate::allows('overtime_edit')) {
            return abort(401);
        }
        $overtime = Overtime::findOrFail($id);
        $overtime->update($request->all());



        return redirect()->route('admin.overtimes.index');
    }


    /**
     * Display Overtime.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('overtime_view')) {
            return abort(401);
        }
        $overtime = Overtime::findOrFail($id);

        return view('admin.overtimes.show', compact('overtime'));
    }


    /**
     * Remove Overtime from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('overtime_delete')) {
            return abort(401);
        }
        $overtime = Overtime::findOrFail($id);
        $overtime->delete();

        return redirect()->route('admin.overtimes.index');
    }

    /**
     * Delete all selected Overtime at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('overtime_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Overtime::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Overtime from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('overtime_delete')) {
            return abort(401);
        }
        $overtime = Overtime::onlyTrashed()->findOrFail($id);
        $overtime->restore();

        return redirect()->route('admin.overtimes.index');
    }

    /**
     * Permanently delete Overtime from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('overtime_delete')) {
            return abort(401);
        }
        $overtime = Overtime::onlyTrashed()->findOrFail($id);
        $overtime->forceDelete();

        return redirect()->route('admin.overtimes.index');
    }
}
