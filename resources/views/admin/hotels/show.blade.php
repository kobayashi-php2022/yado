<!doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.ico" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title')</title>

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
<body>

<div class="components-page">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('{{ \Storage::url($hotel->image) }}');">
		<div class="container">
        <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
			@csrf
			<h2 style="color: white;">宿の詳細情報</h2><br>
            </div>
			</div>
		</div>
	</div>
    <div class="main main-raised">
        <div class="section">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
<table>
<tr>
        <th>宿名</th>
        <th>{{ $hotel->name }}</a></th>
    </tr>
    <tr>
        <td>宿分類</td>
        <td>{{ $hotel->category->name }}</td>
    </tr>
    <tr>
        <td>住所</td>
        <td>{{ $hotel->address }}</td>
    </tr>
    <tr>
        <td>電話番号</td>
        <td>{{ $hotel->tel }}</td>
    </tr>
    <tr>
        <td>メールアドレス</td>
        <td>{{ $hotel->email }}</td>
    </tr>
    <tr>
        <td>登録日</td>
        <td>{{ $hotel->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $hotel->updated_at }}</td>
    </tr>
    </table>
    {{-- @if(\Auth::user()->auth == "管理者") --}}
    <p>
        <button class="btn btn-primary" type="submit">編集</button>
        <button class="btn btn-default">削除</button>
    <form action="" method="post" id="hotels-delete-form">
        @csrf
        @method('delete')
    </form>
    <script type="text/javascript">
        function deleteHotel() {
            event.preventDefault();
            if(window.confirm('この宿にお客様の予約がある場合、自動的に削除されます。\r\n本当に削除しますか？')) {
                document.getElementById('').submit();
            }
        }
    </script>
</p>
{{-- @endif --}}

{{-- プラン一覧・追加 --}}
<h2>プラン一覧</h2>
<table style="margin-left: 30px;">
<tr>
        <th>プラン名</th>
        <th>
            {{ $plan->name }}
        </th>
    </tr>
    <tr>
        <td>プランの説明</td>
        <td>{!! nl2br(e($plan->content)) !!}</td>
    </tr>
    <tr>
        <td>料金</td>
        <td>{{ $plan->price }}円</td>
    </tr>
    <tr>
        <td>部屋数</td>
        <td>{{ $plan->rooms_num }}部屋</td>
    </tr>
    <tr>
        <td>登録日</td>
        <td>{{ $plan->created_at }}</td>
    </tr>
    <tr>
        <td>最終更新日</td>
        <td>{{ $plan->updated_at }}</td>
    </tr>
</table>
{{-- @if(\Auth::user()->auth == "管理者") --}}
<form action="">
    @csrf
    <button class="btn btn-primary"onclick="location.href=''">編集</button>>
    <input class="btn btn-danger" type="submit" value="プランの追加">
    <input type="hidden" name="hotel_id" value="">
</form>
{{-- @endif --}}
<hr>
<a href="#" onclick="history.back(-1);return false;">< 一覧に戻る</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

    <style>
        /* 追加 */
        table {
            margin-left: 30px;  
            line-height: 2;
            font-size:17px;
        }
        table th{
            font-size:20px;
        }
	</style>

<footer class="footer footer-transparent footer-documentation">
        <div class="container">
            <div class="copyright">
                &copy; yado4
            </div>
        </div>
    </footer>

</div>
</body>

	<!--   Core JS Files   -->
	<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="../js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="../js/jquery.validate.min.js"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', materialDesign.checkScrollForTransparentNavbar);
        });
    </script>

</html>