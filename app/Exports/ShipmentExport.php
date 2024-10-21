<?php

namespace App\Exports;

use App\Models\Shipment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ShipmentExport implements FromArray, WithHeadings
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

    public function headings(): array
    {
        return [
            'Tracking Number',
            'Scheduled Pickup Date',
            'Delivery Date',
            'Status',
            'Sender Name',
            'Sender Number',
            'Receiver Name',
            'Receiver Number',
            'Delivery Charge',
            'Service Charge',
            'COD',
            'Total',
            'Product Details',
            'Product Weight',
            'Product Lot',
            'Product Quantity',
            'Remark',
            'Origin Address',
            'Destination Address',
        ];
    }
}