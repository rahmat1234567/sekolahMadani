    <!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
<title>Login Verpus</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
        <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/styles-responsive.css">
        <link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<title>Login Sistem</title>
<style type="text/css">
body {
}
#body {
	position:absolute;
 	margin-left:auto;
 	margin-right:auto;
 	margin-top:auto;
 	margin-bottom:auto;
	left:0;
	right:0;
	top:0;
	bottom :0;	
	border:1px solid #333;;
}

#log_head{
	background-image: url(images/menu-biru.gif);
	padding:8px;
	border:1px solid #000;;
	color:#FFF;
	text-align:center;
	margin-bottom:10px;
}
</style>

</head>
<body>
<div id="body" style="width:350px; height:160px;">
	
    <div id="log_head"><strong>Menu Login</strong>
    </div>
    <div id="log_cont">
    <form action="cek-login.php" method="POST">
    <table width="100%" style="background:#FFF; ">
    	<tr>
        	<td width="20%">Username</td>
            <td>:</td>
            <td><input type="text" name="user" size="30%" required></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" size="30%" required></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td><button type="submit" name="log">LOGIN</td>
        </tr>
    </table>
    </form>
    
    
</div>
</body>
</html>