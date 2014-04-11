 <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>tarea ingenieria de software</title>
  <link href="css/principal.css" rel="stylesheet" type="text/css" />


  <!--  especificacion de comportamiento de hipertexto   -->
  <style type="text/css">
  a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: none;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
  </style>
  </head>
    
  <body>
  <div class="contenedor">

    <?php /****************************inicio php***************************/
    /*crea una arreglo con las imagenes aleatorias con su ubicación*/
    $imagenes[0]='images/im1.jpg';
    $imagenes[1]='images/im2.jpg';
    $imagenes[2]='images/im3.jpg';
    $imagenes[3]='images/im4.jpg';
    $imagenes[4]='images/im5.jpg';
    /* genera un número aleatorio, en este caso del 0 al 4 (porque estaba aburrido al hacerlo) */
    $i=rand(0,4);
    /* se muestra la imagen aleatoria */
    print '<img src="'.$imagenes[$i].'">';
    /***********************************fin php****************************/
    ?>


    <div class="cuerpo">
      <div class="menu">
        <table width="988">
          <tr valign="middle">
            <td width="193" height="16" align="center"><a href="welcome.html" target="principal">INICIO</a></td>
            <td width="193" height="16" align="center"><a href="marcial.html" target="principal">MARCIAL JARA</a></td>
            <td width="193" height="16" align="center"><a href="marco.html" target="principal">MARCO ARRATIA</a></td>
          </tr>
        </table>
      </div>
      <iframe src="welcome.html" class="frame1" scrolling="yes" name="principal" id="principal" frameborder="0"></iframe>
    </div>
    <div class="pie_pagina"></div>
  </div>
  </body>
  </html>

