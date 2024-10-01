@extends('layout.app')

@section('title', 'List of Shipment Tracking')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Shipment Tracking </h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Shipment Tracking</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Shipment Id</th>
                                    <th>Location</th>
                                    <th>Status Update</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($shipmentTrackings as $shipment_t)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $shipment_t->id ?? 'Unknown' }}</td>
                                    <td>{{ $shipment_t->location}}</td>
                                    <td>{{ $shipment_t->status_update }}</td>
                                    <td>{{ $shipment_t->created_at->format('Y-m-d H:i') }}</td>

                                    <td>
                                        <a href="{{ route('shipment_trackings.edit', $shipment_t->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('shipment_trackings.destroy', $shipment_t->id) }}" method="POST" style="display:inline;">
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
