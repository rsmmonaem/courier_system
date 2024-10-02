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
        $shipment = Shipment::with(['user', 'originAddress', 'destinationAddress'])
        ->where('tracking_number', $transactionId)
        ->first();

        if (!$shipment) {
            return redirect()->back()->with('error', 'Transaction not found!');
        }
        $data = [
            'user_name' => $shipment->user->name,
            'user_email' => $shipment->user->email,
            'tracking_number' => $shipment->tracking_number,
            'scheduled_pickup_date' => Carbon::parse($shipment->scheduled_pickup_date)->format('Y-m-d H:i:s'),
            'delivery_date' => Carbon::parse($shipment->delivery_date)->format('Y-m-d H:i:s'),
            'price' => number_format($shipment->price, 2),
            'status' => ucfirst($shipment->status),
            'origin_address' => $shipment->originAddress->street,
            'destination_address' => $shipment->destinationAddress->street,
        ];
        $pdf = PDF::loadView('pdf.transaction_details', $data);
        return $pdf->download('transaction_' . $transactionId . '.pdf');
    }
}