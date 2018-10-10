<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<h1>
					Email tester tool
				</h1>

				<p>

					<a href="https://myaccount.google.com/lesssecureapps?pli=1" target="_blank">Enable less secure for Gmail</a> |
					<a href="https://mailtrap.io" target="_blank">Mailtrap</a> |
					<a href="vendor/phpmailer/phpmailer/examples" target="_blank">View docs</a>

				</p>


				<h3>
					Test via hosting smtp
				</h3>

				<form action="sendmail.php" method="post" class="form-horizontal">

					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">SMTP server</label><div class="col-md-4"><input type="text" value="" name="from" placeholder="yourhosting.com" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Port</label><div class="col-md-4"><input type="text" value="" name="from" placeholder="26" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">From email</label><div class="col-md-4"><input type="text" value="" name="from" placeholder="@image-asia.com" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Password</label><div class="col-md-4"><input type="password" value="" name="password" placeholder="password" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">To email</label><div class="col-md-4"><input type="text" value="" name="to" placeholder="recipent" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Subject</label><div class="col-md-4"><input type="text" value="test subject" name="subject" placeholder="your subject" class="form-control input-md"></div></div>
					<!-- Textarea -->
					<div class="form-group">
					<label class="col-md-4 control-label" for="textarea">Body</label>
					<div class="col-md-4">
						<textarea class="form-control" id="textarea1" name="message">Lorem ipsum</textarea>
					</div>
					</div>


					<div class="form-group">
					<label class="col-md-4 control-label" for="checkboxes"></label>
						<div class="col-md-4">
							<label class="checkbox-inline" for="checkboxes-0">
							<input type="checkbox" name="debug" id="checkboxes-0" value="1">
							Enable debug
							</label>
						</div>
					</div>

					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes"></label><div class="col-md-4"><button id="singlebutton1" name="singlebutton" class="btn btn-primary">Send</button></div></div>

				</form>


				<h3>
					Test via Gmail smtp
				</h3>
				<form action="sendmail.php" method="post" class="form-horizontal">
					<input type="hidden" name="smtp" value="smtp.gmail.com">
					<input type="hidden" name="port" value="587">
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">From email</label><div class="col-md-4"><input type="text" value="" name="from" placeholder="@gmail.com" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Password</label><div class="col-md-4"><input type="password" value="" name="password" placeholder="password" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">To email</label><div class="col-md-4"><input type="text" value="" name="to" placeholder="recipent" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Subject</label><div class="col-md-4"><input type="text" value="test subject" name="subject" placeholder="your subject" class="form-control input-md"></div></div>
					<!-- Textarea -->
					<div class="form-group">
					<label class="col-md-4 control-label" for="textarea">Body</label>
					<div class="col-md-4">
						<textarea class="form-control" id="textarea2" name="message">Lorem ipsum</textarea>
					</div>
					</div>

					<div class="form-group">
					<label class="col-md-4 control-label" for="checkboxes"></label>
						<div class="col-md-4">
							<label class="checkbox-inline" for="checkboxes-0">
							<input type="checkbox" name="debug" id="checkboxes-0" value="1">
							Enable debug
							</label>
						</div>
					</div>

					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes"></label><div class="col-md-4"><button id="singlebutton1" name="singlebutton" class="btn btn-primary">Send</button></div></div>

				</form>


				<h3>
					Test via Mail trap smtp
				</h3>
				<form action="sendmail.php" method="post" class="form-horizontal">
					<input type="hidden" name="smtp" value="smtp.mailtrap.io"><!-- Check again with mailtrap -->
					<input type="hidden" name="port" value="2525"><!-- Check again with mailtrap -->

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="from">From email</label>
						<div class="col-md-4">
							<input id="from" name="from" type="text" placeholder="placeholder" class="form-control input-md">
							<span class="help-block">email from mailtrap e.g. 919ed56ab5asw1cfa7</span>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="password">Password</label>
						<div class="col-md-4">
							<input id="password" name="password" type="text" placeholder="placeholder" class="form-control input-md">
							<span class="help-block">password from mailtrap e.g. e2addf4dsdfe1955b2e2</span>
						</div>
					</div>

					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">To email</label><div class="col-md-4"><input type="text" value="" name="to" placeholder="recipent" class="form-control input-md"></div></div>
					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes">Subject</label><div class="col-md-4"><input type="text" value="test subject" name="subject" placeholder="your subject" class="form-control input-md"></div></div>
					<!-- Textarea -->
					<div class="form-group">
					<label class="col-md-4 control-label" for="textarea">Body</label>
					<div class="col-md-4">
						<textarea class="form-control" id="textarea3" name="message">Lorem ipsum</textarea>
					</div>
					</div>

					<div class="form-group">
					<label class="col-md-4 control-label" for="checkboxes"></label>
						<div class="col-md-4">
							<label class="checkbox-inline" for="checkboxes-0">
							<input type="checkbox" name="debug" id="checkboxes-0" value="1">
							Enable debug
							</label>
						</div>
					</div>

					<div class="form-group"><label class="col-md-4 control-label" for="checkboxes"></label><div class="col-md-4"><button id="singlebutton1" name="singlebutton" class="btn btn-primary">Send</button></div></div>

				</form>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.div -->
	</div>
	<!-- /.container -->

<script src="/vendor/tinymce/tinymce/jquery.tinymce.min.js"></script>
<script src="/vendor/tinymce/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({

        selector: "#textarea1, #textarea2, #textarea3",
        editor_encoding: "raw",
        height : "300px",
        plugins: "paste",
        paste_as_text: true,

        plugins: [
            "preview charmap",
            "code fullscreen",
            "template paste",
            "wordcount"
        ],

        toolbar1: "undo redo | cut copy paste",
        toolbar2: "bold italic underline superscript | charmap | removeformat | code fullscreen preview",

        menubar: false,
        statusbar:true,
        toolbar_items_size: 'small',
        language : 'en',

    });

</script>


</body>
</html>