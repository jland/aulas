<?php
echo "Vim do filho!";

echo '<h4 style="text-align: center"><img src="imagens/' . $fotos[0][0] . '" /><br />' . $fotos[0][1].'</h4>';

echo "<hr>";
	echo "<br><br><br>";

function mostraimas(){
 $dirname = "./imagens/";
 $images = glob($dirname."*.jpg");
foreach($images as $image) {
 echo '<img src="'.$image.'" /><br />';
  }
}
mostraimas();
?>