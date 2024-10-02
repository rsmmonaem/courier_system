@extends('layout.app')

@section('title', 'Track Invoice')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                      <h2 class="mb-4">Track Your Shipment</h2>
                    </div>
                    <div class="card-body">
                        <div class="container mt-5">
        <h2 class="mb-4">Track Your Shipment</h2>
        
        <!-- Check if a tracking number is present in the request -->
        @if(request()->has('tracking_number'))
            <!-- Search Form -->
            <form method="GET" action="{{ route('track.shipment') }}">
                <div class="input-group mb-3">
                    <input type="text" name="tracking_number" class="form-control" 
                           placeholder="Enter Tracking Number" 
                           value="{{ old('tracking_number') }}" required>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <!-- Check if shipment data is available -->
            @if(isset($shipment))
                <h4>Shipment Details:</h4>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>Scheduled Pickup Date</th>
                            <th>Delivery Date</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Origin Address</th>
                            <th>Destination Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $shipment->tracking_number }}</td>
                            <td>{{ $pickupDateDiff }}</td>
                            <td>{{ $deliveryDateDiff }}</td>
                            <td>{{ number_format($shipment->price, 2) }}</td>
                            <td>{{ ucfirst($shipment->status) }}</td>
                            <td>{{ $shipment->originAddress->street }}</td>
                            <td>{{ $shipment->destinationAddress->street }}</td>
                            <td><a href="{{ url('transaction/'.$shipment->tracking_number.'/pdf') }}">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            @else
                <div class="alert alert-warning">No shipment found with this tracking number.</div>
            @endif
        @else
            <!-- Only show the form if tracking_number is not present -->
            <form method="GET" action="{{ route('track.shipment') }}">
                <div class="input-group mb-3">
                    <input type="text" name="tracking_number" class="form-control" 
                           placeholder="Enter Tracking Number" 
                           value="{{ old('tracking_number') }}" required>
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        @endif
    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection
