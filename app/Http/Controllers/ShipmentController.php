<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Services\Shipment\ShipmentService;
use App\Http\Requests\StoreShipmentFormRequest;
use App\Services\Address\AddressService;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data['shipments'] = (new ShipmentService())->getAllShipments(true, null, ['user','originAddress', 'destinationAddress']);

            return view('shipment.index')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AddressService $addressService)
    {
        $data = $addressService->getdata();
        return view('shipment.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShipmentFormRequest $request, ShipmentService $shipmentService)
    {
        try{
            $data['shipment'] = $shipmentService->storeShipment($request->validated());
            return redirect()->route('shipments.index')->with('success','Successfully store a shipment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipment $shipment, ShipmentService $shipmentService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id, ShipmentService $shipmentService, AddressService $addressService)
    {
        try{
            $data['shipment'] = $shipmentService->getById($id);
            $address = $addressService->getdata();
            return view('shipment.edit', compact('address'))->with($data);

        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function update(StoreShipmentFormRequest $request, $id, ShipmentService $shipmentService)
    {
        try{
            $data['shipment'] = $shipmentService->updateShipment($id, $request->validated());
            return redirect()->route('shipments.index')->with('success','Successfully update a shipment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id, ShipmentService $shipmentService)
    {
        try{
            $data['shipment'] = $shipmentService->destroyShipment($id);
            return redirect()->back()->with('success', "successfully delete the data.");
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
