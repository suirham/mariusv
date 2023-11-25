<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>ajouter</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="all">
  <script src="app.js"></script>
</head>
<body style="background-color: 11e78c;">
<ul class="medias">
    <li class="bulle"> <a href="index.php"> <img src="./back.png" class="logo-medias"> </a> </li>
</ul>

recherch ? <br>
<Nav>
      <Div>
        <Form>
            <Input Class="Recherche-Input" type="Search" placeholder="Recherche" Aria-Label="Search" name="search">
        </Form>
      </Div>
    </Nav>
<?php
/*
$name = $_GET['search'];

echo "alors peut etre ??? : " . $name . "<br><br>";

  $host="192.168.0.37";
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