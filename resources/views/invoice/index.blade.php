@extends('layout.app')

@section('title', 'List of Invoice')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Invoice </h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Invoice</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>User Name</th>
                                    <th>Shipment Id</th>
                                    <th>Amount</th>
                                    <th>Invoice_date</th>
                                    <th>Atatus</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($invoices as $invoice)
                                <tr>
                                <td>{{ $i++ }}</td>
                                    <td>{{ $invoice->user->name ?? 'Unknown' }}</td>
                                    <td>{{ $invoice->shipment_id ?? 'Unknown' }}</td>
                                    <td>{{ $invoice->amount ?? 'Unknown' }}</td>
                                    <td>{{ $invoice->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $invoice->status }}</td>
                                    <td>
                                        <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display:inline;">
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
