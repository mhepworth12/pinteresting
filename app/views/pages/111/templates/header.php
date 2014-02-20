<?php
include 'ASEngine/AS.php';
if(!$login->isLoggedIn())
    header("Location: signIn.php");

$email = ASSession::get("user_email");
$user = new ASUser($email,$dynamoDB_client);
$role = $user->getRole();
if($role=="model"){
    header('Location: model/index.php');
    /*$model=new ASModel($email,$dynamoDB_client);
    $userDetails=$model->getDetails();*/
}else if($role=="client"){
    $client = new ASClient($email,$dynamoDB_client);
    $userDetails = $client->getDetails();
}
$result = $user->getInfo();
$userInfo = $result[0];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home | Advanced Security</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Advanced Security - PHP MySQL Register/Login System">
    <meta name="author" content="Milos Stojanovic">
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <?php if(BOOTSTRAP_VERSION == 2): ?>
        <link rel='stylesheet' href='css/bootstrap.min2.css' type='text/css' media='all' />
        <script type="text/javascript" src="js/bootstrap.min2.js"></script>
        <link rel='stylesheet' href='ASLibrary/css/style2.css' type='text/css' media='all' />
    <?php else: ?>
        <link rel='stylesheet' href='css/bootstrap.min3.css' type='text/css' media='all' />
        <script type="text/javascript" src="js/bootstrap.min3.js"></script>
        <link rel='stylesheet' href='ASLibrary/css/style3.css' type='text/css' media='all' />
    <?php endif; ?>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/bootstrap3-glyphicons/bootstrap-glyphicons.css" rel="stylesheet">

    <link rel='stylesheet' href='css/bootstrap-lightbox.min.css' type='text/css' media='all' />
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>
    <div id="wrap">
            <!-- Navbar
            ================================================== -->
            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
                    <ul class="nav navbar-nav"> 
                        <a class="brand navbar-brand" href="./index.php"><?php echo WEBSITE_NAME;  ?></a>
                    </ul>
                    <div class="pull-right">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Welcome, <?php echo $userInfo['email'];  ?> <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="active">
                                        <a href="index.php">
                                            <i class="icon-home glyphicon glyphicon-home"></i>                                            
                                            Home
                                        </a>
                                    </li>
                                    <li><a href="profile.php"><i class="icon-user glyphicon glyphicon-user"></i> My Profile</a></li>
                                    <li class="divider"></li>
                                    <?php if($user->isAdmin()): ?>
                                    <li>
                                        <a href="users.php">
                                            <i class="icon-fire glyphicon glyphicon-fire"></i>                                            
                                            Users
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <?php endif; ?>
                                    <li><a href="logout.php" id="logout"><i class="icon-off glyphicon glyphicon-off"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                      </div>
                </div>
              </div>
            </div>
        
        
          <div class="container">