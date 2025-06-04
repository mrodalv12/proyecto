-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2025 at 05:25 PM
-- Server version: 8.0.42-0ubuntu0.20.04.1
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrodalv_proyecto`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int NOT NULL,
  `Nombre` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripción` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Centro` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Titulación` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Créditos` int NOT NULL,
  `Departamento` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Idioma` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Cuatrimestre` enum('A','B') COLLATE utf8mb4_general_ci NOT NULL,
  `id_profesorasignatura` int NOT NULL,
  `Curso` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `Nombre`, `Descripción`, `Centro`, `Titulación`, `Créditos`, `Departamento`, `Idioma`, `Cuatrimestre`, `id_profesorasignatura`, `Curso`) VALUES
(1, 'Diseño de Interfaces y Experiencia de Usuario', 'En esta asignatura conoceremos la importancia y fundamentos de la experiencia de usuario al diseñar aplicaciones digitales. Identificaremos cuáles son los principios para crear una buena experiencia y una interfaz atractiva y funcional.\r\nAnalizaremos de manera crítica y reflexiva la interfaz web. Crearemos interfaces a través del prototipado. Aplicaremos el diseño de interacción a la creación de proyectos web y dispositivos móviles.', 'Escuela Politécnica Superior de Gandia', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Ingeniería Gráfica', 'Castellano', 'B', 1, 1),
(2, 'Electrónica Básica', 'Asignatura de primer cuatrimestre y primer curso que da las bases para diseñar y testear circuitos electrónicos básicos que pueden necesitar en diferentes tipos de proyectos.', 'Escuela Politécnica Superior de Gandia  ', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Ingeniería Electrónica  \r\n', 'Castellano', 'A', 1, 1),
(3, 'Fundamentos Físicos\r\n', 'La asignatura sienta las bases físicas de las tecnologías aplicadas en este grado. El temario incluye: las leyes fundamentales de la Dinámica, el Electromagnetismo y la Física Moderna. Se pretende que el alumno utilice estos conocimientos en las aplicaciones tecnológicas actuales, diseñe experimentos físicos básicos e incorpore el método científico en su trabajo.', 'Escuela Politécnica Superior de Gandia  ', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Física Aplicada  \r\n', 'Castellano', 'A', 1, 1),
(4, 'Programación 1\r\n', 'Comprender y utilizar los principios de diseño arquitectónico y algorítmico para desarrollar aplicaciones, mediante el uso de un lenguaje de programación. Diseño e implementación de aplicaciones mediante el uso de entornos de desarrollo y herramientas de control de versiones.', 'Escuela Politécnica Superior de Gandia  \r\n', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Sistemas Informáticos y Computación  \r\n', 'Castellano', 'A', 1, 1),
(6, 'Programación 2\r\n', 'Comprender y utilizar los principios de diseño arquitectónico y algorítmico para desarrollar aplicaciones, mediante el uso de un lenguaje de programación y sus bibliotecas estándar o de terceros. Conocer y aplicar los fundamentos de las aplicaciones distribuidas tipo cliente servidor y modelos relacionados (REST, RPC), así como las aspectos de concurrencia afines.', 'Escuela Politécnica Superior de Gandia  \r\n', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Sistemas Informáticos y Computación  \r\n', 'Castellano', 'B', 1, 1),
(7, 'Desarrollo de Un Proyecto Electrónico Utilizando Metodología Cdio\r\n', 'El alumno se integrará en un equipo de trabajo en el que se seguirá la metodología Scrum con la finalidad de desarrollar un producto electrónico contemplando las cuatro fases de diseño, esto es, la concepción del producto, el diseño del mismo, la implementación y por último la definición las condiciones de operación y mantenimiento. Para ello en la asignatura se impartirán los conceptos necesarios para afrontar cada fase y se pondrán en práctica mediante la construcción del producto final.', 'Escuela Politécnica Superior de Gandia  \r\n', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Ingeniería Electrónica  \r\n', 'Castellano', 'B', 1, 1),
(8, 'Proyecto Diseño y Programación Web\r\n', 'En esta asignatura los alumnos desarrollaran un proyecto en grupo que consistirá en crear un sitio web, según la metodología CDIO y Scrum. Esto comprende analizar, planificar, organizar, diseñar, desarrollar y publicar el site, observando la experiencia de usuario.\r\nA la hora de realizar el proyecto tendrán en cuenta el diseño de la aplicación front-end (hace referencia a la visualización del usuario), el back-end (administración del sitio con sus respectivos sistemas) y el trabajo en grupo.', 'Escuela Politécnica Superior de Gandia  ', 'Grado en Tecnologías Interactivas', 12, 'Dpto. de Comunicación Audiovisual, Documentación e Historia del Arte\r\nDpto. de Ingeniería Gráfica ', 'Castellano  ', 'B', 1, 1),
(10, 'Redes y Servicios Telemáticos\r\n', 'El alumno aprenderá las características y funcionamiento de las redes telemáticas. Se estudiará de forma específica la arquitectura TCP/IP utilizada en Internet. A lo largo de la asignatura el alumno aprenderá a conocer y trabajar de forma fluida con los protocolos y direcciones utilizadas en cada una de las capas de la arquitectura TCP/IP.\r\nEn las sesiones prácticas de laboratorio se aprenderá a montar, configurar y operar una red Ethernet que contenga ordenadores, switches y routers.', 'Escuela Politécnica Superior de Gandia  \r\n', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Comunicaciones  \r\n', 'Castellano', 'B', 1, 1),
(11, 'Álgebra Matricial y Geometría\r\n', 'Se imparten las bases algebraicas-geométricas necesarias para la realización de proyectos en el grado. Se emplean clases presenciales con metodología activa y crítica. Se describen los métodos y técnicas matemáticas del álgebra matricial y la geometría y se aplican en la resolución de problemas. Se utilizarán las capacidades de razonamiento riguroso, pensamiento lógico, de abstracción, de análisis y de toma de decisiones para la resolución de problemas.\r\n', 'Escuela Politécnica Superior de Gandia  \r\n', 'Grado en Tecnologías Interactivas', 6, 'Dpto. de Matemática Aplicada  \r\n', 'Castellano', 'A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacto`
--

