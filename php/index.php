<!DOCTYPE html>
<html>
<body>
<!-- O ficheiro index tem a extensão .php para indicarmos ao navegador que há código PHP (PHP:Hypertext Preprocessor) a ser interpretado.
A estrutura do PHP é basicamente composta por uma abertura e um fecho -->
<?php echo "<p>Hello World!</p>"; ?> 


<?php
	echo 12345;
  echo "12345";
	echo "<br>";
	echo 4 * 5;
	echo "<br>";
	echo 5.5 * 2.5;
  echo "<br><br>";
	$x = 5; // Para declarar uma variável basta utilizar o sinal de cifrão. Uma variável pode armazenar textos e números. A linguagem PHP é case sensitive, A é diferente de a. Definir um nome e um valor inicial.
	echo $x;
	echo "<br>";
	echo $x * 4;


  echo "<hr>";
	/*
		Nomear variáveis:

 - Não iniciar o nome de uma variável com números;
 - Não utilizar espaços em branco ou acentos;
 - Não utilizar caracteres especiais, apenas underscore;
 - Usar nomes que ajudem a identificar melhor a variável;
 - Evitar letras maiúsculas.
	

      Correto
      $minhaVariavel; // camelCase
      Errado
      $minha Variavel;
      Correto
      $minha_variavel;
      Errado
      $1variavel;
      Errado
      $joão
      Correto
      $joao
*/

  echo "<br><br>";
	echo "Tipos de variáveis!"; # string, number e boolean
	echo "<br>";
	$primeiroNome = 'António'; #string
	$ultimoNome = "Silva"; #string
  $idade = 25; #number - Integer: números inteiros e Float: números reais
  $idade = "25"; #string
	echo "<br>";
	echo '$primeiroNome da $ultimoNome';
  echo "<br>";
  echo "$primeiroNome da $ultimoNome" . " - " . $idade . " anos"; // CONCATENAR;
	echo "<br>";

  $verdadeiro = true; #boolean
  $falso = false; #boolean
  echo "<br>";

 if($verdadeiro == TRUE)
    echo "É verdade.";
 else
    echo "É falso.";

echo " ";

 if($falso == TRUE)
    echo "É falso.";
 else
    echo "É verdadeiro.";

/*
Operadores de Comparação
  Igual: ==
  Idêntico: ===
  Diferente: != ou <>
  Não idêntico: !==
  Menor que: <
  Maior que: >
  Menor ou igual: <=
  Maior ou igual: >=
  Spaceship: <=>

	5 == 5		true
	5 == "5"	true
	5 == 7		false
	
	5 === 5		true
	5 === "5"	false
	5 === 5.0	false
	5 === 7		false
	
	5 != 5		false
	5 != "5"	false
	5 != 7		true	
	
	5 !== 5		false
	5 !== "5"	true
	5 !== 5.0	true
	5 !== 7		true
	
	5 <=> 3		1
	5 <=> 5		0
	5 <=> 7	  -1

  == não verifica o tipo da variável, apenas seu valor. === verifica tanto o valor da variável quanto o seu tipo.
	*/
  
  echo "<br><br>";
  $dez = 10;
  $vinte = 20;
  echo $dez + $vinte;
  echo "<br>";
  echo $dez + $vinte * 10.2 - 20 / 50;
  echo "<br>";
  $x += 2; // Somamos 2 ao valor da $x;
  $x -= 2; // Subtraímos 2 ao valor da variável $x;
  $x *= 2; // Multiplicamos o valor da variável $x por 2;
  $x /= 2; // Dividimos o valor da variável $x por 2.
  echo "<br><br>";

  $a = 5;
  echo ++$a; echo $a; // Incrementa 1 e retorna o valor
  echo "<br>"; 
  $a = 5;
  echo $a++; echo $a; // Retorna o valor e incrementa 1
  echo "<br>"; 
  echo "<br><br>";

  $a = 5;	
  echo --$a; echo $a; // Decrementa 1 e retorna o valor
  echo "<br>"; 
  $a = 5;
  echo $a--; echo $a; // Retorna o valor e decrementa 1
  echo "<br><br>"; 
	
	$txt1 = "Olá";
	$txt2 = " Mundo!";
  echo "<br>";
  $txt1 = $txt1 . $txt2;
	echo $txt1;
  
	echo "<br><br>";
  
  echo "<hr>";	
	echo strlen($ultimoNome); //string length

	echo "<br>";	
	echo strpos($ultimoNome, "i"); //string position

	echo "<br>";	
	echo str_replace("i", "y", $ultimoNome); //string replace
  
  
	echo "<hr>";
	echo "<br><br>";

	$nota = 19;

	if($nota >= 0 and $nota <= 20){
		if ($nota < 10){
			echo "Negativa";
		} elseif ($nota < 15) { // Pode haver vários elseifs dentro da mesma declaração if. A primeira expressão elseif (se houver) que retornar true será executada. https://youtu.be/NBehf7L5txI
			echo "Suficiente";
		} elseif ($nota < 18) {
			echo "Bom";
		} else {
			echo "Excelente";
		}
	} else {
		echo "Erro!!";
	}

	echo "<br><br><br>";

	for ($i = 1 ; $i <= 10 ; $i++){ // A primeira expressão do LOOP é executada. A segunda é executada se for TRUE e passa à terceira.
		echo "5 x $i = " . 5 * $i . "<br>";
	}

	echo "<br><br><br>";

	for ($i = 1 ; $i <= 4 ; $i++){
	?>


	<div style="width:250px;">
		<img src="imagens/foto0<?=$i ?>.jpg" width="250"> 
		<h4>título <?=$i ?></h4>
	</div>

	<?php

	}

	echo "<br><br><br>";

	$fotos = array(
		"foto01.jpg",
		"foto02.jpg",
		"foto03.jpg",
		"foto04.jpg"
	);

	echo $fotos[3]."<br>";
  echo '<img src="imagens/' . $fotos[3] . '" width="250"/><br />';


	echo "<br><br><br>";
	$fotos = array( // Array multidimensional
		array("foto01.jpg","título 01"),
		array("foto02.jpg","título 02"),
		array("foto03.jpg","título 03"),
		array("foto04.jpg","título 04")
	);

	echo $fotos[3][0]; echo "<br>";
	echo $fotos[3][1] . "<br>";
	
	echo $fotos[1][0]; echo "<br>";
	echo $fotos[1][1] . "<br>";
	
	echo $fotos[2][0]; echo "<br>";
	echo $fotos[2][1] . "<br>";
?>

<br><br><br>
<?php include("filho.php");?>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>