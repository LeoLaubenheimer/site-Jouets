<HTML>
<meta http-equiv="Content-Type" content="text/html; charset=ascii" />
 <?PHP
 include ('connexion.php');
?>
<HEAD>
<style type= "text/css ">

</style>
<script type= "text/javascript " src= "http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js "></script>
<script type= "text/javascript " src= "js/jsnow.js "></script>

<script type= "text/javascript "> $(function() { $().jSnow(); }); </script>
	<link href="jouets.css" rel="stylesheet" media="all" type="text/css">
</HEAD>
<BODY>

<DIV id="Haut">	
</DIV>

 <DIV id= "Corps">

  <?PHP		

 $aujourdhui = getdate();
 $jour = $aujourdhui['mday'];
 $mois = $aujourdhui['mon'];
 $an = $aujourdhui['year'];

 echo "<h1>Bienvenue sur le site des produits Jouets en Bois,  aujourd'hui  le 0$jour/0$mois/$an </h1>";
 ?>

<p><h4>Petit site didactique</h4></p>
<p><h4> Attention certaines pages ne sont pas fournies car  elles feront l'objet d'un d�veloppement ult�rieur </h4> </p>
<BR><BR>


 <p><h2> Gestion des cat�gories</h2> </p>
        <A  href="AfficheToutesCategories.php">visualiser toutes les cat�gories </A><BR>
        <A  href="NouvelleCategorie.php">cr�er une nouvelle cat�gorie </A><BR>
 <BR>

 <p><h2> Gestion des produits </h2></p>
		<A  href="AfficheTousProduits.php">visualiser tous les produits - en image</A><BR>
		<A  href="Afficheproduits1Categorie.php">visualiser les produits d'une cat�gorie </A> <BR>
         <A  href="ChoisirUnProduitSurId.php">visualiser un produit � partir de son N� </A><BR>
         <A  href="NouveauProduit.php">cr�er un nouveau produit </A><BR>
 <BR>
 
</DIV> 
</BODY>
</HTML>
