@extends('layout.app')

@section('title', 'List of Addrees')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            {{-- <h1 class="h3 d-inline align-middle">Create Address </h1> --}}
            <a href="{{ route('addresses.create') }}" class="btn btn-primary ">Add Address</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Address</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($addresses as $address)
                                <tr>
                                    <td>{{ $address->user->name }}</td>
                                    <td>{{ $address->user->email }}</td>
                                    <td>{{ $address->street ?? 'Unknown' }}</td>
                                    <td>{{ $address->city ?? 'Unknown' }}</td>
                                    <td>{{ $address->state ?? 'Unknown' }}</td>
                                    <td>{{ $address->zip_code ?? 'Unknown' }}</td>
                                    <td>{{ $address->country ?? 'Unknown' }}</td>
                                    <td>{{ $address->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline;">
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
