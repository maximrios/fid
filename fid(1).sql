-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2014 a las 00:44:01
-- Versión del servidor: 5.5.38-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_clientes`
--

CREATE TABLE IF NOT EXISTS `hits_clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(255) DEFAULT NULL,
  `domicilioCliente` varchar(255) DEFAULT NULL,
  `telefonoCliente` varchar(45) DEFAULT NULL,
  `celularCliente` varchar(45) DEFAULT NULL,
  `emailCliente` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `hits_clientes`
--

INSERT INTO `hits_clientes` (`idCliente`, `nombreCliente`, `domicilioCliente`, `telefonoCliente`, `celularCliente`, `emailCliente`) VALUES
(1, 'Fundación para la Integración y el Desarrollo de Comunidades', 'Florida 155', '(54 387) 155780060', '(54 387) 154686308', 'contacto@fundacionfidsalta.org');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_contactos`
--

CREATE TABLE IF NOT EXISTS `hits_contactos` (
  `idContacto` int(10) NOT NULL AUTO_INCREMENT,
  `nombreContacto` varchar(255) DEFAULT '0',
  `telefonoContacto` bigint(20) DEFAULT '0',
  `emailContacto` varchar(255) DEFAULT '0',
  `mensajeContacto` text,
  `fechaContacto` datetime DEFAULT NULL,
  `estadoContacto` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `hits_contactos`
--

INSERT INTO `hits_contactos` (`idContacto`, `nombreContacto`, `telefonoContacto`, `emailContacto`, `mensajeContacto`, `fechaContacto`, `estadoContacto`) VALUES
(5, 'Maximiliano Ezequiel Rivas', 3874290011, 'tony__77m@hotmail.com', 'asdasda sdasduays gduasydg ausdyga sudyagsd uaysgd uasydgausydg uasydg', '2014-06-16 11:23:46', 1),
(6, 'Maximiliano', 3874634345665, 'maximrios@gmail.com', 'asd dsf sdf sdf sd fs dfsd fs dfs df', '2014-07-25 18:56:23', 1),
(7, 'Maximiliano', 155701465, 'em-rios@hotmail.com', 'asdkajsd asdklajs dhlaksdj hasldka jsdhlkas dhaslkd jasd halksdj haskdlja shdklasdj haskldj hasdklj ashdklajs dhkalsdj hsakld asdkl jasdhklasjd haskdj hasdk ahsdkasjd haskdja shdklasdj haskldj', '2014-07-25 19:07:35', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_eventos`
--

CREATE TABLE IF NOT EXISTS `hits_eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEvento` varchar(100) NOT NULL DEFAULT '0',
  `descripcionEvento` varchar(255) NOT NULL DEFAULT '0',
  `fechaDesdeEvento` date NOT NULL DEFAULT '0000-00-00',
  `fechaHastaEvento` date NOT NULL DEFAULT '0000-00-00',
  `domicilioEvento` varchar(100) DEFAULT NULL,
  `telefonoEvento` bigint(20) DEFAULT NULL,
  `emailEvento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `hits_eventos`
--

INSERT INTO `hits_eventos` (`idEvento`, `nombreEvento`, `descripcionEvento`, `fechaDesdeEvento`, `fechaHastaEvento`, `domicilioEvento`, `telefonoEvento`, `emailEvento`) VALUES
(1, 'Evento 1', 'aca va a ir una breve descripcion del evento', '2014-07-14', '2014-07-14', 'av siempre viva', 4290011, 'maximrios@gmail.com'),
(2, 'Evento 2', 'breve descripcion', '2014-07-14', '2014-07-14', 'av siempre viva 234', 4952563, 'em-rios@hotmail.com'),
(4, 'Evento 3', 'asdasdas dasdlka jsdalsd hasdkjas halksdj ahsdlkj asdhkalsdj haskdljh asdkljasd hkajsd haskldj haskdj haskdljas dhkajd haskdjl hasdjkha sdkjhasd lalskd hasdlkj ashdkljhsd lkasjhaskdj ashdk jadhalksdj hasdkjh asd', '2014-07-17', '2014-07-17', 'ahskdjh sadlkasd hasldjk hasd', 31654621, 'maximrios@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_excepciones`
--

