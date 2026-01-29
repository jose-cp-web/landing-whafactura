<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules\bootstrap-icons\font\bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ContaPortable | WhaFactura</title>

    <!-- Google tag (gtag.js) yec: Actualizado 14 dic 2023 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C7Q8Z1DBFJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-C7Q8Z1DBFJ');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '553915085081143');
        fbq('track', 'PageView');
    </script>
</head>

<body>
    <header class="py-5 bg-gradient-magic">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="fw-bold t1 text-white">WhaFactura</h1>
                        <h3 class="t1 fw-bold" style="color: #F6DBA2">ContaPortable</h3>
                        <div class="col-lg-8 text-white">
                            <h4>Crea facturas desde la comodidad de tu whatsapp</h4>
                            <p>Descubre el nuevo servicio de facturación electrónica via WhatsApp</p>
                        </div>
                        <div class="text-start text-white">
                            <ul>
                                <li>No necesitas instalar nada</li>
                                <li>No necesitas aprender nada</li>
                                <li>Tan fácil como chatear con alguién</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid" src="img/Mockups/whafacturalogov3.png" alt="Factura electrónica via whatsapp" width="350"/>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!--Caracteristicas-->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold pb-3">¿Como Funciona WhaFactura?</h2>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-elephant-900">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/unic-pago.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Un solo pago!</h5>
                                <p class="card-text">Tu compra es una sola inversión, sin suscripciones ni mensualidades
                                    por el uso del Software.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/sin-limte-dte.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Sin limite de DTES!</h5>
                                <p class="card-text">No hay restricción en cuanto al número de DTE que puede emitir con
                                    ContaPortable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/sin-costo-adicional.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Sin costo por DTES!</h5>
                                <p class="card-text">No hay costo por transmición de cada DTE, puedes emitir los que
                                    desees sin costo adicional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/sin-limite-usuario.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">¡Sin limite de Usuarios!</h5>
                                <p class="card-text">No hay restricción en la cantidad usuarios, puede crear los que
                                    necesite</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Caracteristicas-->

        <!--Funciones-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 d-flex justify-content-center">
                            <img class="img-fluid rounded mb-5 mb-lg-0" src="img/Mockups/Mackups-2.png" alt="" width="400" />
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center text-xl-star pb-3">
                                <h3 class="fw-bolder">Algunas funciones que ofrecen los módulos de nuestros distintos software</h3>
                            </div>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Registro de Clientes</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Registro de Proveedores</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Facturación Electrónica
                                </li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Impresión de representación gráfica de Factura Electrónica en formato Ticket
                                </li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Control de inventario para
                                    entradas y salidas de productos</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Generación e Impresión de Libros de IVA</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Carga de Cátalogo de Cuentas desde Microsoft Excel</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Registo de asientos
                                    contables y generación de reportes contables</li>
                                <li><i class="bi bi-check-circle-fill me-2 text-primary"></i>Registro de Empleados y
                                    Planillas de Sueldo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Funciones-->

        <!--Productos-->
        <section class="py-5">
            <div class="container">
                <h2 class="fw-bold text-center">Productos ContaPortable</h2>
                <p class="text-center">A continuación te presentamos nuestros productos ContaPortable con Factura
                    Electrónica</p>
                <div class="row gy-3 justify-content-center pt-3">
                    <div class="col-lg-6 col-xl-3">
                        <div class="card boder-cp">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/products/box-facturacion.jpg" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">ContaPortable Facturación Electrónica</h5>
                                <p class="card-text">Software Facturador para llevar registro de clientes y emisión de
                                    Documentos Electrónicos</p>
                                <p class="h2 fw-bold mb-0 text-primary">$349</p>
                                <small class="fw-bold">Licencia para 1 Empresa</small>
                                <div>
                                    <small>*IVA incluido</small>
                                </div>
                            </div>
                            <div class="d-grid gap-2 px-3 pb-3">
                                <a href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! Deso cotizar solo el Módulo de Facturación Electrónica" target="_blank" class="btn btn-primary"><i class="bi bi-file-earmark-text-fill me-2"></i>Solicitar una Cotización</a>
                                <!--<a href="" class="btn btn-outline-primary">Más Información</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="card boder-cp">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/products/box-inv-fact.jpg" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">ContaPortable Inventario y Facturación Electrónica</h5>
                                <p class="card-text">Software para control de inventario, registro de clientes y emisión
                                    de Documentos Electrónicos</p>
                                <p class="h2 fw-bold mb-0 text-primary">$599</p>
                                <small class="fw-bold">Licencia para 1 Empresa</small>
                                <div>
                                    <small>*IVA incluido</small>
                                </div>
                            </div>
                            <div class="d-grid gap-2 px-3 pb-3">
                                <a href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! Deseo cotizar ContaPortable Inventario y Facturación Electrónica" target="_blank" class="btn btn-primary"><i class="bi bi-file-earmark-text-fill me-2"></i>Solicitar una Cotización</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <div class="card boder-cp">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/products/box-cp-pro.jpg" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">ContaPortable Pro Facturación Electrónica</h5>
                                <p class="card-text">Software para control de inventario, contabilidad, IVA, clientes y
                                    emisión de Documentos Electrónicos</p>
                                <p class="h2 fw-bold mb-0 text-primary">$745</p>
                                <small class="fw-bold">Licencia para 1 Empresa</small>
                                <div>
                                    <small>*IVA incluido</small>
                                </div>
                            </div>
                            <div class="d-grid gap-2 px-3 pb-3">
                                <a href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! Deseo cotizar ContaPortable Pro con Factura Electrónica" target="_blank" class="btn btn-primary"><i class="bi bi-file-earmark-text-fill me-2"></i>Solicitar una Cotización</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Productos-->

        <!--Servicios-->
        <section class="bg-black-haze-50">
            <div class="container py-5">
                <h2 class="fw-bold text-center pb-3">¿Que ofrecemos en nuestros servicios?</h2>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-elephant-900">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/capacitacion.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Capacitaciones</h5>
                                <p class="card-text">En ContaPortable, ofrecemos capacitaciones remotas al personal
                                    correspondiente para asegurar un óptimo manejo del software. ¡La compra del software
                                    ya incluye capacitaciones!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/actualizacion.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Actualizaciones</h5>
                                <p class="card-text">Todos nuestros programas reciben actualizaciones constantes, ya sea
                                    para adaptarse a cambios legislativos en El Salvador, mejorar la interfaz de usuario
                                    o incorporar nuevas herramientas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/apoyo-tecnico.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Soporte Técnico</h5>
                                <p class="card-text">Nuestro equipo de soporte técnico está disponible para ayudarte a
                                    resolver dudas e inquietudes o problemas relacionados con el software, ya sea a
                                    través de correo electrónico, conexiones remotas o videoconferencia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Servicios-->

        <!--Ventajas-->
        <section>
            <div class="container py-5">
                <h2 class="fw-bold text-center pb-3">Ventajas de utilizar ContaPortable</h2>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="text-center fw-bold">
                                    <h5>ContaPortable</h5>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Sin límite
                                        en la Emisión de DTE´s (Factura electrónica).</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Sin
                                        suscripciones (por uso de software).</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Sin Limite
                                        de Usuarios.</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Los datos
                                        son de tu propiedad (se almacenan directamente en tu equipo y solo tú tienes
                                        acceso a la información).</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Sin pagos
                                        extras por almacenamiento de información.</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-primary"></i>Facilidad
                                        de uso en la emisión de factura (se puede operar todo desde el teclado).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="text-center fw-bold">
                                    <h5>Otros software</h5>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>Límite mensual
                                        en la emisión de DTES (Factura electrónica).</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>Pago de
                                        suscripciones mensuales para acceder a tus datos.</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>Pago mensual
                                        por usuario.</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>Los datos
                                        pertenecen al proveedor del software (si dejas de pagar pierdes el acceso a tus
                                        facturas de años anteriores).</li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>En otros
                                        softwares debes pagar extra por conservar tu información de años anteriores.
                                    </li>
                                    <li class="mb-2"><i class="bi bi-x-circle-fill me-2 text-danger"></i>Uso en ambiente
                                        web no es práctico para grandes volúmenes de facturación (no permite hacer todo
                                        desde el teclado).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!--Ventajas-->

         <!--ambiente de operacion-->
        <section class="bg-black-haze-50">
            <div class="container py-5">
                <h2 class="fw-bold text-center pb-3">Ambiente de Operación</h2>
                <div class="row gy-3 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card bg-elephant-900">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/sistema-operativo-windows.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Software de ambiente Windows</h5>
                                <p class="card-text">Todos los productos de ContaPortable son aplicaciones locales para
                                    sistema operativo Windows, desarrollado en Visual Fox Pro 9.0 de la mano con un
                                    Framework desarrollado por ContaPortable que mejora las capacidades del lenguaje.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/almacenamiento-en-la-nube.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Nube ContaPortable</h5>
                                <p class="card-text">¿Necesitas operar sucursales en linea o acceder a tu software
                                    ContaPortable desde cualquier ubicación? Nube ContaPortable es la solución. Permite
                                    a los usuarios operar con servicios de escritorio remoto para trabajar en tu
                                    software ContaPortable desde cualquier lugar y dispositivo.</p>
                                <a class="btn btn-outline-primary btn-sm" href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! Deseo conocer precios sobre Nube ContaPortable" target="_blank"><i class="bi bi-file-earmark-text-fill me-2"></i>Solicitar una
                                    Cotización</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card">
                            <div class="d-flex justify-content-center">
                                <img class="img-card" src="img/icons/servidor-dedicado.png" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">Terminal Server</h5>
                                <p class="card-text">Dado que ContaPortable es un software local diseñado para Windows,
                                    tienes la posibilidad de apoyarte con tu técnico de informática de confianza para
                                    configurar un Terminal Server RDP en tu empresa. De hecho, este entorno operativo
                                    ¡es altamente recomendado por nosotros!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--ambiente de operacion-->

         <!--Contacto-->
        <section class="bg-elephant-cp">
            <div class="container py-5">
                <div class="text-center">
                    <h2 class="fw-bold text-salomie-200">¡Contactate con nosotros!</h2>
                    <p class="text-white">Contáctanos para obtener más información sobre nuestros productos con Factura
                        Electrónica. Puedes programar una presentación remota a través de Google Meet para explorar a
                        fondo el funcionamiento de nuestros programas y elegir la mejor opción para tu negocio.</p>
                    <a class="" href="https://api.whatsapp.com/send?phone=50379898203&text=¡Hola ContaPortable! tengo algunas dudas sobre su software con Factura Electrónica, ¿me pueden ayudar?" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="¡Contactate con nosotros!">
                        <i class="bi bi-whatsapp text-shamrock-400" style="font-size: 150px;"></i>
                    </a>

                    <p class="fw-bold-1" style="color: #F7E378;">*Solo WhatsApp Chat, atención telefónica no disponible.
                    </p>
                    <p class="fw-bold text-white fs-5"><i class="bi bi-clock-fill" style="font-size:20px; margin-right: 10px;"></i>Horarios de atención:</p>
                    <ul class="list-unstyled text-white">
                        <li><span class="fw-bold">Lunes a Viernes:</span> 8:00 am - 5:00 pm</li>
                        <li><span class="fw-bold">Sábado:</span> 8:00 am - 12:00 pm</li>
                        <li><span class="fw-bold">Domingo:</span> Cerrado</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Contacto-->

        <section class="bg-black-haze-50 py-5">
            <div class="container">
                <p class="text-muted small mb-4 mb-lg-0 text-center">&copy; ContaPortable 2024. Todos los derechos
                    reservados.
            </div>
        </section>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>