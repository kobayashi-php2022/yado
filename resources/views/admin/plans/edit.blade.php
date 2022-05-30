@extends('layouts.app2')

@section('title', '新宿トラベル_宿の詳細情報')
@section('content')

    @include('commons/error_flash')

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
			                            	</div>
                                        @include('commons/error_flash')

                                        <div class="create">
                                            <form action="{{ route('plans.update', $plan->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('patch')
                                                <div class="col-mozi" style="margin-left:100px;">
                                                <p>
                                                    宿名：
                                                    <input type="hidden" name="hotel_id" value="{{ $plan->hotels_id }}">
                                                </p>
                                                <p>
                                                    <label for="plan_name">プラン名：</label>
                                                    <input type="text" name="plan_name" id="plan_name" value="{{ $plan->name }}" size="49">
                                                </p>
                                                <p>
                                                    <textarea name="content" id="content" cols="60" rows="5">{!! nl2br(e($plan->content)) !!}</textarea>
                                                </p>
                                                <p>
                                                    <label for="price">料金　：</label>
                                                    <input type="number" name="price" id="price" value="{{ $plan->price }}"> 円
                                                </p>
                                                <p>
                                                    <label for="rooms_num">部屋数：</label>
                                                    <input type="number" name="rooms_num" id="rooms_num" value="{{ $plan->rooms_num }}">
                                                </p>
                                                </div>
                                                <div class="col-button" style="text-align:center;">
                                                <input class="btn btn-danger" type="submit" value="更新">
                                            </form>
                                            {{-- 削除ボタン --}}
                                            <a href="#" onclick="deletePlan()" class="btn btn-default">削除</a>
                                            <form action="{{ route('plans.destroy', $plan->id) }}" method="post" id="plans-delete-form">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <script>
                                                function deletePlan() {
                                                    event.preventDefault();
                                                    if (window.confirm('このプランにお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                                                        document.getElementById('plans-delete-form').submit();
                                                    }
                                                }
                                            </script>
                                            </div>
                                            </div>
                                            <br><a href="{{ route('hotels.show', $hotel->id) }}">　　< 戻る</a>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
		            </div>
		        </div>
	        </div>
	    </div>
@endsection