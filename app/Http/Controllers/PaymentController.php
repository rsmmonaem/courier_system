<?php

namespace App\Http\Controllers;

use App\Services\Payment\PaymentService;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\StorePaymentFormRequest;

class PaymentController extends Controller
{
    public function index()
    {
        try{
            $data['payments'] = (new PaymentService())->getAllPayments();
            return view('payment.index')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function create()
    {
        return view('payment.create');
    }

    public function store(StorePaymentFormRequest $request, PaymentService $paymentService)
    {
        try{
            $data['payment'] = $paymentService->storePayment($request->validated());
            return redirect('payments.index')->with('success','Successfully store a payment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error',$exception->getMessage());
        }
    }


    public function show(Payment $payment)
    {
        //
    }


    public function edit($id, PaymentService $paymentService)
    {
        try{
            $data['payment'] = $paymentService->getById($id);
            return view('payment.edit')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function update(StorePaymentFormRequest $request, $id, PaymentService $paymentService)
    {
        try{
            $data['payment'] = $paymentService->updatePayment($id, $request->validated());
            return redirect('payments.index')->with('success','Successfully update a payment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function destroy($id, PaymentService $paymentService)
    {
        try{
            $data['payment'] = $paymentService->destroyPayment($id);
            return redirect('payments.index')->with('success','Successfully delete a payment');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
