<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录-短信云轰炸</title>
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
		<h2 class="form-signin-heading">登录<small>登录你的帐号...</small></h2>
		<p class="text-right"></p>
		<form method="post" class="form-sign" action="checklog" role="form">
			<input name="email" class="form-control" type="email" placeholder="邮箱" autofocus>
			<input name="pass" class="form-control" type="password" placeholder="密码">
			<button class="btn btn-primary btn-block" type="submit">登录</button>
			<button class="btn btn-primary btn-block" type="button" onclick="javascript:window.location.href='reg';">注册</button>
		</form>
	</div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>