<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

use App\Customer_model;


class Customer extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index($id=null)
    {
        
        
        
    }

    public function get_customer()
    {
        // echo "function get customer";
        // $customer = DB::table('CUSTTABLE')->get();
        $customer = DB::select("SELECT * FROM [dbo].MasterCustomer");

        // $customer = DB::select("SELECT TOP 5 * FROM CUSTTABLE");
        $jumlah_data = count($customer);
        if ($jumlah_data > 0) {
            return response()->json([
                'metadata' => $jumlah_data,
                'data' => $customer
            ], '200');
        }
        else{
            return response()->json([
                'message' => 'No Data',
            ], '404');
        }
        
    }

    // public function get_departement_single($id)
    // {
    //     $where = array(
    //         'dept_id' => $id
    //     );
    //     $departement = Departement_model::find($where);
    //     $jumlah_data = count($departement);
        
    //     if ($jumlah_data > 0) {
    //         return response()->json([
    //             'metadata' => $jumlah_data,
    //             'data' => $departement
    //         ], '200');
    //     }
    //     else{
    //         return response()->json([
    //             'message' => 'Not Found',
    //         ], '404');
    //     }
        
    // }
}
