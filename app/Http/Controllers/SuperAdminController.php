<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Shipment;

class SuperAdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $customer = Customer::where('user_id', $user->id)->first();

        // Total Count customers
        $Total_customer = DB::table('model_has_roles')
        ->where('role_id', 4)
        ->count();
        
        $totalShipment = Shipment::count();
        //$totalShipment = Shipment::where('created_at' '=>' )->count();
        return view('super-admin.home.index', compact(
            'Total_customer', 'totalShipment'
        ));
    }
}
