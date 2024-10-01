<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerSupport;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCustomerSuppportRequest;
use App\Servicess\CustomerSupport\CustomerSupportService;

class CustomerSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data['customer_supports'] = (new CustomerSupportService())->getAllCustomerSupports(true, 'user');
        return view('customer-support.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['user'] = (new CustomerSupportService())->getAUser();
        return view('customer-support.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerSuppportRequest $request, CustomerSupportService $customerSupportService)
    {
        try{
            $data = $customerSupportService->storeCustomerService($request->validated());
            return redirect('customer-support.index');
        }catch(\Throwable $e){

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerSupport $customerSupport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerSupport $customerSupport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerSupport $customerSupport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerSupport $customerSupport)
    {
        //
    }
}
