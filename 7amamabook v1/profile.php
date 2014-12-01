<?php
include("header.php");
?>
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                           
							  <div class="panel panel-default">
								<br/>
                                <p class="lead" style="text-align: center"><?php echo secure($_GET['user']); ?>'s profile</p>
                                <div class="panel-thumbnail"><img src="assets/example/bg_4.jpg" class="img-responsive"></div>
                                 <div class="panel-body">
                                  <p>100 Followers, 1 Post</p>
                                  <p>
                                    <img src="https://lh6.googleusercontent.com/-5cTTMHjjnzs/AAAAAAAAAAI/AAAAAAAAAFk/vgza68M4p2s/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                    <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                  </p>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading"><h4>About <?php echo secure($_GET['user']); ?></h4></div>
                               	<div class="panel-body">
                                	Hello there! </div>
                              </div>

                           		
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                              
                             <?php
							 if(@$user['name'] == $_GET['user'] && $user['name'] == '7amamaberg'){
							 ?>
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>My post</h4></div>
                                  <div class="panel-body">
								  <?php echo $key; ?>
                                  </div>
                               </div>
							 <?php
							 }else{
							 ?>
							 
							 
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>Private post</h4></div>
                                  <div class="panel-body">
								  Sorry, you can't view this post.<br/>This post's privacy is set to "Only me"
                                  </div>
                               </div>
							 <?php
							 }
							 ?>

                            
                            
                          </div>
                       </div><!--/row-->
                      
                      
				<?php include("footer.php"); ?>