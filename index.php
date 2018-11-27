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
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>EL RESULTADO ES: 10</h1>
    
    <section class="instructions">
        <h2>Integrantes del equipo:</h2>
        <ul>
          <li><label for="">Isela Ivone Mexquitic Ojeda     120461</label></li>
          <li><label for="">Haziel Alvarado Santiago        120016 </label></li>
          <li><label for="">Sergio Enrique Ortigosa Muñoz   120361 </label></li>
          <li><label for="">Daniel Chevaile Hernandez       111086 </label></li>
          <li><label for="">Francisco Javier Sotelo Pulido  120442 </label></li>
        
      

    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
