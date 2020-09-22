-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-09-2020 a las 22:18:52
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id13080475_basedatosprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COMENTARIOSFINAL`
--

CREATE TABLE `COMENTARIOSFINAL` (
  `NOMBRE` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `COMENTARIO` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ARTICULO` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `COMENTARIOSFINAL`
--

INSERT INTO `COMENTARIOSFINAL` (`NOMBRE`, `COMENTARIO`, `FECHA`, `ARTICULO`) VALUES
('Anonimo', 'Buena info, espero el proximo capitulo', '2020/04/05', 'cursoProgramacionCap1'),
('Anonimo', 'Que buena info', '2020/04/05', 'articuloAntivirus'),
('Marta', 'Yo uso el Avast, por ahora me anda bien', '2020/04/06', 'articuloAntivirus'),
('Santiago', 'increible...', '2020/04/06', 'articuloNoticias6-4'),
('Mica', 'Siempre habia usado Avast, pero voy a probar ahora instalando el antivirus avg, ahora que se que es mejor, gracias!', '2020/04/06', 'articuloAntivirus'),
('Gonzalo', 'Hola, una pregunta tengo  avg y desde que lo instale no puedo jugar a algunos juegos puede ser por el antivirus?', '2020/04/06', 'articuloAntivirus'),
('Roberto', 'Gracias, siempre habia querido estudiar programacion pero no podia pagar los cursos, te agardezco por subirlo gratuito', '2020/04/06', 'cursoProgramacionCap1'),
('Anonimo', 'Si los juegos no son originales, puede que el antivirus ls bloquee, intenta desactivarlo durante la instalacion o colocarlos como \"excepcion\"', '2020/04/06', 'articuloAntivirus'),
('Mica', 'Me encanto lo de google arts y culture, es la primera vez que escucho de esa app y me encanto IOI Me hace acordar un poco al encarta con sus visitas virtuales ♥', '2020/04/07', 'articulo7-4'),
('Sole', 'Gracias por brindar información importante sobre el Covid-19, intento no mirar ya televisión ni leer diarios porque me supera tanta información desoladora, por lo que aprecio que comuniques información como esta verdaderamente importante y sobre todo esperanzadora', '2020/04/07', 'articulo7-4'),
('Gonzalo', 'Gracias hice lo de ponerlo como excepcion y me funciono ☻', '2020/04/07', 'articuloAntivirus'),
('Mica', 'Gracias! Estuvo super claro :)', '2020/04/07', 'cursoProgramacionCap1'),
('Jose', 'Hola! Como puedo descargarlo para 32 bits?', '2020/04/08', 'cursoPoo2'),
('Mica', 'Genial! Pude hacerlo! Espero el proximo capitulo :3', '2020/04/08', 'cursoPoo2'),
('Anonimo', 'Gracias por la info!', '2020/04/10', 'articuloControles'),
('Matias', 'graciassss', '2020/04/10', 'articulo9-4'),
('Matias', 'Me baje el cs 1.6 al celu, gracias!', '2020/04/10', 'articulo9-4'),
('Mica', 'IOI  genial! Tenemos para pasar el rato ahora en cuarentena ☺', '2020/04/10', 'articulo9-4'),
('Mica', 'IOI  genial! Tenemos para pasar el rato ahora en cuarentena ☺', '2020/04/10', 'articulo9-4'),
('Mica', 'A mi paso eso cuando instale windows 10, mi compu empezo a andar mal y luego tiro un pantallazo azul y no me prendio nunca mas :C', '2020/04/10', 'articulo8-4'),
('Anonimo', 'me gusta mucho tu pagina, pensaste algun dia en acer sorteos?', '2020/04/10', 'articuloControles'),
('Mica', 'Muchas gracias! Tercer clase hecha :3 Espero la cuarta ☺', '2020/04/11', 'cursoPoo3'),
('Marta', 'Gracias por la nota, actualmente estoy luchando con una empresa de telefonía que me aumenta y cambia de plan sin autorización. Uno como usuario se siente que se burlan. Es muy útil saberlo gracias por compartir esta información. ', '2020/04/12', 'articulo12-4'),
('Mica', 'IOI Ojala, me encantaría verlo de nuevo. Lo que no me gusta es el nombre de la nueva peli de thor que parece comedia romantica XD, el nombre es muy malo', '2020/04/13', 'articulo13-4bis'),
('Anonimo', 'Gracias por la notica de los comics gratis!!! ♥', '2020/04/13', 'articulo13-4bis'),
('Mica', 'Gracias!! Me maree un poco con lo String como objeto dentro de otro objeto XD Esperare la clase en que explique detenidamente String :3 Gracias como siempre', '2020/04/13', 'cursoPoo4'),
('Gonzalo', 'Gracias! ', '2020/04/21', 'cursoPoo5'),
('Anonimo', 'Wow el video esta buenisimo', '2020/04/23', 'articulo22-4'),
('Anonimo', 'Gracias, me compre el Serious sam y baje los juegos de la epcstore', '2020/04/23', 'articulo21-4bis'),
('Anonimo', 'Gracias, este tema de los antivirus me interesa muchisimo!', '2020/05/21', 'articulo21-5'),
('Anonimo', 'No coincido con el ranking, para mi Nod32 es lejos el mejor, siempre me resulto muy bueno, pero avast siempre me trajo problemas', '2020/05/21', 'articulo21-5'),
('Anonimo', 'Genial! ya tenia ganas de empezar a ver algo de interfaces graficas', '2020/05/23', 'cursoPoo8'),
('Mica', 'IOI que genial que lo muestren por aca!', '2020/05/27', 'streamings'),
('Gonzalo', ' me encantan tus posteos sobre videojuegos!', '2020/05/28', 'articulo27-5'),
('Anonimo', 'Muy interesante esta info. Estaremos atentos a las novedades ', '2020/05/29', 'articulo26-5bis'),
('gonza', 'Hoy si!!!', '2020/05/30', 'streamings'),
('Anonimo', 'Ya esperaba estos juegos para steam, queria probarlos desde hace tiempo', '2020/05/31', 'articulo26-5'),
('Matias', 'Crei que el beyond two souls era exclusivo de ps', '2020/05/31', 'articulo26-5'),
('snowClan', 'yo no encontre ninguno en steam', '2020/05/31', 'articulo26-5'),
('Anonimo', 'las personas que no tengan negocio tendran que pagar por el servicio?', '2020/06/17', 'articulo17-6'),
('Miguel', 'Yo lei que whatsapp iba a cobrar por usarlo el año que viene. es cierto?', '2020/06/17', 'articulo17-6'),
('Anonimo', 'Por ese precio, prefiero comprar una compu', '2020/06/17', 'articulo16-6'),
('andres', 'ojala hicieran un remake del resident evil 4', '2020/06/17', 'articulo13-6'),
('Anonimo', 'Odio cuando ponen un juego como gratis pero solo por algunos dias :(', '2020/06/19', 'articulo19-6'),
('Jose', 'Se va a llenar de gente el dead by daylight si dejan probar gratis el juego', '2020/06/19', 'articulo19-6'),
('Anonimo', 'Esta carisimo el Jdei Fallen order ', '2020/06/19', 'articulo19-6'),
('Marcos Perez', 'Esta bueno poder probar the division antes de comprarlo', '2020/06/19', 'articulo19-6'),
('Mica', 'Años esperandolo!! IOI', '2020/06/19', 'articulo19-6bis'),
('Pablo', 'Star Wars Jedi: Fallen Order es carisimo aun con el descuento!', '2020/06/29', 'articulo27-6'),
('Anonimo', 'Apple anuncia cosas como nuevas, como los widgets, que llevan generaciones en android, no se como tienen tantos seguidores', '2020/06/29', 'articulo23-6'),
('', '', '2020/07/18', ''),
('', '', '2020/07/22', ''),
('', '', '2020/07/25', ''),
('', '', '2020/07/28', ''),
('', '', '2020/08/04', ''),
('', '', '2020/08/07', ''),
('', '', '2020/08/07', ''),
('', '', '2020/08/10', ''),
('', '', '2020/08/14', ''),
('', '', '2020/08/16', ''),
('Anonimo', 'Muchas gracias por las ofertas, me vinieron genial', '2020/08/18', 'articulo12-8'),
('Anonimo', 'Las agarre justo, estan por terminar', '2020/08/18', 'articulo12-8'),
('', '', '2020/08/19', ''),
('Anonimo', 'ojala volver a ver los blackberry', '2020/08/24', 'articulo23-8'),
('Anonimo', 'Muy buenos los trailers de DC', '2020/08/24', 'articulo23-8bis'),
('', '', '2020/08/31', ''),
('', '', '2020/09/03', ''),
('', '', '2020/09/04', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
