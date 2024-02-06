<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function view_list($mun = 'ALL')
    {
        $records = Customer::where('municipality', $mun)
            ->orderBy('lastname')->get();

        $municipalities = Customer::select('municipality')->orderBy('municipality')
            ->distinct()->get();

        $data  = array(
            'records' => $records,
            'municipalities' => $municipalities,
        );
        return view('customer_list', $data);
    }

    public function add_form()
    {
        $municipalities = Customer::select('municipality')->orderBy('municipality')
            ->distinct()->get();

        $data  = array(           
            'municipalities' => $municipalities,
            'edit' => false,
        );
        return view('add_form', $data);
    }

    public function insert_record(Request $request)
    {
        $record = [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'middlename' => $request->input('middlename'),
                'street' => $request->input('street'),
                'barangay' => $request->input('barangay'),
                'municipality' => $request->input('municipality'),
                'date_of_birth' => $request->input('date_of_birth'),
                'civil_status' => $request->input('civil_status'),
        ];
        Customer::create($record);

        return redirect('/view_list')->with('success_message', 'New Record Added!');
    }

    public function update_record(Request $request)
    {
        $record = [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'middlename' => $request->input('middlename'),
                'street' => $request->input('street'),
                'barangay' => $request->input('barangay'),
                'municipality' => $request->input('municipality'),
                'date_of_birth' => $request->input('date_of_birth'),
                'civil_status' => $request->input('civil_status'),
        ];
        Customer::where('id',$request->input('customer_id'))->update($record);

        return redirect('/view_list/'.$request->input('municipality'))->with('success_message', 'Record Successfully Updated!');
    }

    public function delete_record($id)
    {       
        Customer::where('id',$id)->delete();

        return redirect('/view_list')->with('success_message', 'Record Successfully Deleted!');
    }

    public function edit_form($id)
    {
        $municipalities = Customer::select('municipality')->orderBy('municipality')
            ->distinct()->get();

        $info = Customer::where('id', $id)
            ->first();

        $data  = array(           
            'municipalities' => $municipalities,
            'info' => $info,
            'edit' => true,
        );
        return view('add_form', $data);
    }


}
