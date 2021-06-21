<?php
/*$nom=trim($_POST);
$email=trim($_POST);
$phone=trim($_POST);
$message=trim($_POST);

$msg="nom:\t$nom\n";
$msg="email:\t$email\n";
$msg="phone:\t$phone\n";
$msg="message:\t$message\n";

$recipient= "zibolitho10@gmail.com";
$subject="Hello";
$emailheaders="Reply-To:$email\n\n";

if (email($recipient, $subject,$msg,$emailheaders))
{
	//header("Location:[url=http://localhost/template/entro/index.php"]localhost/template/entro/index.php[/http://lo//calhost/template/entro/index.php]");
}

else { echo "Le mail n'a pas été envoyé! Veuillez reessayer!";}*/

/*if ($_SERVER ["REQUEST_METHOD"]=="POST"){
	$nom=htmlentities ($_POST["nom"]);
	$objet=htmlentities ($_POST["objet"]);
	$email=htmlentities ($_POST["email"]);
	$phone=htmlentities ($_POST["phone"]);
	$message=htmlentities ($_POST["message"]);
	
	
	$destinataire="zibolitho10@gmail";
	$contenu ="<html><head><title>".$objet."</title></head><body>";
	$contenu .="<P> Tu as un nouveau message!</P>";
	$contenu .="<P><strong>Nom</strong>:".$nom."</P>";
	$contenu .="<P><strong>email</strong>:".$email."</P>";
	$contenu .="<P><strong>Phone</strong>:".$phone."</P>";
	$contenu .="<P><strong>Message</strong>:".$message."</P>";
	$contenu .="</body></html>;
	
	$headers = 'MIME-Version: 1.0'."\r\n";
	$headers .= 'Content-type:,text/html; charset=iso-8859-1'."\r\n";
	
	email($destinataire, $objet, $contenu, $headers)
	header ("location:index.html");
	
}*/
if (isset ($_POST["message"])){
	$entete  = 'MIME-Version: 1.0'."\r\n";
	$entete .= 'Content-type: text/html; charset=utf-8'."\r\n";
	$entete .= 'From:'.$_POST["email"]."\r\n";
	
	$message='<h1> Message envoyé depuis mon site</h1>
	<p><b>Nom:</b>'.$_POST['nom'].'<br/>
	<b>email:</b>'.$_POST["email"].'<br/>
	<b>message:</b>'.$_POST["message"].'</p>';
	
	$retour= mail('zibolitho10@gmail.com', 'Envoi depuis mon site', $message,$entete);
	if($retour){
		echo 'Votre message a été envoyé';
	}
	
	
}














?>