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
											<div>
												<img src="images/blank/basketball_03.jpg" alt="Use your own screenshot.">
											</div>
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>AFROBASKET 2017 : L’ORGANISATION ACCORDÉE À LA TUNISIE ET AU SÉNÉGAL</b></h2>
													<br>
												</div>
												
												<div class="s-para">
													
												La Tunisie a obtenu l’organisation de l’Afrobasket 2017 conjointement avec le Sénégal. La FIBA a accordé l’organisation de la compétition aux deux pays. C’est ce qu’a annoncé la Fédération tunisienne de basketball (FTBB), dans un communiqué publié vendredi 30 juin 2017, en précisant que la Tunisie accueillera, du 8 au 10 septembre, 8 équipes pour le 1er tour et 8 autres disputeront leur match au Sénégal.

En effet, 16 équipes seront réparties en quatre groupes de quatre. Deux groupes disputeront le premier tour au Sénégal tandis que les deux autres joueront en Tunisie du 8 au 10 septembre. Les quarts de finales, la demi-finale et la finale de cette compétition auront lieu, du 14 au 16 septembre, en Tunisie.

Le Congo initialement désigné pour accueillir du 19 au 30 août prochain, l’Afrobasket 2017 s’était désisté officiellement pour des motifs financiers. Outre la Tunisie, 15 sélections africaines disputeront l’Afrobasket. Il s’agit de l’Angola, l’Afrique du Sud, le Cameroun, la République Centrafricaine, la Côte d’Ivoire, l’Egypte, la Guinée, le Mali, le Maroc, le Mozambique, le Nigéria (tenant du titre), l’Ouganda, la RD Congo, le Rwanda et le Sénégal.

La Tunisie, malgré une longue tradition, n’a remporté qu’un seul titre africain. C’était en 2011 aux dépens de l’Angola, qui affiche pourtant un record continental avec 11 titres devant l’Egypte et le Sénégal.  Le championnat d’Afrique des nations de basket (AfroBasket) a lieu tous les deux ans. Il est qualificatif soit pour les Jeux olympiques soit pour le Championnat du monde.	
												</div>
												</br>
												<div class="s-author">
													<p>Posted By <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a> &nbsp;&nbsp;</p>
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