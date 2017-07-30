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
													
												.
Erik Williams/Reuters <br>
													
La prestigieuse NBA a annoncé la tenue à Johannesburg, samedi 5 août 2017, d’un match de gala entre une équipe « Africaine » et une autre « Monde ». Une première rencontre sur le continent africain avait eu lieu en 2015. Adam Silver, commissaire de la NBA, salue « la croissance du basket en Afrique ». Le NBA Africa Game 2015 avait été un succès; la NBA et ses joueurs attendent beaucoup de ce nouvel épisode.

« Where amazing happens » (Où l’incroyable se produit en anglais) : c’est le slogan de la NBA (National Basketball Association), la fameuse ligue nord-américaine de basket-ball. Cet été, l’incroyable NBA s’offrira un nouveau détour par l’Afrique. C’est ce qu’ont annoncé les dirigeants de la ligue ce samedi 18 février : le NBA Africa Game aura droit à une suite en 2017. Ça se passera le 5 août à Johannesburg, en Afrique du Sud.<br>

<b>« Le basket connaît une croissance explosive en Afrique »</b><br>

24 heures avant la 66e édition du All-Star Game (match de gala réunissant les meilleurs joueurs de la NBA chaque année aux Etats-Unis), Adam Silver, commissaire de la NBA, a officialisé l’organisation d’un nouveau match en Afrique, deux ans après le premier. Le patron de la NBA était notamment accompagné d’Amadou Gallo Fall, vice-président de la NBA en charge de l’Afrique. « Le basket connaît une croissance explosive en Afrique. Notre retour à Johannesburg fait partie de l’engagement continu de la ligue pour apporter l’expérience authentique de la NBA à tous les fans à travers le monde », a déclaré Adam Silver depuis La Nouvelle-Orléans (Lousiane).

La NBPA (National Basketball Players Association, le principal syndicat des joueurs de la NBA), s’associe à l’organisation du NBA Africa Game 2017, qui aura lieu au Ticketpro Dome au nord de Johannesburg. Adam Silver salue les membres de la NBPA, « des partenaires formidables ». « Les joueurs de la NBA comptent parmi les sportifs les plus célèbres du monde. Nous sommes ravis de poursuivre la croissance de ce sport avec ce second match en Afrique », déclare Michele Roberts, directrice exécutive de la NBPA.

<br><b>Enorme succès en 2015 avec Batum, Diaw, Mutombo, Olajuwon…</b><br>

Le premier NBA Africa Game avait eu lieu le 1er août 2015 à l’Ellis Park Arena de Johannesburg. Une « Team Africa », composée de joueurs africains ou d’origine africaine, avait affronté une sélection de joueurs de la NBA réunis sous la bannière « Team World ». Côté « Team Africa », on trouvait notamment Nicolas Batum (France/Cameroun), Boris Diaw (France/Sénégal), Bismack Biyombo (RDC), Serge Ibaka (Espagne/Congo), Luol Deng (Grande-Bretagne/Soudan du Sud) ainsi que deux retraités légendaires de la NBA, Dikembe Mutombo (Etats-Unis/RDC) et Hakeem Olajuwon (Etats-Unis/Nigeria).

Dans les rangs de la « Team World », on trouvait entre autres les deux frères espagnols Marc et Pau Gasol, le Monténégrin Nikola Vucevic et les Américains Jeff Green et Chris Paul. La « Team World » s’était imposée de peu (101-97) après avoir été menée durant les trois premiers quarts-temps.

« Le NBA Africa Game 2015 eut un succès retentissant et nous sommes reconnaissants pour le soutien des joueurs et des équipes qui y ont contribué. (…) J’espère que les fans de toute l’Afrique nous rejoindront », déclare Amadou Gallo Fall. Bismack Biyombo, l’un des meilleurs joueurs d’Orlando Magic, sera de nouveau dans la « Team Africa ». Son compatriote congolais Emmanuel Mudiay, joueur des Denver Nuggets et étoile montante en NBA, sera présent aussi. « Ce fut un honneur et un privilège de jouer lors du premier match NBA en Afrique en 2015. J’attends avec impatience un autre super match en août », a confié Biyombo. Pour Mudiay, disputer un match de NBA en Afrique est « un rêve qui devient réalité »..
												</div>
												</br>
												<div class="s-author">
													<p>Posted By<i class="fa fa-user" aria-hidden="true"></i> Admin &nbsp;&nbsp;</p>
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