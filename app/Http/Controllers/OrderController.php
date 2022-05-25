<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Hotel;
use App\Models\Category;
use App\Models\Plan;
use App\Models\User;
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
        $order = new Order;
        $order = $request->hotel()->orders()->create($request->all());
        $order = $request->plan()->orders()->create($request->all());
        
    
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
    public function create(Request $request)
    {
        $plan = Plan::where('id', '=', $request->plan_id)->first();
        return view('reserve/create', ['plan' => $plan]);        
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
        // dd($plans);
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
        $order->delete();
        return redirect(route('index'));
    }

    private $validator = [
		"checkin_date" => "required",
		"checkout_date" => "required",
		"stayers_num" => "required",
        "rooms_date" => "required",
		"address" => "required",
		"tel" => "required",
	];

    public function confirm(Request $request)
    {
        // dd($request->hotel_name);
        $this->validate($request, [
            "check_in" => "required",
            "check_out" => "required",
            "num" => "required",
            "room" => "required",
            "address" => "required|max:255",
            "tel" => "required|max:15",
        ]);
        $plan = Plan::where('id', '=', $request->plan_id)->first();
        return view("reserve/confirm", ['plan' => $plan]);
    }

    public function complete(Request $request) {
        $plan = Plan::where('id', '=', $request->plan_id)->first();
        Order::create([
            'num' => $request->num,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'room' => $request->room,
            'hotels_id' => $request->hotels_id,
            'user_id' => \Auth::id(),
            'plan_id' => $request->plan_id,
        ]);
        //電話番号と住所はusersテーブルにぶちこむ
        $user = User::find(\Auth::id());
        $user->update([
            'address' => $request->address,
            'tel' => $request->tel,
        ]);
        return view("reserve/complete");
    }
}
