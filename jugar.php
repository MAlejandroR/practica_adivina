
<?php



//Identifica las variabbles que vas a necesitar
//Esta parte no es obligatoria pero te ayudará a hacer el programa

$intentos = filter_input(INPUT_POST, "num_intentos");


//Inicializa las que vamos a obtener siempre su valor




//Ahora leemos la opción que nos ha traído aquí
$opcion = S_POST['submit'] ?? null;


//Este es un modo de controlar el routeo es decir, qué evento a solicitado este recurso
switch ($opcion){
    case "Empezar"://inicializar los valores
    //Acciones is vengo del index y empiezo la jugada
    case "Jugar":
    //Acciones si he presionado jugar

        break;
    case "Reiniciar":
    //Acciones si he presionado Reiniciar

        break;
    case "Volver":
    //Acciones si he presionado volver

        break;
    default:
    //Acciones por defecto

}

//Si hay variables que acutalizo la pongo aquí en cualquier caso, las debería de poner aquí


?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de adivina un número</title>
</head>
<body style="width: 60%;float:left;margin-left: 20%; ">

<h3></h3>
<fieldset style="width:40%;background:bisque ">
    <legend>Empieza el juego</legend>
    <form action="jugar.php" method="POST" >
        <h2> El n&uacutemero es  <span style="color: blue"> ...</span> </h2>
        <h5> Jugada  <span style="color: blue"> ....</span>  </h5>
        <h5> Actualmente te quedan   <span style="color: blue"> ... </span> intentos </h5>

        <input type="hidden" value="<?= $intentos ?>" name="intentos">
        <fieldset>
            <legend>Indica c&oacutemo es el n&uacutemero qu&eacute has pensado</legend>
            <input type="radio" name="rtdo" checked value='>'> Mayor<br />
            <input type="radio" name="rtdo" value='<'> Menor<br />
            <input type="radio" name="rtdo" value='='> Igual<br />
        </fieldset>
        <hr />
        <input type="submit" value="Jugar" name="submit" >
        <input type="submit" value="Reiniciar" name="submit"  >
        <input type="submit" value="Volver" name="submit"  >

    </form>
</fieldset>

</body>
</html>