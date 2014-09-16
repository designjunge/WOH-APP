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

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
				<h1 style="letter-spacing:-1px" class="title">Co<span style="font-weight:400; color:#d9d9d9">Work</span></h1>
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

<?php
//Liest den Inhalt mit HTML Elementen aus einem Node aus.
 
function get_inner_html( $node ) {
$innerHTML= '';
$children1 = $node->childNodes;
foreach ($children1 as $child2) {
$innerHTML .= $child2->ownerDocument->saveXML( $child2 );
}
return $innerHTML;
} 
 
$termine = array();
 
$doc = new DOMDocument();
@$doc->loadHTMLFile(utf8_encode('http://kino-wolfhagen.de/kino/programm/city27/?scope=week'));
$xpath = new DOMXPath($doc);
$ls_ads = $xpath->query("//article[@class='item program-item']");
 
foreach ($ls_ads as $termin) {
// get ad url
//$ad_url = $ad->getAttribute('href');
 
// set current ad object as new DOMDocument object so we can parse it //NOCH NICHT VERSTANDEN :-)
$termin_doc = new DOMDocument();
$cloned = $termin->cloneNode(TRUE);
$termin_doc->appendChild($termin_doc->importNode($cloned, True));
$xpath = new DOMXPath($termin_doc);
 
	
echo "<article>";
echo "<header>";
// Get Name
$termin_name_tag = $xpath->query("//h4[@class='title item-title']");
$termin_name = trim($termin_name_tag->item(0)->nodeValue);
echo "<h1>".$termin_name."</h1>";
 
// get ad image, um Image rauszuziehen
$termin_image_tag = $xpath->query("//img/@src");
$termin_image = $termin_image_tag->item(0)->nodeValue;
echo "<p><img src='http://kino-wolfhagen.de".$termin_image."'>"; 

// Get Location
$termin_location_tag = $xpath->query("//div[@class='program-col-text']");
$termin_location = trim($termin_location_tag->item(0)->nodeValue);
echo $termin_location."</p>";	

echo "</header>";
echo "<section>";
	echo "<div style='clear:both;'></div>";
echo "<h2>Zeiten</h2>";
 
// Get Date
$termin_date_tag = $xpath->query("//div[@class='program-table movie-program']");
$termin_date = get_inner_html($termin_date_tag->item(0));
echo "<div>".$termin_date."</div>";

 
echo "</section>";
echo "</article>";
}
?>
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

       
    </body>
</html>