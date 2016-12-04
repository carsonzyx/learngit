@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="btn-group">
					<button class="btn btn-default">
						Catalogue
					</button>
					<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Livres</a>
						</li>
						<li>
							<a href="#">Outils</a>
						</li>
						<li>
							<a href="#">Joujous</a>
						</li>
						<li>
							<a href="#">Vetements</a>
						</li>
						<li>
							<a href="#">Articles</a>
						</li>
						<li>
							<a href="#">Chaussures</a>
						</li>
						<li>
							<a href="#">Portables</a>
						</li>
						<li>
							<a href="#">Maquillages</a>
						</li>
						<li>
							<a href="#">Sacs</a>
						</li>

					</ul>
				</div>
				<table class="table">
					<thead>
						<tr>
							<th>
								IMG
							</th>
							<th>
								Product
							</th>
							<th>
								Upload Date
							</th>
							<th>
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="success">
							<td>
								<a href="#"><img  src="image/example1.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Un Sac à dos acheté un an peut être prêté MAX. UNE SEMAINE.</a>
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								Occupé
							</td>
						</tr>
						<tr class="warning">
							<td>
								<a href="#"><img  src="image/example2.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Un sac de CHANEL peut être prêté avec rémunération.</a>
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								À louer
							</td>
						</tr>
						<tr class="success">
							<td>
								<a href="#"><img  src="image/example3.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Céline Box à louer...</a>
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								À louer
							</td>
						</tr>
						<tr class="warning">
							<td>
								<a href="#"><img  src="image/example4.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Vous pouvez emprunter mon Hermès par récompenser!</a>
							</td>
							<td>
								01/04/2012
							</td>
							<td>
								Occupé
							</td>
						</tr>
						<tr class="success">
							<td>
								<a href="#"><img  src="image/example5.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Voulez vous un sac pour des cas importants? Connectez-moi!</a>
							</td>
							<td>
								02/04/2012
							</td>
							<td>
								Occupé
							</td>
						</tr>
						<tr class="warning">
							<td>
								<a href="#"><img  src="image/example6.jpg" width="200" height="200"></a>
							</td>
							<td>
								<a href="#">Faire votre voyage avec ce bagage. Petits frais!</a>
							</td>
							<td>
								02/04/2012
							</td>
							<td>
								Occupé
							</td>
						</tr>




						</tr>
					</tbody>
				</table>
				<ul class="pagination pagination-sm">
					<li>
						<a href="#">Prev</a>
					</li>
					<li>
						<a href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li>
						<a href="#">Next</a>
					</li>
				</ul>
			 <div>
				<a href="#" class="btn btn-primary" role="button">Ajouter un Article</a>
			 </div>
		   </div>
		</div>
		<hr />

		<div class="row">
			<div class="col-md-12">
				<div class="carousel slide" id="carousel-933434">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel-933434">
						</li>
						<li data-slide-to="1" data-target="#carousel-933434" class="active">
						</li>
						<li data-slide-to="2" data-target="#carousel-933434">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img alt="Carousel Bootstrap First" src="image/donner1.png" />
							<div class="carousel-caption">
								<h4>
									Complet!
								</h4>
								<p>
									Nous avons 9 espèces d'Articles pour vous!
								</p>
							</div>
						</div>
						<div class="item active">
							<img alt="Carousel Bootstrap Second" src="image/donner5.jpg" width="400" height="300" />
							<div class="carousel-caption">
								<h4>
									Petits Frais ou GRATUIT!
								</h4>
								<p>
									Les chooses que vous allez emprunter chargent peu mais coûtent plus! Quelquel sont gratuits à vous!
								</p>
							</div>
						</div>
						<div class="item">
							<img alt="Carousel Bootstrap Third" src="image/donner2.jpg" width="400" height="300"/>
							<div class="carousel-caption">
								<h4>
									Crédit!!
								</h4>
								<p>
									 Nous empruntons et prêtons. Nous utilisons notre crédit! C'est crédible et fiable!
								</p>
							</div>
						</div>
					</div> <a class="left carousel-control" href="#carousel-933434" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-933434" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>

	</div>
@endsection