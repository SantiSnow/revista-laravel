<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

            .Imagen-perfil{
                width: 100%;
            }

        </style>
    </head>
    <body>
        @extends("layouts.template")
        @section("navbar")
        
        @endsection

        @section("header")

        
        @endsection

        @section("contenido")
        @parent
        <section>
        <div class="container">
			<h3>Sobre Nosotros:</h3>
			<p>Desde este pequeño espacio de información, nuestra idea es llevar a las personas información, noticias confiables, articulos de calidad y herramientas para mantenerse al tanto de los últimos acontecimientos.</p>
	    </div>
		<div class="container">
			<div class="row">
				<h4>Politica de privacidad:</h4>
				<p>Desde nuestra parte, nos comprometemos a que mientras navegas en nuestro sitio, no corres ningun riesgo de seguridad. No recopilamos datos, de ninguna clase, no
				pedimos direcciones de correo de forma obligatoria, solo para quienes quieran registrarse. No enviamos correo basura ni spams. No participamos en ninguna clase de 
				fraude ni estafas, y nos declaramos en contra de cualquier tipo de robo, estafa o engaño. No recopilamos tus datos en nuestros sitios web, y no planeamos hacerlo. Esta 
				pagina es una organizacion sin fin de lucro, sin motivos ni orientacion economica de ningun tipo, simplemente se trata de un sitio web informativo. Se prohibe terminantemente 
                el uso de dicho sitio para lucrar, engañar o cualquier otro uso desautorizado por el autor. </p>
				<p>Cualquier duda o consulta no tardes en enviarnos comentarios o correo electronico para aclararlas.</p>

                <p><strong>Política de Cookies:</strong></p>
                <p>En nuestro sitio web, utilizamos una Cookie para que almacenes que estilo de navegación preferis, con tema oscuro o claro, para facilitarte la lectura.</p>
                <p>Utilizamos Cookies de Laravel, para mantener las contraseñas y usuarios, asi como la sesión seguras. Si deseas deshabilitar las cookies, o bloquearlas, podes hacerlo en la configuración
                de tu navegador.</p>
				
				<p>Los datos guardados en tu navegador pueden ser los datos de usuario y contraseña, autocompletado de formularios, que vos podes elegir si tu navegador guarda, si dispones de esa opción. Además almacenamos tus preferencias de estilo del sitio, modo nocturno o modo dia, para mejorar tu experiencia de usuario. Esta es la unica cookie que nuestro sitio utiliza, creada por nuestros desarrolladores. Si deseas navegar por nuestro sitio sin esta opcion, podes deshabilitarla desde la configuración de tu navegador.</p>
				<p>Los creadores y administradores de este sitio se reservan los derechos sobre el uso de este sitio. Se prohibe su uso, reproducción o cualquier otro no permitido o autorizado por los dueños de el mismo.</p>
				<p>
				El uso no autorizado del material encontrado en este sitio esta prohibido. Utilizamos imagenes como ilustración de la información y sin ningun fin de lucro, se prohibe la comercialización, o uso privativo de la información y multimedia encontrados en este sitio web.
				</p>
				<p>
				Las imagenes de Stock son usadas como ilustración de la información y sin fin de lucro, las imagenes son usadas desde Freepik gracias a su colaboración con imagenes gratuitas y de stock.
				</p>
				<br />
				<br />
				<br />
			</div>
		</div>
        <div class="container">
	    <h4>Sobre nuestros creadores/colaboradores:</h4>
		<div class="container">
			<div class="row">
			    <div class="col-md-2">
			        <img id="dummy2" src="colaboradores/fotoPerfil1.jpg" alt="Foto Perfil" class="Imagen-perfil">
			    </div>
				<div class="col-md-5">
					<div>
                    <h4>Santiago Aguirre Perez</h4>
					<p class="textNormal">Desarrollo del sitio, programador, diseño y maquetado del sitio, mantenimiento de bases de datos y del sitio web.</p>
					<p class="textNormal">Comunicación y redes, redactor de artículos, noticias y cursos, creador de contenido gráfico.</p>
					</div>
				</div>
			</div>
		</div>
        <br />
        <br />
        <div class="container">
            <h4>Colaboran con nosotros:</h4>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img id="dummy2" src="colaboradores/bubook.jpg" alt="Foto Perfil" class="Imagen-perfil">
                    </div>
                    <div class="col-md-5">
                        <div>
                        <h4>Bubook</h4>
                        <p class="textNormal">Artística, imagenes, animaciones, vectores y otros, como ilustración de las notícias y artículos.</p>
                        <p class="textNormal">Agradecemos su participación, podes ver sus trabajos en Instagram desde el siguiente enlace.</p>
                        <br />
                        <a class="btn btn-primary" href="https://www.instagram.com/bubook11/">Bubook</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                        <h4>Freepik:</h4>
                        <p class="textNormal">Artística, imagenes, animaciones, vectores y otros, como ilustración de las notícias y artículos.</p>
                        <p class="textNormal">Agradecemos su participación, podes ver sus productos en:</p>
                        <br />
                        <a class="btn btn-primary" href="https://www.freepik.es/">Freepik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        @endsection

    </body>
</html>
