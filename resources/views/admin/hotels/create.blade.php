<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>新宿トラベル_宿情報入力画面</title>

@section('title', '新宿トラベル_宿情報の登録')
@section('content')
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
                                                @include('commons/error_flash')
			                            	</div>
                                            <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
		                                	<div class="col-sm-6"style="text-align:left; color:black;">
                                                    <p>
                                                <label for="category">宿分類：　　　　</label>
                                                <select name="category" id="category">
                                                    <option value=""></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </p>            <p>
                                                <label for="name">宿名：　　　　　</label>
                                                <input type="text" name="name" id="name" value={{ request('name')}}>
                                            </p>
                                            <p>
                                                <label for="address">住所：　　　　　</label>
                                                <input type="text" name="address" id="address" value={{ request('text')}}>
                                            </p>
                                            <p>
                                                <label for="email">メールアドレス：</label>
                                                <input type="email" name="email" id="email" value={{ request('email')}}>
                                            </p>
                                            <p>
                                                <label for="tel">電話番号：　　　</label>
                                                <input type="tel" name="tel" id="tel" value={{ request('tel')}}>
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
                                            <button class="btn btn-danger btn-md" style="color: white;">新規登録</button>
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
         </div> 
        </div> 

	    <div class="footer">
	        <div class="container text-center">
            <div class="copyright">
                &copy; yado4
            </div>
        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>
</html>


<?php /*
@extends('layouts.app')

@section('content')
    <h1>新規宿泊施設の登録</h1>
    @include('commons/error_flash')
    <div class="create">
        <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="category">宿分類</label>
                <select name="category" id="category">
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="name">宿名</label>
                <input type="text" name="name" id="name" value={{ request('name')}}>
            </p>
            <p>
                <label for="address">住所</label>
                <input type="text" name="address" id="address" value={{ request('text')}}>
            </p>
            <p>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" value={{ request('email')}}>
            </p>
            <p>
                <label for="tel">電話番号</label>
                <input type="tel" name="tel" id="tel" value={{ request('tel')}}>
            </p>
            {{-- 画像投稿 --}}
            <p>
                <label for="image">イメージ画像</label>
                <input type="file" name="image" id="image">
            </p>

            {{-- <p>
                <label for="text">プラン名</label>
                <input type="text" name="text" id="text">
            </p>
            <p>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </p> --}}

            <input type="submit" value="登録">
            <hr>
            <a href="{{ route('hotels.index') }}">戻る</a>
        </form>
    </div>
@endsection