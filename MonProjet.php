<?php
$source =  "mysql:host=localhost;dbname=bd_form";
$login = "admin";
$mdp = "azerty";

try{
	$db = new PDO ($source, $login, $mdp); 
	$db -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//echo "Vous etes connecté !";
	
	$sql = "insert into clients(noms,prenoms,date_inscription) values ('ZIBO', 'Oumorou','2021-06-16 11:44')";
 if  ($db -> query ($sql)){
	 echo "Vous etes connecté !";
 }
  else        {echo "error de connexion" ;}
}
catch (PDOException $e){
	$error_message = $e->getMessage ();
	echo $error_message;
	exit();
}

//$db -> exec ("UPDATE clients SET noms='YAYA' WHERE id = 1");


//$db -> exec ("DELETE FROM clients WHERE noms='ZIBO'");


	
	
	 
	
	









             //Deuxième méthode
$noms = "ZIBO";
$prenoms = "Oumorou";
$date_inscription = "2021-06-17 11:00";

// $req = $db -> prepare  ("UPDATE clients SET noms='YAYA' WHERE idClients 
 // = 1");
// $req -> execute ();
// $req = $db -> prepare("DELETE FROM clients  WHERE idClients = 27");
	// $req -> execute (); 
	 // $req = $db -> prepare("SELECT * FROM clients ");
 // $req -> execute ();
 // $resultat=$req -> fetchAll (PDO::FETCH_ASSOC);
 // var_dump ($resultat);
	//Troisième méthode
	 
	 
	 $noms = "ZIBO";
$prenoms = "Oumorou";
$date_inscription = "2021-06-17 11:00";

$req = $db -> prepare ("insert into clients (noms, prenoms,date_inscription) Values (?,?,?)");
$req -> execute (array ($noms,
                        $prenoms,
	                 $date_inscription,
	 ));

   // Quatrième méthode

 $noms = "ZIBO";
$prenoms = "Oumorou";
$date_inscription = "2021-06-17 11:00";

$req = $db -> prepare ("insert into clients (noms, prenoms,date_inscription) Values (:noms,:prenoms,:date_inscription)");
$req -> bindValue(":noms",$noms);
$req -> bindValue(":prenoms",$prenoms);
$req -> bindValue(":date_inscription",$date_inscription);
$req -> execute();
	 
	//Cinquième méthode


$noms = "ZIBO";
$prenoms = "Oumorou";
$date_inscription = "2021-06-17 11:00";
$age = 25;
$req = $db -> prepare ("insert into clients (noms, prenoms,date_inscription,age) Values (:noms,:prenoms,:date_inscription,:age)");
$req -> bindParam(":noms",$noms);
$req -> bindParam(":prenoms",$prenoms);
$req -> bindParam(":date_inscription",$date_inscription);
$req -> bindParam(":age",$age,PDO::PARAM_INT);
$req -> execute();


?>


