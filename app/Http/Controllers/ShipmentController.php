<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::with('user', 'originAddress', 'destinationAddress')->get();
        return view('shipments.index', compact('shipments'));
    }

    public function create()
    {
        $addresses = Address::all();
        return view('shipments.create', compact('addresses'));
    }

    public function store(Request $request)
    {
        $shipment = Shipment::create($request->all());
        return redirect()->route('shipments.index')->with('success', 'Shipment created successfully!');
    }
}
