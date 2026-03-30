<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;

class DiscountController extends Controller
{
    public function index()
    {
        return $this->response(Discount::all());
    }


    public function store(StoreDiscountRequest $request)
    {
        if (Discount::where('product_id', $request->product_id)->exists()) {
            return $this->error('A discount for this product already exists', 422); 
        }

        $discount = Discount::create($request->validated());

        return $this->success('Discount created successfully', $discount);
    }


    public function show(Discount $discount)
    {
        //
    }


    public function update(UpdateDiscountRequest $request, Discount $discount)
    {
        $discount->update($request->validated());
        
        return $this->success('Discount updated successfully', $discount);
    }


    public function destroy(Discount $discount)
    {
        $discount->delete();
        return $this->success('Discount deleted successfully');
    }
}