CREATE TABLE IF NOT EXISTS `hits_excepciones` (
  `idExcepcion` int(10) NOT NULL DEFAULT '0',
  `codigoExcepcion` int(10) NOT NULL DEFAULT '0',
  `mensajeExcepcion` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idExcepcion`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hits_excepciones`
--

INSERT INTO `hits_excepciones` (`idExcepcion`, `codigoExcepcion`, `mensajeExcepcion`) VALUES
(1, 1, 'Se cargo el re');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_galerias`
--

CREATE TABLE IF NOT EXISTS `hits_galerias` (
  `idGaleria` int(10) NOT NULL AUTO_INCREMENT,
  `nombreGaleria` varchar(255) DEFAULT '0',
  `uriGaleria` varchar(255) DEFAULT '0',
  `pathGaleria` varchar(255) DEFAULT '0',
  PRIMARY KEY (`idGaleria`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `hits_galerias`
--

INSERT INTO `hits_galerias` (`idGaleria`, `nombreGaleria`, `uriGaleria`, `pathGaleria`) VALUES
(3, 'Baritú', 'baritu', 'assets/images/galerias/baritu/'),
(2, 'Piquirenda', 'piquirenda', 'assets/images/galerias/piquirenda/'),
(4, 'Los Toldos', 'los-toldos', 'assets/images/galerias/los-toldos/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_galerias_media`
--

CREATE TABLE IF NOT EXISTS `hits_galerias_media` (
  `idGaleriaMedia` int(11) NOT NULL AUTO_INCREMENT,
  `nombreGaleriaMedia` varchar(255) NOT NULL DEFAULT '0',
  `pathGaleriaMedia` varchar(255) NOT NULL DEFAULT '0',
  `thumbGaleriaMedia` varchar(255) NOT NULL DEFAULT '0',
  `embedGaleriaMedia` varchar(255) NOT NULL DEFAULT '0',
  `tipoGaleriaMedia` tinyint(4) NOT NULL DEFAULT '0',
  `checkGaleriaMedia` tinyint(4) DEFAULT NULL,
  `idGaleria` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idGaleriaMedia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `hits_galerias_media`
--

INSERT INTO `hits_galerias_media` (`idGaleriaMedia`, `nombreGaleriaMedia`, `pathGaleriaMedia`, `thumbGaleriaMedia`, `embedGaleriaMedia`, `tipoGaleriaMedia`, `checkGaleriaMedia`, `idGaleria`) VALUES
(1, 'piquirenda.JPG', './assets/images/galerias/piquirenda/piquirenda.JPG', './assets/images/galerias/piquirenda/piquirenda_thumb.JPG', '0', 1, 0, 2),
(2, 'piquirenda_2.JPG', './assets/images/galerias/piquirenda/piquirenda_2.JPG', './assets/images/galerias/piquirenda/piquirenda_2_thumb.JPG', '0', 1, 1, 2),
(4, 'PA100269.JPG', './assets/images/galerias/baritu/PA100269.JPG', './assets/images/galerias/baritu/PA100269_thumb.JPG', '0', 1, 1, 3),
(5, 'piquirenda_3.JPG', './assets/images/galerias/piquirenda/piquirenda_3.JPG', './assets/images/galerias/piquirenda/piquirenda_3_thumb.JPG', '0', 1, NULL, 2),
(6, 'PA100269.JPG', './assets/images/galerias/los-toldos/PA100269.JPG', './assets/images/galerias/los-toldos/PA100269_thumb.JPG', '0', 1, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_noticias`
--

CREATE TABLE IF NOT EXISTS `hits_noticias` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `tituloNoticia` varchar(150) DEFAULT NULL,
  `epigrafeNoticia` varchar(255) DEFAULT NULL,
  `descripcionNoticia` text,
  `uriNoticia` varchar(255) DEFAULT NULL,
  `fechaDesdeNoticia` date DEFAULT NULL,
  `estadoNoticia` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`idNoticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `hits_noticias`
--

INSERT INTO `hits_noticias` (`idNoticia`, `tituloNoticia`, `epigrafeNoticia`, `descripcionNoticia`, `uriNoticia`, `fechaDesdeNoticia`, `estadoNoticia`) VALUES
(3, 'La Asociación de Ingenieros de Salta y la Fundación FID juntos por Baritú', 'La Asociación de Ingenieros de Salta desde 1995 realiza la visita a sus ahijados de la Escuela No 4157 Patricias Argentinas. Población Baritú a y desde el año 2013 la Fundación FID de Salta se ha sumado a esta gran tarea.', '&lt;p&gt;”Es importante aunar esfuerzos si lo que se persigue son objetivos comunes como el de ayudar a las comunidades más vulnerables, todos los sectores constituyen un pueblo, por la tanto es necesaria la urgente articulación de los distintos sectores de la sociedad, de todos los actores..&quot;..(Lic. Daniela Penzo Presidente Fundación FID)&lt;/p&gt;&lt;p&gt;Para llegar hasta la comunidad de Baritu se realiza el siguiente recorrido: se parte desde la Ciudad de Salta, cruzando parte de la Provincia de Jujuy, las localidades de San Pedro y Ledesma, luego retornando a Salta pasamos por Pichanal, Orán, y Aguas Blancas allí se cruza la frontera con Bolivia a Bermejo, desde donde se recorre el camino hasta La Mamora por territorio Boliviano, para ingresar nuevamente al país por el Puente Internacional hasta llegar a Los Toldos, desde allí se realiza un viaje por las Yungas atravesando el Parque Nacional Baritú, donde se cruza el Rio Lipeo y hasta llegar finalmente a la Población Baritú, donde se encuentra la escuela.&lt;br&gt;&lt;/p&gt;&lt;p&gt;La Fundación FID busca promover el desarrollo integral y sustentable de pequeñas comunidades de la Provincia de Salta, realizan talleres en los centros comunitarios basados en dinámicas participativas, estas dinámicas son consideradas como herramientas poderosas por el equipo ya que les permiten saber en qué situación están y hacia donde pueden ir, es una herramienta de diagnostico rápido basado en aspecto de estructura y dinámica social.&lt;br&gt;&lt;/p&gt;&lt;p&gt;Conjuntamente con la Asociación de Ingenieros de Salta se ha decidido implementar esta técnica y trabajar sobre proyectos a corto, mediano y largo plazo para la población y que el amor por esta Comunidad no quede solo reflejado en donaciones que llegan una vez al año.&lt;br&gt;&lt;/p&gt;&lt;p&gt;“Se pueden hacer muchas cosas, muchos sueños por cumplir solo es hora de decidirse y empezar a actuar, es importante aunar esfuerzos si lo que se persigue son objetivos comunes como el de ayudar a las comunidades más vulnerables, todos los sectores constituyen un pueblo, por la tanto es necesaria la urgente articulación de los distintos sectores de la sociedad y de todos los actores...decía la Lic. Daniela Penzo Presidenta de la Fundación FID.&lt;br&gt;&lt;/p&gt;', 'la-asociacion-de-ingenieros-de-salta-y-la-fundacion-fid-juntos-por-baritu', '2014-07-26', 1),
(4, 'Los objetivos de desarrollo de Milenio, lineamientos estratégicos para lograr el desarrollo integral y equitativo de los pueblos', 'Los ocho Objetivos de Desarrollo del Milenio constituyen un pacto mundial único.', '&lt;p&gt;Tienen su origen en la Declaración del Milenio, que firmaron 189 países, y cuentan con apoyo político internacional. Así pues, traducen el compromiso sin precedentes por parte de los líderes mundiales de afrontar las formas más básicas de injusticia y desigualdad de nuestro mundo: la pobreza, el analfabetismo y la mala salud. A tal efecto la Fundación FID a diseñado el PAEM ( Programa de Análisis y Evaluación Municipal) considerando que los ODM son lineamientos estratégicos a la hora de formular las Politicas Públicas para lograr el desarrollo integral y equitativo de los pueblos, destacando el valioso aporte de los Licenciados en Gestión de Políticas Públicas y partes del equipo Javier Crespo y Daniela Penzo ( Especializada en la Municipalización de los ODM por la Comisión Economica para America Latina CEPAL-Naciones Unidas).&lt;br&gt;La transformación del rol de los gobiernos municipales en receptores directos de las múltiples demandas es lenta pero constante, y los enfrenta a desafíos&lt;br&gt;de gestión que requieran una eficiente y efectiva administración de recursos, tanto en términos de procesos como de resultados y durante la última década, los gobiernos locales asumieron ese desafío y un rol protagónico en el diseño, implementación y evaluación de las Políticas Públicas. &lt;br&gt;&lt;/p&gt;&lt;p&gt;Con el objetivo de fortalecer sus capacidades para gestionar políticas sociales, en particular las destinadas al desarrollo de las comunidades, la Fundación FID, ha diseñado un Programa basados en tres ejes sustantivos: 1) Planificación de políticas, programas y proyectos sociales, 2) Monitoreo y evaluación de políticas, programas y proyectos sociales y 3) Coordinación de políticas, programas y proyectos sociales. Los tres ejes, en conjunto o por separado, constituyen un instrumento de apoyo para quienes trabajan en el territorio: el abordaje de los conceptos y la forma de sistematizar las herramientas, para ayudar a los actores locales a enfrentar los problemas diarios de la gestión social y para ello resulta oportuno la creación del Programa de Análisis y Evaluación Municipal (PAEM), es el instrumento de gestión diseñado para socializar los principios básicos de los Objetivos de Desarrollo del Milenio (ODM) capacitando a todos los actores sociales y contar con información oportuna, veraz y actual sobre distintos indicadores resulta significativo en tanto éstos aportan conocimiento para la toma de decisiones. Por esto, se debe promover la realización de estudios que permitan la definición de políticas públicas fundadas en conocimientos de la realidad.&lt;br&gt;&lt;/p&gt;&lt;p&gt;En los últimos años, en los planes orientados al desarrollo del territorio, en articulación con las instituciones de la sociedad civil y las empresas, resulta&lt;br&gt;fundamental el papel de los Municipios dado que a partir de estrategias locales deben resolver problemáticas y atender demandas pensando en el bien común de los ciudadanos. Las metas planteadas por los Objetivos de Desarrollo del Milenio identifican los mínimos básicos, indispensables para llevar una vida digna, señalando prioridades para alcanzar una política integral de desarrollo.&lt;br&gt;&lt;/p&gt;&lt;p&gt;Pensar a los municipios como promotores de los ODM significa asumir el rol de los mismos en la planificación estratégica orientada al bienestar general de todas las comunidades.&lt;br&gt;&lt;br&gt;A través de la creación del PAEM, se podrá relevar la situación de los municipios con respecto a los ODM aportando recomendaciones para lograr las metas propuestas y brindando apoyo para el diseño de políticas para mejorar la realidad local sobre todo de aquellas comunidades mas vulnerables.&lt;br&gt;&lt;/p&gt;', 'los-objetivos-de-desarrollo-de-milenio-lineamientos-estrategicos-para-lograr-el-desarrollo-integral-y-equitativo-de-los-pueblos', '2014-07-26', 1),
(5, 'Ayudando a las comunidades que viven en contextos rurales', 'La Fundación para la Integración y el Desarrollo de Comunidades (FID) se compromete  a ayudar a mejorar las capacidades emprendedoras de los productores artesanales.', '&lt;p&gt;La Fundación para la Integración y el Desarrollo de Comunidades (FID) se compromete&amp;nbsp; a ayudar a mejorar las capacidades emprendedoras de los productores artesanales&amp;nbsp;&amp;nbsp; fomentando la colaboración y la asociatividad, ayudando a la generación de IDEAS&amp;nbsp;&amp;nbsp; innovadoras ligadas a criterios sostenibles y de conservación del Patrimonio.&lt;br&gt;&lt;/p&gt;&lt;p&gt;La Fundación para la Integración y el Desarrollo de Comunidades Rurales, nace con el único fin de dar apoyo a las comunidades en contextos rurales, buscando promover el desarrollo endógeno de las mismas, fortaleciendo la cooperación entre sus miembros y el desarrollo de su economía desde adentro hacia fuera, mejorando las capacidades de gestión de sus pobladores, hombres y mujeres, para que logren... insertarse en un mercado dinámico por medio de sus trabajos, tejidos, artesanías, etc.&lt;br&gt;&lt;/p&gt;&lt;p&gt;El Desarrollo de comunidades en contextos rurales es un tema de vital importancia tanto en el sector público como en el privado, el cuál comprende las distintas asociaciones y ONGs, por la búsqueda en la mejora de la calidad de vida de sus pobladores y de aquellos pobladores en riesgo de exclusión, evitando la marginación, mediante producciones agrícolas sostenibles, con el propósito de que sus habitantes obtengan los alimentos que necesitan, protegiendo y conservando la capacidad de los recursos naturales.&lt;/p&gt;&lt;p&gt;Para el logro de estos objetivos es necesario considerar como ejes transversales de este proyecto: el fortalecimiento de la educación en los contextos rurales, la promoción de la salud, cuidado y conservación del medio ambiente, el fortalecimiento de las distintas manifestaciones culturales de los pueblos, el fomento de la diversidad cultural, la promoción de la participación comunitaria, la capacitación de sus habitantes con el propósito de brindarles herramientas que les permitan elaborar sus propios proyectos, resaltando la importancia de la promoción y el fortalecimiento de las economías regionales. Ello, a efectos de generar las condiciones para expandir y diversificar la producción, mejorar las condiciones ambientales, mejorar la calidad de vida de la población rural, reduciendo la pobreza y la marginalidad rural.&lt;/p&gt;', 'ayudando-a-las-comunidades-que-viven-en-contextos-rurales', '2014-07-26', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_personas`
--

CREATE TABLE IF NOT EXISTS `hits_personas` (
  `idPersona` int(10) NOT NULL AUTO_INCREMENT,
  `dniPersona` int(10) DEFAULT '0',
  `idTipoDni` int(10) DEFAULT '0',
  `apellidoPersona` varchar(255) DEFAULT '0',
  `nombrePersona` varchar(255) DEFAULT '0',
  `cuilPersona` bigint(20) DEFAULT '0',
  `cuitPersona` bigint(20) DEFAULT '0',
  `nacimientoPersona` date DEFAULT NULL,
  `idSexo` int(11) DEFAULT NULL,
  `idEcivil` int(11) DEFAULT NULL,
  `domicilioPersona` varchar(255) DEFAULT NULL,
  `telefonoPersona` bigint(20) DEFAULT NULL,
  `celularPersona` bigint(20) DEFAULT NULL,
  `laboralPersona` bigint(20) unsigned DEFAULT NULL,
  `internoPersona` int(10) unsigned DEFAULT NULL,
  `emailPersona` varchar(100) DEFAULT NULL,
  `nacionalidadPersona` varchar(255) DEFAULT NULL,
  `idLocalidad` int(255) DEFAULT NULL,
  `idDepartamento` int(255) DEFAULT NULL,
  `idProvinicia` int(11) DEFAULT NULL,
  `idPais` int(11) DEFAULT NULL,
  `newsletterPersona` tinyint(4) NOT NULL,
  PRIMARY KEY (`idPersona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Volcado de datos para la tabla `hits_personas`
--

INSERT INTO `hits_personas` (`idPersona`, `dniPersona`, `idTipoDni`, `apellidoPersona`, `nombrePersona`, `cuilPersona`, `cuitPersona`, `nacimientoPersona`, `idSexo`, `idEcivil`, `domicilioPersona`, `telefonoPersona`, `celularPersona`, `laboralPersona`, `internoPersona`, `emailPersona`, `nacionalidadPersona`, `idLocalidad`, `idDepartamento`, `idProvinicia`, `idPais`, `newsletterPersona`) VALUES
(64, 32505371, 1, 'Rios', 'Maximiliano Ezequiel', 20325053713, 0, '1987-02-05', 1, 1, 'Mz. R Casa 7 Barrio Santa Ana III', 4290011, 155701465, 0, NULL, 'maximrios@gmail.com', '	Argentina	', NULL, NULL, NULL, NULL, 0),
(65, 0, 0, 'Rios', 'Maximiliano', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'maximrios@gmail.com', NULL, NULL, NULL, NULL, NULL, 1),
(66, 0, 0, 'Reyes', 'Maximiliano', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'em-rios@hotmail.com', NULL, NULL, NULL, NULL, NULL, 0),
(67, 0, 0, 'Penzo', 'Daniela', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'daniela.penzo@gmail.com', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_programas`
--

CREATE TABLE IF NOT EXISTS `hits_programas` (
  `idPrograma` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePrograma` varchar(255) NOT NULL,
  `descripcionPrograma` longtext NOT NULL,
  `uriPrograma` varchar(255) NOT NULL,
  `imagenPrograma` varchar(255) NOT NULL,
  `estadoPrograma` tinyint(4) NOT NULL,
  PRIMARY KEY (`idPrograma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `hits_programas`
--

INSERT INTO `hits_programas` (`idPrograma`, `nombrePrograma`, `descripcionPrograma`, `uriPrograma`, `imagenPrograma`, `estadoPrograma`) VALUES
(1, 'Programa de Gestión de Políticas Públicas', '&lt;p&gt;El &lt;strong&gt;PROGEPP&lt;/strong&gt; (PROGRAMA DE GESTION DE POLITICAS PUBLICAS) nace por iniciativa de Miembros de la Fundación FID-Fundación para la Integración y el Desarrollo de Comunidades PJ 244/13, Licenciados en Gestión de Políticas Publicas y de otras áreas de estudios, en el marco de los Objetivos de Desarrollo de Milenio y su importancia en la planificación de las Políticas Públicas a fin de lograr impactos positivos en la sociedad desde distintos aspectos; educación, salud, medio ambiente, cultural y económico.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Objetivo General&lt;/strong&gt;&lt;br&gt;Fortalecer la capacidad de planificación y gestión de quienes, en los equipos de Gobierno Municipal, Provincial y Nacional, conducen y participan en procesos de tomas de decisiones estratégicas, de diseño e implementación de las Políticas Públicas orientadas al desarrollo, abriendo espacios de análisis y debate en lo académico y en la práctica.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Objetivos Específicos&lt;/strong&gt;&lt;br&gt;Fomentar el ejercicio de la planificación como un proceso político-estratégico que impacta la efectividad de la gestión pública.&lt;br&gt;Proporcionar elementos básicos para el desarrollo de capacidades analíticas en los procesos de toma de decisiones, con perspectiva integral sobre los factores que afectan la obtención de resultados valiosos para la sociedad desde la visión de los Objetivos de Desarrollo de Milenio (ODM).&lt;br&gt;Fortalecer las capacidades para incorporar en las agendas de gobierno los ODM como lineamientos de Gestión, en función de una construcción colectiva&lt;br&gt;inspiradora y compartida por la mayor parte de los ciudadanos.&lt;br&gt;Aportar elementos para el desarrollo de habilidades de análisis de los principales desafíos del proceso de desarrollo, en el contexto social e institucional actual, desde una concepción integral, multidimensional y dinámica del desarrollo.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Resultados Esperados&lt;/strong&gt;&lt;br&gt;&lt;br&gt;Profundización del conocimiento de la realidad social, del país en general y del municipio en particular.&lt;br&gt;Instalación o fortalecimiento de la capacidad de autodiagnóstico para la gestión de estadísticas sociales a nivel local.&lt;br&gt;Establecimiento de compromisos a nivel municipal para intensificar su capacidad de interlocución y de exigencia de respuestas al gobierno nacional, así como para ejecutar acciones dentro de sus capacidades y competencias.&lt;br&gt;Diseño y aplicación de metodologías para el fortalecimiento municipal.&lt;br&gt;Activación del potencial local para avanzar en los ODM territoriales&lt;br&gt;La transformación del rol de los gobiernos municipales en receptores directos de las múltiples demandas es lenta pero constante, y los enfrenta a desafíos de gestión que requieran una eficiente y efectiva administración de recursos, tanto en términos de procesos como de resultados, y se refiere a reforzar la capacidad de gobierno entendida como la capacidad de gerencia, la capacidad de administración y la capacidad de control.&lt;br&gt;Durante la última década, los gobiernos locales asumieron ese desafío y un rol protagónico en el diseño, implementación y evaluación de las Políticas Públicas. Con el objetivo de fortalecer sus capacidades para gestionar políticas públicas, en particular las destinadas al desarrollo integral de las comunidades, la Fundación FID a través del PROGEPP propone estrategias para afrontar problemas puntuales, esta forma de trabajo esta basado en tres ejes sustantivos:&lt;br&gt;&lt;br&gt;• Planificación de políticas, programas y proyectos sociales&lt;br&gt;• Monitoreo y evaluación de políticas, programas y proyectos sociales&lt;br&gt;• Coordinación de políticas, programas y proyectos sociales&lt;br&gt;&lt;/p&gt;&lt;p&gt;Los tres ejes, en conjunto o por separado, constituyen un instrumento de apoyo para quienes trabajan en el territorio, considerando que el abordaje de los conceptos y la forma de sistematizar las herramientas ayudan a los actores locales a enfrentar los problemas diarios de la gestión social.&lt;br&gt;&lt;br&gt;El PROGEPP le permitirá a los Funcionarios locales&lt;br&gt;&lt;br&gt;• Comprender mejor los procesos de identificación de prioridades, la administración de los recursos y la toma de decisiones, en el marco de un nuevo andamiaje institucional para la gestión local de la política social destinada a intervenir en el desarrollo de la comunidad.&lt;br&gt;• Establecer criterios de acción para desarrollar con éxito tanto las nuevas funciones como las responsabilidades ya asumidas en torno a la gestión social.&lt;br&gt;• Utilizar instrumentos de gestión de políticas sociales, especialmente en aquellas destinadas al desarrollo de las comunidades.&lt;br&gt;• Generar capacidades para el monitoreo y evaluación de políticas sociales, con énfasis en la importancia del proceso de aprendizaje en la gestión.&lt;br&gt;• Generar capacidades para coordinar los diversos sectores y niveles de gobierno involucrados en la gestión de políticas sociales, para construir un abordaje integrado.&lt;br&gt;• Recibir capacitación continua en Políticas Publicas desde la visión de los Objetivos de Desarrollo de Milenio, en Políticas de Desarrollo Local, Planificación Estratégica, Gestión de Calidad, Gestión del Conocimiento, Gestión Estratégica de Recursos Humanos y Administración de Personal, Formulación y Evaluación de Proyectos Sociales y Productivos.&lt;br&gt;• Recibir asesoramiento y asistencia Profesional en Diseño, Implementación, Evaluación y Monitoreo en Políticas Publicas, Planes, Programas y Proyectos&lt;br&gt;Sociales.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Datos de Contacto:&lt;/strong&gt;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; Daniela Penzo- Lic. En Gestión de Políticas Publicas &lt;a href=&quot;mailto:daniela.penzo@fundacionfidsalta.org&quot; data-cke-saved-href=&quot;mailto:daniela.penzo@fundacionfidsalta.org&quot;&gt;daniela.penzo@fundacionfidsalta.org&lt;/a&gt;&lt;br&gt;&lt;br&gt;/ cel: 0387-155780060&lt;br&gt;&lt;br&gt;&amp;nbsp;Javier Crespo - Lic. En Gestión de Políticas Públicas Javier.crespo@fundacionfidsalta.org&lt;br&gt;&lt;br&gt;/ cel: 0387-154686308&lt;br&gt;&lt;br&gt;contacto@fundacionfidsalta.org&lt;br&gt;&lt;/p&gt;', 'programa-de-gestion-de-politicas-publicas', '', 1),
(2, 'Programa de Fortalecimiento Municipal', '&lt;p&gt;La transformación del rol de los gobiernos municipales en receptores directos de las múltiples demandas es lenta pero constante, y los enfrenta a desafíos de gestión que requieran una eficiente y efectiva administración de recursos, tanto en términos de procesos como de resultados y durante la última década,&lt;br&gt;los gobiernos locales asumieron ese desafío y un rol protagónico en el diseño, implementación y evaluación de las Políticas Públicas.&lt;br&gt;&lt;br&gt;Con el objetivo de fortalecer sus capacidades para gestionar políticas sociales, en particular las destinadas al desarrollo de las comunidades, la Fundación FID, ha diseñado un programa de Capacitación basados en tres ejes sustantivos: 1) Planificación de políticas, programas y proyectos sociales 2) Monitoreo y evaluación de políticas, programas y proyectos sociales y 3) Coordinación de políticas, programas y proyectos sociales. Los tres ejes, en conjunto o por separado, constituyen un instrumento de apoyo para quienes trabajan en el territorio: el abordaje de los conceptos y la forma de sistematizar las herramientas, para ayudar a los actores locales a enfrentar los problemas diarios de la gestión social y para ello resulta oportuno la creación del Programa de Fortalecimiento Municipal es el instrumento de gestión diseñado para socializar los principios básicos de los Objetivos de Desarrollo del Milenio (ODM) capacitando a todos los actores sociales.&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Resultados esperados a corto y mediano plazo&lt;/strong&gt;&lt;br&gt;&lt;br&gt;Mejorar la Gestión municipal desde la capacitación de sus servidores públicos, la gestión de políticas publicas, su monitoreo evaluación y coordinación de las mismas, para que responda en forma más efectiva a las necesidades de las comunidades locales de manera equitativa y sustentable en el tiempo.&lt;br&gt;Promover la coordinación de políticas, programas y proyectos a fin de aumentar la eficiencia y eficacia de los programas implementados buscando disminuir los costos operativos y hacer un uso eficiente de los fondos públicos.&lt;br&gt;&lt;br&gt;Promover la integración de los municipios por medio del&lt;br&gt;&lt;br&gt;desarrollo de estrategias conjuntas en los distintos campos de&lt;br&gt;&lt;br&gt;su quehacer: cultural, social, ambiental, económico, institucional&lt;br&gt;&lt;br&gt;y administrativo, impulsando a los municipios para que&lt;br&gt;&lt;br&gt;voluntariamente combinen recursos y esfuerzos e identificando&lt;br&gt;&lt;br&gt;intereses y objetivos comunes&lt;br&gt;&lt;br&gt;Promover la participación comunitaria en la toma de decisiones a&lt;br&gt;&lt;br&gt;nivel local.&lt;br&gt;&lt;/p&gt;', 'programa-de-fortalecimiento-municipal', '', 1),
(3, 'Programa de Desarrollo Local Comunitario', '&lt;p&gt;A nivel global existe una tendencia clara hacia el reconocimiento de la importancia de considerar a los habitantes de cada lugar como los actores principales de la planificación local y de su propio desarrollo. Debido a ello, las metodologías de planeación comunitaria recobran importancia, a tal efecto el Área de Planificación Comunitaria Estratégica promueve el involucramiento, la participación activa y el consenso entre los habitantes en pos del bien común. El Programa está diseñado para que los Organismos e Instituciones que actúen como agentes promotores del desarrollo local participen en la facilitación de los procesos de planeación comunitaria, promoviendo la participación local y la revaloración de los actores locales como gestores de acciones que reditúen en el beneficio de la comunidad en su conjunto.&lt;br&gt;La idea de que la solución de los problemas rurales pasa por la utilización de sus potencialidades de transformación a través de una estrategia de Desarrollo Local que apunte a la industrialización de la ruralidad se ha asentado en los últimos años. La base de la estrategia de desarrollo local reside al hecho de que las comunidades locales sepan dar respuesta adecuada a sus propios problemas y tengan una visión de desarrollo y progreso bien arraigada y esto requiere además una nueva forma de relacionarse y de coordinar las actuaciones del Estado y de los empresarios locales de manera conjunta y articulada.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Objetivo General&lt;/strong&gt;&lt;br&gt;El objetivo general consiste en crear espacios de debate y análisis a nivel Institucional a fin de promover cambios cualitativos en las actitudes y comportamientos de la población, empoderando la visión de desarrollo y progreso a fin de establecerse como el denominador común de todos los habitantes a través de la intervención y colaboración de agentes con cierto grado de especialización en desarrollo local y planificación comunitaria.&lt;br&gt;Líneas de acción y resultados esperados&amp;nbsp; “El Programa de Desarrollo Local de la Fundación FID tendrá como lineamientos básicos de gestión el desarrollo de habilidades productivas, generación de información veraz y oportuna, promover el desarrollo científico, técnico y tecnológico mediante la ejecución de proyectos cuyo objetivo sea la transferencia de tecnología diseñadas en función a las necesidades territoriales y culturales de cada comunidad en su contexto.” Las “EMPRESAS” del sector rural tienen muchas ramas aparte de la producción primaria, como la agroindustria, la industria, la artesanía, los servicios ambientales entre otros, o sea son empresas no limitadas a una visión meramente agropecuaria. Esta visión pretende que en un corto plazo se logre el cambio de mentalidad y el interés de la población rural para lograr mayores oportunidades para sus pobladores lo que conlleva a reducir los indicadores de la pobreza y la marginación.&lt;br&gt;&lt;br&gt;Para más información escribir a :&lt;br&gt;&lt;a href=&quot;mailto:daniela.penzo@fundacionfidsalta.org&quot; data-cke-saved-href=&quot;mailto:daniela.penzo@fundacionfidsalta.org&quot;&gt;daniela.penzo@fundacionfidsalta.org&lt;/a&gt; ( Referente del Programa de Desarrollo Local)&lt;br&gt;&lt;/p&gt;', 'programa-de-desarrollo-local-comunitario', '', 1),
(4, 'Programa de Donaciones', '&lt;p&gt;La &lt;strong&gt;Fundación FID&lt;/strong&gt; realiza campañas solidarias constantemente para recibir donaciones de ropa, alimentos y libros que son llevadas por el Equipo de la Fundación a las comunidades que viven en contextos rurales y que presentan vulnerabilidad social y económica.&lt;br&gt;&lt;br&gt;Ser solidarios con los semejantes es una de las más nobles virtudes humanas, y a través de las acciones de ayuda a los demás con frecuencia terminamos sintiendo más placer en dar que en recibir. La Solidaridad es un valor que nos ayuda a ser una mejor sociedad y que no solamente debe vivirse en casos de desastre y emergencia sino en todo momento y en todos los aspectos de la vida. Debemos ser capaces de descubrir y comprender que todas las personas tenemos algo interesante para aportar o enseñar; no solo re refiere la acción de donar a lo material sino somos seres capaces de gestionar el conocimiento&lt;br&gt;entre las personas que lo necesitan y si aprendemos a interesarnos por el bienestar de las personas estamos en condiciones de ayudarlos.&lt;br&gt;&lt;br&gt;Para más información escribir a :&lt;br&gt;&lt;br&gt;nicolas.penzo@fundacionfidsalta.org ( Referente del Programa Donaciones)&lt;br&gt;&lt;/p&gt;', 'programa-de-donaciones', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_sessions`
--

CREATE TABLE IF NOT EXISTS `hits_sessions` (
  `session_id` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `last_activity` int(11) DEFAULT NULL,
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hits_sessions`
--

INSERT INTO `hits_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8f40f3c2de851814f26bccb85d1b068b', '202.46.50.199', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0', 1405263411, ''),
('82080811db1d486add70e859fbab0fd3', '202.46.50.182', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0', 1405300331, ''),
('3b1d6b9c31ee2716f1f6bf026e20ace3', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405332861, ''),
('87ef5d29ddd0b1a30a452bec2a3da66b', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405332872, ''),
('77f3d18c0f1085e21e75c4efe958556f', '200.58.109.7', '0', 1405333951, ''),
('6f7a8190dcfb118c61f4513fa2fc7762', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405340407, ''),
('805199acf15058387ecee16b5692211e', '66.249.65.127', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1405175259, ''),
('1536877dca29eaf052f4ce580ac598a2', '66.249.65.101', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; Google Web Preview Analytics) Chrome/27.0.1453 Safari/537.36 (compati', 1405175264, ''),
('2f21de4a5ab4c5a7c1cbd3ee785bf569', '207.46.13.28', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179734, ''),
('4925b587926a548cf3a8def8a05261a5', '207.46.13.28', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179734, ''),
('cbddde89da1348375a16884d3864ace8', '157.55.39.202', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405185719, ''),
('735e5cd50da19afc89234ca283d8419d', '157.55.39.202', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405185720, ''),
('7b47640e276a515fb2b1899f73d25e3b', '64.246.165.200', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.9.0.13) Gecko/2009073022 Firefox/3.5.2 (.NET CLR 3.5.30729) SurveyBot/', 1405227418, ''),
('41ce5bb0627d0f3112f08220b8a50cfb', '207.46.13.128', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405248254, ''),
('f3adcc977d618b9856b98d2980bb7ae2', '207.46.13.128', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405248409, ''),
('b35f910812b65ef12200df7c8f96ab69', '157.55.39.61', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179666, ''),
('7e09dea5f6d598600552275c0efed7c3', '207.46.13.28', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179732, ''),
('b19f09e279fa2b9cbfc179c02047dd24', '207.46.13.28', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179733, ''),
('b7d1f2f186231553bd02c0b30088b260', '157.55.39.61', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179665, ''),
('0a86c1085a14ecd0d6d7a3e496b3ba61', '157.55.39.216', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179636, ''),
('86d7e287de12b0fdc3cd15c9694aeaa2', '157.55.39.216', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179651, 'a:2:{s:9:"user_data";s:0:"";s:12:"antibotLlave";a:1:{i:0;s:32:"frm140517965194frm3e33b970f21d2f";}}'),
('7407bc91806c321dfd24441f6340e7bb', '157.55.39.61', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1405179636, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_slider`
--

CREATE TABLE IF NOT EXISTS `hits_slider` (
  `idSlider` int(10) NOT NULL AUTO_INCREMENT,
  `tituloSlider` varchar(50) DEFAULT NULL,
  `pathSlider` varchar(255) DEFAULT NULL,
  `mimeSlider` varchar(50) DEFAULT NULL,
  `linkSlider` varchar(255) DEFAULT NULL,
  `targetSlider` varchar(50) DEFAULT NULL,
  `vigenciaDesde` date DEFAULT NULL,
  `vigenciaHasta` date DEFAULT NULL,
  `activoSlider` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idSlider`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `hits_slider`
--

INSERT INTO `hits_slider` (`idSlider`, `tituloSlider`, `pathSlider`, `mimeSlider`, `linkSlider`, `targetSlider`, `vigenciaDesde`, `vigenciaHasta`, `activoSlider`) VALUES
(1, 'Slider 1 cargado', 'assets/images/slider/city-q-c-922-330-5.jpg', NULL, 'http://www.google.com.ar', '_blank', '2014-03-21', '2014-12-12', 1),
(2, 'Slider 2 cargado', 'assets/images/slider/fashion-q-c-922-330-10.jpg', NULL, 'http://www.mejorando.la/cursos', '_blank', '2014-03-21', '2014-12-12', 1),
(3, 'Slider 3 cargado', 'assets/images/slider/nature-q-c-922-330-5.jpg', NULL, '', '_blank', '2014-03-21', '2014-12-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_staff`
--

CREATE TABLE IF NOT EXISTS `hits_staff` (
  `idStaff` int(11) NOT NULL AUTO_INCREMENT,
  `idPersona` int(11) DEFAULT NULL,
  `comentarioStaff` varchar(255) DEFAULT NULL,
  `fechaStaff` date DEFAULT NULL,
  `estadoStaff` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idStaff`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_usuarios`
--

CREATE TABLE IF NOT EXISTS `hits_usuarios` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `passwordUsuario` varchar(50) DEFAULT NULL,
  `idPersona` int(10) DEFAULT NULL,
  `idRol` int(10) DEFAULT NULL,
  `idEstado` int(10) DEFAULT NULL,
  `intentosUsuario` int(10) NOT NULL DEFAULT '0',
  `ultimoLoginUsuario` datetime NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `hits_usuarios`
--

INSERT INTO `hits_usuarios` (`idUsuario`, `nombreUsuario`, `passwordUsuario`, `idPersona`, `idRol`, `idEstado`, `intentosUsuario`, `ultimoLoginUsuario`) VALUES
(1, 'maxim', '3124d38d1725b3e54f157d1a3d2c6739', 64, 1, 1, 0, '2014-04-02 17:14:13'),
(2, 'alfaro', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 3, 1, 0, '2013-11-12 09:57:49'),
(3, 'marcelo', '3124d38d1725b3e54f157d1a3d2c6739', 3, 5, 1, 0, '2013-11-22 08:59:26'),
(4, 'rrhh', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_usuarios_auditar`
--

CREATE TABLE IF NOT EXISTS `hits_usuarios_auditar` (
  `idAuditar` int(10) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(10) DEFAULT NULL,
  `fechaAuditar` datetime DEFAULT NULL,
  `ipAuditar` varchar(50) DEFAULT NULL,
  `exitoAuditar` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idAuditar`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=572 ;

--
-- Volcado de datos para la tabla `hits_usuarios_auditar`
--

INSERT INTO `hits_usuarios_auditar` (`idAuditar`, `idUsuario`, `fechaAuditar`, `ipAuditar`, `exitoAuditar`) VALUES
(1, 1, '2013-08-30 13:10:47', '123213123', 0),
(2, 1, '2013-08-30 13:16:24', '127.0.0.1', 1),
(3, 1, '2013-08-30 13:41:11', '127.0.0.1', 1),
(4, 1, '2013-08-30 13:50:45', '127.0.0.1', 0),
(5, 1, '2013-08-30 13:53:25', '127.0.0.1', 0),
(6, 1, '2013-09-02 08:21:59', '127.0.0.1', 0),
(7, 1, '2013-09-02 08:27:00', '127.0.0.1', 0),
(8, 1, '2013-09-02 08:27:17', '127.0.0.1', 0),
(9, 1, '2013-09-02 08:42:03', '127.0.0.1', 0),
(10, 1, '2013-09-02 08:44:09', '127.0.0.1', 0),
(11, 1, '2013-09-02 08:45:08', '127.0.0.1', 0),
(12, 1, '2013-09-02 08:49:10', '127.0.0.1', 0),
(13, 1, '2013-09-02 08:50:26', '127.0.0.1', 0),
(14, 1, '2013-09-02 08:51:19', '127.0.0.1', 0),
(15, 1, '2013-09-02 08:55:39', '127.0.0.1', 0),
(16, 1, '2013-09-02 08:56:15', '127.0.0.1', 0),
(17, 1, '2013-09-02 08:56:51', '127.0.0.1', 0),
(18, 1, '2013-09-02 09:05:01', '127.0.0.1', 0),
(19, 1, '2013-09-02 09:07:28', '127.0.0.1', 0),
(20, 1, '2013-09-02 09:33:10', '127.0.0.1', 0),
(21, 1, '2013-09-02 09:33:33', '127.0.0.1', 0),
(22, 1, '2013-09-02 09:44:27', '127.0.0.1', 0),
(23, 1, '2013-09-02 10:03:39', '127.0.0.1', 0),
(24, 1, '2013-09-02 10:04:32', '127.0.0.1', 0),
(25, 1, '2013-09-02 10:04:43', '127.0.0.1', 0),
(26, 1, '2013-09-02 10:04:55', '127.0.0.1', 0),
(27, 1, '2013-09-02 10:05:09', NULL, 0),
(28, 1, '2013-09-02 10:05:23', NULL, 0),
(29, 1, '2013-09-02 10:06:03', NULL, 0),
(30, 1, '2013-09-02 10:06:42', '127.0.0.1', 1),
(31, 1, '2013-09-02 10:32:31', '127.0.0.1', 1),
(32, 1, '2013-09-02 10:32:40', '127.0.0.1', 1),
(33, 1, '2013-09-02 10:34:10', '127.0.0.1', 1),
(34, 1, '2013-09-02 10:37:52', '127.0.0.1', 1),
(35, 1, '2013-09-02 10:44:05', '127.0.0.1', 1),
(36, 1, '2013-09-02 10:46:54', '127.0.0.1', 1),
(37, 1, '2013-09-02 12:20:15', '127.0.0.1', 1),
(38, 1, '2013-09-02 12:20:59', '127.0.0.1', 1),
(39, 1, '2013-09-02 12:25:57', '127.0.0.1', 1),
(40, 1, '2013-09-02 12:28:39', '127.0.0.1', 1),
(41, 1, '2013-09-02 12:34:10', '127.0.0.1', 1),
(42, 1, '2013-09-02 12:38:51', '127.0.0.1', 1),
(43, 1, '2013-09-02 12:45:53', '127.0.0.1', 1),
(44, 1, '2013-09-02 12:54:06', '127.0.0.1', 1),
(45, 1, '2013-09-02 13:16:54', '127.0.0.1', 1),
(46, 1, '2013-09-02 13:18:39', '127.0.0.1', 0),
(47, 1, '2013-09-02 13:36:59', '127.0.0.1', 1),
(48, 1, '2013-09-02 13:44:26', '127.0.0.1', 1),
(49, 1, '2013-09-03 08:33:56', '127.0.0.1', 1),
(50, 1, '2013-09-03 08:34:48', '127.0.0.1', 1),
(51, 1, '2013-09-03 08:46:08', '127.0.0.1', 1),
(52, 1, '2013-09-03 09:10:04', '127.0.0.1', 1),
(53, 1, '2013-09-03 11:30:48', '127.0.0.1', 1),
(54, 1, '2013-09-03 11:40:54', '127.0.0.1', 1),
(55, 1, '2013-09-03 11:41:04', '127.0.0.1', 1),
(56, 1, '2013-09-03 11:41:19', '127.0.0.1', 1),
(57, 1, '2013-09-03 11:42:06', '127.0.0.1', 1),
(58, 1, '2013-09-03 11:43:28', '127.0.0.1', 1),
(59, 1, '2013-09-04 09:08:09', '127.0.0.1', 1),
(60, 1, '2013-09-04 09:41:26', '127.0.0.1', 1),
(61, 1, '2013-09-04 10:00:34', '127.0.0.1', 1),
(62, 1, '2013-09-04 13:45:19', '127.0.0.1', 1),
(63, 1, '2013-09-05 08:08:58', '127.0.0.1', 1),
(64, 1, '2013-09-05 08:45:53', '127.0.0.1', 1),
(65, 1, '2013-09-05 09:13:41', '127.0.0.1', 1),
(66, 1, '2013-09-05 09:41:39', '127.0.0.1', 1),
(67, 1, '2013-09-05 09:43:00', '127.0.0.1', 1),
(68, 1, '2013-09-05 09:43:45', '127.0.0.1', 1),
(69, 1, '2013-09-09 10:57:55', '127.0.0.1', 0),
(70, 1, '2013-09-09 10:58:13', '127.0.0.1', 1),
(71, 1, '2013-09-09 11:04:43', '127.0.0.1', 1),
(72, 1, '2013-09-09 11:04:58', '127.0.0.1', 1),
(73, 1, '2013-09-10 09:56:20', '127.0.0.1', 1),
(74, 1, '2013-09-10 10:39:16', '127.0.0.1', 1),
(75, 1, '2013-09-10 11:08:03', '127.0.0.1', 1),
(76, 1, '2013-09-10 11:09:34', '127.0.0.1', 1),
(77, 1, '2013-09-10 11:11:00', '127.0.0.1', 1),
(78, 1, '2013-09-10 11:13:57', '127.0.0.1', 1),
(79, 1, '2013-09-10 11:15:11', '127.0.0.1', 1),
(80, 1, '2013-09-10 11:16:53', '127.0.0.1', 1),
(81, 1, '2013-09-10 11:35:19', '127.0.0.1', 1),
(82, 1, '2013-09-10 12:05:32', '127.0.0.1', 1),
(83, 1, '2013-09-11 08:32:18', '127.0.0.1', 1),
(84, 1, '2013-09-11 08:49:34', '127.0.0.1', 1),
(85, 1, '2013-09-11 10:12:14', '127.0.0.1', 1),
(86, 1, '2013-09-11 10:56:11', '127.0.0.1', 1),
(87, 1, '2013-09-11 11:04:25', '127.0.0.1', 1),
(88, 1, '2013-09-11 11:12:21', '127.0.0.1', 1),
(89, 1, '2013-09-12 08:37:59', '127.0.0.1', 1),
(90, 1, '2013-09-12 10:12:07', '127.0.0.1', 1),
(91, 1, '2013-09-12 10:13:48', '127.0.0.1', 1),
(92, 1, '2013-09-12 10:41:55', '127.0.0.1', 1),
(93, 1, '2013-09-16 08:34:03', '127.0.0.1', 1),
(94, 1, '2013-09-16 08:53:19', '127.0.0.1', 1),
(95, 1, '2013-09-18 10:09:06', '127.0.0.1', 1),
(96, 1, '2013-09-18 10:36:55', '127.0.0.1', 1),
(97, 1, '2013-09-18 11:59:48', '127.0.0.1', 1),
(98, 1, '2013-09-18 12:42:43', '127.0.0.1', 1),
(99, 1, '2013-09-18 14:07:29', '127.0.0.1', 1),
(100, 1, '2013-09-19 08:48:02', '127.0.0.1', 0),
(101, 1, '2013-09-19 08:48:18', '127.0.0.1', 0),
(102, 1, '2013-09-19 08:49:39', '127.0.0.1', 1),
(103, 1, '2013-09-19 09:11:11', '127.0.0.1', 1),
(104, 1, '2013-09-19 09:12:14', '127.0.0.1', 1),
(105, 1, '2013-09-19 09:12:56', '127.0.0.1', 1),
(106, 1, '2013-09-19 09:18:55', '127.0.0.1', 1),
(107, 1, '2013-09-20 08:34:30', '127.0.0.1', 1),
(108, 1, '2013-09-20 08:56:10', '127.0.0.1', 1),
(109, 1, '2013-09-20 09:49:35', '127.0.0.1', 1),
(110, 1, '2013-09-20 10:03:37', '127.0.0.1', 1),
(111, 1, '2013-09-20 10:04:27', '127.0.0.1', 1),
(112, 1, '2013-09-20 13:22:10', '127.0.0.1', 1),
(113, 1, '2013-09-20 13:23:22', '127.0.0.1', 1),
(114, 1, '2013-09-24 08:32:44', '127.0.0.1', 1),
(115, 1, '2013-09-24 09:20:24', '127.0.0.1', 1),
(116, 1, '2013-09-24 12:20:06', '127.0.0.1', 1),
(117, 1, '2013-09-24 12:55:53', '127.0.0.1', 1),
(118, 1, '2013-09-27 08:37:48', '127.0.0.1', 1),
(119, 1, '2013-09-27 12:43:57', '127.0.0.1', 1),
(120, 1, '2013-09-27 13:06:02', '127.0.0.1', 1),
(121, 1, '2013-09-30 08:34:32', '127.0.0.1', 1),
(122, 1, '2013-09-30 09:17:39', '127.0.0.1', 1),
(123, 1, '2013-10-01 08:26:33', '127.0.0.1', 1),
(124, 1, '2013-10-01 08:45:09', '127.0.0.1', 1),
(125, 1, '2013-10-01 11:42:37', '127.0.0.1', 1),
(126, 1, '2013-10-01 13:25:35', '127.0.0.1', 1),
(127, 1, '2013-10-01 13:25:47', '127.0.0.1', 1),
(128, 1, '2013-10-01 13:26:53', '127.0.0.1', 1),
(129, 1, '2013-10-01 13:28:11', '127.0.0.1', 1),
(130, 1, '2013-10-01 13:29:01', '127.0.0.1', 1),
(131, 1, '2013-10-01 13:29:45', '127.0.0.1', 1),
(132, 1, '2013-10-02 08:35:39', '127.0.0.1', 1),
(133, 1, '2013-10-02 08:37:14', '127.0.0.1', 1),
(134, 1, '2013-10-02 08:39:39', '127.0.0.1', 1),
(135, 1, '2013-10-02 08:40:47', '127.0.0.1', 1),
(136, 1, '2013-10-02 08:43:12', '127.0.0.1', 1),
(137, 1, '2013-10-02 08:44:18', '127.0.0.1', 1),
(138, 1, '2013-10-02 08:44:39', '127.0.0.1', 1),
(139, 1, '2013-10-02 08:45:12', '127.0.0.1', 1),
(140, 1, '2013-10-02 10:09:20', '127.0.0.1', 1),
(141, 1, '2013-10-02 11:09:51', '127.0.0.1', 1),
(142, 1, '2013-10-02 11:59:28', '127.0.0.1', 1),
(143, 1, '2013-10-03 08:38:20', '127.0.0.1', 1),
(144, 1, '2013-10-03 09:26:57', '127.0.0.1', 1),
(145, 1, '2013-10-03 10:13:45', '127.0.0.1', 1),
(146, 1, '2013-10-03 10:56:56', '127.0.0.1', 1),
(147, 1, '2013-10-03 10:57:18', '127.0.0.1', 1),
(148, 1, '2013-10-03 11:01:20', '127.0.0.1', 1),
(149, 1, '2013-10-03 11:13:54', '127.0.0.1', 1),
(150, 1, '2013-10-03 11:32:52', '127.0.0.1', 0),
(151, 1, '2013-10-03 11:33:13', '127.0.0.1', 1),
(152, 1, '2013-10-03 13:41:35', '127.0.0.1', 0),
(153, 1, '2013-10-03 13:41:49', '127.0.0.1', 1),
(154, 2, '2013-10-03 13:45:21', '127.0.0.1', 1),
(155, 1, '2013-10-03 13:48:18', '127.0.0.1', 1),
(156, 1, '2013-10-03 13:49:05', '127.0.0.1', 0),
(157, 1, '2013-10-03 13:49:20', '127.0.0.1', 1),
(158, 1, '2013-10-03 13:50:07', '127.0.0.1', 0),
(159, 1, '2013-10-03 13:50:20', '127.0.0.1', 1),
(160, 1, '2013-10-03 13:51:25', '127.0.0.1', 1),
(161, 1, '2013-10-03 13:57:59', '127.0.0.1', 1),
(162, 1, '2013-10-03 14:02:35', '127.0.0.1', 1),
(163, 1, '2013-10-03 14:12:10', '127.0.0.1', 1),
(164, 1, '2013-10-03 14:13:00', '127.0.0.1', 1),
(165, 1, '2013-10-03 14:17:32', '127.0.0.1', 1),
(166, 1, '2013-10-03 14:21:01', '127.0.0.1', 1),
(167, 2, '2013-10-03 14:22:05', '127.0.0.1', 1),
(168, 1, '2013-10-04 08:51:14', '127.0.0.1', 0),
(169, 1, '2013-10-04 08:51:27', '127.0.0.1', 1),
(170, 1, '2013-10-04 08:52:25', '127.0.0.1', 0),
(171, 1, '2013-10-04 08:52:40', '127.0.0.1', 1),
(172, 2, '2013-10-04 08:53:47', '127.0.0.1', 1),
(173, 1, '2013-10-04 09:06:26', '127.0.0.1', 1),
(174, 2, '2013-10-04 09:26:50', '127.0.0.1', 1),
(175, 1, '2013-10-04 10:11:34', '127.0.0.1', 1),
(176, 2, '2013-10-04 10:11:44', '127.0.0.1', 1),
(177, 2, '2013-10-04 10:13:40', '127.0.0.1', 1),
(178, 1, '2013-10-04 11:32:21', '131.107.3.16', 1),
(179, 2, '2013-10-04 11:32:46', '131.107.3.16', 1),
(180, 1, '2013-10-04 11:51:17', '131.107.3.16', 1),
(181, 2, '2013-10-04 11:53:24', '131.107.3.16', 1),
(182, 1, '2013-10-04 11:54:04', '131.107.3.16', 1),
(183, 2, '2013-10-04 12:42:25', '131.107.3.16', 1),
(184, 1, '2013-10-07 09:39:15', '127.0.0.1', 0),
(185, 1, '2013-10-07 09:39:28', '127.0.0.1', 1),
(186, 1, '2013-10-07 13:14:04', '127.0.0.1', 1),
(187, 1, '2013-10-08 09:03:34', '127.0.0.1', 0),
(188, 1, '2013-10-08 09:03:49', '127.0.0.1', 1),
(189, 1, '2013-10-09 09:26:34', '127.0.0.1', 0),
(190, 1, '2013-10-09 09:26:47', '127.0.0.1', 1),
(191, 1, '2013-10-09 10:11:12', '127.0.0.1', 1),
(192, 1, '2013-10-09 10:11:34', '127.0.0.1', 1),
(193, 1, '2013-10-09 10:12:55', '127.0.0.1', 1),
(194, 1, '2013-10-09 10:13:15', '127.0.0.1', 1),
(195, 1, '2013-10-09 10:14:42', '127.0.0.1', 1),
(196, 1, '2013-10-09 10:14:51', '127.0.0.1', 0),
(197, 1, '2013-10-09 10:15:08', '127.0.0.1', 0),
(198, 1, '2013-10-09 10:15:38', '127.0.0.1', 0),
(199, 1, '2013-10-09 10:18:12', '127.0.0.1', 0),
(200, 1, '2013-10-09 10:18:26', NULL, 0),
(201, 1, '2013-10-09 10:18:59', '127.0.0.1', 1),
(202, 1, '2013-10-09 10:19:17', '127.0.0.1', 0),
(203, 1, '2013-10-09 10:19:39', '127.0.0.1', 0),
(204, 1, '2013-10-09 10:20:56', '127.0.0.1', 0),
(205, 1, '2013-10-09 10:21:11', '127.0.0.1', 1),
(206, 1, '2013-10-09 10:38:16', '127.0.0.1', 1),
(207, 1, '2013-10-09 12:10:36', '127.0.0.1', 1),
(208, 1, '2013-10-09 12:12:49', '127.0.0.1', 1),
(209, 1, '2013-10-09 12:14:03', '127.0.0.1', 1),
(210, 2, '2013-10-09 12:58:37', '127.0.0.1', 1),
(211, 1, '2013-10-10 12:00:52', '127.0.0.1', 1),
(212, 1, '2013-10-10 12:03:57', '127.0.0.1', 1),
(213, 1, '2013-10-10 12:40:21', '127.0.0.1', 1),
(214, 3, '2013-10-10 13:49:04', '127.0.0.1', 1),
(215, 1, '2013-10-15 08:43:59', '127.0.0.1', 1),
(216, 1, '2013-10-15 09:16:28', '127.0.0.1', 1),
(217, 1, '2013-10-15 09:19:33', '127.0.0.1', 1),
(218, 1, '2013-10-15 09:37:05', '127.0.0.1', 1),
(219, 1, '2013-10-15 09:37:18', '127.0.0.1', 1),
(220, 1, '2013-10-15 09:37:29', '127.0.0.1', 0),
(221, 1, '2013-10-15 09:38:00', '127.0.0.1', 1),
(222, 1, '2013-10-15 09:39:52', '127.0.0.1', 1),
(223, 1, '2013-10-15 09:40:10', '127.0.0.1', 1),
(224, 1, '2013-10-15 09:57:06', '127.0.0.1', 1),
(225, 1, '2013-10-15 09:57:50', '127.0.0.1', 1),
(226, 1, '2013-10-15 09:58:27', '127.0.0.1', 1),
(227, 1, '2013-10-15 10:13:30', '127.0.0.1', 0),
(228, 1, '2013-10-15 10:13:44', '127.0.0.1', 1),
(229, 1, '2013-10-15 12:12:51', '127.0.0.1', 1),
(230, 1, '2013-10-16 08:26:21', '127.0.0.1', 0),
(231, 1, '2013-10-16 08:26:37', '127.0.0.1', 1),
(232, 1, '2013-10-16 10:10:24', '127.0.0.1', 1),
(233, 1, '2013-10-16 10:13:02', '127.0.0.1', 0),
(234, 1, '2013-10-16 10:13:12', '127.0.0.1', 1),
(235, 2, '2013-10-16 10:44:44', '127.0.0.1', 1),
(236, 1, '2013-10-16 10:58:39', '127.0.0.1', 1),
(237, 2, '2013-10-16 10:59:08', '127.0.0.1', 1),
(238, 1, '2013-10-16 12:10:39', '127.0.0.1', 1),
(239, 1, '2013-10-16 12:12:08', '127.0.0.1', 1),
(240, 1, '2013-10-16 12:12:43', '127.0.0.1', 1),
(241, 1, '2013-10-16 12:22:39', '127.0.0.1', 1),
(242, 1, '2013-10-16 12:35:56', '127.0.0.1', 1),
(243, 1, '2013-10-16 12:38:09', '127.0.0.1', 1),
(244, 1, '2013-10-16 12:38:57', '127.0.0.1', 1),
(245, 1, '2013-10-16 13:24:42', '127.0.0.1', 1),
(246, 1, '2013-10-16 13:25:26', '127.0.0.1', 1),
(247, 1, '2013-10-16 13:26:38', '127.0.0.1', 1),
(248, 2, '2013-10-16 13:28:19', '127.0.0.1', 1),
(249, 2, '2013-10-16 13:34:17', '127.0.0.1', 1),
(250, 2, '2013-10-16 13:37:09', '127.0.0.1', 1),
(251, 2, '2013-10-16 13:40:11', '127.0.0.1', 1),
(252, 1, '2013-10-17 09:27:04', '127.0.0.1', 1),
(253, 2, '2013-10-17 09:27:16', '127.0.0.1', 1),
(254, 2, '2013-10-17 09:42:56', '127.0.0.1', 1),
(255, 2, '2013-10-17 09:58:23', '127.0.0.1', 1),
(256, 2, '2013-10-17 12:16:51', '127.0.0.1', 1),
(257, 2, '2013-10-18 08:26:02', '127.0.0.1', 1),
(258, 2, '2013-10-18 08:37:32', '127.0.0.1', 1),
(259, 3, '2013-10-18 10:15:43', '127.0.0.1', 1),
(260, 2, '2013-10-18 10:16:29', '127.0.0.1', 1),
(261, 2, '2013-10-18 10:20:11', '127.0.0.1', 1),
(262, 3, '2013-10-18 10:29:34', '127.0.0.1', 1),
(263, 2, '2013-10-18 10:32:44', '127.0.0.1', 1),
(264, 2, '2013-10-18 10:34:18', '127.0.0.1', 1),
(265, 2, '2013-10-18 10:34:50', '127.0.0.1', 1),
(266, 3, '2013-10-18 10:35:14', '127.0.0.1', 1),
(267, 2, '2013-10-18 10:37:04', '127.0.0.1', 0),
(268, 2, '2013-10-18 10:37:17', '127.0.0.1', 1),
(269, 3, '2013-10-18 10:37:42', '127.0.0.1', 1),
(270, 2, '2013-10-18 10:39:13', '127.0.0.1', 1),
(271, 2, '2013-10-18 10:43:46', '127.0.0.1', 1),
(272, 3, '2013-10-18 10:44:49', '127.0.0.1', 1),
(273, 2, '2013-10-18 10:58:06', '127.0.0.1', 1),
(274, 2, '2013-10-21 08:44:52', '127.0.0.1', 0),
(275, 2, '2013-10-21 08:45:08', '127.0.0.1', 1),
(276, 2, '2013-10-21 08:46:38', '127.0.0.1', 1),
(277, 3, '2013-10-21 08:47:41', '127.0.0.1', 1),
(278, 3, '2013-10-21 08:49:46', '127.0.0.1', 1),
(279, 3, '2013-10-21 09:14:34', '127.0.0.1', 1),
(280, 2, '2013-10-21 09:14:55', '127.0.0.1', 1),
(281, 2, '2013-10-21 09:16:45', '127.0.0.1', 1),
(282, 2, '2013-10-22 08:12:22', '127.0.0.1', 1),
(283, 2, '2013-10-22 08:13:07', '127.0.0.1', 1),
(284, 2, '2013-10-22 10:27:26', '127.0.0.1', 1),
(285, 2, '2013-10-22 11:21:58', '127.0.0.1', 1),
(286, 2, '2013-10-22 11:26:16', '127.0.0.1', 1),
(287, 2, '2013-10-23 11:41:46', '127.0.0.1', 1),
(288, 2, '2013-10-24 09:08:10', '127.0.0.1', 0),
(289, 2, '2013-10-24 09:08:23', '127.0.0.1', 1),
(290, 2, '2013-10-24 09:22:03', '127.0.0.1', 1),
(291, 2, '2013-10-24 12:00:22', '127.0.0.1', 1),
(292, 2, '2013-10-24 12:06:44', '127.0.0.1', 1),
(293, 2, '2013-10-24 12:09:26', '127.0.0.1', 1),
(294, 2, '2013-10-24 12:10:33', '127.0.0.1', 1),
(295, 2, '2013-10-24 12:20:00', '127.0.0.1', 1),
(296, 2, '2013-10-25 11:11:44', '127.0.0.1', 1),
(297, 1, '2013-10-28 08:47:35', '127.0.0.1', 0),
(298, 2, '2013-10-28 08:47:56', '127.0.0.1', 1),
(299, 2, '2013-10-28 12:08:40', '127.0.0.1', 1),
(300, 2, '2013-10-29 08:23:40', '127.0.0.1', 1),
(301, 2, '2013-10-29 09:50:20', '127.0.0.1', 1),
(302, 2, '2013-10-29 11:01:12', '127.0.0.1', 1),
(303, 2, '2013-10-29 11:01:38', '127.0.0.1', 1),
(304, 2, '2013-10-29 11:07:49', '127.0.0.1', 1),
(305, 1, '2013-10-29 11:08:06', '127.0.0.1', 0),
(306, 1, '2013-10-29 11:08:18', '127.0.0.1', 1),
(307, 2, '2013-10-29 11:38:20', '127.0.0.1', 1),
(308, 1, '2013-10-29 11:47:02', '127.0.0.1', 1),
(309, 1, '2013-10-29 11:48:24', '127.0.0.1', 1),
(310, 2, '2013-10-30 09:38:37', '127.0.0.1', 1),
(311, 2, '2013-10-30 11:32:19', '127.0.0.1', 1),
(312, 1, '2013-10-30 12:13:27', '127.0.0.1', 1),
(313, 1, '2013-10-30 13:12:21', '127.0.0.1', 1),
(314, 1, '2013-10-31 10:52:49', '127.0.0.1', 1),
(315, 3, '2013-10-31 10:53:10', '127.0.0.1', 0),
(316, 3, '2013-10-31 10:53:24', '127.0.0.1', 1),
(317, 1, '2013-10-31 13:43:46', '127.0.0.1', 1),
(318, 2, '2013-11-01 08:48:24', '127.0.0.1', 1),
(319, 3, '2013-11-01 08:53:14', '127.0.0.1', 1),
(320, 1, '2013-11-01 09:08:02', '127.0.0.1', 0),
(321, 1, '2013-11-01 09:08:13', '127.0.0.1', 1),
(322, 1, '2013-11-01 09:34:43', '127.0.0.1', 1),
(323, 1, '2013-11-01 11:06:05', '127.0.0.1', 1),
(324, 3, '2013-11-01 11:55:14', '127.0.0.1', 1),
(325, 1, '2013-11-01 11:58:08', '127.0.0.1', 1),
(326, 2, '2013-11-01 12:01:12', '127.0.0.1', 1),
(327, 3, '2013-11-01 12:01:20', '127.0.0.1', 1),
(328, 1, '2013-11-01 12:09:40', '127.0.0.1', 1),
(329, 1, '2013-11-01 12:35:55', '127.0.0.1', 1),
(330, 2, '2013-11-01 12:37:52', '127.0.0.1', 1),
(331, 1, '2013-11-04 08:28:35', '127.0.0.1', 0),
(332, 1, '2013-11-04 08:29:15', '127.0.0.1', 1),
(333, 1, '2013-11-04 11:57:41', '127.0.0.1', 1),
(334, 1, '2013-11-06 08:44:51', '127.0.0.1', 1),
(335, 1, '2013-11-06 09:01:28', '127.0.0.1', 1),
(336, 1, '2013-11-06 12:07:41', '127.0.0.1', 1),
(337, 1, '2013-11-07 09:05:45', '127.0.0.1', 1),
(338, 1, '2013-11-07 09:35:47', '127.0.0.1', 1),
(339, 1, '2013-11-11 08:49:38', '127.0.0.1', 1),
(340, 1, '2013-11-11 10:10:32', '127.0.0.1', 1),
(341, 1, '2013-11-12 08:17:16', '127.0.0.1', 1),
(342, 2, '2013-11-12 09:57:49', '127.0.0.1', 1),
(343, 3, '2013-11-12 09:58:05', '127.0.0.1', 1),
(344, 1, '2013-11-12 10:19:48', '127.0.0.1', 1),
(345, 3, '2013-11-12 10:20:12', '127.0.0.1', 1),
(346, 3, '2013-11-18 12:38:35', '127.0.0.1', 1),
(347, 3, '2013-11-18 12:42:19', '127.0.0.1', 1),
(348, 1, '2013-11-18 12:42:55', '127.0.0.1', 1),
(349, 1, '2013-11-21 09:00:04', '127.0.0.1', 1),
(350, 1, '2013-11-21 09:40:36', '131.107.3.18', 1),
(351, 3, '2013-11-21 10:18:11', '131.107.3.18', 1),
(352, 3, '2013-11-21 10:27:17', '127.0.0.1', 1),
(353, 1, '2013-11-22 08:46:34', '127.0.0.1', 1),
(354, 3, '2013-11-22 08:59:26', '127.0.0.1', 1),
(355, 1, '2013-11-27 09:08:31', '127.0.0.1', 1),
(356, 1, '2013-11-27 09:19:02', '127.0.0.1', 1),
(357, 1, '2013-11-27 11:14:37', '127.0.0.1', 1),
(358, 1, '2013-11-27 12:32:42', '127.0.0.1', 1),
(359, 1, '2013-11-27 12:44:14', '127.0.0.1', 1),
(360, 1, '2013-11-28 08:35:57', '127.0.0.1', 1),
(361, 1, '2013-11-28 08:59:51', '127.0.0.1', 1),
(362, 1, '2013-11-28 09:23:59', '127.0.0.1', 1),
(363, 4, '2013-11-28 09:50:56', '127.0.0.1', 0),
(364, 1, '2013-11-28 09:52:11', '127.0.0.1', 1),
(365, 1, '2013-11-28 10:08:00', '127.0.0.1', 1),
(366, 1, '2013-11-28 10:44:35', '127.0.0.1', 1),
(367, 1, '2013-11-28 11:49:04', '131.107.3.16', 1),
(368, 1, '2013-11-28 12:44:42', '131.107.3.16', 1),
(369, 1, '2013-11-28 13:44:39', '127.0.0.1', 1),
(370, 1, '2013-11-29 08:39:28', '127.0.0.1', 1),
(371, 1, '2013-11-29 09:32:09', '127.0.0.1', 1),
(372, 1, '2013-11-29 12:13:05', '127.0.0.1', 1),
(373, 1, '2013-11-29 12:24:33', '127.0.0.1', 1),
(374, 1, '2013-12-09 08:33:15', '127.0.0.1', 1),
(375, 1, '2013-12-09 08:40:22', '127.0.0.1', 1),
(376, 1, '2013-12-09 08:44:15', '127.0.0.1', 1),
(377, 1, '2013-12-11 08:17:54', '127.0.0.1', 1),
(378, 1, '2013-12-11 10:22:29', '127.0.0.1', 1),
(379, 1, '2013-12-14 18:59:49', '127.0.0.1', 1),
(380, 1, '2013-12-14 19:00:06', '127.0.0.1', 1),
(381, 1, '2013-12-14 19:07:43', '127.0.0.1', 1),
(382, 1, '2013-12-14 23:54:53', '127.0.0.1', 0),
(383, 1, '2013-12-14 23:55:24', '127.0.0.1', 1),
(384, 1, '2013-12-15 21:00:35', '127.0.0.1', 1),
(385, 1, '2013-12-16 01:53:09', '127.0.0.1', 1),
(386, 1, '2013-12-18 19:52:53', '127.0.0.1', 1),
(387, 1, '2013-12-18 20:56:46', '127.0.0.1', 1),
(388, 1, '2014-01-04 19:02:12', '127.0.0.1', 1),
(389, 1, '2014-01-04 19:38:28', '127.0.0.1', 1),
(390, 1, '2014-01-04 23:55:58', '127.0.0.1', 1),
(391, 1, '2014-01-05 10:39:27', '127.0.0.1', 1),
(392, 1, '2014-01-05 11:37:29', '127.0.0.1', 1),
(393, 1, '2014-01-05 11:39:45', '127.0.0.1', 1),
(394, 1, '2014-01-05 21:37:05', '127.0.0.1', 1),
(395, 1, '2014-01-05 21:42:18', '127.0.0.1', 1),
(396, 1, '2014-01-06 18:12:48', '127.0.0.1', 1),
(397, 1, '2014-01-06 19:16:53', '127.0.0.1', 1),
(398, 1, '2014-01-07 16:34:31', '127.0.0.1', 1),
(399, 1, '2014-01-07 16:51:23', '127.0.0.1', 1),
(400, 1, '2014-01-07 17:37:26', '127.0.0.1', 1),
(401, 1, '2014-01-07 17:39:22', '127.0.0.1', 1),
(402, 1, '2014-01-07 17:40:13', '127.0.0.1', 1),
(403, 1, '2014-01-07 17:41:22', '127.0.0.1', 1),
(404, 1, '2014-01-07 17:54:59', '127.0.0.1', 1),
(405, 1, '2014-01-07 17:55:23', '127.0.0.1', 1),
(406, 1, '2014-01-07 17:57:02', '127.0.0.1', 1),
(407, 1, '2014-01-08 20:49:36', '127.0.0.1', 1),
(408, 1, '2014-01-08 20:50:08', '127.0.0.1', 1),
(409, 1, '2014-01-08 20:51:35', '127.0.0.1', 1),
(410, 1, '2014-01-08 20:53:02', '127.0.0.1', 1),
(411, 1, '2014-01-09 15:07:02', '127.0.0.1', 1),
(412, 1, '2014-01-09 15:25:51', '127.0.0.1', 1),
(413, 1, '2014-01-09 17:30:17', '127.0.0.1', 1),
(414, 1, '2014-01-09 17:30:43', '127.0.0.1', 1),
(415, 1, '2014-01-09 18:33:00', '127.0.0.1', 1),
(416, 1, '2014-01-10 18:20:52', '127.0.0.1', 1),
(417, 1, '2014-01-10 18:21:06', '127.0.0.1', 1),
(418, 1, '2014-01-10 19:04:08', '127.0.0.1', 1),
(419, 1, '2014-01-10 19:27:15', '127.0.0.1', 1),
(420, 1, '2014-01-10 19:42:31', '127.0.0.1', 1),
(421, 1, '2014-01-11 17:16:22', '127.0.0.1', 1),
(422, 1, '2014-01-11 17:36:52', '127.0.0.1', 1),
(423, 1, '2014-01-11 18:25:46', '127.0.0.1', 1),
(424, 1, '2014-01-11 18:26:02', '127.0.0.1', 1),
(425, 1, '2014-01-11 18:26:26', '127.0.0.1', 1),
(426, 1, '2014-01-11 19:41:03', '127.0.0.1', 1),
(427, 1, '2014-01-11 21:10:34', '127.0.0.1', 1),
(428, 1, '2014-01-11 21:28:19', '127.0.0.1', 1),
(429, 1, '2014-01-12 19:50:55', '127.0.0.1', 1),
(430, 1, '2014-01-12 19:54:58', '127.0.0.1', 1),
(431, 1, '2014-01-13 19:09:13', '127.0.0.1', 1),
(432, 1, '2014-01-13 19:20:16', '127.0.0.1', 1),
(433, 1, '2014-01-13 19:21:36', '127.0.0.1', 1),
(434, 1, '2014-01-13 20:46:44', '127.0.0.1', 1),
(435, 1, '2014-01-13 21:20:03', '127.0.0.1', 1),
(436, 1, '2014-01-14 12:59:35', '127.0.0.1', 1),
(437, 1, '2014-01-14 13:02:32', '127.0.0.1', 1),
(438, 1, '2014-01-14 13:12:03', '127.0.0.1', 1),
(439, 1, '2014-01-14 13:32:14', '127.0.0.1', 1),
(440, 1, '2014-01-14 18:13:05', '127.0.0.1', 1),
(441, 1, '2014-01-14 18:27:42', '127.0.0.1', 1),
(442, 1, '2014-01-14 18:28:46', '127.0.0.1', 1),
(443, 1, '2014-01-15 12:54:29', '127.0.0.1', 1),
(444, 1, '2014-01-15 12:54:46', '127.0.0.1', 1),
(445, 1, '2014-01-15 18:20:04', '127.0.0.1', 1),
(446, 1, '2014-01-15 18:27:25', '127.0.0.1', 1),
(447, 1, '2014-01-15 20:29:13', '127.0.0.1', 1),
(448, 1, '2014-01-17 08:54:38', '127.0.0.1', 1),
(449, 1, '2014-01-17 08:57:42', '127.0.0.1', 1),
(450, 1, '2014-01-17 11:34:11', '127.0.0.1', 1),
(451, 1, '2014-01-17 11:39:28', '127.0.0.1', 1),
(452, 1, '2014-01-17 19:32:33', '127.0.0.1', 1),
(453, 1, '2014-01-17 20:00:11', '127.0.0.1', 1),
(454, 1, '2014-01-19 15:50:45', '127.0.0.1', 1),
(455, 1, '2014-01-19 20:41:00', '127.0.0.1', 1),
(456, 1, '2014-01-19 20:57:21', '127.0.0.1', 1),
(457, 1, '2014-01-19 21:11:46', '127.0.0.1', 1),
(458, 1, '2014-01-19 21:20:27', '127.0.0.1', 1),
(459, 1, '2014-01-19 21:21:32', '127.0.0.1', 1),
(460, 1, '2014-01-19 21:46:56', '127.0.0.1', 1),
(461, 1, '2014-01-20 16:27:26', '127.0.0.1', 1),
(462, 1, '2014-01-20 17:39:22', '127.0.0.1', 1),
(463, 1, '2014-01-21 08:49:33', '127.0.0.1', 1),
(464, 1, '2014-01-22 17:24:22', '127.0.0.1', 1),
(465, 1, '2014-01-27 01:19:15', '127.0.0.1', 0),
(466, 1, '2014-01-28 18:31:23', '127.0.0.1', 1),
(467, 1, '2014-01-28 18:48:41', '127.0.0.1', 0),
(468, 1, '2014-01-28 18:50:47', '127.0.0.1', 0),
(469, 1, '2014-01-28 18:51:48', '127.0.0.1', 0),
(470, 1, '2014-01-28 18:52:00', '127.0.0.1', 0),
(471, 1, '2014-01-28 18:53:43', '127.0.0.1', 0),
(472, 1, '2014-01-28 18:55:07', '127.0.0.1', 0),
(473, 1, '2014-01-28 18:58:35', '127.0.0.1', 0),
(474, 1, '2014-01-28 19:00:07', '127.0.0.1', 0),
(475, 1, '2014-01-28 19:00:19', '127.0.0.1', 0),
(476, 1, '2014-01-28 19:01:01', '127.0.0.1', 1),
(477, 1, '2014-01-28 19:01:20', '127.0.0.1', 1),
(478, 1, '2014-01-28 19:05:51', '127.0.0.1', 1),
(479, 1, '2014-01-28 21:25:07', '127.0.0.1', 1),
(480, 1, '2014-01-29 09:00:07', '127.0.0.1', 1),
(481, 1, '2014-01-29 09:20:58', '127.0.0.1', 1),
(482, 1, '2014-01-29 09:23:04', '127.0.0.1', 0),
(483, 1, '2014-01-29 09:23:18', '127.0.0.1', 1),
(484, 1, '2014-01-29 09:43:59', '127.0.0.1', 1),
(485, 1, '2014-01-29 09:56:18', '127.0.0.1', 1),
(486, 1, '2014-01-29 11:00:36', '127.0.0.1', 1),
(487, 1, '2014-01-29 11:03:58', '127.0.0.1', 1),
(488, 1, '2014-01-29 11:04:20', '127.0.0.1', 1),
(489, 1, '2014-01-29 11:09:13', '127.0.0.1', 1),
(490, 1, '2014-01-30 15:59:58', '127.0.0.1', 1),
(491, 1, '2014-02-03 09:24:36', '127.0.0.1', 1),
(492, 1, '2014-02-03 10:27:06', '127.0.0.1', 1),
(493, 1, '2014-02-11 21:37:52', '127.0.0.1', 1),
(494, 1, '2014-02-11 23:49:54', NULL, 0),
(495, 1, '2014-02-11 23:50:30', '127.0.0.1', 1),
(496, 1, '2014-02-12 15:04:41', '127.0.0.1', 1),
(497, 1, '2014-02-12 15:09:21', '127.0.0.1', 1),
(498, 1, '2014-02-13 12:32:40', '127.0.0.1', 1),
(499, 1, '2014-02-13 13:56:08', '127.0.0.1', 1),
(500, 1, '2014-02-13 15:04:53', '127.0.0.1', 1),
(501, 1, '2014-02-13 15:11:14', '127.0.0.1', 1),
(502, 1, '2014-02-14 07:59:26', '127.0.0.1', 1),
(503, 1, '2014-02-14 08:31:37', '127.0.0.1', 1),
(504, 1, '2014-02-14 15:08:44', '127.0.0.1', 1),
(505, 1, '2014-02-14 17:41:20', '127.0.0.1', 1),
(506, 1, '2014-02-14 20:03:58', '127.0.0.1', 1),
(507, 1, '2014-02-15 21:20:44', '127.0.0.1', 0),
(508, 1, '2014-02-15 21:20:53', '127.0.0.1', 0),
(509, 1, '2014-02-15 21:22:32', '127.0.0.1', 1),
(510, 1, '2014-02-17 21:03:46', '127.0.0.1', 1),
(511, 1, '2014-02-17 21:43:00', '127.0.0.1', 1),
(512, 1, '2014-02-20 12:51:30', '127.0.0.1', 1),
(513, 1, '2014-03-01 18:52:08', '127.0.0.1', 1),
(514, 1, '2014-03-01 20:15:04', '127.0.0.1', 1),
(515, 1, '2014-03-01 23:22:58', '127.0.0.1', 1),
(516, 1, '2014-03-02 12:32:24', '127.0.0.1', 1),
(517, 1, '2014-03-02 19:44:36', '127.0.0.1', 1),
(518, 1, '2014-03-02 20:55:00', '127.0.0.1', 1),
(519, 1, '2014-03-02 23:32:34', '127.0.0.1', 1),
(520, 1, '2014-03-02 23:33:15', '127.0.0.1', 1),
(521, 1, '2014-03-03 00:32:06', '127.0.0.1', 1),
(522, 1, '2014-03-03 10:52:07', '127.0.0.1', 1),
(523, 1, '2014-03-03 11:05:40', '127.0.0.1', 1),
(524, 1, '2014-03-03 11:52:21', '127.0.0.1', 1),
(525, 1, '2014-03-03 12:28:27', '127.0.0.1', 1),
(526, 1, '2014-03-03 12:28:40', '127.0.0.1', 0),
(527, 1, '2014-03-03 12:28:49', '127.0.0.1', 1),
(528, 1, '2014-03-03 16:33:30', '127.0.0.1', 1),
(529, 1, '2014-03-03 21:13:02', '10.0.0.12', 0),
(530, 1, '2014-03-04 17:03:13', '127.0.0.1', 1),
(531, 1, '2014-03-04 18:04:23', '127.0.0.1', 1),
(532, 1, '2014-03-04 18:08:50', '127.0.0.1', 1),
(533, 1, '2014-03-04 18:54:59', '127.0.0.1', 1),
(534, 1, '2014-03-06 21:55:50', '127.0.0.1', 1),
(535, 1, '2014-03-06 22:21:27', '127.0.0.1', 1),
(536, 1, '2014-03-06 23:49:34', '127.0.0.1', 1),
(537, 1, '2014-03-06 23:51:29', '127.0.0.1', 1),
(538, 1, '2014-03-07 11:49:04', '0.0.0.0', 1),
(539, 1, '2014-03-18 13:28:27', '0.0.0.0', 1),
(540, 1, '2014-03-25 13:38:04', '0.0.0.0', 1),
(541, 1, '2014-03-26 08:19:50', '0.0.0.0', 1),
(542, 1, '2014-03-26 09:59:19', '0.0.0.0', 1),
(543, 1, '2014-03-26 10:15:23', '0.0.0.0', 0),
(544, 1, '2014-03-26 10:17:39', '0.0.0.0', 0),
(545, 1, '2014-03-26 10:22:22', '0.0.0.0', 1),
(546, 1, '2014-03-26 10:37:39', '0.0.0.0', 1),
(547, 1, '2014-03-26 10:41:51', '0.0.0.0', 1),
(548, 1, '2014-03-26 10:45:41', '0.0.0.0', 1),
(549, 1, '2014-03-26 10:45:58', '0.0.0.0', 1),
(550, 1, '2014-03-26 10:51:11', '0.0.0.0', 1),
(551, 1, '2014-03-26 10:52:13', '0.0.0.0', 1),
(552, 1, '2014-03-26 10:59:31', '0.0.0.0', 1),
(553, 1, '2014-03-26 10:59:45', '0.0.0.0', 1),
(554, 1, '2014-03-26 11:36:21', '0.0.0.0', 1),
(555, 1, '2014-03-26 11:54:51', '0.0.0.0', 1),
(556, 1, '2014-03-26 12:10:19', '0.0.0.0', 1),
(557, 1, '2014-03-27 08:21:03', '0.0.0.0', 1),
(558, 1, '2014-03-27 11:09:37', '0.0.0.0', 1),
(559, 1, '2014-03-28 08:15:22', '0.0.0.0', 1),
(560, 1, '2014-03-28 10:33:06', '0.0.0.0', 1),
(561, 1, '2014-03-29 01:03:16', '127.0.0.1', 0),
(562, 1, '2014-03-29 01:03:27', '127.0.0.1', 0),
(563, 1, '2014-03-29 01:04:02', '127.0.0.1', 0),
(564, 1, '2014-03-29 01:08:10', '127.0.0.1', 1),
(565, 1, '2014-03-29 10:26:32', '127.0.0.1', 1),
(566, 1, '2014-03-29 11:58:44', '127.0.0.1', 1),
(567, 1, '2014-03-29 14:51:49', '127.0.0.1', 1),
(568, 1, '2014-03-30 00:03:57', '127.0.0.1', 1),
(569, 1, '2014-03-30 00:38:39', '127.0.0.1', 1),
(570, 1, '2014-03-30 14:08:23', '127.0.0.1', 1),
(571, 1, '2014-04-02 17:14:13', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_usuarios_estados`
--

CREATE TABLE IF NOT EXISTS `hits_usuarios_estados` (
  `idEstado` int(10) NOT NULL AUTO_INCREMENT,
  `nombreEstado` varchar(50) DEFAULT '0',
  PRIMARY KEY (`idEstado`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `hits_usuarios_estados`
--

INSERT INTO `hits_usuarios_estados` (`idEstado`, `nombreEstado`) VALUES
(1, 'Habilitado'),
(2, 'Bloqueado'),
(3, 'Deshabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hits_usuarios_roles`
--

CREATE TABLE IF NOT EXISTS `hits_usuarios_roles` (
  `idRol` int(10) NOT NULL AUTO_INCREMENT,
  `nombreRol` varchar(50) DEFAULT '0',
  `descripcionRol` varchar(255) DEFAULT '0',
  PRIMARY KEY (`idRol`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `hits_usuarios_roles`
--

INSERT INTO `hits_usuarios_roles` (`idRol`, `nombreRol`, `descripcionRol`) VALUES
(1, 'Administrador', '0'),
(2, 'Supervision', '0'),
(3, 'Recursos Humanos', '0'),
(4, 'Jefatura', '0'),
(5, 'Usuario', '0');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `hits_view_login`
--
CREATE TABLE IF NOT EXISTS `hits_view_login` (
`idUsuario` int(10)
,`nombreUsuario` varchar(50)
,`passwordUsuario` varchar(50)
,`intentosUsuario` int(10)
,`ultimoLoginUsuario` datetime
,`idPersona` int(10)
,`dniPersona` int(10)
,`apellidoPersona` varchar(255)
,`nombrePersona` varchar(255)
,`idRol` int(10)
,`nombreRol` varchar(50)
,`idEstado` int(10)
,`nombreEstado` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `hits_view_login`
--
DROP TABLE IF EXISTS `hits_view_login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hits_view_login` AS select `u`.`idUsuario` AS `idUsuario`,`u`.`nombreUsuario` AS `nombreUsuario`,`u`.`passwordUsuario` AS `passwordUsuario`,`u`.`intentosUsuario` AS `intentosUsuario`,`u`.`ultimoLoginUsuario` AS `ultimoLoginUsuario`,`p`.`idPersona` AS `idPersona`,`p`.`dniPersona` AS `dniPersona`,`p`.`apellidoPersona` AS `apellidoPersona`,`p`.`nombrePersona` AS `nombrePersona`,`r`.`idRol` AS `idRol`,`r`.`nombreRol` AS `nombreRol`,`e`.`idEstado` AS `idEstado`,`e`.`nombreEstado` AS `nombreEstado` from (((`hits_usuarios` `u` join `hits_personas` `p` on((`u`.`idPersona` = `p`.`idPersona`))) join `hits_usuarios_roles` `r` on((`u`.`idRol` = `r`.`idRol`))) join `hits_usuarios_estados` `e` on((`u`.`idEstado` = `e`.`idEstado`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
