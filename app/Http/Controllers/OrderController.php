<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Hotel;
use App\Models\Category;
use App\Models\Plan;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Hotel::with('category');

        // 名前検索と住所検索
        if($request->name) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->address) {
            $query->where('address', 'LIKE', '%' . $request->address . '%');
        }
        if($request->category) {
            $query->where('category_id', '=', $request->category);
        }
        //検索結果
        $hotels = $query->orderBy('id')->paginate(10);

        $categories = Category::all();
        //ビュー
        return view('reserve/index', ['hotels' => $hotels, 'categories' => $categories]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel, Plan $plan)
    {
        // dd($hotel->id);
        // $hotel = Hotel::find
        $plans = Plan::where('hotels_id', "=", $hotel->id)->get();
        dd($plans);
        // $hotel = Hotel::all()->get();
        return view('reserve/show', ['hotel' => $hotel, 'plans' => $plans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
