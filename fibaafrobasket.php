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
												<img src="images/blank/afrobasket.jpeg" alt="Use your own screenshot.">
											</div>
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>BONNE CHANCE AUX COMPÉTITEURS DE LA "FIBA AFROBASKET" ! </b></h2>
													<br>
												</div>
												
												<div class="s-para">
													
													La 29ème édition du Championnat d'Afrique des Nations, connu sous le nom de "FIBA AfroBasket", aura lieu cette année du 19 au 30 août en Angola.

Compétition phare du Bureau régional africain de la Fédération Internationale de Basketball, elle rassemble la crème des joueurs de basketball masculin africains, qui évoluent dans les meilleurs championnats de basket-ball à travers le monde. A partir de cette année, cet événement aura lieu tous les quatre ans (et non plus tous les deux ans) sous le nom de FIBA AfroBasket Cup. Compétition importante, elle est en fait la première étape vers la coupe du monde de basketball, qui se tiendra en 2019. En effet, les équipes qualifiées pour la finale du FIBA AfroBasket 2017 seront en compétition à partir de novembre 2017 en vue d’une qualification pour la Coupe du Monde de Basket-ball FIBA. Pour en savoir plus, c’est ici.

Bonne chance à tous les compétiteurs de la FIBA Afrobasket : souhaitons-leur des matchs aussi intenses que lors des matches de basket féminin des Jeux de la Francophonie !

Pour rappel, le basketball féminin sera représenté aux VIIIes Jeux de la Francophonie, lors desquels 16 équipes nationales d’Etats différents s’affronteront.
													
													
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