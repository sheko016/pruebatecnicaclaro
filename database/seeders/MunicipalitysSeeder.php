<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statement = "INSERT INTO `municipalitys` (`id`, `name`, `id_estate`) VALUES
        	(1, 'Alto Orinoco', 1),
			(2, 'Atabapo', 1),
			(3, 'Atures', 1),
			(4, 'Autana', 1),
			(5, 'Manapiare', 1),
			(6, 'Maroa', 1),
			(7, 'Río Negro', 1),
			(8, 'Anaco', 2),
			(9, 'Aragua', 2),
			(10, 'Manuel Ezequiel Bruzual', 2),
			(11, 'Diego Bautista Urbaneja', 2),
			(12, 'Fernando Peñalver', 2),
			(13, 'Francisco Del Carmen Carvajal', 2),
			(14, 'General Sir Arthur McGregor', 2),
			(15, 'Guanta', 2),
			(16, 'Independencia', 2),
			(17, 'José Gregorio Monagas', 2),
			(18, 'Juan Antonio Sotillo', 2),
			(19, 'Juan Manuel Cajigal', 2),
			(20, 'Libertad', 2),
			(21, 'Francisco de Miranda', 2),
			(22, 'Pedro María Freites', 2),
			(23, 'Píritu', 2),
			(24, 'San José de Guanipa', 2),
			(25, 'San Juan de Capistrano', 2),
			(26, 'Santa Ana', 2),
			(27, 'Simón Bolívar', 2),
			(28, 'Simón Rodríguez', 2),
			(29, 'Achaguas',  3),
			(30, 'Biruaca',  3),
			(31, 'Muñóz',  3),
			(32, 'Páez',  3),
			(33, 'Pedro Camejo',  3),
			(34, 'Rómulo Gallegos',  3),
			(35, 'San Fernando',  3),
			(36, 'Atanasio Girardot', 4),
			(37, 'Bolívar', 4),
			(38, 'Camatagua', 4),
			(39, 'Francisco Linares Alcántara', 4),
			(40, 'José Ángel Lamas', 4),
			(41, 'José Félix Ribas', 4),
			(42, 'José Rafael Revenga', 4),
			(43, 'Libertador', 4),
			(44, 'Mario Briceño Iragorry', 4),
			(45, 'Ocumare de la Costa de Oro', 4),
			(46, 'San Casimiro', 4),
			(47, 'San Sebastián', 4),
			(48, 'Santiago Mariño', 4),
			(49, 'Santos Michelena', 4),
			(50, 'Sucre', 4),
			(51, 'Tovar', 4),
			(52, 'Urdaneta', 4),
			(53, 'Zamora', 4),
			(54, 'Alberto Arvelo Torrealba', 5),
			(55, 'Andrés Eloy Blanco', 5),
			(56, 'Antonio José de Sucre', 5),
			(57, 'Arismendi', 5),
			(58, 'Barinas', 5),
			(59, 'Bolívar', 5),
			(60, 'Cruz Paredes', 5),
			(61, 'Ezequiel Zamora', 5),
			(62, 'Obispos', 5),
			(63, 'Pedraza', 5),
			(64, 'Rojas', 5),
			(65, 'Sosa', 5),
			(66, 'Caroní', 6),
			(67, 'Cedeño', 6),
			(68, 'El Callao', 6),
			(69, 'Gran Sabana', 6),
			(70, 'Heres', 6),
			(71, 'Piar', 6),
			(72, 'Angostura (Raúl Leoni)', 6),
			(73, 'Roscio', 6),
			(74, 'Sifontes', 6),
			(75, 'Sucre', 6),
			(76, 'Padre Pedro Chien', 6),
			(77, 'Bejuma',  7),
			(78, 'Carlos Arvelo',  7),
			(79, 'Diego Ibarra',  7),
			(80, 'Guacara',  7),
			(81, 'Juan José Mora',  7),
			(82, 'Libertador',  7),
			(83, 'Los Guayos',  7),
			(84, 'Miranda',  7),
			(85, 'Montalbán',  7),
			(86, 'Naguanagua',  7),
			(87, 'Puerto Cabello',  7),
			(88, 'San Diego',  7),
			(89, 'San Joaquín',  7),
			(90, 'Valencia',  7),
			(91, 'Anzoátegui', 8),
			(92, 'Tinaquillo', 8),
			(93, 'Girardot', 8),
			(94, 'Lima Blanco', 8),
			(95, 'Pao de San Juan Bautista', 8),
			(96, 'Ricaurte', 8),
			(97, 'Rómulo Gallegos', 8),
			(98, 'San Carlos', 8),
			(99, 'Tinaco', 8),
			(100, 'Antonio Díaz', 9),
			(101, 'Casacoima', 9),
			(102, 'Pedernales', 9),
			(103, 'Tucupita', 9),
			(104, 'Acosta', 10),
			(105, 'Bolívar', 10),
			(106, 'Buchivacoa', 10),
			(107, 'Cacique Manaure', 10),
			(108, 'Carirubana', 10),
			(109, 'Colina', 10),
			(110, 'Dabajuro', 10),
			(111, 'Democracia', 10),
			(112, 'Falcón', 10),
			(113, 'Federación', 10),
			(114, 'Jacura', 10),
			(115, 'José Laurencio Silva', 10),
			(116, 'Los Taques', 10),
			(117, 'Mauroa', 10),
			(118, 'Miranda', 10),
			(119, 'Monseñor Iturriza', 10),
			(120, 'Palmasola', 10),
			(121, 'Petit', 10),
			(122, 'Píritu', 10),
			(123, 'San Francisco', 10),
			(124, 'Sucre', 10),
			(125, 'Tocópero', 10),
			(126, 'Unión', 10),
			(127, 'Urumaco', 10),
			(128, 'Zamora', 10),
			(129, 'Camaguán', 11),
			(130, 'Chaguaramas', 11),
			(131, 'El Socorro', 11),
			(132, 'José Félix Ribas', 11),
			(133, 'José Tadeo Monagas', 11),
			(134, 'Juan Germán Roscio', 11),
			(135, 'Julián Mellado', 11),
			(136, 'Las Mercedes', 11),
			(137, 'Leonardo Infante', 11),
			(138, 'Pedro Zaraza', 11),
			(139, 'Ortíz', 11),
			(140, 'San Gerónimo de Guayabal', 11),
			(141, 'San José de Guaribe', 11),
			(142, 'Santa María de Ipire', 11),
			(143, 'Sebastián Francisco de Miranda', 11),
			(144, 'Andrés Eloy Blanco', 12),
			(145, 'Crespo', 12),
			(146, 'Iribarren', 12),
			(147, 'Jiménez', 12),
			(148, 'Morán', 12),
			(149, 'Palavecino', 12),
			(150, 'Simón Planas', 12),
			(151, 'Torres', 12),
			(152, 'Urdaneta', 12),
			(179, 'Alberto Adriani', 13),
			(180, 'Andrés Bello', 13),
			(181, 'Antonio Pinto Salinas', 13),
			(182, 'Aricagua', 13),
			(183, 'Arzobispo Chacón', 13),
			(184, 'Campo Elías', 13),
			(185, 'Caracciolo Parra Olmedo', 13),
			(186, 'Cardenal Quintero', 13),
			(187, 'Guaraque', 13),
			(188, 'Julio César Salas', 13),
			(189, 'Justo Briceño', 13),
			(190, 'Libertador', 13),
			(191, 'Miranda', 13),
			(192, 'Obispo Ramos de Lora', 13),
			(193, 'Padre Noguera', 13),
			(194, 'Pueblo Llano', 13),
			(195, 'Rangel', 13),
			(196, 'Rivas Dávila', 13),
			(197, 'Santos Marquina', 13),
			(198, 'Sucre', 13),
			(199, 'Tovar', 13),
			(200, 'Tulio Febres Cordero', 13),
			(201, 'Zea', 13),
			(223, 'Acevedo', 14),
			(224, 'Andrés Bello', 14),
			(225, 'Baruta', 14),
			(226, 'Brión', 14),
			(227, 'Buroz', 14),
			(228, 'Carrizal', 14),
			(229, 'Chacao', 14),
			(230, 'Cristóbal Rojas', 14),
			(231, 'El Hatillo', 14),
			(232, 'Guaicaipuro', 14),
			(233, 'Independencia', 14),
			(234, 'Lander', 14),
			(235, 'Los Salias', 14),
			(236, 'Páez', 14),
			(237, 'Paz Castillo', 14),
			(238, 'Pedro Gual', 14),
			(239, 'Plaza', 14),
			(240, 'Simón Bolívar', 14),
			(241, 'Sucre', 14),
			(242, 'Urdaneta', 14),
			(243, 'Zamora', 14),
			(258, 'Acosta', 15),
			(259, 'Aguasay', 15),
			(260, 'Bolívar', 15),
			(261, 'Caripe', 15),
			(262, 'Cedeño', 15),
			(263, 'Ezequiel Zamora', 15),
			(264, 'Libertador', 15),
			(265, 'Maturín', 15),
			(266, 'Piar', 15),
			(267, 'Punceres', 15),
			(268, 'Santa Bárbara', 15),
			(269, 'Sotillo', 15),
			(270, 'Uracoa', 15),
			(271, 'Antolín del Campo', 16),
			(272, 'Arismendi', 16),
			(273, 'García', 16),
			(274, 'Gómez', 16),
			(275, 'Maneiro', 16),
			(276, 'Marcano', 16),
			(277, 'Mariño', 16),
			(278, 'Península de Macanao', 16),
			(279, 'Tubores', 16),
			(280, 'Villalba', 16),
			(281, 'Díaz', 16),
			(282, 'Agua Blanca', 17),
			(283, 'Araure', 17),
			(284, 'Esteller', 17),
			(285, 'Guanare', 17),
			(286, 'Guanarito', 17),
			(287, 'Monseñor José Vicente de Unda', 17),
			(288, 'Ospino', 17),
			(289, 'Páez', 17),
			(290, 'Papelón', 17),
			(291, 'San Genaro de Boconoíto', 17),
			(292, 'San Rafael de Onoto', 17),
			(293, 'Santa Rosalía', 17),
			(294, 'Sucre', 17),
			(295, 'Turén', 17),
			(296, 'Andrés Eloy Blanco', 18),
			(297, 'Andrés Mata', 18),
			(298, 'Arismendi', 18),
			(299, 'Benítez', 18),
			(300, 'Bermúdez', 18),
			(301, 'Bolívar', 18),
			(302, 'Cajigal', 18),
			(303, 'Cruz Salmerón Acosta', 18),
			(304, 'Libertador', 18),
			(305, 'Mariño', 18),
			(306, 'Mejía', 18),
			(307, 'Montes', 18),
			(308, 'Ribero', 18),
			(309, 'Sucre', 18),
			(310, 'Valdéz', 18),
			(341, 'Andrés Bello', 19),
			(342, 'Antonio Rómulo Costa', 19),
			(343, 'Ayacucho', 19),
			(344, 'Bolívar', 19),
			(345, 'Cárdenas', 19),
			(346, 'Córdoba', 19),
			(347, 'Fernández Feo', 19),
			(348, 'Francisco de Miranda', 19),
			(349, 'García de Hevia', 19),
			(350, 'Guásimos', 19),
			(351, 'Independencia', 19),
			(352, 'Jáuregui', 19),
			(353, 'José María Vargas', 19),
			(354, 'Junín', 19),
			(355, 'Libertad', 19),
			(356, 'Libertador', 19),
			(357, 'Lobatera', 19),
			(358, 'Michelena', 19),
			(359, 'Panamericano', 19),
			(360, 'Pedro María Ureña', 19),
			(361, 'Rafael Urdaneta', 19),
			(362, 'Samuel Darío Maldonado', 19),
			(363, 'San Cristóbal', 19),
			(364, 'Seboruco', 19),
			(365, 'Simón Rodríguez', 19),
			(366, 'Sucre', 19),
			(367, 'Torbes', 19),
			(368, 'Uribante', 19),
			(369, 'San Judas Tadeo', 19),
			(370, 'Andrés Bello', 20),
			(371, 'Boconó', 20),
			(372, 'Bolívar', 20),
			(373, 'Candelaria', 20),
			(374, 'Carache', 20),
			(375, 'Escuque', 20),
			(376, 'José Felipe Márquez Cañizalez', 20),
			(377, 'Juan Vicente Campos Elías', 20),
			(378, 'La Ceiba', 20),
			(379, 'Miranda', 20),
			(380, 'Monte Carmelo', 20),
			(381, 'Motatán', 20),
			(382, 'Pampán', 20),
			(383, 'Pampanito', 20),
			(384, 'Rafael Rangel', 20),
			(385, 'San Rafael de Carvajal', 20),
			(386, 'Sucre', 20),
			(387, 'Trujillo', 20),
			(388, 'Urdaneta', 20),
			(389, 'Valera', 20),
			(390, 'Vargas', 21),
			(391, 'Arístides Bastidas', 22),
			(392, 'Bolívar', 22),
			(407, 'Bruzual', 22),
			(408, 'Cocorote', 22),
			(409, 'Independencia', 22),
			(410, 'José Antonio Páez', 22),
			(411, 'La Trinidad', 22),
			(412, 'Manuel Monge', 22),
			(413, 'Nirgua', 22),
			(414, 'Peña', 22),
			(415, 'San Felipe', 22),
			(416, 'Sucre', 22),
			(417, 'Urachiche', 22),
			(418, 'José Joaquín Veroes', 22),
			(441, 'Almirante Padilla', 23),
			(442, 'Baralt', 23),
			(443, 'Cabimas', 23),
			(444, 'Catatumbo', 23),
			(445, 'Colón', 23),
			(446, 'Francisco Javier Pulgar', 23),
			(447, 'Páez', 23),
			(448, 'Jesús Enrique Losada', 23),
			(449, 'Jesús María Semprún', 23),
			(450, 'La Cañada de Urdaneta', 23),
			(451, 'Lagunillas', 23),
			(452, 'Machiques de Perijá', 23),
			(453, 'Mara', 23),
			(454, 'Maracaibo', 23),
			(455, 'Miranda', 23),
			(456, 'Rosario de Perijá', 23),
			(457, 'San Francisco', 23),
			(458, 'Santa Rita', 23),
			(459, 'Simón Bolívar', 23),
			(460, 'Sucre', 23),
			(461, 'Valmore Rodríguez', 23),
			(462, 'Libertador', 24);
            ";
        DB::unprepared($statement);
    }
}
