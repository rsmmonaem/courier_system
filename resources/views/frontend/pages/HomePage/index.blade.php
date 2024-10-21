@extends('frontend.index')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container mt-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="mb-4">Track Your Shipment</h2>
                                    <h2> <a href="{{ url('login') }}">Login</a> </h2>
                                </div>

                                <!-- Check if a tracking number is present in the request -->
                                @if (request()->has('tracking_number') && isset($shipment))
                                    <!-- Shipment Details -->
                                    <h4>Shipment Details:</h4>
                                    <table class="table table-bordered mt-3">
                                        <thead>
                                            <tr>
                                                <th>Tracking Number</th>
                                                <th>Scheduled Pickup Date</th>
                                                <th>Delivery Date</th>
                                                <th>Total</th>
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
                                                <td>{{ $shipment->total }}</td>
                                                <td>{{ ucfirst($shipment->status) }}</td>
                                                <td>{{ $shipment->origin_address }}</td>
                                                <td>{{ $shipment->destination_address }}</td>
                                                <td><a
                                                        href="{{ url('transaction/' . $shipment->tracking_number . '/pdf') }}">Download</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <!-- No shipment found or no tracking number provided -->
                                    <div class="alert alert-warning">
                                        @if (request()->has('tracking_number'))
                                            No shipment found with this tracking number.
                                        @else
                                            Please enter a tracking number to track your shipment.
                                        @endif
                                    </div>
                                @endif

                                <!-- Search Form -->
                                <form method="GET" action="{{ route('track.shipment') }}" class="mt-3">
                                    <div class="input-group mb-3">
                                        <input type="text" name="tracking_number" class="form-control"
                                            placeholder="Enter Tracking Number" value="{{ old('tracking_number') }}"
                                            required>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
