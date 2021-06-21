<!DOCTYPE html>

<html>
	<head>
		<meta charset="Utf-8"/>
		<title> Mon projet 2  </title>
		<link rel="stylesheet" href="Mon_Projet.css"/>
	</head>
	<body> 
<?php
$source =  "mysql:host=localhost;dbname=bd_form";
$login = "admin";
$mdp = "azerty";

try{
	$db = new PDO ($source, $login, $mdp); 
		$db -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	echo "connexion etablie";
	}

catch (PDOException $e){
	die ('Erreur: '.$e->getMessage());
	}
	$result = $db-> query("SELECT * FROM contacts");
?>

<table>
        <tr>
		     <th>idClient</th>
			 <th>nom</th>
			 <th>prenom</th>
			 <th>email</th>
		</tr>
<?php 	
$donnees = $result-> fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r ($donnees);
// echo "</pre>";
$i=0;
foreach ($donnees as $cle => $tab)
{ //var_dump ($tab);
 // echo "<pre>";
// print_r ($tab);
 // echo "</pre>";
?>
<tr>
    <td><?php echo $tab['idClient'];?></td>
	<td><?php echo $tab['Nom'];?></td>
	<td><?php echo $tab['prenom'];?></td>
	<td><?php echo $tab['Email'];?></td>
	<td>
<div class="bouton">
<input type="button" value="modifier" href="http://contact.php?idClient=1"]/>
</div>
<td/>
</tr>

	<?php }?>

<?php // mysql_close();?>




</table>
</body>
</html>





	
			 
			 
			 
			 
			 
			 
			 
			 