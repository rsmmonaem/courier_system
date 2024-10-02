<?php

namespace App\Http\Controllers;

use App\Services\Invoice\InvoiceService;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInvoiceFormRequest;
use App\Models\Shipment;
use Carbon\Carbon;

class InvoiceController extends Controller
{

    public function trackshipment(Request $request){
            $trackingNumber = $request->get('tracking_number');
            $shipment = Shipment::with(['originAddress', 'destinationAddress'])
            ->where('tracking_number', $trackingNumber)
                ->first();
            $pickupDate = $shipment->scheduled_pickup_date; 
            $deliveryDate = $shipment->delivery_date; 
            if (!($pickupDate instanceof Carbon)) {
                $pickupDate = Carbon::parse($pickupDate);
            }
            if (!($deliveryDate instanceof Carbon)) {
                $deliveryDate = Carbon::parse($deliveryDate);
            }

            $pickupDateDiff = $pickupDate->diffForHumans();
            $deliveryDateDiff = $deliveryDate->diffForHumans();
            return view('invoice.index', compact('shipment', 'pickupDateDiff', 'deliveryDateDiff'));
    }

    public function index()

    {
        try{
            $data['invoices'] = (new InvoiceService())->getAllInvoices(true, null, ['user', 'shipment']);

          //  dd($data);
            return view('invoice.index')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function create()
    {
        return view('invoice.create');
    }


    public function store(StoreInvoiceFormRequest $request, InvoiceService $invoiceService)
    {
        try{
            $data['invoice'] = $invoiceService->storeInvoice($request->validated());
            return redirect()->route('invoices.index')->with('success','Successfully store an invoice');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, InvoiceService $invoiceService)
    {
        try{
            $data['invoice'] = $invoiceService->getById($id);
            return view('invoice.edit')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreInvoiceFormRequest $request, $id, InvoiceService $invoiceService)
    {
        try{
            $data['invoice'] = $invoiceService->updateInvoice($id, $request->validated());
            return redirect()->route('invoices.index')->with('success','Successfully update a payment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, InvoiceService $invoiceService)
    {
       // dd();
        try{
            $data['invoice'] = $invoiceService->destroyInvoice($id);
            return redirect()->route('invoices.index')->with('success','Successfully delete an invoice');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
