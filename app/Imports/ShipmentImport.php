<?php

namespace App\Imports;

use App\Models\Shipment;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class ShipmentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Map the indexed array to an associative array
        $header = [
            "tracking_number",
            "scheduled_pickup_date",
            "delivery_date",
            "status",
            "suser_name",
            "suser_number",
            "ruser_name",
            "ruser_number",
            "delivery_charge",
            "service_charge",
            "cod",
            "total",
            "product_details",
            "product_weight",
            "product_lot",
            "product_quantity",
            "remark",
            "origin_address",
            "destination_address"
        ];

        $mappedRow = array_combine($header, $row);

        return new Shipment([
            'tracking_number'          => $mappedRow['tracking_number'],
            'scheduled_pickup_date'      => now()->format('Y-m-d'),
            'delivery_date'            => now()->format('Y-m-d'),
            'status'                   => 'pending',
            'suser_name'               => $mappedRow['suser_name'],
            'suser_number'             => $mappedRow['suser_number'],
            'ruser_name'               => $mappedRow['ruser_name'],
            'ruser_number'             => $mappedRow['ruser_number'],
            'delivery_charge'          => $mappedRow['delivery_charge'],
            'service_charge'           => $mappedRow['service_charge'],
            'cod'                      => $mappedRow['cod'],
            'total'                    => $mappedRow['total'],
            'product_details'          => $mappedRow['product_details'],
            'product_weight'           => $mappedRow['product_weight'],
            'product_lot'             => $mappedRow['product_lot'],
            'product_quantity'         => $mappedRow['product_quantity'],
            'remark'                   => $mappedRow['remark'],
            'origin_address'           => $mappedRow['origin_address'],
            'destination_address'      => $mappedRow['destination_address'],
        ]);
    }

}
