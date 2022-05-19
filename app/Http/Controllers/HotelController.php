<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Category;
use Illuminate\Http\Request;

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
        if($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->date) {
            $query->where('address', 'LIKE', '%' . $request->address . '%');
        }
        //日付検索はいらんかったかも
        
        //宿分類検索
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
        return view('hotels/create', ['hotel' => $hotel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = create($request->all());
        return redirect(view('admin.top'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('admin/hotels/show', ['hotel' => $hotel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('admin/hotels/edit', ['hotel' => $hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        return redirect(view('admin.top'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect(view('admin.top'));
    }
}
