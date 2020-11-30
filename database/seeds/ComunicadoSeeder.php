<?php

use App\Models\Comunicado;
use Illuminate\Database\Seeder;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Comunicado::class, 200)->create();
        Comunicado::create([
            'FECHA' => '2019-11-29 17:22:17',
            'TITULO' => 'IGLESIA COLONIAL',
            'slug' => 'iglesia-colonial',
            'DESCRIPCION' => 'inauguración  de la entrega de obra de iglesia colonial paria',
            'CONTENIDO' => '<p>La colonial iglesia de Paria es hermosa por su historia y contenido arquitect&oacute;nico, de ah&iacute; que el 7 de diciembre de 1967 fue declarada &ldquo;Monumento Nacional&rdquo; por Decreto Supremo N&ordm; 08171.<p>La historia del pueblo de Paria se remonta a los tempranos d&iacute;as de la conquista, pues su fundaci&oacute;n fue en el a&ntilde;o 1535 por el capit&aacute;n Juan de Saavedra quien formaba parte de la avanzada de expedici&oacute;n de Almagro en el descubrimiento de Chile.<p>Paria se encuentra situada a 130 leguas del Cuzco, este parte del territorio del Alto Per&uacute; en la &eacute;poca de la colonia formaba un sitio intermedio para poder aprovisionar los ej&eacute;rcitos de Chile.<p>Debido a la fundaci&oacute;n de Chuquisaca en 1538 y el hallazgo de las ricas vetas en el cerro de Potos&iacute;, hicieron perder a Paria su prioridad e importancia, como ciudad en la regi&oacute;n de Charcas.<p>En 1559, pasadas las guerras civiles, se fund&oacute; en Paria un convento de agustinos. La base para esto fue la donaci&oacute;n y concesi&oacute;n de un patronazgo por parte del encomendero del lugar, Lorenzo de Aldana, este fue uno de los soldados que m&aacute;s hab&iacute;a intervenido en las guerras de la d&eacute;cada anterior.<p>No est&aacute; muy claro si la cabeza del convento se coloc&oacute; en Paria ya que para algunos investigadores se&ntilde;alan que el convento comprend&iacute;a cuatro doctrinas: Paria, Challacollo, Toledo y Capinota.<p>De acuerdo a las disposiciones de Lorenzo de Aldana, los conventos deb&iacute;an pagar un impuesto grande, era tan alto que en determinado momento los religiosos tuvieron que abandonar las doctrinas, conservando el convento, esto aproximadamente en el a&ntilde;o 1584 hasta 1607 en ese a&ntilde;o, por deseo del Virrey Montes Claros las volvieron a tomar. No se sabe cuando dejaron los agustinos el convento de Paria, ni tampoco si la iglesia actual, que existe en el pueblo, corresponde a la fundaci&oacute;n Agustina.<p>Fuente:&nbsp;LA PATRIA',
            'ARCHIVO' => 'storage\/img\/comunicados\/JpLxAIb91ZlhcF0hP3a9fr0xq29Cw1yQYGGRJDlE.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Cultura',
            'idPERSONAL_DE_PLANTA' => '8',
        ]);


        Comunicado::create([
            'FECHA' => '2019-04-04 17:24:26',
            'TITULO' => 'ANATA ANDINO 2019',
            'slug' => 'anata-andino-2019',
            'DESCRIPCION' => 'PARTICIPACION DEL ANATA ANDINO EN LA GESTION 2019',
            'CONTENIDO' => '<p>La XXVII Anata Andino 2019 de Oruro se present&oacute; ayer en la Casa del Artista del Ministerio de Culturas y Turismo, donde el K&rsquo;umupinkillu del Ayllu Bombo, de la provincia Pantale&oacute;n Dalence y la Tarqueada del Municipio de Turco, le dieron realce.&nbsp;<p>El gobernador de Oruro, V&iacute;ctor Hugo V&aacute;squez, y el viceministro F&eacute;lix C&aacute;rdenas, estuvieron en el acto para la actividad que es esperada por propios y extra&ntilde;os por la participaci&oacute;n de varias comunidades y agrupaciones aut&oacute;ctonas y originarias. El Anata Andino 2019 ser&aacute; el jueves 28 de febrero en Oruro y &ldquo;no es cualquier tiempo&nbsp; el que estamos viviendo, es el tiempo de la Madre Tierra frente a la modernidad, por eso el Anata no es solamente danza y m&uacute;sica, son rituales y ceremonias que son parte de la cosmovisi&oacute;n andina y debemos entender ese mensaje profundo, donde vemos el tema de la dualidad, espiritualidad presentes&rdquo;, dijo el viceministro C&aacute;rdenas.<p>El Anata Andino es un v&iacute;nculo espiritual de agradecimiento a la Pachamama y es reconocido como &ldquo;Patrimonio viviente, natural, material y tangible de las Naciones Originarias&rdquo; por celebrarse de acuerdo a los usos y costumbres, con ritualidades y ceremonias religiosas de la cosmovisi&oacute;n andina.&nbsp;<p>&ldquo;Es una gran alegr&iacute;a que en el Anata Andino de Oruro no solo lo celebran las comunidades y provincias de este departamento, sino que ahora existe la presencia de La Paz, Potos&iacute;, Cochabamba, lo que ha significado un proceso de agradecimiento y promoci&oacute;n de nuestras costumbres&rdquo;, dijo el Gobernador de Oruro. Las caracter&iacute;sticas son la ejecuci&oacute;n de m&uacute;sica, la presentaci&oacute;n de danzas y ceremonias relacionadas con el tiempo de jallupacha (&eacute;poca de lluvia), donde hay tarqueadas, mose&ntilde;adas, pinquilladas, qonqotas y mucho m&aacute;s de las 16 provincias de Oruro, La Paz, Potos&iacute; y Cochabamba. Es organizada por la Federaci&oacute;n Sindical &Uacute;nica de Trabajadores Campesinos de Oruro (FSUTCO) y la Federaci&oacute;n Departamental de Mujeres Campesinas Ind&iacute;genas Originarias &ldquo;Bartolina Sisa&rdquo;, &ldquo;Invitamos a todos a que vengan a compartir, a entender las danzas y a que las repliquen en sus fiestas como ceremonias, porque se trata de un evento cultural de nuestros ancestros&rdquo;, dijo el Secretario Ejecutivo de la FSUTCO, Porfirio Yucra.',
            'ARCHIVO' => 'storage\/img\/comunicados\/K4zKICxXGLvhdlOobIKIIgoHmZ3gwtY3LwjWo0VQ.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Cultura',
            'idPERSONAL_DE_PLANTA' => '11',
        ]);
        Comunicado::create([
            'FECHA' => '2019-11-28 17:35:39',
            'TITULO' => 'feria de paria Soracachi  28/11/2019',
            'slug' => 'feria-de-paria-soracachi-28112019',
            'DESCRIPCION' => 'GRAN FERIA DE PARIA QUE SE REALIZA EN LA LOCALIDAD DE PARIA',
            'CONTENIDO' => '<p>Como todas las gestiones en el cant&oacute;n de Paria del Municipio de Soracachi, provincia Cercado del departamento de Oruro, este s&aacute;bado 28 de febrero se desarrollar&aacute; su Feria Anual Artesanal, donde se mostrar&aacute; toda la potencialidad de la regi&oacute;n.<p>El secretario general de la Central Paria, Clodomiro Cuestas, invit&oacute; a la ciudadan&iacute;a a visitar la feria artesanal y de platos t&iacute;picos en este lugar hist&oacute;rico, a realizarse este s&aacute;bado desde las 09:00 horas, celebrando 180 a&ntilde;os de la fecha de fundaci&oacute;n ocurrida el 23 de Enero de 1535.<p>Los responsables de esta actividad, preparan esta zona tur&iacute;stica para recibir a los hu&eacute;spedes temporales y mostrar un poco de sus potencialidades como son la pesca y el turismo.<p>&ldquo;Estamos recobrando nuestras culturas, nuestros usos y costumbres que ten&iacute;amos ancestralmente, es por esa raz&oacute;n que este s&aacute;bado 28 de febrero estamos realizando otra feria m&aacute;s, que siempre se realiza a&ntilde;o tras a&ntilde;o en la poblaci&oacute;n de Paria. Donde se apreciar&aacute; la producci&oacute;n de hortalizas, como zanahoria, cebolla, locoto, tomate, acelga, lechuga, entre otras&rdquo;, enfatiz&oacute; Cuestas.<p>Paria es considerada como un hito tangible en la historia, puesto que fue el centro de atenci&oacute;n cuando el Presidente de Bolivia, Isidoro Belzu, decidi&oacute; cambiar los colores de la Bandera Nacional por tercera vez, de amarillo, rojo y verde a, rojo, amarillo y verde.<p>Otros de los atractivos de la regi&oacute;n es el Templo Colonial, que despu&eacute;s de varias gestiones, por fin ser&aacute; restaurado, explic&oacute; la presidenta del Centro Damas Voluntarias Virgen de Asunta de Paria, Lila Graciela Ramallo.<p>&ldquo;Por fin se va a restaurar, porque muchos a&ntilde;os se ha hecho este tr&aacute;mite, pero el 13 o 15 de marzo, por fin se pondr&aacute; la piedra fundamental, porque se ha adjudicado una empresa para devolver el esplendor a nuestro templo&rdquo;, enfatiz&oacute;.<p>Una vez concluida la restauraci&oacute;n, se iniciar&aacute; una agresiva campa&ntilde;a de promoci&oacute;n de la arquitectura patrimonial e hist&oacute;rica que representa la Iglesia de Paria.<p>Fuente:&nbsp;LA PATRIA',
            'ARCHIVO' => 'storage\/img\/comunicados\/EDVm1skiSOjMENMALHWyQem8C00nNy0lZHNhJxCz.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Cultura',
            'idPERSONAL_DE_PLANTA' => '11',
        ]);
        Comunicado::create([
            'FECHA' => '2020-03-29 17:59:00',
            'TITULO' => 'ANATA ANDINO del Gobierno 2020',
            'slug' => 'anata-andino-del-govierno-2020',
            'DESCRIPCION' => 'ANATA ANDINO 2020',
            'CONTENIDO' => '<p>&nbsp;<p><strong>Como todas las gestiones en el cant&oacute;n de Paria del Municipio de Soracachi, provincia Cercado del departamento de Oruro, este s&aacute;bado 28 de febrero se desarrollar&aacute; su Feria Anual Artesanal, donde se mostrar&aacute; toda la potencialidad de la regi&oacute;n.</strong><ul><li>El secretario general de la Central Paria, Clodomiro Cuestas, invit&oacute; a la ciudadan&iacute;a a visitar la feria artesanal y de platos t&iacute;picos en este lugar hist&oacute;rico, a realizarse este s&aacute;bado desde las 09:00 horas, celebrando 180 a&ntilde;os de la fecha de fundaci&oacute;n ocurrida el 23 de Enero de 1535.<li>Los responsables de esta actividad, preparan esta zona tur&iacute;stica para recibir a los hu&eacute;spedes temporales y mostrar un poco de sus potencialidades como son la pesca y el turismo.<li>&ldquo;Estamos recobrando nuestras culturas, nuestros usos y costumbres que ten&iacute;amos ancestralmente, es por esa raz&oacute;n que este s&aacute;bado 28 de febrero estamos realizando otra feria m&aacute;s, que siempre se realiza a&ntilde;o tras a&ntilde;o en la poblaci&oacute;n de Paria. Donde se apreciar&aacute; la producci&oacute;n de hortalizas, como zanahoria, cebolla, locoto, tomate, acelga, lechuga, entre otras&rdquo;, enfatiz&oacute; Cuestas.<p>Paria es considerada como un hito tangible en la historia, puesto que fue el centro de atenci&oacute;n cuando el Presidente de Bolivia, Isidoro Belzu, decidi&oacute; cambiar los colores de la Bandera Nacional por tercera vez, de amarillo, rojo y verde a, rojo, amarillo y verde.<p>Otros de los atractivos de la regi&oacute;n es el Templo Colonial, que despu&eacute;s de varias gestiones, por fin ser&aacute; restaurado, explic&oacute; la presidenta del Centro Damas Voluntarias Virgen de Asunta de Paria, Lila Graciela Ramallo.<p>&ldquo;Por fin se va a restaurar, porque muchos a&ntilde;os se ha hecho este tr&aacute;mite, pero el 13 o 15 de marzo, por fin se pondr&aacute; la piedra fundamental, porque se ha adjudicado una empresa para devolver el esplendor a nuestro templo&rdquo;, enfatiz&oacute;.<p>Una vez concluida la restauraci&oacute;n, se iniciar&aacute; una agresiva campa&ntilde;a de promoci&oacute;n de la arquitectura patrimonial e hist&oacute;rica que representa la Iglesia de Paria.<p>Fuente:&nbsp;LA PATRIA',
            'ARCHIVO' => 'storage\/img\/comunicados\/m4IwXjNXvMPBD6nQGtA69AxApo7ACrH7d4gOPJqa.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Cultura',
            'idPERSONAL_DE_PLANTA' => '8',
        ]);
        Comunicado::create([
            'FECHA' => '2020-09-19 18:03:43',
            'TITULO' => 'Producción de leche',
            'slug' => 'produccion-de-leche',
            'DESCRIPCION' => 'PRODUCIÓN DE LECHE EN EL GAMS',
            'CONTENIDO' => '<p>Alrededor de 150 millones de hogares en todo el mundo se dedican a la producci&oacute;n de leche. En la mayor&iacute;a de los pa&iacute;ses en desarrollo, la leche es producida por peque&ntilde;os agricultores y la producci&oacute;n lechera contribuye a los medios de vida, la seguridad alimentaria y la nutrici&oacute;n de los hogares. La leche produce ganancias relativamente r&aacute;pidas para los peque&ntilde;os productores y es una fuente importante de ingresos en efectivo.<p>En los &uacute;ltimos decenios, los pa&iacute;ses en desarrollo han aumentado su participaci&oacute;n en la producci&oacute;n lechera mundial. Este crecimiento se debe principalmente al aumento del n&uacute;mero de animales destinados a la producci&oacute;n, y no al de la productividad por cabeza. En muchos pa&iacute;ses en desarrollo, la mala calidad de los recursos forrajeros, las enfermedades, el acceso limitado a mercados y servicios (p. ej., sanidad animal, cr&eacute;dito y capacitaci&oacute;n) y el reducido potencial gen&eacute;tico de los animales lecheros para la producci&oacute;n l&aacute;ctea limitan la productividad lechera. A diferencia de los pa&iacute;ses desarrollados, muchos pa&iacute;ses en desarrollo tienen climas c&aacute;lidos o h&uacute;medos que son desfavorables para la actividad lechera.<p>Algunos pa&iacute;ses del mundo en desarrollo tienen una larga tradici&oacute;n de producci&oacute;n lechera, y la leche o sus productos desempe&ntilde;an un papel importante en la dieta. Otros pa&iacute;ses solo han mostrado en los &uacute;ltimos a&ntilde;os un aumento significativo de la producci&oacute;n lechera. La mayor&iacute;a de los pa&iacute;ses del primer grupo est&aacute;n situados en el Mediterr&aacute;neo o el Cercano Oriente, el subcontinente indio, las regiones de sabana de &Aacute;frica occidental, las tierras altas de &Aacute;frica oriental y partes de Am&eacute;rica Latina y Central. Los pa&iacute;ses sin una larga tradici&oacute;n de producci&oacute;n lechera se encuentran en Asia sudoriental (incluida China) y las regiones tropicales con altas temperaturas y\/o humedad ambiental.<p>&iquest;Sab&iacute;a que?<ul><li>En los tres &uacute;ltimos decenios, la producci&oacute;n lechera mundial ha aumentado en m&aacute;s del 59 por ciento, pasando de 530 millones de toneladas en 1988 a&nbsp;843 millones de toneladas en 2018.<li>La India es el mayor productor mundial de leche, con el&nbsp;22 por ciento de la producci&oacute;n total, seguido por los Estados Unidos de Am&eacute;rica, China, Pakist&aacute;n y Brasil.<li>Desde el decenio de 1970, el aumento de la producci&oacute;n lechera se registra en su mayor parte en Asia meridional, que es el principal impulsor del crecimiento de la producci&oacute;n lechera en el mundo en desarrollo.<li>La producci&oacute;n lechera en &Aacute;frica crece m&aacute;s lentamente que en otras regiones en desarrollo debido a la pobreza y, en algunos pa&iacute;ses, a las condiciones clim&aacute;ticas adversas.<li>Los pa&iacute;ses con los mayores excedentes de leche son Nueva Zelanda, los Estados Unidos de Am&eacute;rica, Alemania, Francia, Australia y Irlanda.<li>Los pa&iacute;ses con los mayores d&eacute;ficits de leche son China, Italia, la Federaci&oacute;n de Rusia, M&eacute;xico, Argelia y Indonesia.',
            'ARCHIVO' => 'storage\/img\/comunicados\/TmSwykRSQtk5090tlblqhFVts6h7UQ9OmFBbFLsQ.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Cultura',
            'idPERSONAL_DE_PLANTA' => '11',
        ]);
        Comunicado::create([
            'FECHA' => '2020-11-29 18:30:47',
            'TITULO' => 'COMPRA DE MAQUINARIA',
            'slug' => 'compra-de-maquinaria',
            'DESCRIPCION' => 'ENTREGA DE MAQUINARIA DEL MUNICIPIO',
            'CONTENIDO' => '<p><strong>Santa Cruz, 07 de octubre de 2020.-</strong>&nbsp;La Presidenta Jeanine &Aacute;&ntilde;ez entreg&oacute; esta tarde maquinaria pesada en el municipio de La Guardia, Santa Cruz, gracias a las gestiones de su alcalde, a trav&eacute;s del FNDR.<p>&ldquo;Estamos aqu&iacute; para ayudar a La Guardia, felicito al alcalde por las gestiones que hace y por querer mejorar la calidad de vida de todos. Me siento satisfecha de poder contribuir con esta maquinaria. El pedido de ustedes es continuar con los desembolsos para los proyectos que se han truncado con esta pandemia&rdquo;, dijo &Aacute;&ntilde;ez.<p>La Jefa de Estado remarc&oacute; que, tras haber pasado tantos momentos dif&iacute;ciles y de angustia, es necesario reactivar la econom&iacute;a, &ldquo;y trabajando as&iacute;, mejorando las calles, estamos generando empleo de manera directa e indirecta&rdquo;, agreg&oacute;.<p>&ldquo;Vamos hacer las gestiones ante el Ministerio de Econom&iacute;a para que el alcalde pueda concluir esas obras que aqu&iacute; en la Guardia est&aacute;n',
            'ARCHIVO' => 'storage\/img\/comunicados\/Dpgsfz6SLosUUKDxL9RYO16fiaMv5SLT3a7Rh3c1.jpeg',
            'ESTADO' => 'PUBLICADO',
            'CATEGORIA' => 'Obras',
            'idPERSONAL_DE_PLANTA' => '11',
        ]);
    }
}
