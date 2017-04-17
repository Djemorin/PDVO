<?php
    $head = "<title>Page Portfolio - ".$type." ".$author."</title>";
    $page = 'portfolio';

    //Screen decript
    $req=$db->query('SELECT * FROM user_portfolio ORDER BY role ASC');
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$role=0;
?>
	<!-- Introduction Row -->
		<div class="col-lg-12 col-xs-12">
			<h1 class="page-header">Trombinoscope
					<small>Les apprenants d'Armor Code</small>
				</h1>
			<p>1ere Promotion 2016 - 2017, la formation d'Armor Code à l'AFPA de Langueux, se divise en deux catégories,
				<br /> - Designers Web : <a href="#1a">Chargé(e)s de projet numérique</a>
				<br /> - Développeurs Web : <a href="#2a">Développeurs logiciel</a>
				<br /> - Formateurs Afpa : <a href="#3a">Les Facilitateurs</a>
				<br /> - Formation Armor_Code : <a href="#4a">l'équipe</a></p>
		</div>
	<?php 
	foreach  ($req as $row) {
		if ($role!=$row['role']){
			 $role=$row['role'];

			 ?>
	<!-- Team Members Row  -->
				<div class="row">

					<div class="col-lg-12 col-xs-12">
					<div id='<?= $role?>a'></div>
						<h2 class="page-header" style="margin-top: 66px;" ><?=$row['statut']?></h2>
					</div>
				</div>
	<?php
		}
		$description = preg_replace('/&lt;script&gt;/', 'Je Suis Un Gros Lamer Qui Tente D\'executer Du Xss Sur Le Site Comme Un Gros NoOoOOooB', $row['description']);
	?>
	<!-- début block team-member  -->
		<div class="col-lg-2 col-sm-6 col-md-4 col-xs-4 text-center team-member">
			<img class="img-circle img-responsive img-center" src="<?=$row['image']?>" alt="CPNum" data-toggle="modal" type="button" data-target="#<?=$row['id']?>">
			<!-- Modal -->
			<div id="<?=$row['id']?>" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="closed" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><?=$row['prenom']?> <?=$row['name']?></h4>
						</div>
						<div class="modal-body">
							<img src="<?=$row['image']?>" alt="<?=$row['prenom']?> <?=$row['name']?>" />
							<h4><?=$row['statut']?></h4>
							<?=$description?>
						</div>
					<div class="modal-footer">
						<ul class="list-inline social-icons icon-circle icon-rotate list-unstyled list-inline">
							<li>
								<a href="<?=$row['facebook']?>" target="_blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="<?=$row['twitter']?>" target="_blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="<?=$row['github']?>" target="_blank"><i class="fa fa-github fa-fw fa-3x"></i></a>
							</li>
						</ul>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
					</div>
					</div>
				</div>
			</div>
	<!-- End Modal Content -->
			<div class="member-thumb">
				<h5><?=$row['prenom']?> <?=$row['name']?><br/>
									<small><?=$row['poste']?></small>
							</h5>
				<h6><?=$row['statut']?><h6>
			</div>
		</div>
	<!-- Fin block team-member -->

	<?php	
	}
	?>	