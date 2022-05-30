@extends('layouts.app2')

@section('title', '新宿トラベル_宿情報の変更')
@section('content')
 
	<div class="image-container set-full-height" style="background-image: url('/img/wizard-book.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">宿泊施設情報の更新</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
                                            <div class="create">
			                                	<h4 class="info-text">宿泊施設の情報を更新してください</h4>
                                                @include('commons/error_flash')
			                            	</div>
                                            <div class="a" style="margin-left: 100px;">
                                            <form action="{{ route('hotels.update', $hotel->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
		                                	<div class="col-sm-6"style="color:black;">
                                            <p>
                                            <label for="category">宿分類：</label>
                                            <select name="category" id="category">
                                            <option value=""></option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if($hotel->category_id == $category->id) selected @endif >
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                        </p>
                                        <p>
                                            <label for="name">宿名：</label>
                                            <input type="text" name="name" id="name" size="55"value="{{ $hotel->name }}">
                                        </p>
                                        <p>
                                            <label for="address">住所：</label>
                                            <input type="text" name="address" id="address" size="55"value="{{ $hotel->address }}">
                                        </p>
                                        <p>
                                            <label for="email">メールアドレス：</label>
                                            <input type="email" name="email" id="email"size="45" value="{{ $hotel->email }}">
                                        </p>
                                        <p>
                                            <label for="tel">電話番号：</label>
                                            <input type="tel" name="tel" id="tel" value="{{ $hotel->tel }}">
                                        </p>
                                        {{-- 画像投稿 --}}
                                        <p>
                                            <label for="image">イメージ画像：</label>
                                            <input type="file" name="image" id="image" value="">
                                            @if ($hotel->image !== "")
                                            <img src="{{ \Storage::url($hotel->image) }}" width="500">
                                            @else
                                            <img src="{{ \Storage::url('items/no_image.png') }}" width="300" height="300">
                                            @endif

                                        </p>
                                        <p>
                                            <label for="text">プラン名：</label>
                                            <input type="text" name="text" id="text">
                                        </p>
                                        <p>
                                            <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                        </p> --}}
                                        <div class="b" style="text-align:center;">
                                        <button class="btn btn-danger" type="submit" ><a href="{{ route('hotels.show', $hotel->id) }}" style="color: white;">更新</a></button>
                                            </div>
                                            <p><a href="#" onclick="history.back(-1);return false;">< 戻る</a></p>
		                                	</div>
		                            	</div>
		                            </div>
		                        </div>
		                    </form>
		                </div>
		            </div>
                </div>
                </div>
	    	</div>
		</div>
		@endsection