CREATE DATABASE mx8live_cozy;
USE mx8live_cozy;

CREATE TABLE `proyecto` (
  `id` int(255) NOT NULL,
  `nombre` char(100) CHARACTER SET utf8 NOT NULL,
  `foto` char(255) CHARACTER SET utf8 NOT NULL,
  `descc` char(255) CHARACTER SET utf8 NOT NULL,
  `fechInicio` char(20) CHARACTER SET utf8 NOT NULL,
  `fechFin` char(20) CHARACTER SET utf8 NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `login_attemp` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `login_attemp` (`user_id`, `time`) VALUES
(0, '1496645004'),
(0, '1496645080'),
(0, '1496679641'),
(0, '1496679679'),
(1, '1496707378'),
(0, '1496878525'),
(1, '1497305499'),
(0, '1497312537'),
(2, '1497320628'),
(0, '1497370048'),
(0, '1497393327'),
(1, '1498501318'),
(1, '1498501375'),
(1, '1498501729'),
(0, '1501443238'),
(0, '1501460308'),
(0, '1514700971');

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre` char(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `ced` int(10) NOT NULL,
  `foto` char(255) NOT NULL,
  `tel` int(10) NOT NULL,
  `genero` char(6) NOT NULL,
  `desc` varchar(535) NOT NULL,
  `rol` tinyint(1) NOT NULL,
  `pass` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`id`, `email`, `nombre`, `edad`, `ced`, `foto`, `tel`, `genero`, `desc`, `rol`, `pass`, `salt`, `fecha`) VALUES
(0, 'contacto@mx8live.com', 't3n3669d3r0', 30, 1234567890, 'http://localhost/cozycarrige/crpast/image/icon/iso.png', 1234567890, 'otro', '', 3, 'f4b313d9f36ecaf5e1143ecba35ad6c359477325c7e7c517bde96f7c8d87ff0fddf6197d9e33dbd6b4af87bae59515f34ce9a85e7e833caa949a2cf99ca190a7', '9741cc081816598971f24272ffa4b9e8eecc36950843a7e344bde40bb79605581196df63bbd50479108b5b3f00933bc062b845592d2c605eae32c8df6f832757', '2017-06-05 11:22:27'),
(1, 'persona@pers.com', 'Persona', 40, 123456789, 'http://localhost/cozycarrige/crpast/image/foto/jan.jpg', 123456789, 'hombre', '', 2, 'fc2cf6d4b6a0e48b9eca3dbcd3abb85706b62f202d3a3c8045471b7166784913544218a341967a34e73159e90544fdb54634939f0f576a15a86d99002ba49cf7', '77680e2d3d2058608ea47b281b91304842452de119f2ecf5c72b6808f887034b048669c703c19c0e109e8f6857ef6b709c99942b2d60f9756af38d1bcb279020', '2017-06-12 13:24:37'),
(2, 'conductor@con.com', 'Conductor 1', 20, 12345678, 'http://localhost/cozycarrige/crpast/image/foto/marc.jpg', 12345678, 'mujer', '', 1, 'bba55045c9b04571de20ea128c12a390b561ac285e6a54520790cf74e0d51f41852c0f1c557ad1b3a140d1d0efd0c291336387ba6659687255b94701f8dfc86d', '015821565e6bb8992e3994d817dbf159fa8df1aa96eface9ad17a296969f83b37667857c6fa61ee5ebde6946f55747cc168b3e7d8710ce4ae8c4c39d226e39e5', '2017-06-05 13:57:45');

ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ced` (`ced`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `foto` (`foto`),
  ADD KEY `edad` (`edad`);

ALTER TABLE `proyecto`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;