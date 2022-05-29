@extends('layouts.mapp3')

@section('title', '新宿トラベル_ログイン画面')
@section('content')
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
                        <div class="tab-content">            
                                    <div class="row">
                                    <div class="col-md-8 offset-md-2" style="text-align: center; margin-top:70px;">
                                    <h3 class="wizard-title">予約エラー</h3><br>
                                    <br><p style="font-size:16px;">予約に失敗しました。プランは最大5件まで予約できます。</p><br>
                                    <a href=""><input type="button" value="宿検索画面へ" class="btn btn-primary"></a>
                                    </div>
                                    </div>
		                        </div>
                        <hr>
		            </div>
		        </div>
	        </div>
            </div>
	    </div>

@endsection
