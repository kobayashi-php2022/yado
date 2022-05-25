<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.ico" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>新宿トラベル</title>

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

<body class="components-page">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle" data-target="#navigation-doc">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="http://www.creative-tim.com">
           <div class="logo-container logo-documentation">
                <div class="logo">
                    <img src="#" alt="Logo">
                </div>
            </div>
      </a>

	  <!--  Made With Material Kit  -->
	  <a href="http://demos.creative-tim.com/material-kit/index.html" class="made-with-mk">
		  <div class="brand">MK</div>
		  <div class="made-with">Made with <strong>Material Kit</strong></div>
	  </a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation-doc">
		<ul  class="nav navbar-nav navbar-right">
			<li>
				<a href="#">TOP</a>
			</li>
			<li>
                <a href="#">マイページ</a>
            </li>
    	</ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="title">新宿トラベル<br>ここに検索boxを設置</h2>
				</div>
			</div>
		</div>
	</div>
			    	<!-- tooltip row -->
					<div class="tim-row" id="tooltip-row">
		            <h2>これは例（新規とログインとか）</h2>
		            <legend></legend>
		            <p style="margin-bottom: 45px;">We restyled the Bootstrap tooltip.</p>


						<div class="card wizard-card" data-color="purple">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-2">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Renters you approve will be able to take this boat">
										<input type="radio" name="job" value="Design">
										<div class="icon">
											<i class="material-icons">rounded_corner</i>
										</div>
										<h6>No Captain</h6>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you or a certified captain will be included.">
										<input type="radio" name="job" value="Code">
										<div class="icon">
											<i class="material-icons">accessibility</i>
										</div>
										<h6>Includes Captain</h6>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <!-- end row -->

    <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="tim-container">

	    	<!-- buttons row -->
	        <div class="tim-row" id="buttons-row">

                <h2>検索絵結果の表示</h2>
                <legend>以下のデザイン使ってボタンとか設置するのもありです</legend>
                <h4>Colors</h4>
                <p>We worked over the original Bootstrap classes, choosing a different, slightly intenser color pallete:</p>
                <p>
                       <button class="btn btn-default">Default</button>
                       <button class="btn btn-primary">Primary</button>
                       <button class="btn btn-info">Info</button>
                       <button class="btn btn-success">Success</button><br/>
                       <button class="btn btn-warning">Warning</button>
                       <button class="btn btn-danger">Danger</button>
                </p>

            	<h4>Sizes</h4>
                <p>Buttons come in all needed sizes:</p>
                <p>
                    <button class="btn btn-primary btn-lg">Large</button>
                    <button class="btn btn-primary">Normal</button>
                    <button class="btn btn-primary btn-sm">Small</button>
                    <button class="btn btn-primary btn-xs">Extra Small</button>
                </p>

        	</div>
    		<!--  end row -->

    		<!-- checkbox row -->
        	<div class="tim-row" id="checkbox-row">
                <h2> Checkboxes </h2>
                <legend></legend>
                <p>
                    To use the custom checkboxes, you don't need to import any separate Javascript file, everything is inside material.min.js. The check color will change when <strong>data-color = 'purple'</strong> attribute of the Wizard is replaced with another color.
                </p>
                <p>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="optionsCheckboxes">
							Unchecked
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="optionsCheckboxes" checked>
							Checked
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="optionsCheckboxes" disabled>
							Disabled Unchecked
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="optionsCheckboxes" disabled checked>
							Disabled Checked
						</label>
					</div>
                </p>
        	</div>
    		<!-- end row -->

    		<!-- radio row -->
        	<div class="tim-row" id="radio-row">
            	<h2> Radio Buttons </h2>
            	<legend></legend>
                <p>
                    To use the custom radio buttons, you don't need to import any separate Javascript file, everything is inside material.min.js.The check color will change when <strong>data-color = 'purple'</strong> attribute is replaced with another color.
                </p>
                <p>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios">
							Radio is off
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" checked="true">
							Radio is on
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadiosDisabled" disabled>
							Disabled Radio is off
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadiosDisabled" checked="true" disabled>
							Disabled Radio is on
						</label>
					</div>
                </p>
		    </div>
		    <!-- end row -->


    		<!-- inputs row -->
        	<div class="tim-row" id="inputs-row">
                <h2>Inputs </h2>
                <legend></legend>

                <p>
                We restyled the Bootstrap input to give it a more flat, minimal look. You can use them with regular labels, floating labels and states or input groups.
                </p>
                <div class="row">
					<div class="col-sm-4">
	                	<div class="form-group">
	        	        	<input type="text" value="" placeholder="Regular" class="form-control" />
	                	</div>
	                </div>

					<div class="col-sm-4">
						<div class="form-group label-floating">
							<label class="control-label">With Floating Label</label>
							<input type="text" class="form-control">
						</div>
					</div>

	                <div class="col-sm-4">
	                	<div class="form-group label-floating has-success">
							<label class="control-label">Success input</label>
	                    	<input type="text" value="Success" class="form-control" />
							<span class="form-control-feedback">
								<i class="material-icons">done</i>
							</span>
	                	</div>
	                </div>

	                <div class="col-sm-4">
	                	<div class="form-group label-floating has-error">
							<label class="control-label">Error input</label>
	                    	<input type="text" value="Error Input" class="form-control" />
	                    	<span class="material-icons form-control-feedback">clear</span>
	                	</div>
	                </div>

					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">group</i>
							</span>
							<input type="text" class="form-control" placeholder="With Material Icons">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-group"></i>
							</span>
							<input type="text" class="form-control" placeholder="With Font Awesome Icons">
						</div>
					</div>
	        	</div>
    		</div>
    		<!-- end row -->


			<!-- textarea row -->
			<div class="tim-row" id="textarea-row">
			    <h2>Textarea</h2>
			    <legend></legend>
			    <p>The textarea has a new style, so it looks similar to all other inputs.</p>

			    <textarea class="form-control" placeholder="Here can be your nice text" rows="5"></textarea>
		    </div>
		    <!-- end row -->

		    </div>
		    <!-- end row -->

		    	<!-- tooltip row -->
		    	<div class="tim-row" id="tooltip-row">
		            <h2>Tooltips</h2>
		            <legend></legend>
		            <p style="margin-bottom: 45px;">We restyled the Bootstrap tooltip.</p>


						<div class="card wizard-card" data-color="purple">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-2">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Renters you approve will be able to take this boat">
										<input type="radio" name="job" value="Design">
										<div class="icon">
											<i class="material-icons">rounded_corner</i>
										</div>
										<h6>No Captain</h6>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you or a certified captain will be included.">
										<input type="radio" name="job" value="Code">
										<div class="icon">
											<i class="material-icons">accessibility</i>
										</div>
										<h6>Includes Captain</h6>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <!-- end row -->
            </div>
        </div>
        </div>
    </div>
    </div>
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

ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>宿検索</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
	<link rel="icon" type="image/png" href="img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('img/wizard-book.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="logo.png">
	            </div>
	        </div>
	    </a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Book a Room
		                        	</h3>
									<h5>This information will let us know more about you.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Account</a></li>
			                            <li><a href="#captain" data-toggle="tab">Room Type</a></li>
			                            <li><a href="#description" data-toggle="tab">Extra Details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Let's start with the basic details.</h4>
			                            	</div>
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Your Email</label>
			                                          	<input name="name" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">Your Password</label>
			                                          	<input name="name2" type="password" class="form-control">
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Country</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
		                                        	</select>
		                                    	</div>
												<div class="form-group label-floating">
		                                        	<label class="control-label">Daily Budget</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> < $100 </option>
	                                                	<option value="Albania"> $100 - $499 </option>
	                                                	<option value="Algeria"> $499 - $999 </option>
	                                                	<option value="American Samoa"> $999+ </option>
		                                        	</select>
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">What type of room would you want? </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="This is good if you travel alone.">
		                                                <input type="radio" name="job" value="Design">
		                                                <div class="icon">
		                                                    <i class="material-icons">weekend</i>
		                                                </div>
		                                                <h6>Single</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this room if you're traveling with your family.">
		                                                <input type="radio" name="job" value="Code">
		                                                <div class="icon">
		                                                    <i class="material-icons">home</i>
		                                                </div>
		                                                <h6>Family</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are coming with your team.">
		                                                <input type="radio" name="job" value="Code">
		                                                <div class="icon">
		                                                    <i class="material-icons">business</i>
		                                                </div>
		                                                <h6>Business</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description.</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Room description</label>
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group">
		                                            <label class="control-label">Example</label>
		                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										<div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/material-bootstrap-wizard">here.</a>
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
