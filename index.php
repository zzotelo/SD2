<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sistemas Distribuidos</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Sistemas Distribuidos</h1>
        <h2>Tercer Parcial</h2>
        <p>En esta pagina se muestra el despliegue de dos instancias en el servicio de AMAZON WEB SERVICE</p>
    </section>

    <section class="instructions">
        <h2>Sumar 2 numeros</h2>
        <ul>
          <li><label for="">Numero 1: </label></li>
          <input type="text" name="n1">
          <br>
          <li><label for="">Numero 2: </label></li>
          <input type="text" name="n2">
          
          <form action="http://ec2-18-224-135-62.us-east-2.compute.amazonaws.com/">
          <input type="submit" value="RESULTADO" />
          </form>
          
          <br><input type="submit" value="Sumar">
          
            
            <li><a href="http://docs.amazonwebservices.com/elasticbeanstalk/latest/dg/customize-containers-resources.html">Customizing Environment Resources</a></li>
        </ul>

    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
