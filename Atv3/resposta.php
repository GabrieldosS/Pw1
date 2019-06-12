

<style type="text/css">
fieldset{
	border-radius: 10px;
width: 350px;
height: 250px;
background-color: gray;
}
	

h1{

	font-family: 'Dokdo', cursive;
}

</style>



<?php


echo "<center>";

	echo "<h1>Boleto</h1>";

	echo "<fieldset >";
	

	echo "<meta charset=utf-8>";	

	echo "<br>";

	echo "Nome: ";
	echo $_POST['nome']. "<br>";
echo "<br>";
	
	echo "E-mail: ";
	echo $_POST['e-mail']. "<br>";
echo "<br>";
	
	echo "CPF: ";
	echo $_POST['cpf']. "<br>";

echo "<br>";
	
echo "Número-CVV: ";
	echo $_POST['cartao']. "<br>";

echo "<br>";
	
	echo "Cartão de crédito: ";
	echo $_POST['Opnião']. "<br>";

echo "<br>";
	
	echo "Validade: ";
	echo $_POST['data']. "<br>";
echo "</fieldset>";
echo "<br>";
?>



