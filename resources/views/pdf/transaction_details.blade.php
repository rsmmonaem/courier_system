<!DOCTYPE html>
<html>
<head>
    <title>Transaction Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 20px; }
        .details { margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Transaction Details</h2>
    </div>

    <div class="details">
        <h4>Shipment Information:</h4>
        <table>
            <tr>
                <th>Tracking Number</th>
                <td>{{ $tracking_number }}</td>
            </tr>
            <tr>
                <th>Scheduled Pickup Date</th>
                <td>{{ $scheduled_pickup_date }}</td>
            </tr>
            <tr>
                <th>Delivery Date</th>
                <td>{{ $delivery_date }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $status }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $updated_at }}</td>
            </tr>
            <tr>
                <th>Sender Name</th>
                <td>{{ $suser_name }}</td>
            </tr>
            <tr>
                <th>Sender Number</th>
                <td>{{ $suser_number }}</td>
            </tr>
            <tr>
                <th>Receiver Name</th>
                <td>{{ $ruser_name }}</td>
            </tr>
            <tr>
                <th>Receiver Number</th>
                <td>{{ $ruser_number }}</td>
            </tr>
            <tr>
                <th>Delivery Charge</th>
                <td>{{ $delivery_charge }} TK</td>
            </tr>
            <tr>
                <th>Service Charge</th>
                <td>{{ $service_charge }} TK</td>
            </tr>
            <tr>
                <th>COD</th>
                <td>{{ $cod }} TK</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ $total }} TK</td>
            </tr>
            <tr>
                <th>Product Details</th>
                <td>{{ $product_details }}</td>
            </tr>
            <tr>
                <th>Product Weight</th>
                <td>{{ $product_weight }}</td>
            </tr>
            <tr>
                <th>Product Lot</th>
                <td>{{ $product_lot }}</td>
            </tr>
            <tr>
                <th>Product Quantity</th>
                <td>{{ $product_quantity }}</td>
            </tr>
            <tr>
                <th>Remark</th>
                <td>{{ $remark }}</td>
            </tr>
            <tr>
                <th>Origin Address</th>
                <td>{{ $origin_address }}</td>
            </tr>
            <tr>
                <th>Destination Address</th>
                <td>{{ $destination_address }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
