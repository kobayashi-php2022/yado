@extends('layouts.app2')

@section('title', '新宿トラベル_会員情報の変更')
@section('content')

<div class="image-container set-full-height" style="background-image: url('/img/wizard-profile.jpg')">
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizardProfile">
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
			                                	<br><h4 class="info-text">会員の情報を更新してください</h4>
			                            	</div>
                                        <div class="create">
                                            @include('commons/error_flash')
                                            <div class="create">
                                            <form action="{{ route('members.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="form-group row">
                                                      <label for="name" class="col-md-3 col-form-label text-md-right"></label>
                                                      <div class="col-md-6">
                                                        <input type="text" id="name" class="form-control" name="name" placeholder="氏名" minlength="1" maxlength="30" value="{{ $user->name }}" required>
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label for="address" class="col-md-3 col-form-label text-md-right"></label>
                                                      <div class="col-md-6">
                                                        <input type="text" id="address" class="form-control" name="address" minlength="1" maxlength="100" placeholder="住所" value="{{ $user->address }}">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label for="tel" class="col-md-3 col-form-label text-md-right"></label>
                                                      <div class="col-md-6">
                                                        <input type="tel" id="tel" class="form-control" name="tel"pattern="\d{1,5}-\d{1,4}-\d{4,5}" title="電話番号は、市外局番からハイフン（-）を入れて記入してください。" placeholder="電話番号" value="{{ $user->tel }}">
                                                      </div>
                                                    </div>
                                                    <div class="form-group row">
                                                      <label for="email" class="col-md-3 col-form-label text-md-right"></label>
                                                      <div class="col-md-6">
                                                        <input type="email" id="email" class="form-control" name="email" title="末尾には@○○○○などのメールアドレスの形式で入力してください。" placeholder="メールアドレス"value="{{ $user->email }}" required>
                                                      </div>
                                                    </div>
                                                    <br>
                                                    <div style="text-align: center;">
                                                      <p><input type="submit" value="更新" class='btn btn-success'></p><br>
                                                      </div>
                                                </form>
                                                <br><a href="{{ route('members.show', $user->id) }}">　　< 戻る</a>
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
	</div>

@endsection