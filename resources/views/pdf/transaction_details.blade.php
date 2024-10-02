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
        <h4>User Information:</h4>
        <p><strong>Name:</strong> {{ $user_name }}</p>
        <p><strong>Email:</strong> {{ $user_email }}</p>

        <h4>Shipment Details:</h4>
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
                <th>Price</th>
                <td>${{ $price }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $status }}</td>
            </tr>
        </table>

        <h4>Address Information:</h4>
        <p><strong>Origin Address:</strong> {{ $origin_address }}</p>
        <p><strong>Destination Address:</strong> {{ $destination_address }}</p>
    </div>
</body>
</html>
