<?php include_once("private/settings.php");
include_once("private/checksession.php");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <?php include("elements/head.php"); ?>
</head>

<body class="page-header-fixed">
    <?php include("elements/header.php"); ?>
    <div class="page-container">
        <?php include("elements/left.php"); ?>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <ul class="breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.php">Home</a>
                                <i class="icon-angle-right"></i>
                            </li>
                            <li><a href="dashboard.php">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <?php include("elements/footer.php"); ?>
        <div class="footer-tools">
            <span class="go-top">
                <i class="icon-angle-up"></i>
            </span>
        </div>
    </div>
    <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/scripts/app.js" type="text/javascript"></script>
    <script src="assets/scripts/index.js" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {
        App.init();
    });
    </script>
</body>

</html>