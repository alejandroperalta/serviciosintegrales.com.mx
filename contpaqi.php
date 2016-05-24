<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CONTPAQ i | Servicios Integrales en Internet y Cómputo de México</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/main.css" type="text/css" id="main-css">
    <link rel="stylesheet" href="css/wide-screen.css" type="text/css" id="wide">

    <!-- Javascript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/selectnav.js"></script>
    <script src="js/ender.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/rev-setting-1.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.smooth-scroll.js"></script>
      <script>
    $(document).ready(function() {

      $('div.casa').smoothScroll();

      $('a').click(function(event) {
        event.preventDefault();
        var link = this;
        $.smoothScroll({
          scrollTarget: link.hash
        });
      });

      $('#change-speed').on('click', function() {
        var $p1 = $('contpaqi').first(),
            p1Opts = $p1.smoothScroll('options') || {};

        p1Opts.speed = p1Opts.speed === 1400 ? 400 : 1400;
        $p1.smoothScroll('options', p1Opts);
      });

      $('button.scrollsomething').click(function() {
        $.smoothScroll({
          scrollElement: $('div.scrollme'),
          scrollTarget: '#findme'
        });
        return false;
      });
      $('button.scrollhorz').click(function() {
        
        });
        return false;
      });

    });

  </script>
    
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="container">
                <div id="logo">
                    <div class="inner">
                        <a href="index.php">
                            <img src="images/logo-siicom.png" alt=""></a>
                    </div>
                </div>

                <ul id="mainmenu">
                    <li><a href="index.php" title="Inicio">Inicio</a></li>
                    <li><a href="paquetes.php" title="Paquetes">Paquetes</a></li>
                        <ul>
                            <li><a href="contacto.php">Contactanos</a></li>
                            <li><a href="directorio.php">Directorio</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Software">Software</a>
                        <ul>
                            <li><a href="contpaqi.php">CONTPAQ i</a></li>
                            <li><a href="casa.php">Sistema CASA</a></li>
                            <li><a href="reco.php">Sistemas RECO</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Servicios">Servicios</a>
                        <ul>
                            <li><a href="capacitaciones.php">Capacitaciones</a></li>
                            <li><a href="descargas.php">Descargas</a></li>
                        </ul>
                    </li>
                    <li><a href="productos.php" title="Productos">Productos</a></li>
                </ul>
            </div>
        </header>
        <div id="subheader">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><a href="https://www.facebook.com/pages/Servicios-Integrales-En-Internet-Y-Computo-De-M%C3%A9xico/101090743293750?fref=ts" original-title="Obten 100MB en Tamaño de Disco, 1 Base de Datos y 1 Cuenta de Correo solamente dando like a la pagina de Facebook de SIICOM-MX." class="tooltip" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a></h1>
                        <span>Servicios Integrales en Internet y Cómputo de México</span>
                        <ul class="crumb">
                            <li><a href="index.html">Inicio</a></li>
                            <li class="sep">|</li>
                            <li>Software</li>
                            <li class="sep">|</li>
                            <li>CONTPAQ i</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <article class="Article">
            <div id="content">
                <div class="container">
                    <div id="row" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <h4 class="title ">CONTPAQ i</h4>
                            <div>
                                <p><br>
                                    <img src="images/contpaqi_logo.png" alt="" class="img-right">
                                    CONTPAQ i es la innovación tecnológica reflejada en un Sistema Contable Integrador que facilita la gestión exitosa de tu empresa. <br>
                                    Brinda a los empresarios una visión clara de los resultados de su negocio. <br> 
                                    A los contadores información confiable, específica y oportuna. <br>
                                    Y a los capturistas o auxiliares contables, un sistema que facilita y agiliza sus tareas. <br>
                                    Con CONTPAQ i tienes un óptimo desempeño de tu trabajo, puedes tomar mejores decisiones y tienes más tiempo para ti. <br><br>
                                    <br><br>
                                    <!--<img src="images/distcontpaq.png" alt="" class="img-right" width="20%"><strong>Aplicaciones:</strong>-->
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!--========================================-->
            <div id="contpaqi" class="casa container">
              <div class="content">
                <a href="#row"><img width="15%" src="images/contpaq1.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row2"><img width="15%" src="images/contpaq2.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row3"><img width="15%" src="images/contpaq3.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row4"><img width="15%" src="images/contpaq4.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row5"><img width="15%" src="images/contpaq5.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row6"><img width="15%" src="images/contpaq6.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row7"><img width="15%" src="images/contpaq7.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row8"><img width="15%" src="images/contpaq8.png" style="width:10%;height:10%;" alt=""></a>
                <a href="#row9"><img width="15%" src="images/contpaq9.png" style="width:10%;height:10%;" alt=""></a>
              </div> 
             </div>     
            <!-- ================================== -->
            <div id="content1">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Contabilidad</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq1.png" alt="" class="img-right"></a>
                                    CONTPAQi® Contabilidad es el sistema contable integrador favorito de los Contadores que facilita el proceso de la información contable, financiera y fiscal de tu empresa, así como la recepción de tus comprobantes fiscales digitales. <br><br>
                                    Diseñado para contadores, fiscalistas, auditores, administradores y directores de todo perfil de empresas. 
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content2">
                <div class="container">
                    <div id="row2" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Nóminas</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq2.png" alt="" class="img-right"></a>
                                    CONTPAQi® Nóminas es el sistema para la administración de la nómina que se adapta de manera fácil a tus procesos de cálculo, cumple con todas las obligaciones de ley y te permite hacer un pago a tiempo a tus empleados. <br><br>
                                    Diseñado para noministas, contadores y encargados de recursos humanos de todo perfil de empresas.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content3">
                <div class="container">
                    <div id="row3" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Bancos</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq3.png" alt="" class="img-right"></a>
                                    CONTPAQi® Bancos es el sistema con el que tu dinero siempre está a la vista, porque te ayuda a controlar tus ingresos y egresos, administrar tus cuentas bancarias y flujo de efectivo integrando la información de tus comprobantes fiscales digitales. <br><br>
                                    Diseñado para tesoreros, contadores, encargados de pagos, administradores y directores de todo perfil de empresas.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content4">
                <div class="container">
                    <div id="row4" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Comercial (Nuevo ADMINPAQ)</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq4.png" alt="" class="img-right"></a>
                                    CONTPAQi® Comercial es el sistema que facilita la toma oportuna de decisiones, al adaptarse a tu administración e integrar tus procesos de venta, compras, inventarios, cuentas por cobrar, cuentas por pagar y facturación electrónica. <br><br>
                                    Diseñado para la administración del proceso comercial de todo perfil de empresas que controlen clientes, proveedores, costos e inventarios.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content5">
                <div class="container">
                    <div id="row5" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Factura Electrónica</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq5.png" alt="" class="img-right"></a>
                                    CONTPAQi® Factura electrónica es el sistema que facilita la emisión, timbrado y recepción de  comprobantes fiscales digitales y el control de las cuentas por cobrar, para que puedas agilizar tus transacciones comerciales y ser más competitivo. <br><br>
                                    Diseñado para empresas y personas físicas dedicadas a proveer servicios y que requieren control de clientes y cuentas por cobrar.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content6">
                <div class="container">
                    <div id="row6" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Punto de Venta</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq6.png" alt="" class="img-right"></a>
                                    CONTPAQi® Punto de venta es el sistema que integra de manera ágil las operaciones en tu punto de venta ayudándote a controlar tu inventario, cuidar tu caja, facturar electrónicamente y ganar más dinero. <br><br>
                                    Diseñado para empresas de comercio al detalle que requieren control de su caja e inventarios.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content7">
                <div class="container">
                    <div id="row7" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; CFDI Facturación en línea+</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq7.png" alt="" class="img-right"></a>
                                    CONTPAQi® CFDI Facturación en línea+ es una aplicación Web que facilita la emisión y el timbrado de tus Comprobantes Fiscales Digitales por Internet. <br><br>
                                    Diseñada para personas físicas y morales que deseen emitir CFDI desde cualquier equipo o dispositivo móvil.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content8">
                <div class="container">
                    <div id="row8" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; Business intelligence+</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq8.png" alt="" class="img-right"></a>
                                    CONTPAQi® Tablero de negocio es una aplicación que te permite visualizar y analizar los indicadores de tu empresa en donde estés y en el momento que lo necesites, para que puedas tomar decisiones oportunas que impulsen tu competitividad y crecimiento. <br><br>
                                    Diseñado para quienes están al frente y toman decisiones en una micro, pequeña y mediana empresa.
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="content9">
                <div class="container">
                    <div id="row9" class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4>CONTPAQi&reg; CFDI Nóminas+</h4>
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#wrapper"><img width="15%" src="images/contpaq9.png" alt="" class="img-right"></a>
                                    CONTPAQi® CFDI Nóminas+ es una aplicación en Excel® que te ayuda con la emisión y timbrado de tus Comprobantes Fiscales Digitales por Internet para la nómina. <br><br>
                                    Diseñada para micro empresas que desean emitir recibos de nómina electrónicos (CFDI).
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
        </article>
    </div>

    <footer class="subfooter">
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyright 2014 - Servicios Integrales en Internet y Cómputo de México.
                </div>
            </div>
        </div>
    </footer> 

    <script type="text/javascript">
        document.oncontextmenu = function(){return false;}
    </script>
</body>
</html>