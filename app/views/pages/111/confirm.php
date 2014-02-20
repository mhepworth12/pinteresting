<?php
include "ASEngine/AS.php";

if(!isset($_GET['k']) || !isset($_GET['email']))
    header("Location: signIn.php");
?>
<!doctype html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <title>Email Confirmation | Advanced Security</title>
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
    </head>
    <body>
        <div class="container">
            <div class="modal" id="confirm-modal">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><?php echo WEBSITE_NAME; ?></h3>
                        </div>
                        <div class="modal-body">
                            <div class="well">
                                <?php                                
                                $key = $_GET['k'];
                                $email = $_GET['email'];
                                $model=new ASModel($email);                                   
                                $result=$model->getInfo();
                                if (count($result) == 1) {
                                    if($result[0]["conformation_key"]==$key){                                        
                                        $result[0]["confirmed"]="Y";
                                        $model->updateInfo($result[0]);
                                        echo "<h4 class='text-success'>Email confirmed.</h4>";
                                        echo "<h5 class='text-success'>You can <a href='signIn.php'>log in</a> now.</h5>";
                                    }
                                    else{
                                        echo "<h5 class='text-error'>Wrong conformation key.</h5>";
                                    }
                                }
                                else
                                    echo "<h5 class='text-error'>User with this key doesn't exist in our database.</h5>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <script type="text/javascript">
                $(document).ready(function () {
                   $("#confirm-modal").modal({
                       keyboard: false,
                       backdrop: "static"
                   }); 
                });
            </script>
    </body>
</html>