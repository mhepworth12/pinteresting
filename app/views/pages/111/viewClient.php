<?php
include 'templates/header.php';

 if(!$user->isAdmin())
    header("Location: index.php");
 
 if(!isset($_GET["viewClientEmail"])){
     header("Location: index.php");
 }
 else{
     $email = $_GET["viewClientEmail"];
     $client = new ASClient($email,$dynamoDB_client);
     $userDetails = $client->getDetails();
     $userInfo = $client->getInfo();
     $userInfo = $userInfo[0];
 }
?>
        
            <!-- Left nav
            ================================================== -->
            <div class="row">
              <div class="span12">   
                  <div class="user-info">
                      <?php                            
                            $company= $userDetails["company"];
                            $client_email=$userDetails["client_email"];
                            echo ("<span class='pink'>Email:</span> <span  id='viewClientEmail'>". $client_email."</span>");
                            print("<br/>");
                            echo ("<span class='pink'>Company:</span> ". $company);
                      ?>
                  </div>
                  <div style="margin: 10px">
                      <?php 
                            print("<button style='margin-right:4px' id='viewClientApprove' class='btn btn-success'>Approve client</button>");                            
                            print("<button id='viewClientReject' class='btn btn-danger'>Reject client</button>");                            
                      ?>
                      <button id='viewModelBack'class="btn btn-grey">Back</button>
                  </div>
              </div>
            </div>
        
    <?php include 'templates/footer.php'; ?>

    <script src="ASLibrary/js/asengine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="ASLibrary/js/users.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/bootstrap-lightbox.js" charset="utf-8"></script>

    
  </body>
</html>
