@extends('layout.app')

@section('title', 'List of Shipment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            {{-- <h1 class="h3 d-inline align-middle">Create Shipment </h1> --}}
            <a href="{{ route('shipments.create') }}" class="btn btn-primary ">Add Shipment</a>
        </div>
{{-- //@dd($shipments) --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Shipment</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>User Name</th>
                                    <th>Origin Address</th>
                                    <th>Destination Address</th>
                                    <th>Tracking Number</th>
                                    <th>Schedule <br>Picup date</th>
                                    <th>Delivery Date</th>
                                    <th>Price</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($shipments as $shipment)

                                @php $o_address = $shipment->originAddress;
                                   $d_address = $shipment->destinationAddress; @endphp

                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $shipment->user->name ?? 'Unknown' }}</td>
                                    <td>{{ $o_address->street, $o_address->city ?? 'Unknown', $o_address->state ?? 'Unknown', $o_address->zip_code ?? 'Unknown', $o_address->country ?? 'Unknown'    }}</td>
                                    <td>{{ $d_address->street, $d_address->city ?? 'Unknown', $d_address->state ?? 'Unknown', $d_address->zip_code ?? 'Unknown', $d_address->country ?? 'Unknown'    }}</td>
                                    <td>{{ $shipment->tracking_number ?? 'Unknown' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($shipment->scheduled_pickup_date)->format('Y-m-d H:i') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($shipment->delivery_date)->format('Y-m-d H:i') }}</td>
                                    <td>{{ $shipment->price ?? 'Unknown' }}</td>
                                    <td>{{ $shipment->status ?? 'Unknown' }}</td>
                                    <td>
                                        <a href="{{ route('shipments.edit', $shipment->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('shipments.destroy', $shipment->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection
