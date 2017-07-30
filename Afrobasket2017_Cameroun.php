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
												<img src="images/blank/cameroun.png" alt="AFROBASKET 2017 : LE CAMEROUN">
											</div>
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>AFROBASKET 2017 : LE CAMEROUN SANS JOEL EMBIID, PASCAL SIAKAM ET JÉRÉMY NZEULIE </b></h2>
													<br>
												</div>
												
												<div class="s-para">
													
													Les deux joueurs NBA et le meneur de Chalon – sur – Saône ne figurent pas sur la liste des Lions convoqués pour l’Afrobasket 2017. La Fédération camerounaise de basket-ball (Fecabasket) vient de communiquer la liste des joueurs retenus pour le stage préparatoire devant démarrer le 1er août ; et n’y figure pas Joel Embiid, Pascal Siakam et Jeremy Nzeulie.

Blessé au genou gauche au mois de mars, Joël Embiid qui a vu sa première saison NBA être écourtée, intensifie actuellement son travail physique pour un retour à la compétition en octobre. Le pivot ayant manqué ses deux premières saisons à cause de blessures récurrentes au pied droit, les dirigeants de son club ne veulent pas courir le risque de voir The Process se blesser de nouveau.

Élu MVP des finales de la Ligue de Développement (D-League) de la NBA avec 23 points, 9 rebonds et 3 assists de moyenne sur la série, Pascal Siakam est en quête d’une place au sein de l’équipe première des Toronto Raptors. Auteur d’une ligue d’été dans laquelle il a joué les premiers rôles, le natif de Douala est en quête de temps de jeu au sein d’une équipe qui s’est fixé pour objectif cette année, le titre NBA de champion de la conférence Est.

Quant à Jeremy Nzieulie récent MVP de la finale de Pro A avec son club de Chalon- sur – Saône, cette 29ème édition de l’Afrobasket co-organisée par le Sénégal et la Tunisie et devant se tenir du 8 au 16 septembre prochain, coïncide avec la reprise du championnat de France de basket-ball.

Les Lions entrent en stage d’une semaine, le lundi 1er août au Palais polyvalent des sports de Yaoundé. Puis, ils se rendront au Brésil pour une préparation d’un mois avant de rallier Tunis où ils livreront le match d’ouverture de la compétition face au pays hôte, la Tunisie.
													
													
												</div>
												</br>
												<div class="s-author">
													<p>Posted By <a href="http://www.newsbasket-beafrika.com/2017/07/afrobasket-2017-le-cameroun-sans-joel-embiid-pascal-siakam-et-jeremy-nzeulie.html"><i class="fa fa-user" aria-hidden="true"></i> Admin</a> &nbsp;&nbsp;  &nbsp;&nbsp; <i class="fa fa-comments" aria-hidden="true"></i> Comments (0)</p>
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