<?php  include_once("private/settings.php");
include_once(PATH."classes/User.php");
?>
<!DOCTYPE html>
 <html lang="en"> 
<head>
	<?php include("elements/login_head.php");?>
</head>
<style>
.login {
    background-color: #fff !important;
}
	.login .content {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 4px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
<?php include("actions/login.php");?>
<?php include("actions/register.php");?>
<body class="login">
	<div class="logo"><a class="brand" href="index.php">BLOGS</a></div>

	<div class="content">
			<?php include("pages/login.php");?>
			<?php include("pages/forgot_password.php");?>
			<?php include("pages/register.php");?>
	</div>
		<?php include("elements/footer.php");?>
		<?php include("elements/foot.php");?>
</body>
</html>