
<meta charset="utf-8">

<style type="text/css">
	

fieldset{
	width: 210px;
	height: 180px;
	border-radius: 20px;
	background-color: #ADD8E6;

}

h1{
	font-family: 20px;
	font-family: 'Josefin Sans', sans-serif;
}


#c{

border-radius: 10px;
border-color: #87CEFA;
background-color: #87CEFA;

}


</style>

<center>

<h1>Resposta</h1>

</center>

<?php 

echo"<center>";

echo "<fieldset>";

echo "<br>";



echo "Login: ";
echo $_POST ['login'];

echo "<br>";
echo "<br>";

echo "Senha: ";
echo $_POST ['senha'];



echo "<fieldset\>";

echo"<center/>";

echo "<br>";

if  ($_POST['login'] == 'Gerv') {
echo "Login correto";

}


else{

echo "Login incorreto ";

}


echo "<br>";
echo "<br>";



if ($_POST['senha'] == '251' )  {
	echo "Senha correta";
}

else{

echo "Senha incorreta";

}


 ?>
<br>
<br>

 <button onclick="window.location.href='Login.html'" id="c">Voltar</button>