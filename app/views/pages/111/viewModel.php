<?php
include 'templates/header.php';

 if(!$user->isAdmin())
    header("Location: index.php");
 
 if(!isset($_GET["viewModelEmail"])){
     header("Location: index.php");
 }
 else{
     $email=$_GET["viewModelEmail"];
     $model=new ASModel($email,$dynamoDB_client);
     $userDetails=$model->getDetails();
     $userInfo=$model->getInfo();
     $userInfo=$userInfo[0];
 }
?>
        
            <!-- Left nav
            ================================================== -->
            <div class="row">
              <div class="span12">   
                  <div class="user-images">
                      <h3>Photos</h3>                      
                      <?php
                      $folder_path=$userInfo["folder_path"]."/Photos";
                      
                      /*if(is_dir($folder_path)){
                        $photos = scandir( $folder_path."/Thumbnails");

                        $count=count($photos);
                        if($count>2){
                          for($i=2;$i<$count;$i++){
                              $photo=$folder_path."/Thumbnails/".$photos[$i];
                              print_r("<img class='viewModelPhotos' src=$photo />");
                          }
                        }
                      }*/
                      //array_map('unlink', glob("Users/Photos/*"));
                      //$folder_path=$userInfo["folder_path"]."/Photos";
                      
                      //listing folder contents on S3
                      $s3_client=new ASAmazonS3($userInfo["bucket"],$amazonS3_client);
                      $folder_contents=$s3_client->getFolderContents($folder_path);
                      
                      //getting number of items
                      $count =count($folder_contents);                      
                      
                      for($i=0;$i<$count;$i++){
                        
                        //get unique temporary name
                        //$uniqueStamp = date("U");
                        
                        //create new tmp file in Photos directory
                        //$filename = $uniqueStamp.".jpg";
                        //$filePath = "Users/Photos/".$filename;
                        //$fp = fopen($filePath ,"wb");                        
                        //download file from s3
                        $key=$folder_contents[$i]["Key"];
                        $src="https://s3.amazonaws.com/".$userInfo["bucket"]."/".$key;
                        //$result=$s3_client->downloadFromS3($folder_contents[$i]["Key"]);
                        
                        //write it in our new tmp file
                        //fwrite( $fp, $result["Body"]);
                        //fclose( $fp );
                        
                        //display it on screen
                        echo "<img class='viewModelPhotos' src='".$src."'></img>";
                        
                      }
                      ?>
                  </div>
                  <div class="user-info">
                      <?php
                            
                            $model_email = $userDetails["model_email"];
                            $first_name = $userDetails["first_name"];
                            $last_name = $userDetails["last_name"];
                            $birthday = $userDetails["birthday"];
                            $phone = $userDetails["phone"];
                            $city = $userDetails["city"];
                            $zip = $userDetails["zip"];
                            $state = $userDetails["state"];
                            $height = $userDetails["height"];
                            $weight = $userDetails["weight"];
                            $shoe = $userDetails["shoe"];
                            $dress = $userDetails["dress"];
                            $shirt = $userDetails["shirt"];
                            $bust = $userDetails["bust"];
                            $hair = $userDetails["hair"];                            
                            $ethnicity = $userDetails["ethnicity"];
                            $hourly_rate = $userDetails["hourly_rate"];
                            $date_rate = $userDetails["day_rate"];
                            $job1 = $userDetails["job1"]." Exp :". $userDetails["exp1"];
                            $job2 = $userDetails["job2"]." Exp :". $userDetails["exp2"];
                            $job3 = $userDetails["job3"]." Exp :". $userDetails["exp3"];                       
                            $cities = $userDetails["cities"];
                            
                            echo ("<span class='pink'>Email:</span><span id='viewModelEmail'>". $model_email."</span>");
                            print("<br/>");
                            echo ("<span class='pink'>First Name:</span> ". $first_name);
                            print("<br/>");
                            echo ("<span class='pink'>Last Name:</span> ". $last_name);
                            print("<br/>");
                            echo ("<span class='pink'>Birthday:</span> ". $birthday);
                            print("<br/>");
                            echo ("<span class='pink'>Phone:</span> ". $phone);
                            print("<br/>");
                            echo ("<span class='pink'>City:</span> ". $city);
                            print("<br/>");
                            echo ("<span class='pink'>Zip:</span> ". $zip);                            
                            print("<br/>");
                            echo ("<span class='pink'>State:</span> ". $state);
                            print("<br/>");
                            echo ("<span class='pink'>Height:</span> ". $height);
                            print("<br/>");
                            echo ("<span class='pink'>Weight:</span> ". $weight);
                            print("<br/>");
                            echo ("<span class='pink'>Shoe:</span> ". $shoe);
                            print("<br/>");
                            echo ("<span class='pink'>Dress:</span> ". $dress);
                            print("<br/>");
                            echo ("<span class='pink'>Shirt:</span> ". $shirt);
                            print("<br/>");
                            echo ("<span class='pink'>Bust:</span> ". $bust);
                            print("<br/>");
                            echo ("<span class='pink'>Hair:</span> ". $hair);
                            print("<br/>");
                            echo ("<span class='pink'>Favorite job:</span> ". $job1);
                            print("<br/>");
                            echo ("<span class='pink'>Second job:</span> ". $job2);
                            print("<br/>");
                            echo ("<span class='pink'>Third job:</span> ". $job3);
                            print("<br/>");
                            echo ("<span class='pink'>Cities you can work at:</span> ". $cities);
                            print("<br/>");
                            /*if(is_dir($folder_path)){
                                $resume = scandir( $folder_path."/Resume");
                                if(count($resume)>2){
                                    echo ("<span class='pink'>Resume:</span> <a href=".$folder_path."/Resume/".$resume[2].">Resume</a>");
                                }
                                print("<br/>");
                                $video = scandir( $folder_path."/Videos");
                                if(count($video)>2){
                                    echo ("<span class='pink'>Video:</span> <a href=".$folder_path."/Video/".$video[2].">Video</a>");
                                }                            
                            }*/
                      ?>
                  </div>
                  <div style="margin: 10px">
                      <?php 
                            print("<button style='margin-right:4px' id='viewModelApprove' class='btn btn-success'>Approve model</button>");
                            print("<button style='margin-right:4px' id='viewModelPending' class='btn btn-warning'>Pending</button>");
                            print("<button id='viewModelReject' class='btn btn-danger'>Reject model</button>");                            
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
