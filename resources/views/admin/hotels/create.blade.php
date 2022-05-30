@extends('layouts.app1')

@section('title', '新宿トラベル_宿情報の登録')
@section('content')
<div class="image-container set-full-height" style="background-image: url('/img/wizard-book.jpg')">
    <div class="components-page2">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">新規宿泊施設の登録</a></li>
			                            <li><a data-toggle="tab"></a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
                                            <div class="create">
			                                	<h4 class="info-text">新規宿泊施設の情報を入力してください</h4>
			                            	</div>
                                            <div>
                                            @include('commons/error_flash')
                                            <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <p>
                                                <label for="category">宿分類：　　　　</label>
                                                <select name="category" id="category">
                                                    <option value=""></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </p>            <p>
                                                <label for="name">宿名：　　　　　</label>
                                                <input type="text" name="name" id="name" value={{ old('name')}}>
                                            </p>
                                            <p>
                                                <label for="address">住所：　　　　　</label>
                                                <input type="text" name="address" id="address" value={{ old('text')}}>
                                            </p>
                                            <p>
                                                <label for="email">メールアドレス：</label>
                                                <input type="email" name="email" id="email" value={{ old('email')}}>
                                            </p>
                                            <p>
                                                <label for="tel">電話番号：　　　</label>
                                                <input type="tel" name="tel" id="tel" value={{ old('tel')}}>
                                            </p>
                                            {{-- 画像投稿 --}}
                                            <p>
                                                <label for="image">イメージ画像：</label>
                                                <input type="file" name="image" id="image">
                                            </p>

                                            {{-- <p>
                                                <label for="text">プラン名</label>
                                                <input type="text" name="text" id="text">
                                            </p>
                                            <p>
                                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                            </p> --}}<br>
                                            <div class="b" style="text-align:center;">
                                            <input type="submit" class="btn btn-danger btn-md" style="color: white;" value="新規登録">
                                            </div>
                                            <p><a href="#" onclick="history.back(-1);return false;">< 戻る</a></p>        
                                            </form>
                                        </div>
		                            	</div>
		                            </div>
		                        </div>
		                </div>
		            </div> 
                </div>
                </div>
                </div>
	    	</div>
         </div> 
@endsection