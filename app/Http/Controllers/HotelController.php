<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Category;
use App\Models\Plan;

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

        $categories = Category::all();
        //ビュー
        return view('admin/hotels/index', ['hotels' => $hotels, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新規作成画面を表示
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
    public function show(Hotel $hotel, Plan $plan)
    {
        $plans = Plan::with('hotel')->where('hotels_id', "=", $hotel->id)->get();
        return view('admin/hotels/show', ['hotel' => $hotel, 'plans' => $plans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
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
        //ファイルの取得
        $image = $request->file('image');
        //ファイルは保存してたやつ
        $path = $hotel->image;
        if(isset($image)) {
            \Stroge::disk('public')->delete($path);
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
