<?php 
include("connexion.php");


$query = "SELECT * FROM  medecin  WHERE nom = 'Cherkaoui'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
    
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- bootstrap js -->
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"
></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"
></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
	<title>Espacemedecin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="img/Layer 1.png" alt="" class="img"/>
			<span class="text">Shifae</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#info">
					<i class='bx bxs-dashboard' ></i>
					
					<span class="text">Mes informations </span>
				</a>
			</li>
			<li>
				<a href="#specia">
					<i class='bx bx-task'></i>				
						<span class="text">Specialité</span>
				</a>
			</li>
			<li>
				<a href="#experience">
					<i class='bx bx-spreadsheet'></i>			
							<span class="text">Expérience</span>
				</a>
			</li>
			<li>
				<a href="#description">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Description</span>
				</a>
			</li>
			<li>
				<a href="#lieux">
					<i class='bx bxs-map'></i>			
					<span class="text">Lieux</span>
				</a>
			</li>
			<li>
				<a href="#tarif">
					<i class='bx bxs-badge-dollar'></i>		
								<span class="text">Tarif</span>
				</a>
			</li>
			<li>
				<a href="#rend">
					<i class='bx bxs-spreadsheet'></i>
					<span class="text">Rendez-vous</span>
				</a>
			</li>
		</ul>
	
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Paramétre</span>
				</a>
			</li> -->
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Se déconnecter</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Catégorie</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Chercher...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="invoice" >
			
			<div class="head-title" id="info">
				<div class="left" >
					<h1>Mes informations</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Info</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Accueil</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download" id="download" >
					<i class='bx bxs-cloud-download' ></i> 
					  <span class="text"  >Télécharger Pdf</span>
				</a>
			</div>
				<!-- DOCTEUR INFORMATION -->
				<div class="grand">
				<div class="premier">
			<ul class="box-info" id="hidden">
				
				<li>
				<!-- ----------------AFFICHAGE DU PROFIL----------- -->
				<!-- <img src="img/black.jpg" alt="" class="profile"/> -->
				<?php
				//   $profil="SELECT photo FROM  medecin  WHERE nom = 'Cherkaoui'";
				//   mysqli_query($conn,$profil);
				
                echo'<img class="profile" src = "data:image/jpg;base64,' . base64_encode("$row[photo]") . '" width = "162px" height = "147px"/>';
			
				 		
				?>
				<span class="text">
					<!-- La variable ou on a stockes le nom du medecin sera utilise ici  -->
					<!-- ----------------AFFICHAGE DU NOM----------- -->
					<h3><?php 
					// $ge="SELECT genre FROM  medecin  WHERE nom = 'Cherkaoui'";
					// $genre=mysqli_query($conn,$ge);
					
					
	
								if( "$row[genre]"== 'femme') echo'Mme.';
								else echo'Mr.';
								echo "$row[nom] $row[prenom] ";

						?>   
					</h3>
					<!-- ----------------AFFICHAGE DU SPECIALITE----------- -->
					<p><?php 
					// $spec="SELECT specialite FROM  medecin  WHERE nom = 'Cherkaoui'";
					// $specialite=mysqli_query($conn,$spec);
					
				        echo"$row[specialite]";
						
						?>   
					 </p>
					
				</span>
				<span id="icon"><i class=' box bx bxs-cog' ></i>
				 </span>
				</div>
			</li>
							
			</ul>
			<!-- DOC INFO MODIFIER -->
			<div class="deuxieme">
			<ul class="  box-info" id="ji">
				
				<li>
				<img src="img/black.jpg" alt="" class="profile"/>
				<span class="text">
					<!-- <h3>Dr.Slimani Mohammed</h3> -->
					<h3><?php 
					// $ge="SELECT genre FROM  medecin  WHERE nom = 'Cherkaoui'";
					// $genre=mysqli_query($conn,$ge);
					$query = "SELECT * FROM  medecin  WHERE nom = 'Cherkaoui'";
					$result = mysqli_query($conn,$query);
					$row = mysqli_fetch_array($result);
					if( "$row[genre]"== 'femme') echo'Mme.';
								else echo'Mr.';
								echo "$row[nom] $row[prenom] ";

						?>   
					</h3>
					<input type="text" name="bio" placeholder="   remplir votre bio "/>
					
				</span>
				<span ><input type="submit" name="submit" id="sub"></i>
				 </span>

			</li>
							
			</ul>
			</div>
			</div>
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			

			<div class="table-data" >
				<div class="order" id="specia">
					<div class="head">
						<i class='bx bx-task'></i>	
						<h3> Spécialités & Etats de santé </h3>
						
					</div>
					<div class="div-spec">
					<div class="spec etat ">
						 <h5>
					<!-- ----------------AFFICHAGE DU SPECIALITE----------- -->
						 <?php 
					// $specialite="SELECT specialite FROM  medecin  WHERE nom = 'Cherkaoui'";
					// mysqli_query($conn,$specialite);
					$query = "SELECT * FROM  medecin  WHERE nom = 'Cherkaoui'";
					$result = mysqli_query($conn,$query);
					$row = mysqli_fetch_array($result);
				        echo"$row[specialite]";
						
						?>   
						</h5>
					</div>
					<!-- <div class="spec etat"> <h5> généraliste</h5></div>  -->
					<div class="a"></div>
					<!-- <div class="spec "> <h5> Rhinite  </h5></div>
					<div class="spec "> <h5> Branchite</h5></div>
					<div class="spec "> <h5> Infection </h5></div>
					<div class="spec "> <h5> Grippe</h5></div>
					<div class="spec "> <h5> Constipation</h5></div> -->
					<div class="spec "> <h5> Fatigue</h5></div>
					<div class="spec "> <h5> Douleur </h5></div>
					<div class="spec "> 
						<h5> 
							<!-- ----------------AFFICHAGE DU SYMPTOME----------- -->
						<?php 
					// $specialite="SELECT etatdesante FROM  medecin  WHERE nom = 'Cherkaoui'";
					// mysqli_query($conn,$specialite);
				        echo"$row[etatdesante]";
						
						?>   

						</h5>
					</div>

					</div >
					<i class='regler bx bxs-cog' ></i>

				
				</div>
				<div class="todo" id="lieux">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.1700762654114!2d-1.8985282853180223!3d34.65040749341878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd787cbdbf96caef%3A0x23a99f5d4e9a3161!2s%C3%89cole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es!5e0!3m2!1sfr!2sma!4v1649764431839!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
			</div>
			<div class="table-data">
				<div class="order " id="experience">
					<div class="head">
						<i class='bx bx-spreadsheet'></i>
						<h3>Expérience</h3>
						
					</div>
					<div class="experience">
						<ul>
							<li> 
							</li>
							<!-- ----------------AFFICHAGE DE L EXPERIENCE----------- -->
							<?php 
								
					// $experience="SELECT experience FROM  medecin  WHERE nom = 'Cherkaoui'";
					// mysqli_query($conn,$experience);
					$query = "SELECT * FROM  medecin  WHERE nom = 'Cherkaoui'";
						$result = mysqli_query($conn,$query);
						$row = mysqli_fetch_array($result);
				        echo"$row[experience]";
						
						?>   
							<!-- <li>Stage en médecin générale -Centre hospitaliers chateaubriant ,Nozay . Pouancé.</li>
							<li>Consultation 7 sur 7 . Nice </li>
							<li>e-formation ERS: Bronchectasies non CF</li>
							<li>e-formation ERS : Palliative Care in Respiratory Medicine</li>
							<li>e-formation ERS : Respiratory problems in neuromuscular disease</li> -->
						</ul>

					</div>
					<i class='regler bx bxs-cog' ></i>

				</div>
				</div>
				<div class="table-data">
					<div class="order" id="description">
						<div class="head">
							<i class='bx bxs-message-dots' ></i>
							<h3>Description </h3>
							
						</div>
						<div>
							<!-- ----------------AFFICHAGE DE la description----------- -->

						<?php 
					// $description="SELECT description  FROM  medecin  WHERE nom = 'Cherkaoui'";
					// mysqli_query($conn,$description);
				        echo"$row[description]";
						
						?>   
							<!-- Médecin Généraliste fort de plus de 9 années d'experience dans le domaine médicale.
