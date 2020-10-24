@extends('layouts.template')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido al inicio, {{ $user->name }}.
                    @if($esAdministrador)
                        <p>Es usuario administrador.</p>
                        <h4>Ingresar artículos a la base de datos:</h4>
                        <br />
                        <br />
                        <form class="form-group" method="post" action="{{ url('/insertar-art') }}">
                            @csrf
                            <label for="NOMBREARTICULO">Título</label>
                            <input type="text" name="NOMBREARTICULO" class="form-control" placeholder="Nombre del artículo" required />
                            <br />

                            <label for="DESCRIPCION">Descripción</label>
                            <textarea name="DESCRIPCION" class="form-control" placeholder="Descripción corta del artículo" rows="5" required></textarea>
                            <br />

                            <label for="CONTENIDO">Contenido</label>
                            <textarea name="CONTENIDO" class="form-control" placeholder="Contenido del artículo" rows="10" required></textarea>
                            <br />

                            <label for="FOTO">Foto</label>
                            <input type="text" name="FOTO" class="form-control" placeholder="Nombre del archivo" required />
                            <br />

                            <label for="FECHA">Fecha</label>
                            <input type="text" name="FECHA" class="form-control" placeholder="Fecha del articulo" required />
                            <br />

                            <label for="TAGS">Tags</label>
                            <input type="text" name="TAGS" class="form-control" placeholder="Tags o keywords" required />
                            <br />

                            <input type="submit" class="btn btn-primary" value="Insertar">
                            <input type="reset" class="btn btn-danger" value="Limpiar campos">
                        </form>
                    @else

                        <p>En esta seccion puede visitar los artículos para los usuarios registrados:</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <h2>Programas gratis, solo para Usuarios registrados</h2>
                                    <p>
                                    Hoy, como parte del contenido exclusivo para usuarios de nuestra web, te traemos 3 programas para tu Pc junto con una pequeña guía o tutorial de cómo utilizarlos y sacarles el mejor provecho posible. El primero es Open Hardware Monitor, un software de código abierto, listo para descargarse, descomprimirse y utilizarse. El único requisito previo es tener un gestor de archivos comprimidos, el que trae Windows por defecto, u opciones gratuitas como 7Zip o semi-gratuitas como WinRar.
                                    </p>
                                    <br />
                                    <p>Es un software perfecto para computadoras en general, tanto para quienes juegan seguido, quienes diseñan o desarrollan, o cualquiera que trabaje con su Pc y quiera controlar el estado del hardware. El programa se ejecuta y nos da un reporte de la velocidad de ventiladores, temperaturas de cada componente, carga de uso y espacios ocupados y libres. Es rápido, ligero y consume pocos recursos. Además, es fácil de configurar.</p>
                                    <br />
                                    <a href="https://openhardwaremonitor.org/downloads/" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <img alt="Open Hardware Monitor" src="hardwareMonitor1.png" class="captura">
                                    <br />
                                    <p>Software que nosotros usamos en nuestras computadoras.</p>
                                    <br />
                                    <img alt="Open Hardware Monitor" src="hardwareMonitor2.png" class="captura">
                                    <br />
                                    <h6>Grabacion de video</h6>
                                    <p>
                                    Otro software destacado es OBS Studio. Tanto si te dedicas a jugar y compartir GamePlays, como si editas video profesional, o por cualquier razón necesitas capturar la pantalla de tu pc, este programa gratuito y libre te permite hacerlo de forma fácil, y es versátil tanto para Windows, Linux o Mac. Tiene asistentes de configuración, por lo que su uso es sencillo y permite grabación de video y audio.
                                    </p>
                                    <br />
                                    <img alt="OBS Studio" src="obs.png" class="captura">
                                    <br />
                                    <br />
                                    <a href="https://obsproject.com/es/welcome" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <h6>Suite Ofimatica</h6>
                                    <p>
                                    Por ultimo te traemos una opción interesante por si no deseas adquirir MS Office, teniendo que pagar por este. Para esto existe LibreOffice, otro programa Open Source tan potente como la suite de Microsoft, pero gratis y de código abierto, por lo que no tendrás que pagar nada, pero podrás seguir usando los recursos de un entorno de trabajo muy bueno y sencillo. Cuenta con un editor de texto que reemplaza Word, administrador de bases de datos, hoja de cálculo creador de presentaciones y además, el programa LibreOffice Math, un editor de formulas matemáticas (Que no tiene reemplazo en Ms Office, por lo que estamos ganando 1 programa mas).
                                    </p>
                                    <br />
                                    <img alt="Libre Office" src="writter.png" class="captura">
                                    <br />
                                    <br />
                                    <a href="https://es.libreoffice.org/descarga/libreoffice/" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <br />
                                    <p>Gratuito, útil para descomprimir o trabajar con archivos de tipo .zip, .7z, .tar, .wim entre otros, y desmontar todo tipo de formatos comprimidos (incluido el .rar e .iso), tenemos el programa 7-Zip. Es software libre y muy recomendable..</p>
                                    <a href="https://www.7-zip.org/" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <br />
                                    <h6>Brackets</h6>
                                    <p>
                                    Software para los desarrolladores y programadores, que necesitan trabajar con todo tipo de lenguajes. Este editor de código consume muy pocos recursos y es muy ligero, mientras que contiene soporte para editar y programar todo tipo de lenguajes, se trata de Brackets:
                                    </p>
                                    <a href="http://brackets.io/" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <br />
                                    <h6>PhotoscapeX - edición de imagenes</h6>
                                    <p>
                                    Una opción interesante a los programas pagos y privativos, es PhotoscapeX, fácil de usar y con gran cantidad de herramientas, gratuito en Windows y MacOS
                                    </p>
                                    <a href="http://x.photoscape.org/" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <br />
                                    <h6>qBittorrent</h6>
                                    <p>
                                    Un gestor de descargas de torrents, si no te interesa usar los habituales, es qBittorrent. Open Source, gratis, con buscador integrado y multiplataforma:
                                    </p>
                                    <a href="https://www.qbittorrent.org/download.php" class="btn btn-primary">Descargar</a>
                                    <br />
                                    <br />
                                    <br />
                                    <h6>Comunicacion Celular - Pc</h6>
                                    <p>Aplicación para teléfonos Android, Pushbullet, una opción interesante para poder controlar mensajería, notificaciones y otras funciones del celular, desde tu computadora. Encontrala en la Google Play Store.</p>
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
