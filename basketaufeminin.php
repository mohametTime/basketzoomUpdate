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
											
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>Parlons basket au féminin !</b></h2>
													<br>
												</div>
												
												<div class="s-para">
													
														Suzie Amougou,  élève.
<p><div>
<img src="images/blank/Suzy_Amougou1.JPG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>«Toute petite, je regardais les matchs de basket avec mes sœurs et mon papa, au début je n’étais pas tellement intéresser, mais quand je suis arrivée en classe de 4eme, j’ai commencé à voir les compétitions de basket et cela m’a vraiment plu. Je me suis essayé de jouer sur le terrain, un coach m’a interpelé et m’a dit que j’avais du talent et que je devrais intégrer une équipe de basket. Depuis ce jour-là, le basket est devenu une passion pour moi et cela fait déjà plus 4ans que j’y joue. Tous ce que je peux dire au jeunes qui comme moi aimerais faire du basketball, c’est de beaucoup travailler, suivre les enseignements du coach, et surtout l’école parce que les deux vont ensemble pour être un bon joueur de basket ».</p><br>
													
													Merveille Nkoyock, élève
<p><div>
<img src="images/blank/Merveille_Nkoyock.PNG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>«Le basket est un sport collectif ou l’on s’amuse. C’est Egalement un sport intellectuel qui nous permet aussi de beaucoup réfléchir et demande beaucoup d’effort physique. J’y joue depuis trois ans et comme nous sommes en compétition, l’adrénaline est en son maximum, d’ailleurs nos joueuses sont talentueuses et chacune fourni beaucoup d’effort  pour remporter la victoire. Le basket est un beau sport,  très élégant; donc pour toutes celles qui veulent s’y lancer, je ne peux que les encourager ».</p><br>
													
 
 
Morgan Nguekam, élève
 <p><div>
<img src="images/blank/Morgan_Nguekam.JPG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>« J’ai choisi de jouer au basket parce que c’est un sport très énergique, et de surcroit qui me plait beaucoup. Je le pratique depuis un an et il me permet de passer du temps bénéfiquement en exerçant une activité sportive. Déjà, Notre team affronte depuis plus d’une semaine les autres équipes féminines au championnat de la ligue régionale du centre. Je suis optimiste, je pense qu’on a nos chances de remporter cette compétition. Le basket est un sport de pratique ou il faut travailler dure et on s’y amuse aussi bien. Pour toutes les celles qui veulent s’y aventurer,  je les encourage fortement ».Morgan_Nguekam
 </p><br>
Nouague Cathérine, élève
<p><div>
<img src="images/blank/Nouague_Catherine1.PNG" alt="Use your own screenshot." style="float:left;width:160px;height:180px;" hspace="20">
</div>« Pour moi le basket est un sport collectif ou si tu gagnes, tu gagnes avec ton équipe, de sorte que tu n’es pas toute seule. Aussi au Basket, il y a vraiment de la discipline et c’est très énergique. J’y joue depuis un an et notre équipe participe à un championnat départemental. Nous jouons et nous nous entrainons ensemble sans compétitions. D’ailleurs nous sommes déjà presque comme des sœurs, c’est une petite famille que nous avons formé et ensemble nous sommes déterminer à gagner et je pense que nous irons loin ».</p>

 
	
												</div>
												</br>
												<div class="s-author">
													<p>By <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Brenda Ngoufack</a> &nbsp;&nbsp;</p>
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
											<textarea  placeholder="Message" required="" disabled></textarea>
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