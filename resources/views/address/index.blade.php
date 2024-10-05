@extends('layout.app')

@section('title', 'List of Addrees')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <div>
                           <h2 class="fs-30 fw-700">Address List</h2>
                        </div>
                        <div>
                            <a href="{{ route('addresses.create') }}" class="btn btn-primary ">Add Address</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                <td>SL.</td>
                                    <th>Name</th>
                                    <th>Email</th>
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
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $address->user->name }}</td>
                                    <td>{{ $address->user->email }}</td>
                                    <td>{{ $address->street ?? 'Unknown' }}</td>
                                    <td>{{ $address->city ?? 'Unknown' }}</td>
                                    <td>{{ $address->state ?? 'Unknown' }}</td>
                                    <td>{{ $address->zip_code ?? 'Unknown' }}</td>
                                    <td>{{ $address->country ?? 'Unknown' }}</td>
                                    <td>{{ $address->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning btn-sm"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash"></i></button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $addresses->links() }}
                        </div>
                    </>

                </div>
            </div>
        </div>

    </div>
</main>

@endsection
