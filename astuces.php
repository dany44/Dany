<?php include( 'header.php' );?>

<h1>Les astuces</h1>

<h2></h2>

<?php

$astuces = file_get_contents('astuces.json');
$astuces = json_decode( $astuces );


echo '<table>';
$number = 1;
foreach( $astuces as $astuce ){

}

echo '</table>';


?>

<h2>Clash of Clans</h2>

<?php

echo '<table>';
$number = 1;
foreach( $astuces as $astuce ){

  if( $astuce->jeu == 'Clash of Clans' ){

    echo "<tr><td class='number'>$number</td><th>{$astuce->title}</th><td>{$astuce->content}</td><td>{$astuce->niveau}</td></tr>";
    $number++;
  }
}

echo '</table>';


?>


<?php include( 'footer.php' );?>