Connaissances approfondies des services de la médcine générale,de la pédiatrie et 
des soins non urgents.Organisé et sachant se rendre utile.Capacité à interagir avec les 
professionnels de santé ,les patients et leurs familles .Expertise des principes 
médicaux et des produits pharmaceutiques. -->
						</div>
						
					</div>
					<i class='regler bx bxs-cog' ></i>

					</div>
					<div class="table-data">
						<div class="order" id="tarif">
							<div class="head">
								<i class='bx bxs-badge-dollar'></i>	
								<h3>Tarif</h3>
								
							</div>
							<table >
								<?php
								
								$query = "SELECT * FROM  medecin  WHERE nom = 'Cherkaoui'";
                                $result = mysqli_query($conn,$query);
                                $row = mysqli_fetch_array($result);
								
								?>
								<thead>
									<tr>
										<th>Type de consultation </th>
										<th>Prix</th>
										<th>Etat</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											
											<p>Consultation à domicile </p>
										</td>
										<td><?php echo"$row[tarifdom]"?></td>
										<td><span class="status  pending">Modifier</span></td>
									</tr>
									<tr>
										<td>
											<p>Consultation au cabinet</p>
										</td>
										<td><?php echo"$row[tarifcabinet]"?></td>
										<td><span class="status pending">Modifier</span></td>
									</tr>
									<tr>
										<td>
											
											<p>Consultation en ligne</p>
										</td>
										<td><?php echo"$row[tarifenligne]"?> </td>
										<td><span class="status  pending">Modifier</span></td>
									</tr>
									
								</tbody>
							</table>

						</div>
					<i class=' regler n bx bxs-cog' ></i>
					
						</div>
			<!-- rendez-vous -->
			<div class="table-data">
				<div class="order" id="rend">
					<div class="head">
						<i class='bx bxs-spreadsheet'></i>
						<h3>Rendez-vous</h3>
						
					</div>
					<table>
						<thead>
							<tr>
								<th><i class='bx bx-user-circle'></i>
									Nom complet </th>
								<th><i class='bx bx-sitemap'></i>Type de prise</th>
								<th><i class='bx bxs-time'></i>Date</th>
							</tr>
						</thead>
						<tbody>
							<div>
								<!-- RD 0 -->
							<tr id="button">
								<td>
									Rim Hassani Idrissi
								</td>
								<td>consultation à domicile</td>
								<td><span > Jeudi 05 2022 à 10h</span></td>
								<td class="details " tabindex="1"><i  class='bx bxs-user-detail'></i></td> 
							<div>
							<tr id="div">
								<td>Num tele: &nbsp;  0643121320 </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;FA678234 </br></br> Gmail: &nbsp; &nbsp; &nbsp; ghizlanekassimi8@gmail.com</br></br></td>
								
							</tr>
							<!-- RD 1 -->
							<tr id="button1">
								<td>
									Ghizlane Kassimi
								</td>
								<td>Consultation au cabinet</td>
								<td><span >Jeudi 05 2022 à 11h</span></td>
								<td class="details " tabindex="1"><i class='bx bxs-user-detail'></i></td>

							</tr>
							<tr id="div1">
								<td>Num tele: &nbsp;  0643121320 </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;FA678234 </br></br> Gmail: &nbsp; &nbsp; &nbsp; ghizlanekassimi8@gmail.com</br></br></td>
								
							</tr>
							<!-- RD2 -->
							<tr id="button2">
								<td>
									
									<p>Chaimae El beqqal</p>
								</td>
								<td> Consultation au cabinet </td>
								<td><span>Lundi 09 mai à 15h </span></td>
								<td class="details " tabindex="1"><i class='bx bxs-user-detail'></i></td>

							</tr>
							<tr id="div2">
								<td>Num tele: &nbsp;  0643121320 </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;FA678234 </br></br> Gmail: &nbsp; &nbsp; &nbsp; ghizlanekassimi8@gmail.com</br></br></td>
								
							</tr>
							<!-- RD 3 -->
							<tr id="button3">
								<td>
									
									<p>Chourouk el boujdaini</p>
								</td>
								<td> Consultation en ligne </td>
								<td><span>Mardi 07 Avril à 16h </span></td>
								<td class="details " tabindex="1"><i class='bx bxs-user-detail'></i></td>

							</tr>
							<tr id="div3">
								<td>Num tele: &nbsp;  0643121320 </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;FA678234 </br></br> Gmail: &nbsp; &nbsp; &nbsp; ghizlanekassimi8@gmail.com</br></br></td>
								
							</tr>
							<!-- RD4 -->
							<tr id="button4">
								<td>
									<p>maryam tahir</p>
								</td>
								<td> Consultation en ligne </td>
								<td><span>Mardi 08 Avril à 16h </span></td>
								<td class="details " tabindex="1"><i class='bx bxs-user-detail'></i></td>

							</tr>
							<tr id="div4">
								<td>Num tele: &nbsp;  0643121320 </br></br> CIN:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;FA678234 </br></br> Gmail: &nbsp; &nbsp; &nbsp; ghizlanekassimi8@gmail.com</br></br></td>
								
							</tr>
							
						</tbody>
					</table>
				</div>
				<i class='regler h bx bxs-cog' ></i>

				</div>
			</div>

		</main>


	
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	

	<script src="script.js"></script>
</body>
</html>