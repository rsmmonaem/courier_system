<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Shipment\ShipmentTrackingService;
use App\Models\ShipmentTracking;
use App\Http\Requests\StoreShipmentTrackingFormRequest;

class ShipmentTrackingController extends Controller

{
    public function index()
    {
        try{
            $data['shipmentTrackings'] = (new ShipmentTrackingService())->getAllShipmentTrackings();
            return view('shipment_tracking.index')->with($data);
        }catch(\Throwable $exception){
            return redirect('shipment_trackings.index')->with('error', 'can not able to fetch data.');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShipmentTrackingFormRequest $request, ShipmentTrackingService $shipmentTrackingService)
    {
        try{
            $data['shipment'] = $shipmentTrackingService->storeShipmentTracking($request->validated());
            return redirect('shipment_trackings.index');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->message);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id, ShipmentTrackingService $shipmentTrackingService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, ShipmentTrackingService $shipmentTrackingService)
    {
        try{
            $data['shipment_tracking'] = $shipmentTrackingService->getById($id);
            return view('shipment_tracking.edit')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->message);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreShipmentTrackingFormRequest $request, $id, ShipmentTrackingService $shipmentTrackingService)
    {
        try{
            $data['shipment'] = $shipmentTrackingService->updateShipmentTracking($id, $request->validated());
            return redirect('shipment_trackings.index');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->message);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id, ShipmentTrackingService $shipmentTrackingService)
    {
        try{
            $data['shipment'] = $shipmentTrackingService->destroyShipmentTracking($id);
            return redirect()->back()->with('success', "successfully delete the data.");
        }catch(\Throwable $e){
            return redirect()->back()->with('error', $e->message);
        }
    }
}
