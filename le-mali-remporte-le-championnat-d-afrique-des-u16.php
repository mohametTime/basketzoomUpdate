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
												<img src="images/blank/mali1.png" alt="LE MALI REMPORTE LE CHAMPIONNAT D'AFRIQUE DES U16">
											</div>
											<div class="clearfix"> </div>
											<div  class="single-img-grid">
												<div class="s-author">
													<h2> <b>LE MALI REMPORTE LE CHAMPIONNAT D'AFRIQUE DES U16, SIRIMAN KANOUTE ÉLU MVP DU TOURNOI </b></h2>
													<br>
												</div>
												
												<div class="s-para">
												PHOENIX (FIBA U16 African Championship 2017) - Le Mali a remporté son tout premier titre de Champion d'Afrique des U16 après avoir battu dimanche en finale de l'édition 2017 l'Égypte par 76-65, à Phoenix, île Maurice.

Siriman Kanoute qui a porté le Mali a fini meilleur marqueur de son équipe avec 17 points, il a aussi réalisé 9 passes décisives. Côté égyptien, c'est Momen Mohamed Hassan qui a été le plus prolifique, terminant meilleur marqueur du match avec 22 points. Ses coéquipiers Aly Khalifa et Omar Morsy ont cumulé 33 points, mais ce fût insuffisant pour offrir la victoire à son équipe.

Plus tôt dans la journée, l'Algérie a remporté le match pour la 3ème place en disposant de la Tunisie 57-54 Kanoute a été désigné MVP du tournoi, et figure dans le "5 majeur" de la compétition, en compagine de Faiez Ghomrassi (Tunisie), Aly Abdelrahman Khalifa(Egypt), Thierry Nkundwa(Rwanda) et Oumar Ballo(Mali).
													<br><b>Le classement final du Championnat d'Afrique des U16 FIBA 2017</b><br>

													1. Mali<br>2. Egypte<br>3. Algérie<br>4. Tunisie<br>5. Madagascar<br>6. Rwanda<br>7. Mozambique<br>8. Maurice
												</div>
												</br>
												<div class="s-author">
													<p>Posted By <a href="http://www.newsbasket-beafrika.com/2017/07/le-mali-remporte-le-championnat-d-afrique-des-u16-siriman-kanoute-elu-mvp-du-tournoi.html"><i class="fa fa-user" aria-hidden="true"></i> newsbasket-beafrika.com</a> &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> Juillet 24, 2017 &nbsp;&nbsp; <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Comments (0)</a></p>
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