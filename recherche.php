<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>recherche</title>
  <Link Rel="stylesheet" Href="style.css">
  <script src="app.js"></script>
</head>
<body style="background-color: 11e78c;">
<ul class="medias">
    <li class="bulle"> <a href="index.php"> <img src="./back.png" class="logo-medias"> </a> </li>
</ul>
<br>
<Nav Class="Navbar Navbar-Expand-Lg Navbar-Light Bg-Light">
      <Div Class="Recherche_p">
        <Form Class="Form-Inline My-2 My-Lg-0">
          <Div Class="Recherche-Barr">
            <Input Class="Recherche-Input" type="Search" placeholder="Recherche" Aria-Label="Search" name="zzz">
          </Div>
          <b class="ckbx">C'est ?</b><br>
          <input type="checkbox" name="P" class="ckbx"> un patient <br>
          <input type="checkbox" name="R" class="ckbx"> un membre du personnel <br>
          <input type="checkbox" name="S" class="ckbx"> une salle <br>
          <input type="checkbox" name="E" class="ckbx"> un equipement <br>
          <input type="checkbox" name="O" class="ckbx"> une operation <br>
        </Form>
      </Div>
    </Nav>
<?php
/*
$name = $_GET['search'];

echo "alors peut etre ??? : " . $name . "<br><br>";

  $host="192.168.100.207";
  $username="suirham";
  $password="suirham";
  $database="data01";
  $ct= mysqli_connect ($host,$username,$password,$database);

  if ($ct == null){
     die("Connection failed : ");
  }

$info = mysqli_query($ct,"SELECT * FROM patient");

if ($info==null) die ("autre non :".mysqli_error($ct));

while ($rox=mysqli_fetch_assoc ($info))
echo "<br>" . $rox['numpatient'] . " > " . $rox['prenom'] . " - " . $rox['nom'] . " - " . $rox['numsecu'] . " - " . $rox['adresse'] . " - " . $rox['numtel'];
*/

if (isset($_GET['P'])) {                                     
$name = $_GET['zzz'];

  $host="192.168.0.41";
  $username="suirham";
  $password="suirham";
  $database="data01";
  $ct= mysqli_connect ($host,$username,$password,$database);

  if ($ct == null){
     die("Connection failed : ");
  }

echo "Informations du patient :  " . $name . "<br>";

$info = mysqli_query($ct,"SELECT numpatient, nom, prenom, numsecu, adresse, numtel FROM patient");   

if ($info==null) die ("autre nom : " .mysqli_error($ct));

while ($rox=mysqli_fetch_assoc ($info))
 echo "<br> <b> matricule : </b>  " . $rox['numpatient'] . 
"<br><b> Infos : </b>    " . $rox['nom'] . " " . $rox['prenom'] . 
" <br> <b> numéro de sécu : </b>  " . $rox['numsecu'] . 
"<br> <b> adresse : </b>   " . $rox['adresse'] . 
"<br> <b> telephone : </b>   " . $rox['numtel'];
echo "<br>";



}else{ echo "Veillez choisir une option, puis remplir la barre svp."; }




?>
<script>

  document.body.style.backgroundImage = "url('pdc3.jpg')";

const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
    .from(l1, 1, {width: 0, ease: "power2.out"}, '-=2')
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1');

    
    

    TL.play();
})


</script>
</body>
</html>
