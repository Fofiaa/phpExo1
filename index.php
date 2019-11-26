<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partie 1</title>
</head>
<body>
    <p>
    <?php

$object = 'Objet'; 
$message = ' Ceci est une variable que je ne comprends pas.';
echo $object .' : ' . $message; 
?></p>

 <!--< ?=// echo$firstName; ? > pour des variables courtes (une seule ligne)  -->
 <div style="height:50px";></div>

    <?php

$lastname = 'Serragui'; 
$firstname = ' Sophia';
$age = 28;?>
<p><?php echo $lastname ?></p>
<p><?php echo $firstname  ?></p>
<p><?php echo $age; ?> </p>

<div style="height:50px";></div>
<?php $km= 1; ?>
<p><?php echo $km ?></p>
<?php $km= 3; ?>
<p><?php echo $km  ?></p>
<?php $km= 125; ?>
<p><?php echo $km; ?> </p>

<div style="height:50px";></div>

<?php $name = 'Sophia'; 
echo "Bonjour" . ' ' . $name . ',' . "comment vas-tu ?";
?>

<div style="height:50px";></div>



<?php
$answer = 'No'; 
$yes = 'vous avez répondu "oui"';
$no = 'vous avez répondu "non"';

if($answer == 'Yes')
{ 
        echo $yes;
}


else
{
    echo $no;
}
 
?>

<div style="height:50px";></div>

<?php


$number = 140;?>

<p><?php echo ($number + 30)/2; ?></p>



</body>
</html>