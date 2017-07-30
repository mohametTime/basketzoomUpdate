<?php require 'header.php' ?>
			        
			<div id="page-wrapper">
				<div class="top-grids">
					<div class="top-grids-info">
						<!-- top-grid-right -->
						<div class="col-md-3 top-grid-right basket-top-grid-right s-top-grid-right">
							<div class="top-news features">
								<div class="top-news-heading">
									<h3>Top News</h3>
								</div>
								<?php require 'topnews.php' ?>
							</div>
							
						</div>
						<!-- //top-grid-right -->
						<!-- top-grid-left -->
						<div class="col-md-9 top-grid-left basket-top-grid-left">
							<!-- top-big-grids -->
							<div class="top-big-grids">
								<div class="col-md-8 top-grid-left-left s-top-grid-left-left">
									<div class="top-grid-left-left-grids">
										<div class="s-top-grid-left-img">
											<div data-video="JTZ0an6LDwU" id="video"> 
												<img src="images/f15.jpg" alt="Use your own screenshot."> 
											</div>
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>Basketball : Une relève assurée</b></h2>
													<br>
												</div>
												<div class="s-para">
													
 													
<article><p><div>«The next generation» camp organisé le 22 juillet dernier au complexe Noah par les internationales de Basketball camerounais, sous la présidence de Lonlack Ramses, elle-même joueuse professionnelle. Elles sont une vingtaine à avoir pris part à cette séance de coaching. Pendant toute une journée, nos internationales ont donné des conseils pratiques pour faire de ces joueuses  la prochaine relève dans le basketball Camerounais. Elles étaient nombreuses à exprimer leur joie d’y avoir participé :</div></p><br>
<strong>Assawoumi Milla Rebecca</strong>	
<p><div>
<img src="images/blank/Assawoumi_Milla_Rebecca.PNG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>« C’est ma première fois de participer à un camp et je suis vraiment heureuse d’y  être. Vraiment j’apprécie l’initiative de nos internationales d’avoir fait ce camp pour nous aider nous les jeunes basketteuses, afin de faire aussi de nous des futur internationales. Je m’y suis beaucoup amusé et j’ai   appris de nombreuses technique comme le ‘’step back’’. Les autres techniques n’étaient  vraiment pas faciles à faire mais je m’en suis bien sortie. Cathie Gane est mon idole et comme elle j’aimerai jouer dans le monde. Chez moi au Nord(Garoua), très peu de fille ose se lancer dans le basket. La famille d’abord l’accepte très difficilement, et en plus nombreuses d’en elles tombent enceinte et arrêtent de jouer.de plus au nord, les équipes ne viennent pas s'entraîner avec nous et le plus souvent o se retrouve avec une équipe de 2 à 5 filles. Malgré toutes ces contraintes, je suis contente d’être ici et j’encouragerai toutes  les jeunes filles à s'entraîner davantage pour qu’elles  aussi puissent avoir la chance comme nos grandes sœurs  ici présente de joueur dans le monde ».</p><br>
<strong>Midjang Marie</strong>
<p><div>
<img src="images/blank/Midjang_Mari.PNG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>« Je viens de la région L’Est et c’est ma première fois dans un Camp de basket à Yaoundé. C’est comme un centre de formation ou on encadre très bien. Je m’y sens à l’aise parce qu’ici on nous apprend les Bases du Basketball. Les entraînements sont vraiment intensifs comparé à ce que l’on fait chez nous. Je trouve que les internationales ont pris une bonne décision en organisant ce camp, parce qu’elles veulent aussi que nous arrivions à leur niveau, et puissions assurer la relève. Mon Idole à moi c’est Ramses Lonlack, et comme elle je vais travailler pour être moi aussi joueuse de Basketball professionnelle. C’est vrai que chez nous nous rencontrons beaucoup de difficultés du fait que nous n’avons pas de centre de formation, pas de championnats locaux non plus  même les infrastructures comme les stades manquent. Mais par la grâce de Dieu, je vais bosser dur pour que mon aussi, je puisse devenir internationale ».</p></article>  

													
													
												</div>
												</br>
												<div class="s-author">
													<p>Written By <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Brenda Ngoufack</a> &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> July 23, 2017 &nbsp;&nbsp; <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Comments (0)</a></p>
												</div>
											</div>
										</div>
									</div>
								
									<div class="comments-grid">
										<div class="comments-heading">
											<h3>Comments</h3>
										</div>
									
									</div>
									<div class="opinion">
										<h3>Leave Your Comment</h3>
										<form>
											<input  type="text" placeholder="Name" required="" disabled>
											<input type="text" placeholder="Email" required="" disabled>
											<textarea  placeholder="Message" required=""></textarea>
											<input  type="submit" value="SEND" disabled>
										</form>
									</div>
								</div>
				
				
								<!-- top-grid-left-right -->
								<div class="col-md-4 top-grid-left-right s-top-grid-left-right">
									<!-- most-view-grids -->
									<div class="today-match latest">
								<div class="today-match-heading latest-heading">
									<h3>CHRONO</h3>
								</div>
								<div class="match-grid latest-grid">
									<div id="design" class="date">
														<?php require 'chrono.php' ?>
														<script>
															function cycle($item, $cycler){
																setTimeout(cycle, 2000, $item.next(), $cycler);
																
																$item.slideUp(1000,function(){
																	$item.appendTo($cycler).show();        
																});
												
																}
															cycle($('#cycler div:first'),  $('#cycler'));
														</script>
													</div>
								</div>
							</div>
									<!-- //most-view-grids -->
								</div>
								<!-- top-grid-left-right -->
								<div class="clearfix"> </div>
							</div>
							<!-- //top-big-grids -->
						</div>
						<!-- //top-grid-left -->
						<div class="clearfix"> </div>
					</div>
				
				</div>
			</div>
			<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<div class="login-body">
											<div class="login-heading">
												<h3>Login</h3>
											</div>
											<div class="login-info">
												<form>
													<input type="text" class="user" name="email" placeholder="Email" required="">
													<input type="password" name="password" class="lock" placeholder="Password">
													<div class="forgot-top-grids">
														<div class="forgot-grid">
															<ul>
																<li>
																	<input type="checkbox" id="brand1" value="">
																	<label for="brand1"><span></span>Remember me</label>
																</li>
															</ul>
														</div>
														<div class="forgot">
															<a href="#">Forgot password?</a>
														</div>
														<div class="clearfix"> </div>
													</div>
													<input type="submit" name="Sign In" value="Login">
													<div class="signup-text">
														<a href="signup.html">Don't have an account? Create one now</a>
													</div>
													<hr>
													<h2>or login with</h2>
													<div class="login-icons">
														<ul>
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- //	Modal -->
			<!--footer section start-->
<?php require 'footer.php' ?>