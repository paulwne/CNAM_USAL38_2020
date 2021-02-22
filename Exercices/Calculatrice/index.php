<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Calculatrice</title>
    </head>
  
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1>Calculatrice</h1>
                </div>
        <div style="text-align:center;">

<style type="text/css">
h1 {
  color: #2236;
  background-color: #2231;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<br>
<div class="calculette">
    <div class = "rectangle">
    <form name="calculatrice" action="calculatrice.php" method="post">
        <p>Nombre 1 : <input type="text" name="nombre1"></p>
        <p>Nombre 2 : <input type="text" name="nombre2"></p>

<style type="text/css">
  p  {
  color: black;
  text-align: center;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
}
</style>

<style type="text/css">
.rectangle{
	width:200px;
	height:250px;
    border-radius: 5px;
    text-align: center;
	background:#2231;
    margin-left: auto;
    margin-right: auto;
    padding-top: 20px;
    padding-bottom: 5px;
}
</style>

    <select name="choix">
        <option value="addition">+</option>
        <option value="soustraction">-</option>
        <option value="division">/</option>
        <option value="multiplication">*</option>
    </select>
  
        <input type="submit" value="Calculer">
        <input type="reset" value="Effacer"><br>
    </form>

</div>
</body>
</html>