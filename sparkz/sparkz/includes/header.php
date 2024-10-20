<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparkz Hotelo - Hotel Management System</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/datepicker3.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

</head>
<body>
<div id="page"></div>
<div id="loading"></div>
<nav class="navbar navbar-custom navbar-fixed-top bg-info" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?dashboard"><img src="assets/img/logo.png" width="250px"></a>

            <ul class="nav navbar-top-links navbar-right">
        <li class="pull-left"><div id="google_translate_element"></div></li>
                <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-user"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <div class="">
        <div class="profile-userpic">
            <img src="assets/img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle text-center">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Manager</div>
        </div>
        <div class="clear"></div>
    </div>
                          <li><a href="#"><i class="icon-line-awesome-user"></i>
                                Profile
                            </a></li>
                              <li><a href="#"><i class="icon-material-outline-lock-open"></i>
                                Change Password
                            </a></li>
                        <li><a href="logout.php"><i class="icon-line-awesome-power-off"></i>
                                Logout
                            </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>