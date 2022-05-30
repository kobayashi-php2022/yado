@extends('layouts.app1')

@section('title', '新宿トラベル_管理者画面')
@section('content')

<div class="components-page">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h1 class="title">管理者画面</h1>
				</div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container">
						<div class="tim-row" id="tooltip-row">
						<div class="card wizard-card2" data-color="purple">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-2">
								<a href="{{ route('hotels.index') }}">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="宿を検索する">
										<input type="radio" name="job" value="Design" >
										<div class="icon">
											<i class="material-icons">rounded_corner</i>
										</div>
										<h6>宿検索</h6>
									</div>
								</a>
								</div>

								<div class="col-sm-4">
								<a href="{{ route('members.index') }}">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="会員を検索する">
										<input type="radio" name="job" value="Code">
										<div class="icon">
											<i class="material-icons">accessibility</i>
										</div>
										<h6>会員検索</h6>
									</div>
								</a>
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
