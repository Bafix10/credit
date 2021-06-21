<?php
// $host='localhost';
// $dbname='bd_form';
// $login = 'admin';
// $mdp = 'azerty';
$source =  "mysql:host=localhost;dbname=bd_form";
$login = "admin";
$mdp = "azerty";

try{
	$db = new PDO ($source, $login, $mdp); 
	// $newBD = new PDO("mysql:host=localhost;dbname=bd_form;charset=utf8",'root',' ');
	echo "connexion etablie";
	}

catch (PDOException $e){
	die ('Erreur: '.$e->getMessage());
	
}

// if (isset($_POST['nom'])&&
    // isset($_POST['prenom'])&&
    // isset($_POST['email'])){
		   // $insertion = $newBD-> prepare ('INSERT INTO profil VALUES (NULL,:nom,:prenom,:email)');
		   // $insertion->bindValue('nom',$_POST['nom']);
           // $insertion->bindValue('prenom',$_POST['prenom']);
		   // $insertion->bindValue('email',$_POST['email']);
		   // $verification=$insertion->execute();
		   // if ($verification){echo "insertion reussie";}
		   // else {echo "echec d'insertion";}
	// }
// else {
	// echo "Une variable n'est pas declaree";
// }



$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];

if (isset ($_POST["nom"]) AND isset($_POST["prenom"]) AND isset( $_POST["email)"])){
	 // echo 'nom:'.$_POST['nom'].'<br/>';
 // echo 'prenom:'.$_POST['prenom'].'<br/>';
 // echo 'email:'.$_POST['email'].'<br/>';
}

else { echo "erreur";}


$req = $db -> prepare ("insert into contacts (nom, prenom,email) Values (:nom,:prenom,:email)");
$req -> bindValue(":nom",$nom);
$req -> bindValue(":prenom",$prenom);
$req -> bindValue(":email",$email);
$req -> execute();


<table>
        <tr>
		     <th>idClient</th></br>
			 <th>nom</th></br>
			 <th>prenom</th></br>
			 <th>email</th></br>
		</tr>

<?php 	

while ($result = $resultSet-> fetch ())
	{?>
<tr>
    <td><?php echo $donnees['idClient'];?></td></br>
	<td><?php echo $donnees['nom'];?></td></br>
	<td><?php echo $donnees['prenom'];?></td></br>
	<td><?php echo $donnees['email'];?></td></br>
</tr>
<?php }
</table>
// $req = $db -> prepare ("insert into contacts (nom, prenom,email) Values (:nom,:prenom,:email)");
// $req -> bindParam(":noms",$nom);
// $req -> bindParam(":prenoms",$prenom);
// $req -> bindParam(":email",$email);
// $req -> execute();





// $req = $db -> prepare("SELECT * FROM contacts");
 // $req -> execute ();
 // $resultat=$req -> fetchAll (PDO::FETCH_ASSOC);
 // var_dump ($resultat);
	




// $req = $db -> prepare  ("UPDATE contacts SET noms='YAYA' WHERE idClients 
 // = 1");












?>