<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Carbon\Carbon;


class PDFController extends Controller
{
    public function generatePDF($transactionId)
    {
        $shipment = Shipment::where('tracking_number', $transactionId)->first();
        if (!$shipment) {
            return redirect()->back()->with('error', 'Transaction not found!');
        }
        $data = [
            'tracking_number' => $shipment->tracking_number,
            'scheduled_pickup_date' => Carbon::parse($shipment->scheduled_pickup_date)->format('Y-m-d'),
            'delivery_date' => Carbon::parse($shipment->delivery_date)->format('Y-m-d'),
            'status' => ucfirst($shipment->status),
            'created_at' => Carbon::parse($shipment->created_at)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::parse($shipment->updated_at)->format('Y-m-d H:i:s'),
            'suser_name' => $shipment->suser_name,
            'suser_number' => $shipment->suser_number,
            'ruser_name' => $shipment->ruser_name,
            'ruser_number' => $shipment->ruser_number,
            'delivery_charge' => $shipment->delivery_charge,
            'service_charge' => $shipment->service_charge,
            'cod' => $shipment->cod,
            'total' => $shipment->price,
            'product_details' => $shipment->product_details,
            'product_weight' => $shipment->product_weight,
            'product_lot' => $shipment->product_lot,
            'product_quantity' => $shipment->product_quantity,
            'remark' => $shipment->remark,
            'origin_address' => $shipment->origin_address,
            'destination_address' => $shipment->destination_address,
        ];

        $pdf = PDF::loadView('pdf.transaction_details', $data);
        return $pdf->download('transaction_' . $transactionId . '.pdf');
    }
}