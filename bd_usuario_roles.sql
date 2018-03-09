-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2018 a las 06:23:28
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_usuario_roles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_categoria`
--

CREATE TABLE `adm_categoria` (
  `idCategoria` int(11) NOT NULL,
  `idMenu` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `abreviacion` varchar(20) DEFAULT NULL,
  `ruta_enlace` varchar(100) DEFAULT NULL,
  `imagen` blob,
  `orden_categoria` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adm_categoria`
--

INSERT INTO `adm_categoria` (`idCategoria`, `idMenu`, `descripcion`, `abreviacion`, `ruta_enlace`, `imagen`, `orden_categoria`, `estado`) VALUES
(1, 1, 'Adm 1   ', 'ADM-1', '/administracion1', NULL, 1, 1),
(2, 1, 'Adm 2   ', 'ADM-2', '/administracion2', NULL, 2, 1),
(3, 1, 'Adm 3  ', 'ADM-3', '/administracion3', NULL, 3, 1),
(4, 2, 'Usr 1', 'USR-1', '/usuario1', '', 1, 0),
(5, 2, 'Usr 2', 'USR-2', '/usuario2', '', 2, 0),
(6, 2, 'Usr 3', 'USR-3', 'usuario2', NULL, 3, 0),
(7, 3, 'Rol 1', 'ROL-1', 'rol1', NULL, 1, 0),
(8, 3, 'Rol 2', 'ROL-2', 'rol2', NULL, 2, 0),
(9, 3, 'Rol 3', 'ROL-3', 'rol3', NULL, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_menu`
--

CREATE TABLE `adm_menu` (
  `idMenu` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `abreviacion` varchar(20) DEFAULT NULL,
  `ruta_enlace` varchar(50) DEFAULT NULL,
  `imagen` blob,
  `orden_menu` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `adm_menu`
--

INSERT INTO `adm_menu` (`idMenu`, `descripcion`, `abreviacion`, `ruta_enlace`, `imagen`, `orden_menu`, `estado`) VALUES
(1, 'Administracion', 'ADM', 'administracion', NULL, 1, 1),
(2, 'Usuarios', 'USR', 'usuarios', 0x3f, 2, 1),
(3, 'Rol', 'ROL', 'roles', 0x3f, 3, 1),
(4, 'Cliente', 'CLI', 'cliente', NULL, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_roles`
--

CREATE TABLE `adm_roles` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `abreviacion` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_rol_menu`
--

CREATE TABLE `adm_rol_menu` (
  `idRolMenu` int(11) NOT NULL,
  `idMenu` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_usuario`
--

CREATE TABLE `adm_usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(100) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `idUsuario_registro` int(11) DEFAULT NULL,
  `idUsuario_modificacion` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm_usuario_rol`
--

CREATE TABLE `adm_usuario_rol` (
  `idUsuario` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `fecha_expiracion` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `ci` varchar(15) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `paterno` varchar(100) DEFAULT NULL,
  `materno` varchar(100) DEFAULT NULL,
  `apellido_casado` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL COMMENT 'dfdf',
  `sexo` int(11) DEFAULT NULL COMMENT '1: Hombre\n2: Mujer',
  `edad` int(11) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT NULL,
  `usuario_registro` int(11) DEFAULT NULL,
  `usuario_modificacion` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL COMMENT '1: activo\n0: eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `ci`, `nombre`, `paterno`, `materno`, `apellido_casado`, `telefono`, `celular`, `direccion`, `sexo`, `edad`, `fecha_nacimiento`, `fecha_registro`, `fecha_modificacion`, `usuario_registro`, `usuario_modificacion`, `estado`) VALUES
(1, '6964641', 'Alvaro Gabriel', 'Duran', 'Loayza', NULL, '22280656', '70682025', 'Montes Pisagua', 1, 25, '0000-00-00', NULL, NULL, NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm_categoria`
--
ALTER TABLE `adm_categoria`
  ADD PRIMARY KEY (`idCategoria`,`idMenu`),
  ADD KEY `fk_Categoria_Menu1_idx` (`idMenu`);

--
-- Indices de la tabla `adm_menu`
--
ALTER TABLE `adm_menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `adm_roles`
--
ALTER TABLE `adm_roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `adm_rol_menu`
--
ALTER TABLE `adm_rol_menu`
  ADD PRIMARY KEY (`idRolMenu`,`idMenu`,`idRol`),
  ADD KEY `fk_Rol_menu_Adm_Roles1_idx` (`idRol`),
  ADD KEY `fk_Rol_menu_Menu1_idx` (`idMenu`);

--
-- Indices de la tabla `adm_usuario`
--
ALTER TABLE `adm_usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `adm_usuario_rol`
--
ALTER TABLE `adm_usuario_rol`
  ADD PRIMARY KEY (`idUsuario`,`idPersona`,`idRol`),
  ADD KEY `fk_usuario_rol_Usuario1_idx` (`idUsuario`),
  ADD KEY `fk_usuario_rol_Roles1_idx` (`idRol`),
  ADD KEY `fk_usuario_rol_Persona1_idx` (`idPersona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
