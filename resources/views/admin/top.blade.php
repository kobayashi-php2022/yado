{{-- <!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.ico" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>新宿トラベル_管理者TOP</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-bootstrap-wizard.css" rel="stylesheet"/>
	<link href="css/demo.css" rel="stylesheet" />

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.btn-primary .caret{
		    border-top-color: #3472F7;
		    color: #3472F7;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.table-shopping .td-name{
			min-width: 130px;
		}
	</style>
</head>

<div class="components-page">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h3 class="title">ー　新宿トラベル　ー</h2>
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
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="宿を検索する">
										<input type="radio" name="job" value="Design">
										<div class="icon">
											<i class="material-icons">rounded_corner</i>
										</div>
										<h6>宿検索</h6>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="会員を検索する">
										<input type="radio" name="job" value="Code">
										<div class="icon">
											<i class="material-icons">accessibility</i>
										</div>
										<h6>会員検索</h6>
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
