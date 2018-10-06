<?php

namespace App\Http\Controllers\Admin;

use App\EmployeeBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEmployeeBalancesRequest;
use App\Http\Requests\Admin\UpdateEmployeeBalancesRequest;

class EmployeeBalancesController extends Controller
{
    /**
     * Display a listing of EmployeeBalance.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('employee_balance_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('employee_balance_delete')) {
                return abort(401);
            }
            $employee_balances = EmployeeBalance::onlyTrashed()->get();
        } else {
            $employee_balances = EmployeeBalance::all();
        }

        return view('admin.employee_balances.index', compact('employee_balances'));
    }

    /**
     * Show the form for creating new EmployeeBalance.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('employee_balance_create')) {
            return abort(401);
        }
        
        $employee_codes = \App\User::get()->pluck('employee_code', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.employee_balances.create', compact('employee_codes'));
    }

    /**
     * Store a newly created EmployeeBalance in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeBalancesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeBalancesRequest $request)
    {
        if (! Gate::allows('employee_balance_create')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::create($request->all());



        return redirect()->route('admin.employee_balances.index');
    }


    /**
     * Show the form for editing EmployeeBalance.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('employee_balance_edit')) {
            return abort(401);
        }
        
        $employee_codes = \App\User::get()->pluck('employee_code', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $employee_balance = EmployeeBalance::findOrFail($id);

        return view('admin.employee_balances.edit', compact('employee_balance', 'employee_codes'));
    }

    /**
     * Update EmployeeBalance in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeBalancesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeBalancesRequest $request, $id)
    {
        if (! Gate::allows('employee_balance_edit')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::findOrFail($id);
        $employee_balance->update($request->all());



        return redirect()->route('admin.employee_balances.index');
    }


    /**
     * Display EmployeeBalance.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('employee_balance_view')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::findOrFail($id);

        return view('admin.employee_balances.show', compact('employee_balance'));
    }


    /**
     * Remove EmployeeBalance from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('employee_balance_delete')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::findOrFail($id);
        $employee_balance->delete();

        return redirect()->route('admin.employee_balances.index');
    }

    /**
     * Delete all selected EmployeeBalance at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('employee_balance_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = EmployeeBalance::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore EmployeeBalance from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('employee_balance_delete')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::onlyTrashed()->findOrFail($id);
        $employee_balance->restore();

        return redirect()->route('admin.employee_balances.index');
    }

    /**
     * Permanently delete EmployeeBalance from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('employee_balance_delete')) {
            return abort(401);
        }
        $employee_balance = EmployeeBalance::onlyTrashed()->findOrFail($id);
        $employee_balance->forceDelete();

        return redirect()->route('admin.employee_balances.index');
    }
}
