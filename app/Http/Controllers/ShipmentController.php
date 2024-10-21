<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Services\Shipment\ShipmentService;
use App\Http\Requests\StoreShipmentFormRequest;
use App\Imports\ShipmentImport;
use App\Services\Address\AddressService;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ShipmentExport;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $shipments = Shipment::orderby('id', 'desc')->paginate(10);
            return view('shipment.index', compact('shipments'));
        } catch (\Throwable $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AddressService $addressService)
    {
        return view('shipment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        // die;
        try {
            // $data['shipment'] = $shipmentService->storeShipment($request->validated());

            $validatedData = $request->validate([
                // 'user_id'               => 'required|integer',
                // 'origin_address_id'     => 'required|integer',
                // 'destination_address_id' => 'required|integer',
                // 'tracking_number'       => 'required|string',
                'scheduled_pickup_date' => 'required|date',
                'delivery_date'         => 'required|date',
                // 'price'                 => 'required|numeric',
                'status'                => 'required|in:pending,processing,ready for shipping,shipping,out for delivery,shipped',
                'suser_name'            => 'nullable|string',
                'suser_number'          => 'nullable|string',
                'ruser_name'            => 'nullable|string',
                'ruser_number'          => 'nullable|string',
                'delivery_charge'       => 'nullable|string',
                'service_charge'        => 'nullable|string',
                'cod'                   => 'nullable|string',
                'total'                 => 'nullable|string',
                'product_details'       => 'nullable|string',
                'product_weight'        => 'nullable|string',
                'product_lot'          => 'nullable|string',
                'product_quantity'      => 'nullable|string',
                'remark'                => 'nullable|string',
                'origin_address'        => 'nullable|string',
                'destination_address'   => 'nullable|string',
            ]);
            $trackingNumber = strtoupper(uniqid('COR'));
            // dd($trackingNumber);
            // die;
            $dataToCreate = array_merge($validatedData, ['tracking_number' => $trackingNumber]);

            // Create the shipment record
            Shipment::create($dataToCreate);
            // Create a new shipment record
            // Shipment::create($validatedData);

            return redirect()->back()->with('success', 'Successfully store a shipment');
        } catch (\Throwable $exception) {
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
    public function edit($id, ShipmentService $shipmentService, AddressService $addressService)
    {
        try {
            $shipment = Shipment::findOrFail($id);
            return view('shipment.edit', compact('shipment'));
        } catch (\Throwable $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function update(Request $request, $id, ShipmentService $shipmentService)
    {
        // return $request->all();
        // die;
        try {
            $validatedData = $request->validate([
                'scheduled_pickup_date' => 'required|date',
                'delivery_date'         => 'required|date',
                // 'price'                 => 'required|numeric',
                'status'                => 'required|in:pending,processing,ready for shipping,shipping,out for delivery,shipped',
                'suser_name'            => 'nullable|string',
                'suser_number'          => 'nullable|string',
                'ruser_name'            => 'nullable|string',
                'ruser_number'          => 'nullable|string',
                'delivery_charge'       => 'nullable|string',
                'service_charge'        => 'nullable|string',
                'cod'                   => 'nullable|string',
                'total'                 => 'nullable|string',
                'product_details'       => 'nullable|string',
                'product_weight'        => 'nullable|string',
                'product_lot'          => 'nullable|string',
                'product_quantity'      => 'nullable|string',
                'remark'                => 'nullable|string',
                'origin_address'        => 'nullable|string',
                'destination_address'   => 'nullable|string',
            ]);

            $shipment = Shipment::findOrFail($id);

            $shipment->update($validatedData);
            return redirect()->back()->with('success', 'Successfully update a shipment');
        } catch (\Throwable $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, ShipmentService $shipmentService)
    {
        try {
            $data['shipment'] = $shipmentService->destroyShipment($id);
            return redirect()->back()->with('success', "successfully delete the data.");
        } catch (\Throwable $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function import_view()
    {
        return view('shipment.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new ShipmentImport, $request->file('file'));
            return redirect()->back()->with('success', 'Shipments imported successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    public function  excel()
    {
        $data = [
            [
                'tracking_number' => '68SZ7YJI',
                'scheduled_pickup_date' => '2024-10-09',
                'delivery_date' => '2024-10-09',
                'status' => 'ready for shipping',
                'suser_name' => 'jobayer',
                'suser_number' => '156771',
                'ruser_name' => 'rakib',
                'ruser_number' => '22222',
                'delivery_charge' => 500,
                'service_charge' => 500,
                'cod' => 300,
                'total' => 100,
                'product_details' => 'trertjkjh',
                'product_weight' => '5kgh',
                'product_lot' => 'ylkhjh',
                'product_quantity' => 5,
                'remark' => 'tryuijkm',
                'origin_address' => 'lkldfghklj;sdbvk',
                'destination_address' => 'fadgjsjvhcvzkjb',
            ],
            // Add more rows as needed...
        ];

        return Excel::download(new ShipmentExport($data), 'shipment_data.xlsx');
       
    }
}
