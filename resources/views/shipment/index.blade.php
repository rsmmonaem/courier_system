@extends('layout.app')

@section('title', 'List of Shipment')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div>
                                <h2 class="fs-30 fw-700">Shipment List</h2>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('import.shipment.view') }}" class="btn btn-primary ">Bulk Import</a>
                                <a href="{{ route('shipments.create') }}" class="btn btn-primary ">Add Shipment</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tracking Number</th>
                                        <th>Sender Name</th>
                                        <th>Receiver Name</th>
                                        <th>Status</th>
                                        <th>Scheduled Pickup Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{ $shipment->id }}</td>
                                            <td>{{ $shipment->tracking_number }}</td>
                                            <td>{{ $shipment->suser_name }}</td>
                                            <td>{{ $shipment->ruser_name }}</td>
                                            <td>{{ $shipment->status }}</td>
                                            <td>{{ $shipment->scheduled_pickup_date->format('Y-m-d') }}</td>
                                            <td>
                                                <a href="{{ route('shipments.edit', $shipment->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="{{ route('shipments.destroy', $shipment->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end">
                                {{ $shipments->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
