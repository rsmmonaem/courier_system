<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;
use App\Services\Rate\RateService;
use App\Http\Requests\StoreRateFormRequest;

class RateController extends Controller
{
    private $rateService = [];
    public function __contruct(RateService $rateService){
        $this->rateService = $rateService;
    }
    public function index()
    {
        try{
            $data['rates'] = $rateService->getAllRate(true);
           // dd($data);
            return view('rate.index')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function create()
    {
        return view('rate.create');
    }


    public function store(StoreRateFormRequest $request, RateService $rateService)
    {
        try{
            $data['rate'] = $rateService->storeRate($request->validated());
            return redirect()->route('rates.index')->with('success','Successfully store a rate');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function show(Rate $rate)
    {

    }


    public function edit($id, RateService $rateService)
    {
        try{
            $data['rate'] = $rateService->getById($id);
            return view('rate.edit')->with($data);
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function update(StoreRateFormRequest $request, RateService $rateService, $id)
    {
        try{
            $data['rate'] = $rateService->updateRate($id, $request->validated());
            return  redirect()->route('rates.index')->with('success','Successfully update a rate');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function destroy($id, RateService $rateService)
    {
        try{
            $data['rate'] = $rateService->destroyRate($id);
            return  redirect()->route('rates.index')->with('success','Successfully delete a rate');
        }catch(\Throwable $exception){
            return redirect()->back()->with('error', $exception->getMessage());
        }
}
}
