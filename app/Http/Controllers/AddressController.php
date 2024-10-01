<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Services\Address\AddressService;
use App\Http\Requests\StoreAddressFormRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AddressService $addressService)
    {
        $data['addresses'] = $addressService->getAllAddress(true,null,['user']);
        return view('address.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // dd();
        return view('address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAddressFormRequest $request,  AddressService $addressService)
    {
        $data['address'] = $addressService->storeAddress($request->validated());

        return redirect()->route('addresses.index')->with('status', 'successfully store an address');
    }


    public function show()
    {

    }


    public function edit($id, AddressService $addressService)
    {
        $data['address'] = $addressService->getById($id);

       // dd($data);
        return view('address.edit')->with($data);
    }


    public function update(StoreAddressFormRequest $request, $id, AddressService $addressService)
    {
        $data['address'] = $addressService->updateAddress($id, $request->validated());
        return redirect()->route('addresses.index')->with('status', 'successfully update an address');
    }


    public function destroy($id, AddressService $addressService)
    {
        $data['address'] = $addressService->destroyAddress($id);
        return redirect()->route('addresses.index')->with('status', 'successfully delete an address');
    }

}
