<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册-短信云轰炸</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
	#center{
		width: 400px;
		margin: 0 auto;
	}
	</style>
</head>
<body>
	<div id="center">
		<h2 class="form-signin-heading">注册<small>输入注册信息...</small></h2>
		<form method="post" class="form-sign" action="checkreg" role="form">
			<input name="email" class="form-control" placeholder="邮箱" type="email" autofocus>
			<input name="pass" class="form-control" placeholder="密码" type="password">
			<button class="btn btn-primary btn-block" type="submit">注册</button>
			<button class="btn btn-primary btn-block" type="button" onclick="javascript:window.location.href='login';">登录</button>
		</form>
	</div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>