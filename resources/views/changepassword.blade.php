<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Change Password</title>
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
    </script>
    <!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body data-background-color="dark">
    <h1>Admin Change Password</h1>
    <form action="leave/changepassword" method="POST">
    <label for="current">Current Password</label>
    <input type="password" name="current"><p></p>
    <label for="new">New Password</label>
    <input type="password" name="new"><p></p>
    <label for="confirm">Confirm Password</label>
    <input type="password" name="confirm"><p></p>
    <input type="submit" value="Change Password">
    </form>
</body>
</html>