CREATE TABLE `contacto` (
  `Correo` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Asunto` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripción` varchar(254) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacto`
--

INSERT INTO `contacto` (`Correo`, `Asunto`, `Descripción`) VALUES
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('k.poumai@upv.es', 'qweqwe', 'qwweqwe'),
('k.poumai@upv.es', 'qweqwe', 'qwweqwe'),
('k.poumai@upv.esqweq', 'qweqwe', 'qweqwe'),
('k.poumai@upv.esqweq', 'qweqwe', 'qweqwe'),
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('dapasa@har.upv.es', 'QWEQWE', 'QEWQWE'),
('k.poumai@upv.es', 'ASDASD', 'ASDASD'),
('minimv06@gmail.com', 'qasdasd', 'asdasd'),
('minimv06@gmail.com', 'asdasd', 'assdasd'),
('o.breshe@upv.es', 'asdasd', 'adsasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'dasda', 'asddasd'),
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('o.breshe@upv.es', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'adasda', 'sdasdasd'),
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'asdasdasd', 'asdasd'),
('asdjasdj@asjdajsdupv.es', 'asdasd', 'asdasd'),
('asdjasdj@asjdajsdupv.es', 'asdasd', 'asdasd'),
('minimv06@gmail.com', 'hola', 'hola'),
('minimv06@gmail.com', 'hola', 'hola'),
('minimv06@gmail.com', 'hola', 'holaaaaaaaaaaaaaaaaa'),
('minimv06@gmail.com', 'adios', 'adios'),
('minimv06@gmail.com', 'a', 'a'),
('o.breshe@upv.es', 'sada', 'RWETEREWRWEF'),
('k.poumai@upv.es', 'gvhbj', 'hbj'),
('antonvalen@teleco.upv.es', 'mbjhjvhjvj', 'bfxgxdfgfg');

-- --------------------------------------------------------

--
-- Table structure for table `entregas`
--

CREATE TABLE `entregas` (
  `id_entrega` int NOT NULL,
  `id_tarea` int NOT NULL,
  `id_alumno` int NOT NULL,
  `archivo` varchar(254) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_entrega` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entregas`
--

INSERT INTO `entregas` (`id_entrega`, `id_tarea`, `id_alumno`, `archivo`, `fecha_entrega`) VALUES
(2, 4, 2, 'http://localhost/proyecto/adjuntos///adjuntos/landing page (17).png', '2025-05-29 22:39:51.000000'),
(3, 4, 2, 'http://localhost/proyecto/adjuntos///adjuntos/journey map alejandro.png', '2025-05-29 22:56:25.000000'),
(4, 8, 2, 'http://localhost/proyecto/adjuntos///adjuntos/historias de usuario (5).png', '2025-05-29 22:57:26.000000'),
(5, 6, 2, NULL, '2026-03-23 03:59:15.999733');

-- --------------------------------------------------------

--
-- Table structure for table `matricula`
--

CREATE TABLE `matricula` (
  `id_matricula` int NOT NULL,
  `id_usuarioproa` int NOT NULL,
  `id_asignatura` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matricula`
--

INSERT INTO `matricula` (`id_matricula`, `id_usuarioproa`, `id_asignatura`) VALUES
(18, 2, 2),
(19, 2, 3),
(20, 2, 4),
(21, 2, 11),
(22, 1, 2),
(23, 1, 4),
(24, 1, 11),
(26, 1, 3),
(27, 24, 3),
(28, 25, 11),
(29, 26, 11),
(30, 26, 5),
(31, 26, 11),
(32, 27, 10),
(33, 27, 1),
(34, 28, 4),
(35, 28, 3),
(36, 28, 8),
(37, 29, 1),
(39, 29, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int NOT NULL,
  `Titulo` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Instrucciones` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Descripcion` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_cierre` datetime(6) NOT NULL,
  `id_profesor` int DEFAULT NULL,
  `id_asignatura` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `Titulo`, `Instrucciones`, `Descripcion`, `fecha_cierre`, `id_profesor`, `id_asignatura`) VALUES
(3, 'wiiiiiiiiiiii', 'wiiiiiiiiiiiii', 'wiiiiiiiiiiii', '2025-05-31 00:00:00.000000', NULL, 4),
(4, 'asdasd', 'asdasd', 'adsasdoooooo', '2025-05-29 00:00:00.000000', NULL, 2),
(6, 'Tarea ejemplo', 'Nam id elit ut ligula lacinia dignissim. Aenean dapibus quis ligula at ullamcorper. Fusce aliquam volutpat mi, eget maximus massa consequat et. Aliquam quis neque tincidunt, vehicula enim volutpat, suscipit purus. Maecenas condimentum orci nunc, in accum', 'rew', '2025-05-30 00:00:00.000000', NULL, 2),
(7, 'uiiiiiiiia', 'etttt', 'attt', '2025-06-01 00:00:00.000000', NULL, 2),
(8, 'hola', 'heeeeey', 'hallo', '2025-05-23 00:00:00.000000', NULL, 2),
(9, 'holaaaaaaaaa', 'sdasdnasjhdskaj', 'dkasjdhskjdnkas', '2025-05-31 00:00:00.000000', NULL, 2),
(10, 'lorem ipsum', '1. aprobar la materia\r\n2. aprobar la carrera', 'lorem ipsum iun mundae quiritugre bds hdbhsdb dhsbjahd ajdsjhdba ajhdgshbd', '2026-09-10 00:00:00.000000', NULL, 1),
(11, 'tarea 3', 'estas son mas instrucciones', 'qwertyuioasdfghjkl;zxcvbnm,', '2025-03-27 00:00:00.000000', NULL, 1),
(12, 'IPv6', '1. compras un cable muy largo\r\n2. corres a los lados', 'conectar 2 ip entre extremos diferentes del universo', '2027-01-21 00:00:00.000000', NULL, 10),
(13, 'otra prueba', 'EEEEEEOOOO', 'eeeeooooo', '2025-05-31 00:00:00.000000', NULL, 2),
(15, 'hola', 'asdfghjk', 'asdfghjkl', '2025-05-22 00:00:00.000000', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_cliente` int NOT NULL,
  `nombre` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_cliente`, `nombre`, `email`, `password`) VALUES
(38, 'Daniel', 'dapasa@har.upv.es', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(41, 'nerva', 'minimv06@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(0, 'carlos', 'mmarvid1@upv.edu.es', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(0, 'sdxfcgvhbjnk', 'sdsf@dfsdfsd', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(0, 'm', 'm@m', '62c66a7a5dd70c3146618063c344e531e6d4b59e379808443ce962b3abd63c5a'),
(0, 'xcvb', 'sadasd@dsdsa', '594e519ae499312b29433b7dd8a97ff068defcba9755b6d5d00e84c524d67b06'),
(0, 'xcvb', 'smsndaddasd@dsdsa', 'f9c7af7ebcbf098b9f5f37361d1b168bb2e5b98d930ceef0f055377a8c94db61');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_proa`
--

CREATE TABLE `usuarios_proa` (
  `id_usuarioproa` int NOT NULL,
  `Rol` enum('Profesor','Alumno') COLLATE utf8mb4_general_ci NOT NULL,
  `Nombre` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Apellidos` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Correo` varchar(254) COLLATE utf8mb4_general_ci NOT NULL,
  `Contraseña` varchar(254) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios_proa`
--

INSERT INTO `usuarios_proa` (`id_usuarioproa`, `Rol`, `Nombre`, `Apellidos`, `Correo`, `Contraseña`) VALUES
(1, 'Profesor', '1', '1', '1@1', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'),
(2, 'Alumno', '2', '2', '2@2', 'd4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35'),
(24, 'Profesor', 'Kevan', 'Pounds Mainston', 'k.poumai@upv.es', 'f64fa63b2e00256c04262c7d08df6071b768719cd0ef86b38a8735a67472569d'),
(25, 'Profesor', 'Luelle', 'Pridmore Starsmeare', 'l.prista@upv.es', '3c6dcef0938cfaceeb3ad106f0fa6f282369719f6be74f003067cb02a49e684d'),
(26, 'Alumno', 'Lief', 'Simants Dredge', 'l.simdre@epsg.upv.es', '8dfc2f2f0b4ba9ed2bcc2c0d3eacac63a8a7afde2cbf04e00c1ac5c9b0be7c1a'),
(27, 'Alumno', 'Merline', 'Kirdsch Kampshell', 'm.kirkam@epsg.upv.es', '08536a0e845bc337e4eabe7f11cdc060db8762b72f6ea3759191e6acb4b0ac8d'),
(28, 'Alumno', 'Debora', 'Rawstorne', 'd.rawabc@epsg.upv.es', 'ccfa9b051d91b247edaf003a3252c61ddd76b272cba6b8aed343f8425eae684f'),
(29, 'Profesor', 'Eolande', 'Merriton Mizzi', 'e.mermiz@upv.es', '973b8ce9ecabbfc63328c93601bfed364e25036e5d1da3ae0f222adf4d54513b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indexes for table `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `id_tarea` (`id_tarea`),
  ADD KEY `id_alumnoentrega` (`id_alumno`);

--
-- Indexes for table `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`),
  ADD KEY `id_asignatura` (`id_asignatura`);

--
-- Indexes for table `usuarios_proa`
--
ALTER TABLE `usuarios_proa`
  ADD PRIMARY KEY (`id_usuarioproa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id_entrega` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usuarios_proa`
--
ALTER TABLE `usuarios_proa`
  MODIFY `id_usuarioproa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `id_alumnoentrega` FOREIGN KEY (`id_alumno`) REFERENCES `usuarios_proa` (`id_usuarioproa`),
  ADD CONSTRAINT `id_tarea` FOREIGN KEY (`id_tarea`) REFERENCES `tareas` (`id_tarea`);

--
-- Constraints for table `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
