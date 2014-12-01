<?php
include("header.php");
?>
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                         <?php if($loggedIn){
						 ?>
                         <!-- main col left --> 
                         <div class="col-sm-5">
                           
                              <div class="panel panel-default">
								<br/>
                                <p class="lead" style="text-align: center">Welcome "<?php echo $user['name']; ?>" to your profile!</p>
                                <div class="panel-thumbnail"><img src="assets/example/bg_5.jpg" class="img-responsive"></div>
                                 <div class="panel-body">
                                  <p>1,200 Followers, 83 Posts</p>
                                  <p>
                                    <img src="https://lh6.googleusercontent.com/-5cTTMHjjnzs/AAAAAAAAAAI/AAAAAAAAAFk/vgza68M4p2s/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                    <img src="https://lh4.googleusercontent.com/-6aFMDiaLg5M/AAAAAAAAAAI/AAAAAAAABdM/XjnG8z60Ug0/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                    <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
                                  </p>
                                </div>
                              </div>

                           
                              <div class="panel panel-default">
                                <div class="panel-heading"><h4>About me</h4></div>
                               	<div class="panel-body">
                                	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?     </div>
                              </div>

                           		
                           
                          </div>
                          
                          <!-- main col right -->
                          <div class="col-sm-7">
                              
							 <div class="well"> 
							   <form class="form-horizontal" role="form">
								<h4>What's New</h4>
								 <div class="form-group" style="padding:14px;">
								  <textarea class="form-control" placeholder="Update your status"></textarea>
								</div>
								<button class="btn btn-primary pull-right" type="button">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-upload"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-camera"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
							  </form>
							</div>
							<?php
							 if(@$user['name'] == '7amamaberg'){
							 ?>
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>My post</h4></div>
                                  <div class="panel-body">
								  <?php echo $key; ?>
                                  </div>
                               </div>
							 <?php
							 }
							 ?><br/>
                               <div class="panel panel-default">
                                 <div class="panel-heading"> <h4>Public post</h4></div>
                                  <div class="panel-body">
								  12/12/2012
                                   <hr>
                                  Lorem ipsum dolor sit amet, ei eos mutat cetero. Aperiri inciderint an vel, volutpat dissentiunt mea at. Mutat nostro vidisse has in. Ea pri equidem platonem ullamcorper, debet tempor instructior no eum.<br>
<br>
Sonet partiendo et est, tibique apeirian invenire ne vel. Agam wisi gloriatur has id, tota tempor albucius sit et. Te quodsi scribentur ius. Ad ius liber delicata, diam vide mediocrem vis ei.
<br><br>
Imperdiet intellegebat eos ne. His ut lorem vituperata. Mei eu ipsum nusquam, case ferri utinam qui ne. Accumsan gubergren his in, eu has libris mollis civibus. Sed at rebum debitis consequuntur. Ne quis nisl modus has, ad quidam deserunt definitionem sed, dicit nonumes temporibus per ei. Percipitur omittantur ne sit, ad nec nibh mucius.
<br><br>
Ex reque tibique denique quo, ei aliquam omnesque qui, at alii natum dignissim vix. Scripta adolescens te sed, justo munere cetero vim et. Nec at sonet eirmod deterruisset. Iriure nonumes convenire id mel, munere numquam facilisis ei eum. Animal argumentum appellantur ut mea. Qui vivendo accusam corrumpit et, doming tamquam nusquam per cu.
<br><br>
Oblique civibus imperdiet cu mei, ex his semper tamquam, vis altera nostro commune ut. Omnium antiopam eu vim. Tacimates electram has eu, impetus consulatu cu duo, eu latine periculis sea. In viris explicari consetetur duo. Ad erat falli accumsan vix, ad pri laudem aperiam. Vix at simul dolor deleniti. Vim ei movet ludus scriptorem, vis stet elit eirmod ut, denique copiosae ut pri.
                                  </div>
                               </div>
                            
                            
                          </div>
						  <?php
						  }else{
						  ?>
						  
                          <div class="col-sm-7">
								<style>
								.mtlpbm{
									line-height:1.5em;
								}
								.product_desc{
									float:left;
								}
								</style>
							  <div class="panel panel-default" style="padding:40px;padding-top:10px;">
									<div class="aaaa"><h1 class="inlineBlock _3ma _6n _6s _6v" style="padding: 42px 0 24px; font-size: 28px; line-height: 36px"> Connect with friends and the<br />world around you on Facebook. </h1><div class="mtlpbm"><div class="_6a _6b mrl" style="text-align: left; width: 65px;float:left"><img class="img" src="https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-xap1/t39.2365-6/851565_602269956474188_918638970_n.png" alt="" style="vertical-align: middle;float:left" /></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> See photos and updates </span><span class="mlm _6q _6t _mf"> from friends in News Feed. </span></div></div>
									<div style="clear:both"><br/></div>
									<div class="mtlpbm"><div class="_6a _6b mrl" style="text-align: left; width: 65px;float:left"><img class="img" src="https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-xap1/t39.2365-6/851585_216271631855613_2121533625_n.png" alt="" style="vertical-align: middle" /></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> Share what&#039;s new </span><span class="mlm _6q _6t _mf"> in your life on your Timeline. </span></div></div>
									<div style="clear:both"><br/></div>
									<div class="mtlpbm"><div class="_6a _6b mrl" style="text-align: left; width: 65px;float:left"><img class="img" src="https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-xap1/t39.2365-6/851558_160351450817973_1678868765_n.png" alt="" style="vertical-align: middle" /></div><div class="_6a _6b product_desc"><span class="mtl _3ma _6p _6s _6v"> Find more </span><span class="mlm _6q _6t _mf"> of what you&#039;re looking for with Graph Search. </span></div></div></div>
									<div style="clear:both"><br/></div>
							  </div>
						  </div>
                          <div class="col-sm-5">
							  <div class="panel panel-default" style="padding:40px">
								<a href="register.php">Join</a> 7amamaBook or <a href="login.php">login</a> to enjoy our website!
							 
							  </div>
						  </div>
						  <?php } ?>
                       </div><!--/row-->
                      
                      
				<?php include("footer.php"); ?>