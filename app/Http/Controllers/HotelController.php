<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Category;
use App\Models\Plan;
use App\Models\Order;

use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;

class HotelController extends Controller
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
        //商品検索結果
        $hotels = $query->orderBy('id')->paginate(10);

        //予約可能件数の表示
        // $orders = Order::all();
        // dd($orders->plan_id);
        // $room_count = Plan::withcount('orders')->where('id','=', $orders->plan_id)->get();

        $categories = Category::all();
        //ビュー 管理者と会員で分ける
        if(\Auth::check() == true && \Auth::user()->auth == "管理者") {
            return view('admin/hotels/index', ['hotels' => $hotels, 'categories' => $categories]);
        } else {
            return view('reserve/index', ['hotels' => $hotels, 'categories' => $categories]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新規作成画面を表示
        $this->authorize($hotel);
        $hotel = new Hotel;
        $categories = Category::all();
        return view('admin/hotels/create', ['hotel' => $hotel, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        //ファイルの取得
        $image = $request->file('image');
        //ファイルの保存とパス取得
        $path = "";
        if(isset($image)) {
            $path = $image->store('public/items');
        }
        Hotel::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'tel' => $request->tel,
            'image' => $path,
        ]);
        return redirect(route('hotels.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel, Request $request)
    {
        // $stay_days = $request->
        // $reserved_rooms_num = Order::select('plan_id')sum('num')->where();
        // dd($plans);
        // foreach($plans as $plan) {
        //     $plans = Plan::with('hotel')->where('hotels_id', "=", $hotel->id)
                // ->whereNotIn(function ($q) {
                //     //検索された期間に重なる
                //     $q->where($request->search_check_out > $orders->check_in);
                //     $q->where($request->search_check_in < $orders->check_out);
                //     //入力された部屋数とこれまで予約された部屋数が最大予約数を超える
                //     $q->where('rooms_num', '<', $request->search_rooms_num, '+', $counts->orders_count);
        //         });
        // }
        //商品検索結果
        // $plans = $query->orderBy('id')->paginate(10);
        //当該ホテルのプランを取得
        $plans = Plan::with('hotel')->where('hotels_id', $hotel->id)->get();
        //予約可能なプランの絞り込み
        
        // $filtered_plans = $plans->reject(function($value) {
        //     //検索された日付の間にあり、
        // });

        if(\Auth::check() == true && \Auth::user()->auth == "管理者") {
            return view('admin/hotels/show', ['hotel' => $hotel, 'plans' => $plans]);
        } else {
            return view('reserve/show', ['hotel' => $hotel, 'plans' => $plans]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $this->authorize($hotel);
        $categories = Category::all();
        return view('admin/hotels/edit', ['hotel' => $hotel, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelRequest $request, Hotel $hotel)
    {
        $this->authorize($hotel);
        //ファイルの取得
        $image = $request->file('image');
        //ファイルは保存してたやつ
        $path = $hotel->image;
        if(isset($image)) {
            \Storage::disk('public')->delete($path);
            $path = $image->store('public/items');
        }        
        $hotel->update([
            'category_id' => $request->category,
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'tel' => $request->tel,
            'image' => $path,
        ]);
        return redirect(route('hotels.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //ファイルが登録されていれば一緒に削除する
        $path = $hotel->image;
        if($path !== '') {
            \Storage::disk('public')->delete($path);
        }
        $hotel->delete();
        return redirect(route('hotels.index'));
    }
}
