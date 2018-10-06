<?php

namespace App\Http\Controllers\Admin;

use App\InAndOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInAndOutsRequest;
use App\Http\Requests\Admin\UpdateInAndOutsRequest;

class InAndOutsController extends Controller
{
    /**
     * Display a listing of InAndOut.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('in_and_out_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('in_and_out_delete')) {
                return abort(401);
            }
            $in_and_outs = InAndOut::onlyTrashed()->get();
        } else {
            $in_and_outs = InAndOut::all();
        }

        return view('admin.in_and_outs.index', compact('in_and_outs'));
    }

    /**
     * Show the form for creating new InAndOut.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('in_and_out_create')) {
            return abort(401);
        }        $enum_in_out_type = InAndOut::$enum_in_out_type;
            
        return view('admin.in_and_outs.create', compact('enum_in_out_type'));
    }

    /**
     * Store a newly created InAndOut in storage.
     *
     * @param  \App\Http\Requests\StoreInAndOutsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInAndOutsRequest $request)
    {
        if (! Gate::allows('in_and_out_create')) {
            return abort(401);
        }
        $in_and_out = InAndOut::create($request->all());



        return redirect()->route('admin.in_and_outs.index');
    }


    /**
     * Show the form for editing InAndOut.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('in_and_out_edit')) {
            return abort(401);
        }        $enum_in_out_type = InAndOut::$enum_in_out_type;
            
        $in_and_out = InAndOut::findOrFail($id);

        return view('admin.in_and_outs.edit', compact('in_and_out', 'enum_in_out_type'));
    }

    /**
     * Update InAndOut in storage.
     *
     * @param  \App\Http\Requests\UpdateInAndOutsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInAndOutsRequest $request, $id)
    {
        if (! Gate::allows('in_and_out_edit')) {
            return abort(401);
        }
        $in_and_out = InAndOut::findOrFail($id);
        $in_and_out->update($request->all());



        return redirect()->route('admin.in_and_outs.index');
    }


    /**
     * Display InAndOut.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('in_and_out_view')) {
            return abort(401);
        }
        $in_and_out = InAndOut::findOrFail($id);

        return view('admin.in_and_outs.show', compact('in_and_out'));
    }


    /**
     * Remove InAndOut from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('in_and_out_delete')) {
            return abort(401);
        }
        $in_and_out = InAndOut::findOrFail($id);
        $in_and_out->delete();

        return redirect()->route('admin.in_and_outs.index');
    }

    /**
     * Delete all selected InAndOut at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('in_and_out_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = InAndOut::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore InAndOut from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('in_and_out_delete')) {
            return abort(401);
        }
        $in_and_out = InAndOut::onlyTrashed()->findOrFail($id);
        $in_and_out->restore();

        return redirect()->route('admin.in_and_outs.index');
    }

    /**
     * Permanently delete InAndOut from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('in_and_out_delete')) {
            return abort(401);
        }
        $in_and_out = InAndOut::onlyTrashed()->findOrFail($id);
        $in_and_out->forceDelete();

        return redirect()->route('admin.in_and_outs.index');
    }
}
