<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
function toggle(control){
	var elem = document.getElementById(control);
	
	if(elem.style.display == "none"){
		elem.style.display = "block";
	}else{
		elem.style.display = "none";
	}
}</script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

<?php
//SQL DATEN
	$benutzer="d00eaf48";
	$passwort="oZVpPT5YLme5Un99";
	$db="d00eaf48";

	
	//SQL Verbindung einrichten und prüfen.
    $link =  mysql_connect( "localhost", $benutzer, $passwort  );
    if ( ! $link )
    {
      die( "Keine Verbindung zu MySQL" );
    }

    // Datenbank aufrufen und testen
    mysql_select_db( $db, $link ) 
    or die ( "Konnte Datenbank \"$db\" nicht öffnen: ".mysql_error() );

?>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
				<h1 style="letter-spacing:-1px" class="title">Woh<span style="font-weight:400; color:#d9d9d9">aktuell</span></h1>
				<p>Hallo, sollten Sie aufgrund eines Verweises Ihrer Analytics Software hier gelandet sein, so bitten wir kurz um Ihre Aufmerksamkeit.</p><p> Dieses Projekt ist ein 100% nicht kommerzielles Projekt und wird von 2 Wolfhager B�rgern in Eigenentwicklung aufgebaut. Ziel ist es Wolfhagen eine APP auf allen mobilen Ger�ten und als Website zur Ver�gung zu stellen um zu informieren.</p>
				<p style="font-weight:700">Um diese Entwicklung bis zum endg�ltigen Start "geheim" zu halten, vertrauen wir auf Ihre Diskretion.</p>
				<p>Sollte das Projekt weit genug vorrangeschritten sein, so werden wir mit den Betreffenden Firmen/Personen, von denen derzeit Daten zur Entwicklung ben�tigt/genutzt werden, Kontakt aufnehmen und um Erlaubnis der Nutzung der Daten bitten.</p>
				<p>Wir freuen uns auf das Ergebnis des Projektes.<br />Ramon Mohi & Kristopher Junge</p>
                <nav>
                    <ul>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                        <li><a href="#">nav ul li a</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
				<nav class="main-menu">
                    <ul>
                        <li><a href="#"><img width="120px" src="http://cdn.flaticon.com/png/256/33819.png">Kategorie 1</a></li>
                        <li><a href="kino.php"><img width="120px" src="http://cdn.flaticon.com/png/256/24707.png">Kategorie 2</a></li>
                        <li><a href="#"><img width="120px" src="http://cdn.flaticon.com/png/256/2322.png">Kategorie 1</a></li>
                    </ul>
                </nav>
				<div style="clear:both"></div>
				
<?php

//mysql_select_db($benutzer, $con);

$sql="SELECT * FROM wi_firmen ORDER BY name ASC";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
{

	echo "<a href=\"javascript:toggle('".$row['id']."')\">";
	echo "<div class='firma'>";
	echo "<h3><img src='".$row['image']."' width='50px'>".$row['name']."</h3>";
	echo "</div></a>";
	echo "<div class='firma-einzel' id='".$row['id']."' style='display: none'>";
	echo "<p>".$row['street']." ".$row['number']."</p>";
	echo "<p>".$row['plz']." ".$row['city']."</p>";
	echo "<img src='".$row['image']."'>";
	echo "<p>".$row['text']."</p>";
	echo "<p>Rating: ".$row['rating']."</p>";
	echo "</div>";
}

		//			mysql_close($con);
				

?>
				<a href="javascript:toggle('mo-fr')"><h3>Montag - Freitag</h3></a>
				<div id="mo-fr" style="display: none">
					<p>TEST</p>
				</div>
				
                <article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <section>
                        <h2>article section h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>footer</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
