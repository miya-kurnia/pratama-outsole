<?php

namespace App\Http\Controllers;

use App\Models\OrderPo;
use Illuminate\Http\Request;

class OrderPoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all orders and return to the index view
        $orders = OrderPo::all();
        $orders = OrderPo::all()->map(function ($order) {
            $order->total_size = $order->size_36 + $order->size_37 + $order->size_38 + $order->size_39 + $order->size_40 + $order->size_41 + $order->size_42;
            return $order;
        });
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view to create a new order
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'po' => 'required|integer|min:0',
            'model_name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'size_36' => 'nullable|integer|min:0',
            'size_37' => 'nullable|integer|min:0',
            'size_38' => 'nullable|integer|min:0',
            'size_39' => 'nullable|integer|min:0',
            'size_40' => 'nullable|integer|min:0',
            'size_41' => 'nullable|integer|min:0',
            'size_42' => 'nullable|integer|min:0',
        ]);

        // Create a new order with validated data
        OrderPo::create($request->all());

        // Redirect to the order list with success message
        return redirect()->route('orders.index')->with('success', 'PO created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderPo $order)
    {
        // Show a single order detail
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderPo $order)
    {
        // Return a view to edit the specified order
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderPo $order)
    {
        // Validate the request data
        $request->validate([
            'po' => 'required|integer|min:0',
            'model_name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'size_36' => 'nullable|integer|min:0',
            'size_37' => 'nullable|integer|min:0',
            'size_38' => 'nullable|integer|min:0',
            'size_39' => 'nullable|integer|min:0',
            'size_40' => 'nullable|integer|min:0',
            'size_41' => 'nullable|integer|min:0',
            'size_42' => 'nullable|integer|min:0',
        ]);

        // Update the specified order
        $order->update($request->all());

        // Redirect to the order list with success message
        return redirect()->route('orders.index')->with('success', 'PO updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderPo $order)
    {
        // Delete the specified order
        $order->delete();

        // Redirect to the order list with success message
        return redirect()->route('orders.index')->with('success', 'PO deleted successfully.');
    }
}
