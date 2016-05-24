<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Sistemas CASA | Servicios Integrales en Internet y Cómputo de México</title>
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
        var $p1 = $('contpaqi1').first(),
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
                            <li><a href="casa.hmtl">Sistema CASA</a></li>
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
                            <li><a href="index.php">Inicio</a></li>
                            <li class="sep">|</li>
                            <li>Software</li>
                            <li class="sep">|</li>
                            <li>Sistemas CASA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <article class="Article">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <h4 class="title ">Sistemas CASA</h4>
                            <div>
                                <p>
                                    <img src="images/casa_logo.png" alt="" class="img-right" style="margin-bottom: 20px;"><br>Formalmente establecida en 1995. Se ubica en el Sector Industrial de Software especializado en sistemas aduanales de nuestro país. <br> Con doce años de experiencia en el medio informático y aduanal se encuentra en la clasificación de Pequeña empresa mexicana. <br> Nuestro mercado principal son empresas usuarias del comercio exterior de nuestro país. específicamente empresas denominadas como: <br> Agencias aduanales, Importadoras/Exportadoras con apoderado aduanal y, Almacenes Generales de Depósito. Afiliados a la Asociación de  Mexicana de la Industria de Tecnologías de Información, A.C.  (AMITI).
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            <!-- ================================== -->
            <div id="contpaqi1" class="casa container col-md-4 col-md-pull-4">
                <div class="content">
                <a class="col-md-1" href="#csaawin"><img width="15%" src="images/csaaiwin.png" style="width:10%;height:10%;"alt=""></a>
                <a class="col-md-1" href="#ctrawin"><img width="15%" src="images/ctrawin.png" style="width:10%;height:10%;" alt=""></a>
                <a class="col-md-1" href="#cvalwin"><img width="15%" src="images/cvalwin.png" style="width:10%;height:10%;" alt=""></a>
                <a class="col-md-1" href="#ccgwin"><img width="15%" src="images/ccgwin.png" style="width:10%;height:10%;" alt=""></a>
                <a class="col-md-1" href="#ccajwin"><img width="15%" src="images/ccajwin.png" style="width:10%;height:10%;" alt=""></a>
                <a class="col-md-1" href="#ctarwin"><img width="15%" src="images/ctarwin.png" style="width:10%;height:10%;" alt=""></a>
                </div>
             </div>
            <!-- ================================== -->
            <div id="csaawin">
            <div  id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CSSAIwin</h4>
                                Elaboración de Pedimentos
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/csaaiwin.png" alt="" class="img-left"></a>
                                    Permite la elaboración, validación y pago electrónico de pedimentos en todos los regímenes aduaneros vigentes, dando cumplimiento a la legislación aduanera en vigor y realizar el procesamiento de la información de sus embarques y de las mercancías cubriendo hasta con el más mínimo requerimiento del archivo de transmisión que se compone de un número variable de registros.<br><br>
                                    Genera todo tipo de pedimentos de forma fácil y rápida, con el mayor número de validaciones técnicas y normativas que representen a la agencia aduanal seguridad y eliminación de errores u omisiones.<br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Concepto multipatentes-aduanas que permite la concentración de la información en una sola base de datos.</li>
                                        <li>Captura de pedimentos en 3 pantallas con bloques de captura.</li>
                                        <li>Prevalidación sintáctica, catalógica y normativa integrada en la captura de datos.</li>
                                        <li>Incluye tarifa que reporta y valida durante la captura Aranceles, Permisos y Regulaciones No Arancelarias.</li>
                                        <li>Cálculo y generación automática de contribuciones e identificadores del pedimento.</li>
                                        <li>Asignación y control de números de pedimento conforme un consecutivo o referencia aduanal.</li>
                                        <li>Aviso, validación y aplicación de criterios normativos por clave de documento.</li>
                                        <li>Genera archivos de validación, formatos RTI, CI de SAGARPA.</li>
                                        <li>Incluye boletín informativo de Comercio Exterior de gran interés.</li>
                                        <li>Catalogo amigable que filtra los pedimentos por validar, validados, pagados, por espejo y usuario de captura.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            </div>
            <!-- ================================== -->
            <div id="ctrawin">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CTRAwin</h4>
                                Tráfico y Despacho Aduanero
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/ctrawin.png" alt="" class="img-left"></a>
                                    Le proporciona el medio de automatización integral de las funciones en las áreas operativas de su empresa. El sistema consolida la información de clientes, proveedores, avisos de embarque, recolección de guías, asignación de referencias, registro de tramitación, control de solicitud y recepción de anticipos; recuperando y enviando información a los sistemas de Pedimentos y de Facturación y cobranza.<br><br>
                                    El controlar cada una de las etapas del despacho aduanero mediante la integración de sistemas asegura la obtención de información oportuna, relevante y útil para una eficiente toma de decisiones.<br>
                                    Lleva el seguimiento y control del embarque desde su registro hasta la entrega de las mercancías al cliente.<br>
                                    Controla las actividades de las áreas operativas de la agencia aduanal, a efecto de optimizar y agilizar el servicio de despacho aduanal.<br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Desarrollado con la más alta tecnología Cliente – Servidor para Windows.</li>
                                        <li>Registro y operación de múltiples Patentes y Aduanas.</li>
                                        <li>Controla y distribuye la información de clientes, proveedores y destinatarios.</li>
                                        <li>Registro y control de los avisos del cliente, recolección de guías y asignación de referencias.</li>
                                        <li>Registro y Clasificación de Mercancías por numero de parte con reporte de Permisos y Regulaciones.</li>
                                        <li>Registro de los resultados de la tramitación (Previo y Reconocimiento aduanero).</li>
                                        <li>Generación de la solicitud de anticipos.</li>
                                        <li>Elaboración del expediente de tráfico.</li>
                                        <li>Registro de etapas y fechas en la operación aduanal.</li>
                                        <li>Consulta en línea de la información del Embarque, del Pedimento, Anticipos, Cuentas de gastos y Cobranza.</li>
                                        <li>Conexión a los Sistemas de Pedimentos CSAAIwin, Caja CCAJwin y Facturación CCGwin.</li>
                                        <li>Emisión de diversos reportes de Operaciones por Etapas con exportación y envío por correo electrónico en formatos de Word, Excel, Acrobat y otros.</li>
                                        <li>Reportes con diseño que permite personalizar su contenido y presentación.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ================================== -->
            <div id="cvalwin">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CVALwin</h4>
                                Manifestación de Valor en Aduana
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/cvalwin.png" alt="" class="img-left"></a>
                                    Es una poderosa y eficiente herramienta de apoyo a través de la cual obtendrá la solución más funcional a la obligación de contar con la Manifestación de Valor en Aduana de las Mercancías y las Hojas de Cálculo correspondientes. <br><br>
                                    Este producto esta dirigido a usted que es Agente Aduanal y desea ofrecer un valor agregado a la comunidad importadora del País. <br>
                                    Le ofrece la oportunidad de modernizar los procesos para el registro y control de mercancías, y así atender las necesidades de apertura comercial y globalización de los mercados. <br>
                                    Genera la manifestación y hoja de cálculo que determinan el valor en aduana de las mercancías. <br>
                                    Genera automáticamente la manifestación de Valor en Aduana y hoja de cálculo sin realizar captura alguna al enlazar al sistema de pedimentos CSAAIwin. <br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Concepto multipatentes-aduanas que permite la concentración de la información en una sola base de datos en servidores Windows y Linux.</li>
                                        <li>Elaboración e impresión de la Manifestación de Valor en Aduana y hojas de Cálculo para las diferentes aduanas del País.</li>
                                        <li>Registro y clasificación de productos por Proveedor.</li>
                                        <li>Prorrateo automático de los gastos incrementables y no incrementables.</li>
                                        <li>Validación de criterios aplicables a los métodos de valoración vigentes.</li>
                                        <li>Reportes estadísticos con exportación y envío por correo electrónico en formatos de Word, Excel y PDF.</li>
                                        <li>Reportes estadísticos por proveedor, aduana y estado de la declaración.</li>
                                        <li>Permite capturar la Manifestación de Valor en Aduana en 2 pantallas.</li>
                                        <li>Configuración del entorno de trabajo para las diferentes aduanas del país.</li>
                                        <li>Manifestación de Valor en Aduana por periodo de 6 meses.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
        </div>
            <!-- ================================== -->
            <div id="ccgwin">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CCGwin</h4>
                                Facturación y Cobranza
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/ccgwin.png" alt="" class="img-left"></a>
                                    Es la mejor opción para automatizar la elaboración, el seguimiento y el control de las Cuentas de Gastos, ofrece un medio eficiente en el control de la cobranza, mediante la obtención oportuna de reportes de facturación elaborada, cobrada, pendiente de cobro y estados de cuenta al cliente. <br>
                                    Emite facturas, cuentas de gastos, recibos de honorarios; generando automáticamente el registro de cobranza y estados de cuenta del cliente. <br><br>
                                    Agiliza el proceso de facturación y cobranza; se evita la captura de hasta un 90% de datos al enlazarse con los sistemas de pedimentos CSAAIwin y caja CCAJwin. <br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Definición por cliente de tablas de cobro de honorarios, servicios complementarios, recolección/entrega y conceptos de complementarios.</li>
                                        <li>Cálculo automático de la cuenta de gastos.</li>
                                        <li>Ajuste a cualquier formato la impresión de la cuenta de gastos, recibos de honorarios y facturas anexas.</li>
                                        <li>Manejo e impresión de notas de crédito y de cargo.</li>
                                        <li>Emisión de reportes de facturación, cobranza, estados de cuenta entre otros.</li>
                                        <li>Registro y operación de múltiples Patentes y Aduanas.</li>
                                        <li>Impresión de proformas para su revisión.</li>
                                        <li>Comunicación con diferentes oficinas mediante nuestra utilería llamada “Espejo”.</li>
                                        <li>Manejo de series y asignación dinámica de números de facturas.</li>
                                        <li>Emisión de diversos reportes de Facturación, Cobranza y Estados de Cuenta con exportación y envío por correo electrónico en formatos de Word, Excel, PDF y otros.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            </div>
            <!-- ================================== -->
            <div id="ccajwin">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CCAJwin</h4>
                                Caja y Control Bancario
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/ccajwin.png" alt="" class="img-left"></a>
                                    Es un sistema orientado al control de las operaciones bancarias efectuadas por el despacho de las mercancías y de los movimientos internos de la empresa. Le permite elaborar y registrar los cargos, abonos, pólizas cheque, recibos de anticipos y cierres de cuentas bancarias. <br><br>
                                    Control de cuentas bancarias por gastos e ingresos de la agencia.
                                    Anticipos del cliente y gastos por el despacho aduanal.
                                    Controla los ingresos, egresos y saldos en las cuentas bancarias, distinguir de los fondos los anticipos del cliente de los ingresos de la Agencia Aduanal. <br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Desarrollado con la más alta tecnología Cliente – Servidor para Windows.</li>
                                        <li>Emisión de cheques para gastos por cuenta del cliente, registro de anticipos y cobranza con asignación automática en la cuenta de gastos.</li>
                                        <li>Impresión de cheques y recibos de caja con formatos alternativos.</li>
                                        <li>Asignación automática de folios para cheques y recibos de caja.</li>
                                        <li>Pago electrónico de pedimentos aduanales con conexión al CSAAIwin.</li>
                                        <li>Identificación de movimientos por referencia y aplicación.</li>
                                        <li>Actualización y consulta en línea del saldo de la cuenta bancaria.</li>
                                        <li>Consulta de movimientos por fecha de emisión y aplicación.</li>
                                        <li>Identificación plena de gastos, anticipos y cobranza por referencia aduanal.</li>
                                        <li>Reporte de estados de cuenta y movimientos bancarios.</li>
                                        <li>Emisión de reportes de Movimientos Bancarios y Estados de Cuenta con exportación y envío por correo electrónico en formatos de Word, Excel, PDF y otros.</li>
                                        <li>Afectación en línea de anticipos, cobranza y pagos por cuenta del cliente al sistema CCGwin.
                                        <li>Registro de anticipos del cliente e impresión de sus recibos.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
            </div>
            <!-- ================================== -->
            <div id="ctarwin">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="de_divider none"><span></span></div>
                        <div class="span1"></div>
                        <div class="span10">
                            <div class="block-title text-center">
                                <h4 style="margin-bottom: 0;">CTARwin</h4>
                                Consulta a la TIGIE y Legislación del Comercio Exterior
                                <hr style="margin-top: 5px; margin-bottom: 30px;">
                            </div>
                            <div>
                                <p>
                                    <a href="#content"><img src="images/ctarwin.png" alt="" class="img-left"></a>
                                    Es un sistema orientado a la obtención de información oportuna y confiable de la TIGIE, IVA, IEPS, ISAN, preferencias arancelarias, permisos y regulaciones no arancelarias. <br><br>
                                    Permite clasificar arancelariamente las mercancías de forma segura y rápida. Contiene la más completa biblioteca electrónica de leyes, reglamentos, decretos, acuerdos, lineamientos, reglas de carácter general, TLC’s, manuales, tablas, ALADI, NOMs y formatos oficiales con sus respectivos instructivos. <br><br>
                                    <strong>Caracteristicas:</strong><br>
                                    <ul>
                                        <li>Total autonomía de ejecución en ambiente monousuario o multiusuario de redes con definición de acceso a usuarios.</li>
                                        <li>Presentación de los textos legales a la clasificación arancelaria a nivel capítulo, partida, subpartida, y fracción arancelaria en pantallas correspondientes.</li>
                                        <li>Consulta en línea a las Reglas Generales del Sistema Armonizado, Reglas Generales TIGI(E), Notas Explicativas y Notas a Capítulo y sección.</li>
                                        <li>Localización de información por sección, capítulo, descripción y fracción arancelaria.</li>
                                        <li>Correlación y liga entre las distintas leyes, reglamentos, decretos, acuerdos, manuales, etc.</li><br>
                                        <li><strong>Información específica a nivel de fracción arancelaria:</strong>
                                            <ul>
                                                <li>Aranceles vigentes y unidades de medida para la TIGI y TIGE.</li> 
                                                <li>Aranceles vigentes para Tratados de Libre Comercio y preferencias ALADI.</li> 
                                                <li>Tratamiento al IVA, ISAN e IEPS.</li>
                                                <li>Precios Estimados, Cuotas Compensatorias y Normas Oficiales Mexicanas.</li> 
                                                <li>Preferencias para franja fronteriza y zonas libres.</li>
                                                <li>Restricciones arancelarias y no arancelarias.</li>
                                                <li>Registro histórico de restricciones y preferencias.</li>
                                            </ul>
                                        </li><br>
                                        <li><strong>Módulo Legislativo:</strong><br>
                                            <ul>
                                                <li>Ley de Comercio Exterior y Reglamento.</li>
                                                <li>Ley Aduanera y Reglamento.</li>
                                                <li>Ley del IVA y Reglamento.</li> 
                                                <li>Ley del IEPS y Reglamento.</li>
                                                <li>Ley Federal de Derechos.</li>
                                                <li>Ley del ISAN.</li>
                                                <li>Ley del ISR.</li>
                                                <li>Código Fiscal de la Federación y Reglamento.</li> 
                                                <li>Reglas Carácter General en Materia de Comercio Exterior.</li> 
                                                <li>Decretos, Acuerdos y Normas Oficiales Mexicanas.</li>
                                                <li>Tratados Internacionales.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                        <div class="span1"></div>
                    </div>
                </div>
            </div>
        </article>
    </div>
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