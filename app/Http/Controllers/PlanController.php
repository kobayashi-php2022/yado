<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Hotel;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Hotel $hotel)
    {
        // dd($request->hotel_id);
        $hotel = Hotel::find($request->hotel_id);
        // dd($hotel);
        $plan = new Plan;
        return view('admin/plans/create', ['plan' => $plan, 'hotel' => $hotel]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Hotel $hotel)
    {
        $validated = $request->validate([
            'plan_name' => 'required|max:255',
            'content' => 'required',
            'rooms_num' => 'required',
        ]);
        Plan::create([
            'hotels_id' => $request->hotel_id,
            'name' => $request->plan_name,
            'content' => $request->content,
            'price' => $request->price,
            'rooms_num' => $request->rooms_num,
        ]);
        $hotel = Hotel::find($request->hotel_id);
        return redirect(route('hotels.show', ['hotel' => $hotel->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
