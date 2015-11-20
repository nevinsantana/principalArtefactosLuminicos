<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catálogo de productos</title>
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Pixel Fabric clothes icons -->
	<link rel="stylesheet" type="text/css" href="fonts/pixelfabric-clothes/style.css" />
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	 <!-- Flickity gallery styles -->
	<link rel="stylesheet" type="text/css" href="css/flickity.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<!-- Bottom bar with filter and cart info -->
	<div class="bar">
		<div class="filter">
			<span class="filter__label">Iluminación: </span>
			<button class="action filter__item filter__item--selected" data-filter="*">General</button>
			<button class="action filter__item" data-filter=".jackets"><i class="icon icon--jacket"></i><span class="action__text">Industrial</span></button>
			<button class="action filter__item" data-filter=".shirts"><i class="icon icon--shirt"></i><span class="action__text">Fluorescente</span></button>
			<button class="action filter__item" data-filter=".dresses"><i class="icon icon--dress"></i><span class="action__text">Exterior</span></button>
			<button class="action filter__item" data-filter=".trousers"><i class="icon icon--trousers"></i><span class="action__text">De Emergencia</span></button>
			<button class="action filter__item" data-filter=".shoes"><i class="icon icon--shoe"></i><span class="action__text">Interior</span></button>
		<button class="action filter__item" data-filter=".led"><i class="icon icon--led"></i><span class="action__text">Con LEDS</span></button>
      <button class="action filter__item" data-filter=".alto"><i class="icon icon--alto"></i><span class="action__text">Alto Voltaje</span></button>
			<a href="http://www.artefactosluminicos.com.mx/" class="filter__label">Regresar </a>
		</div>
		<button class="cart">

		</button>
	</div>
	<!-- Main view -->
	<div class="view">

		<!-- Grid -->
		<section class="grid grid--loading">
			<!-- Loader -->
			<img class="grid__loader" src="images/grid.svg" width="60" alt="Loader image" />
			<!-- Grid sizer for a fluid Isotope (Masonry) layout -->
			<div class="grid__sizer"></div>
			<!-- Grid items -->

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2AV.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/2AV.PDF" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">2AV</span>
					<a class="meta__price" href="#modal2">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal2" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2AV</h2>
					<img src="../images/Fluorescente/2AV.jpg" />
					<P>Un producto excepcional iluminación general que se desempeña bien en grandes espacios con techos </br>
						altos. Especialmente indicado para las zonas de oficinas abiertas, espacios públicos interiores,</br>
						bibliotecas y áreas de espera del aeropuerto. La combinación óptima de la luz reflejada de dirección</br>
						y difusa se combinan para la iluminación equilibrada entre la tarea y las paredes próximas, el </br>
						confort visual mejorada y sombras reducido al mínimo. Disponible en 2x2 y 2x4, distribuciones</br>
						 simétricas para los usos generales del área de iluminación.</br></p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/02454.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/02454.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/02454.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2010.pdf" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">02454</span>
					<a class="meta__price" href="#modal3">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal3" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>02454</h2>
					<img src="../images/Interior/02454.jpg" />
					<P>Especial para tiendas minoristas, oficinas, escuelas, Lobbies y Restaurantes. El sistema de iluminación </br>
						 de 02454 Holophane constituye el elemento de diseño de la iluminación ideal para aplicaciones que </br>
						 requieren una nave industrial. Desde 1937 el 02454 ha sido el mejor en bajo brillo, con la iluminación</br>
						eficiente y uso de la energía. La línea de productos 02454 ofrece dos cubiertas y tres opciones de color </br>
						para contribuir con el estilo y la función de cualquier entorno de iluminación. La cubierta de cobre opcional</br>
						 pone de manifiesto la belleza del metal clásico de añadir elegancia al diseño retro-industrial. La familia</br>
						  de 02454 está disponible en  fluorescentes compactas muy popular, incandescente, aditivos metalicos y pulso </br>
							para la flexibilidad máxima del diseño.</p>
				</div>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/COLONIAL MEXICANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/COLONIAL MEXICANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/COLONIAL MEXICANO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2091.pdf" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">COLONIAL MEXICANO</span>
					<a class="meta__price" href="#modal4">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal4" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Colonial Mexicano</h2>
					<img src="../images/Exterior/COLONIAL MEXICANO.jpg" />
					<P>deal para vialidades, estacionamientos, jardines, parques, áreas recreativas. Luminario exterior decorativo,</br>
						 de alto rendimiento. Cápsula en fundición de aluminio bajo en cobre. Fabricada con un tratamiento previo para</br>
						  una mayor resistencia a la corrosión. Balastro electromagnético autorregulado con un alto factor de potencia.</br>
							 Refractor prismático de cristal Endural de bajo brillo con curva de distribución III. Fácil instalación y mantenimient</p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2GT8.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/GT8.pdf" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">2GT8</span>
					<a class="meta__price" href="#modal5">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal5" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2GT8</h2>
					<img src="../images/Fluorescente/2GT8.jpg" />
					<P>El primer luminario con lente de acrílico para empotrar, diseñado exclusivamente para lamparas T8,</br>
						 balastros electrónicos T8 de bajo perfil y portalámparas compactas. De alta eficiencia, fácil y </br>
						 rápido mantenimiento, construcción robusta y calidad asegurada. Compatible con casi todos los tipos</br>
						  de plafón, ideal para cualquier instalación comercial.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ELM-ELM2.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/ELM6-12.pdf" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ELM-ELM2</span>
					<a class="meta__price" href="#modal6">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal6" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ELM-ELM2</h2>
					<img src="../images/EMERGENCIA/ELM-ELM2.jpg" />
					<P>Unidades de emergencia, con baterías de plomo-calcio libres de mantenimiento.</br>
						 Carcasa de policarbonato, resistente a impactos, corrosión y a la decoloración causada</br>
						  por los rayos UV.  Bajo consumo de energía gracias al uso de LED como fuente de luz.</p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2025.pdf" target="_blank">Ficha Técnica</a>
					<span class="meta__brand">BANTAM 2000 PRISMALUNE</span>
					<a class="meta__price" href="#modal7">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal7" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>BANTAM 2000 PRISMALUNE</h2>
					<img src="../images/INDUSTRIAL/BANTAM 2000 PRISMALUNE.jpg" />
					<P>Ideal para áreas de manufactura y ensamble, hangares, bodegas. Reflector de cristal prismático,</br>
						 abierto o con lente de cristal termotemplado. Cápsula de balastro en diseño de bajo perfil para</br>
						  uso en aplicaciones de espacio limitado y techos de baja altura. Fabricada con un tratamiento</br>
							 previo para mayor resistencia a la corrosión. Balastro autorregulado de alto factor de potencia</br>
							  con embobinados de cobre para dar la emisión lumínica completa. </p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/Illuminaire.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">CIS-ILUMINARE (GRANDE Y PEQUEÑO)</span>
					<a class="meta__price" href="#modal8">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal8" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>CIS-ILUMINARE (GRANDE Y PEQUEÑO)</h2>
					<img src="../images/INTERIOR/CIS-ILUMINARE (GRANDE Y PEQUEÑO).jpg" />
					<P>ideal para el comercios minoristas, aeropuertos, vestíbulos, escuelas. La línea Illuminaire</br>
						incluye cinco nuevos estilos atractivos: el huevo, Crest, Tri huevo-, tri-Cresta y el cuádruple.</br>
						Cada nueva forma (excepto la Quad) está disponible en un tamaño grande o compacto para dar cabida</br>
						a una gama de alturas de montaje. Todos los accesorios se ofrecen con una variedad de distribuciones</br>
						fotométricas (11 en la versión grande y cuatro en la versión compacta) para colocar de manera</br>
						eficiente la luz donde se necesita. Las luminarias también hasta el 92 por ciento de eficiencia,</br>
						que se traduce en una mayor uniformidad de iluminación con menos accesorios. reflectores de vidrio</br>
						borosilicato resistente / refractores garantizar un rendimiento confiable, a largo plazo. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/2PM3N.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PM3N.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">2PMN3</span>
					<a class="meta__price" href=#modal9>Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal9" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>2PMN3</h2>
					<img src="../images/Fluorescente/2PM3N.jpg" />
					<P>Luminario parabólico ideal para aplicaciones comerciales y en oficinas. Su diseño </br>
						facilita el desempeño optimo de las lamparas T8 y balastros electrónicos. Las rejillas</br>
						 forman una parábola exacta para obtener máxima eficiencia, excelente control óptico y </br>
						 confort visual. </p>
				</div>
			</div>


			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/illumibay.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/Illumibay.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">illumibay</span>
					<a class="meta__price" href="#modal10">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal10" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>illumibay</h2>
					<img src="../images/INTERIOR/illumibay.jpg" />
					<P>Para las tiendas de comestibles, librerias, Oficinas, Centros de Recreación, Escuelas.</br>
						 Un diseño agradable, cuya mitad superior está esculpida, hace que la mayor parte de la </br>
						 belleza inherente a nuestra vidrio. El versátil Illumibay es visualmente atractivo y cuenta</br>
						  con la revolucionaria avanzada ISD (Distribución Ideal sinérgica) óptica en supercristal.</br>
							 Está disponible en una variedad de fuentes de luz como lámparas fluorescentes compactas,</br>
							 metalicos cerámica. Holophane ha creado un nuevo estándar industrial para la iluminación </br>
							 de gran altura.</p>
				</div>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/DORCHESTER.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%20100.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">DORCHESTER</span>
					<a class="meta__price" href="#modal11">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal11" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>DORCHESTER</h2>
					<img src="../images/EXTERIOR/DORCHESTER.jpg" />
					<P>Especial para las calles, estacionamientos, escuelas, desarrollos comerciales, plazas, barrios</br>
						históricos, plazas de pueblos, zonas residenciales, parques, paseos, bulevares, caminos. Diseño basado</br>
						en las farolas las zonas urbanas de finales del siglo XIX. Este fue un momento en estilo victoriano y </br>
						la elegancia fueron comparados con el suave resplandor de las lámparas de gas. Hoy en día, esta luminaria</br>
						ofrece un estilo auténtico, con fuentes de luz moderna y componentes eléctricos. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ATLANTA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2081.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ATLANTA</span>
					<a class="meta__price" href="#modal12">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal12" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ATLANTA</h2>
					<img src="../images/Fluorescente/ATLANTA.jpg"/>
					<P>Ideal para estacionamientos cubiertos, pasillos, áreas de cargas, recepciones, áreas de producción</br>
						 o proceso. Luminario de estilo contemporáneo con controlente refractivo prismático. Cuerpo en lámina</br>
						  de aluminio rechazado. Fabricado con un tratamiento previo para una mayor resistencia a la corrosión.</br>
							 Balastro electrónico de encendido rápido, bajo consumo de energía y alto factor de potencia, con rango</br>
							  de operacion de 127 a 277V. Controlente de resina acrílica con reflector anodizado de alta reflectancia. Fácil instalación.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ind.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/IND.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ind</span>
					<a class="meta__price" href="#modal13">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal13" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ind</h2>
					<img src="../images/EMERGENCIA/ind.jpg"/>
					<P>Proporciona un mínimo de 90 minutos de la iluminación de la potencia nominal en caso de pérdida</br>
						 de alimentación de CA. Único, de diseño innovador para una gran variedad de luz y usos industriales</br>
						  pesados y ambientes comerciales. Superior rendimiento de la lámpara en mayores alturas de montaje.</br>
							 Perfecto para el postes y columnas de montaje. Carcasa robusta, 0.140 "de espesor, moldeada por</br>
							 inyección termoplástica. Orientación vertical diseñado especialmente para el poste o columna de </br>
							 montaje, También es adecuado para muros, montaje I-Beam y montaje pendiente con el equipo de accesorios,</br>
							  disponible en modelos seleccionados.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMATITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMATITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMATITE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2025.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">BANTAM 2000 PRISMATITE</span>
					<a class="meta__price" href="#modal14">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal14" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>BANTAM 2000 PRISMATITE</h2>
					<img src="../images/INDUSTRIAL/BANTAM 2000 PRISMATITE.jpg"/>
					<P>Ideal para túneles, andenes, plataformas de carga, estacionamientos cubiertos, áreas de</br>
						 almacenaje y naves industriales. Luminario a prueba de polvo y humedad. Cápsula en fundición</br>
						  de aluminio fabricada con un tratamiento previo para una mayor resistencia a la corrosión.</br>
							 Balastro electromagnético autorregulado con un alto factor de potencia. Conjunto óptico de </br>
							 cristal de borosilicato prismático Endural resistente al choque térmico. Dos curvas de distribución:</br>
							  simétrica y asimétrica.</p>
				</div>
			</div>



			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/LOBAY.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2050.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LOBAY</span>
					<a class="meta__price" href="#modal15">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal15" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LOBAY</h2>
					<img src="../images/INTERIOR/LOBAY.png"/>
					<P>Ideal para supermercados, almacenes, bodegas, fábricas, auditorios. Cuerpo fabricado en</br>
						 lámina de aluminio rechazado con acabado anodizado. Balastro electromagnético autorregulado</br>
						  o electrónico de bajo consumo de energía. Cuatro refractores de cristal con la opción de cubierta</br>
							 de aluminio rechazado para evitar la aportación de luz hacia arriba de los 180°. Cableado por la</br>
							  parte superior del luminario, cuenta con entrata de 1/2" NPT para colgar el tubo conduit.</p>
				</div>
			</div>



			<div class="grid__item grid__item--size-a dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRAN VILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2092.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">GRAN VILLE</span>
					<a class="meta__price" href="#modal16">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal16" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GRAN VILLE</h2>
					<img src="../images/EXTERIOR/GRAN VILLE.jpg"/>
					<P>Ideal para jardines, camellones, muelles, estacionamientos, calles residenciales. </br>
						Luminario exterior decorativo, de alto rendimiento. Cápsula en fundición de aluminio bajo en cobre.</br>
						 Fabricada con un tratamiento previo para mayor resistencia a la corrosión. Balastro electromagnético</br>
						  autorregulado con alto factor de potencia. Refractor y reflector prismáticos de cristal Endural de </br>
							bajo brillo y alta reflectancia. Fácil instalación y mantenimiento.</p>
				</div>
			</div>



			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LQM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/LQM.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LQM</span>
					<a class="meta__price" href="#modal17">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal17" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LQM</h2>
					<img src="../images/EMERGENCIA/LQM.jpg"/>
					<P>Letrero de salida, con baterías de níquel-cadmio para una operación de 90 minutos en ausencia de  </br>
						corriente electrifica. Carcasa de policarbonato, resistente a la decoloración causada por rayos UV.</br>
						 Fácil y rápida instalación, sin necesidad de herramientas. Bajo consumo de energía gracias al uso de</br>
						  LED como fuente de luz.</p>
				</div>
			</div>

			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO COMPACTA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%205.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">PRISMGLO COMPACTA</span>
					<a class="meta__price" href="#modal18">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal18" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>PRISMGLO COMPACTA</h2>
					<img src="../images/INTERIOR/PRISMGLO COMPACTA.jpg"/>
					<P>para su uso en productos alimenticios, biblioteca, oficinas, centros comerciales, Recreación, Escuelas.</br>
						 La luminaria PrismGlo tiene muchas características distintivas. La forma única, múltiples distribuciones, </br>
						 bajo brillo y la luz de alto ángulo son sólo algunas características de diseño de la toma de una luminaria PrismGlo</br>
						  de una clase. Un fondo cónico límites de la visión directa de la luz, una característica especial diseñado </br>
							para instalaciones de almacenamiento y producción.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMPACK.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMPACK.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/BANTAM 2000 PRISMPACK.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.pcdingenieria.com.mx/pdfs/industrial/25.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">BANTAM 2000 PRISMPACK</span>
					<a class="meta__price" href="#modal19">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal19" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>BANTAM 2000 PRISMPACK</h2>
					<img src="../images/INDUSTRIAL/BANTAM 2000 PRISMPACK.jpg"/>
					<P>Ideal para áreas de manufactura y ensamble, hangares, bodegas. Reflector de cristal prismático cubierto,</br>
						 con o sin lente de cristal termotemplado. Cápsula de balastro en diseño de bajo perfil para uso en aplicaciones</br>
						 de espacio limitado y techos de baja altura. Fundición de aluminio, fabricada con un tratamiento previo</br>
						  para una mayor resistencia a la corrosión. Balastro autorregulado de alto factor de potencia, con embobinados</br>
							 de cobre. Luminario compacto que consiste de un reflector de cristal de borosilicato prismático con una cubierta de </br>
							 aluminio, diseñado para ofrecer un excelente cut-off en aplicaciones de bajas alturas de montaje. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/AV SM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/AVSM.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">AV SM</span>
					<a class="meta__price" href="#modal20">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal20" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>AV SM</h2>
					<img src="../images/Fluorescente/AV SM.jpg"/>
					<P>1''x2 '': Ideal para tareas de iluminación general o en habitaciones, pasillos estrechos y espacios pequeños.</br>
						  1''x4'': Adecuado para áreas generales o tareas específicas de iluminación  en construcciones nuevas y remodelación.</br>
 Especialmente indicado para salas de conferencias, áreas de recepción, las instituciones de salud, centros educativos y</br>
  oficinas. Excelente para  montaje suspendido, proporcionando distribución de la luz directa o semidirecta. Carcasa robusta</br>
	 de acero de 2, 4 y 8 unidades acoplables. </br>
Reflector terminado en pintura poliéster en polvo mate en blanco de alta reflectancia,  para la distribución de luz uniforme. </p>
				</div>
			</div>

			<div class="grid__item shoes">
				<div class="slider">
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INTERIOR/PRISMGLO ENHANCED.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%206.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">PRISMGLO ENHACED</span>
					<a class="meta__price" href="#modal21">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>


						<div id="modal21" class="modalmask">
							<div class="modalbox rotate">
								<a href="#close" title="Cerrar" class="close">X</a>
								<h2>PRISMGLO ENHANCED</h2>
								<img src="../images/INTERIOR/PRISMGLO ENHANCED.jpg"/>
								<P>para su uso en productos alimenticios, biblioteca, oficinas, centros comerciales, Recreación, Escuelas.</br>
									 La luminaria PrismGlo tiene muchas características distintivas. La forma única, múltiples distribuciones,</br>
									  bajo brillo y la luz de alto ángulo son sólo algunas características de diseño de la toma de una luminaria PrismGlo</br>
										de una clase. Un fondo cónico límites de la visión directa de la luz, una característica especial diseñado </br>
										para instalaciones de almacenamiento y producción. distribución asimétrica o simétrica junto con una dispersión</br>
										 del haz estrecho o ancho aumenta la versatilidad de esta luminaria que le permiten cumplir todas las necesidades</br>
										  de una instalación.</p>
							</div>
						</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/GRAND LEDGE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRAND LEDGE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRAND LEDGE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title"  href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2099.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">GRAND LEDGE</span>
					<a class="meta__price" href="#modal22">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal22" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GRAND LEDGE</h2>
					<img src="../images/EXTERIOR/GRAND LEDGE.jpg"/>
					<P>Ideal para jardines, camellones, muelles, estacionamientos, calles, avenidas. Luminario exterior decorativo,</br>
						de alto rendimiento. Cápsula en fundición de aluminio bajo cobre con un tratamiento previo para una mayor</br>
						resistencia a la corrosión. Balastro electromagnético autorregulado con alto factor de potencia. Refactor prismático </br>
						de cristal Endural de bajo brillo y alta refractancia, con reflector de cristal prismàtico para brndar luz arriba </br>
						de los 180º grados. Fácil instalación y mantenimiento.</p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/av smd.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/2AV.PDF" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">av smd</span>
					<a class="meta__price" href="#modal23">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal23" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>av smd</h2>
					<img src="../images/Fluorescente/av smd.jpg"/>
					<P>Difusor de montaje lateral, alternativa de empotrado directa / indirecta con un rendimiento similar al </br>
						simetric Avante ®. Especialmente indicado para salas de conferencias, pasillos y áreas de recepción donde se</br>
						requiere una iluminación suave y distintiva. La combinación óptima de la luz reflejada de dirección y difusa se</br>
						combinan para la iluminación equilibrada, confort visual mejorado y sombras reducidas al mínimo.</br>
            Reflector terminado en pintura poliéster en polvo mate en blanco de alta reflectancia,  para la distribución</br>
						 de luz uniforme, reflectores disponibles. Se puede instalar en línea continua.</p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LRP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/LRP.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LRP</span>
					<a class="meta__price" href="#modal24">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal24" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LRP</h2>
					<img src="../images/EMERGENCIA/LRP.jpg"/>
					<P>Conveniente para los usos arquitectónicos donde se requieren la estética y un rendimiento superior. Paneles</br>
						de acrílico moldeado por inyección, soldadura por ultrasonido. La profundidad de las letras moldeadas aumenta hacia</br>
						la parte inferior del panel para una iluminación más uniforme, indicadores de dirección. LED de larga duración</br>
						función del consumo de energía muy bajo y la vida nominal de hasta 25 años. En las salidas de emergencia utilice</br>
						la batería de níquel-cadmio libre de mantenimiento. Montaje empotrado en la pared o el techo.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/CRANELITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/CRANELITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/CRANELITE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2029.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">CRANELITE</span>
					<a class="meta__price" href="#modal25">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal25" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>CRANELITE</h2>
					<img src="../images/INDUSTRIAL/CRANELITE.jpg"/>
					<P>Ideal para aplicaciones de alta vibración; alta resistencia y balastro remoto Ideal para grúas viajeras,</br>
						equipos sometidos a vibración. Luminario para aplicaciones de alta vibración; alta resistencia y balastro remoto.</br>
						Cápsula fabricada en fundición de aluminio, con cuatro soportes que amortiguan el movimiento lateral y vertical</br>
						eliminando choques destructivos. Balastro autorregulado de alto factor de potencia con embobinados de cobre.</br>
						Conjunto óptico de cristal de borosilicato prismático Endural resistente al choque térmico. Opción de dos reflectores</br>
						de cristal cerrado, que reemplazan la iluminación oscurecida por el puente y el motor de la grúa. </p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/dm-dmw.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/ll/documents/psg/DMW.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">dm-dmw</span>
					<a class="meta__price" href="#modal26">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal26" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>dm-dmw</h2>
					<img src="../images/Fluorescente/dm-dmw.jpg"/>
					<P>Luminario industrial, compuesto de carcasa de fibra de vidrio reforzada en poliéster, resistencia </br>
						a impactos y decoloraciones causadas por rayos UV. Opciones de montaje sobrepuesto, con cadenas o varillas.</p>
				</div>
			</div>

			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/GRANVILLE PREMIER.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2095.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">GRANVILLE PREMIER</span>
					<a class="meta__price" href="#modal27">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal27" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GRANVILLE PREMIER</h2>
					<img src="../images/EXTERIOR/GRANVILLE PREMIER.jpg"/>
					<P>Especial para bulevares urbanos, calles de la ciudad, campus, zonas comerciales, Alquiler, Residencial,
						y Parques y Recreación El Granville Premier  está diseñado para afrontar los retos de proporcionar la escala
						 apropiada montado en las alturas del poste superior a doce metros. Muchas aplicaciones urbanas requieren una
						  altura más alta de montaje para mejorar la arquitectura del sitio. Este producto tiene la flexibilidad para
							satisfacer los requisitos de escala peatonal y urbano como la luminaria se puede colocar en un poste de tres
							 metros, así como un conjunto de dieciocho pies y proporciona un sistema de iluminación estética.</p>
				</div>
			</div>

			<div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ej-ny.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="#">Ficha Técnica</a>
					<span class="meta__brand">ej-ny</span>
					<a class="meta__price" href="#modal28">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal28" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ej-ny</h2>
					<img src="../images/Fluorescente/ej-ny.jpg"/>
					<P>Para las alturas crecientes hasta 16 ' el punto bajo requeridor para niveles medianos. Ideal para la tarea
						arancelaria ligera, pasillos y el almacenes.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/LV SERIES.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/LV%20Series.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LV SERIES</span>
					<a class="meta__price" href="#modal29">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal29" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LV SERIES</h2>
					<img src="../images/EMERGENCIA/LV SERIES.jpg"/>
					<P>Aplicaciones húmedas ubicación, tales como escuelas, zonas de seguridad / prisiones y garajes de aparcamiento.
						Construcción de aluminio durable fundido. Carcasa resistente .250 "a .525" de espesor. La cubierta de policarbonato
						 resistente a rayos UV es de .130 " de grueso para impedir quiebres o rupturas. Asegurado con cuatro de acero
						  inoxidable TORX ® T20 inviolable con el perno de centro. LED de larga duración función del consumo de energía
							 muy bajo y una vida nominal de hasta 25 años. Las salidas de emergencia contienen baterías de níquel-cadmio,
							 sin necesidad de mantenimiento y sistema fiable, sólido estado de carga.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/ENDURALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/ENDURALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/ENDURALUME.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2030.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ENDURALUME</span>
					<a class="meta__price" href=#modal30>Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal30" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ENDURALUME</h2>
					<img src="../images/INDUSTRIAL/ENDURALUME.jpg"/>
					<P>Ideal para bodegas, naves industriales, centros comerciales, gimnasios. Refractor de cristal prismático y
						reflector de aluminio pintado. Cápsula en fundición de aluminio, fabricada con un tratamiento previo para una
						 mayor resistencia a la corrosión. Balastro electromagnético autorregulado con alto factor de potencia y alta
						  emisión lumínica por watt consumido. Reflector de aluminio cerrado combinado con un refractor de acrílico o
							cristal de borosilicato. El diseño reflector-refractor brinda un balance simétrico. Distribución con balance
							 vertical y horizontal de iluminación, con excelente uniformidad y bajo brillo, para crear un ambiente visual
							  confortable. Fácil instalación. </p>
				</div>
			</div>

			<div class="grid__item grid__item--size-a dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/HOV 16- HOV 25.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/hov%2016%20-%20%20hov%2025.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">HOV 16- HOV 25</span>
					<a class="meta__price" href="#modal31">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal31" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>HOV 16- HOV 25</h2>
					<img src="../images/EXTERIOR/HOV 16- HOV 25.jpg"/>
					<P>Ideal para calles, avenidas, ejes viales, boulevares, periféricos, parques, exhibiciones exteriores.
						 Luminario tradicional para alumbrado público. Cápsula en fundición de aluminio, compuesta de dos partes
						  y fabricada con un tratamiento previo para mayor resistencia a la corrosión. Balastro autorregulado de
							 alto factor de potencia con embobinado de cobre; con opción de balastro de bajas pérdidas. Cristal de
							  borosilicato con reflector de aluminio de alta reflectancia que proporciona una curva de distribución
								 Nema tipo II y III. Se puede montar a brazo de poste por medio de abrazaderas y efectuar la conexión
								  abriendo la puerta del luminario.</p>
				</div>
			</div>

			<div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/POWER SENTRY.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PSSD.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">POWER SENTRY</span>
					<a class="meta__price" href="#modal32">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal32" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>POWER SENTRY</h2>
					<img src="../images/EMERGENCIA/POWER SENTRY.jpg"/>
					<P>Baterías de emergencia para lamparas fluorescentes. Operan las lamparas durante 90 minutos con una
						salida luminosa inicial que oscila entre el 10 y el 95% del valor nominal del flujo.</p>
				</div>
			</div>

      <div class="grid__item trousers">
				<div class="slider">
					<div class="slider__item"><img src="../images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EMERGENCIA/ps.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PS.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ps</span>
					<a class="meta__price" href="#modal33">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal33" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ps</h2>
					<img src="../images/EMERGENCIA/ps.jpg"/>
					<P>Fabricadas para funcionar en ambientes exteriores o interiores con un accesorio fluorescente con una
						 salida inicial de 10% a 95% de los lúmenes de la lámpara nominal, proporcionando una iluminación óptima
						  sin deslumbramientos por un mínimo de 90 minutos a interrupción de la alimentación normal.
							Soportes ocultos dentro de canaleta accesorio de aspecto limpio y la protección contra el vandalismo.
							 El reducido espacio de perfil encaja en el más apretado. </p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/KAD.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/KAD.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">KAD</span>
					<a class="meta__price" href="#modal34">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal34" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>KAD</h2>
					<img src="../images/EXTERIOR/KAD.jpg"/>
					<P>Luminario cut-off de lente plano para montaje en brazo. Carcasa de construcción robusta, fabricado en
						aluminio inyectado a presión; compuerta de vidrio termotemplado plano resistente a impactos, sellada
						 herméticamente con empaque de silicón y reflector hidroformado y segmentado de aluminio anodizado. </p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/LIGHT BAT G2.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="#">Ficha Técnica</a>
					<span class="meta__brand">LIGHT BAT G2</span>
					<a class="meta__price" href="#modal35">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal35" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LIGHT BAT G2</h2>
					<img src="../images/EXTERIOR/LIGHT BAT G2.jpg"/>
					<P>Luminario tipo campana autobalastrado para H.I.D. con sensor de presencia para controlar
						 el nivel y ahorrar energia </p>
				</div>
			</div>


			<div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/kacm.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/KACM.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">kacm</span>
					<a class="meta__price" href="#modal36">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal36" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>kacm</h2>
					<img src="../images/EXTERIOR/kacm.jpg"/>
					<P>Para estacionamientos, tiendas, hoteles y pasillos. Para el techo cubierto, montar en hormigón, acero o
						aluminio. No debe utilizarse en las viviendas. Carcasa robusta, de fundición,  marco de la puerta de fundición
						de aluminio, óptica prismática de vidrio templado, resistente al impacto,  lente de acrílico o policarbonato
						lente caída completamente sellado con. de una sola pieza de silicón tubular. Montaje en superficie utilizando
						 cuatro agujeros de montaje de 0,5 "y un  agujero del cable de entrada de 0.875"(piezas de montaje no incluidos).
						  acabado en polvo de poliéster resistente a la corrosión.</p>
				</div>
			</div>



      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/mayfair.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Mayfair.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">mayfair</span>
					<a class="meta__price" href="#modal37">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal37" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>mayfair</h2>
					<img src="../images/EXTERIOR/mayfair.jpg"/>
					<P>Ideal para vialidades, estacionamientos, jardines y andadores. Luminario con cristal termotemplado y cápsula
						 de aluminio. Cápsula fabricada en aluminio calibre 18, troquelada y soldada. Fabricada con un tratamiento
						  previo para mayor resistencia a la corrosión. Puerta fabricada en aluminio con bisabra, asegurada con dos
							 tornillos cautivos y pestillos para facilitar el acceso a la lámpara. Balastro autorregulado de alto factor
							  de potencia con embobinados de cobre. Reflector de aleación de aluminio hidroformado, químicamente
								abrillantado y anodizado para un mejor desempeño.</p>
				</div>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MEMPHIS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%20101.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">MEMPHIS</span>
					<a class="meta__price">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal37" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>mayfair</h2>
					<img src="../images/EXTERIOR/mayfair.jpg"/>
					<P>Ideal para vialidades, estacionamientos, jardines y andadores. Luminario con cristal termotemplado y cápsula
						 de aluminio. Cápsula fabricada en aluminio calibre 18, troquelada y soldada. Fabricada con un tratamiento
							previo para mayor resistencia a la corrosión. Puerta fabricada en aluminio con bisabra, asegurada con dos
							 tornillos cautivos y pestillos para facilitar el acceso a la lámpara. Balastro autorregulado de alto factor
								de potencia con embobinados de cobre. Reflector de aleación de aluminio hidroformado, químicamente
								abrillantado y anodizado para un mejor desempeño.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MINI GRANVILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2097.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">MINI GRANVILLE</span>
					<a class="meta__price" href="#modal38">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal38" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>MINI GRANVILLE</h2>
					<img src="../images/EXTERIOR/MINI GRANVILLE.jpg"/>
					<P>Ideal para calles, estacionamientos, Campus, desarrollos comerciales, plazas, barrios históricos, plazas
						 de pueblos, zonas residenciales, parques, calzadas bulevares y vías de acceso. La serie de productos Mini
						  Granville es una pequeña adición a escala de productos complementarios a la serie de productos de
							Granville. Esta serie consta de dos versiones del producto diseñado para atraer a diferentes públicos.
							  Además, este producto también se puede utilizar para la iluminación residencial. La luminaria está
								 disponible en una potencia máxima de 70 vatios de aditivos metálicos y sodio de alta presión, así
								  como la inducción de 55 vatios y vatios 42 fluorescentes compactas.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/MODULE 600.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2061.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">MODULE 600</span>
					<a class="meta__price" href="#modal39">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal39" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>MODULE 600</h2>
					<img src="../images/EXTERIOR/MODULE 600.jpg"/>
					<P>Ideal para estacionamientos, túneles, pasos a desnivel. Luminario para montaje en pared o en poste.
						Cápsula en fundición de aluminio, fabricada con un tratamiento previo para una mayor ressitencia a la
						corrosión. Balastro autorregulado de alto factor de potencia, con embobinados de cobre. Refractor de
						cristal de borosilicato prismático combinado con un reflector de aluminio especular para control
						 excepcional de deslumbramiento. Puede instalarse tanto en poste como en muro y provee un desempeño
						 superior en túneles y pasos a desnivel.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/NMD-MADEIRA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2098.pdf" Target="_blank">Ficha Ténica</a>
					<span class="meta__brand">NMD-MADEIRA</span>
					<a class="meta__price" href="#modal40">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal40" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NMD-MADEIRA</h2>
					<img src="../images/EXTERIOR/NMD-MADEIRA.jpg"/>
					<P>Ideal para calles, estacionamientos, Campus, desarrollos comerciales, plazas, barrios históricos,
						 plazas de pueblos, zonas residenciales, parques, calzadas, bulevares y vías de acceso. Esta luminaria
						  de estilo único es una reminiscencia de la vuelta del siglo 19, y las mezclas excepcionalmente bien
							 con la arquitectura tradicional española. La óptica de vidrio prismático junto con las costillas y
							  la chimenea decorativa réplica proporciona el equilibrio perfecto de la belleza y rendimiento
								excepcionales.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/OVUE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%20102.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">OVUE</span>
					<a class="meta__price" href="#modal41">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal41" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NMD-MADEIRA</h2>
					<img src="../images/EXTERIOR/OVUE.jpg"/>
					<P>Ideal para las plazas, los distritos urbanos, áreas comunes, Locales Comerciales, Arenas y complejos
						deportivos. MetroVue se posiciona como un producto de transición dirigido para aplicaciones de iluminación
						 y zona de paseo. Es una categoría que no es contemporáneo o de estilo tradicional, pero se acerca a un
						 aspecto moderno con probada atributos tradicionales. La serie MetroVue ofrecer un producto adecuado
						 funcionamiento familiar para las especificaciones o el usuario final. Tanto el Arco Urbano y luminarias
						  Urbano yugo se escalan para ser apto para alturas de 18 a 30 pies de montaje La versión del arco es ideal
							 para la tradicional calle del brazo de montaje en aplicaciones.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/parkpack.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2058.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">parkpack</span>
					<a class="meta__price" href="#modal42">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal42" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>parkpack</h2>
					<img src="../images/EXTERIOR/parkpack.jpg"/>
					<P>Ideal para estacionamientos techados, áreas interiores y exteriores. Luminario fabricado para soportar
						 ambientes severos. Cápsula en fundición de aluminio fabricada con un tratamiento previo para una mayor
						  resistencia a la corrosión. Balastro autorregulado de alto factor de potencia con embobinados de cobre.
							 Reflector de lámina pintado en blanco de alta reflectancia para optimizar su desempeño. Refractor
							 prismático fabricado en policarbonato estabilizado con rayos UV para proveer un control preciso de luz.
							  Disponible en una gran variedad de opciones de instalación para techo y poste.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/PECHINA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2056.pdf" Target="_blank">Ficha Ténica</a>
					<span class="meta__brand">PECHINA</span>
					<a class="meta__price" href="#modal43">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal43" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>PECHINA</h2>
					<img src="../images/EXTERIOR/PECHINA.jpg"/>
					<P>Ideal para la ilumnación de areas comerciales, municipios, edificios de oficinas, puertos, transporte
						publico, estadios y complejos deportivos, escuelas, coleggios y universidades. La Pechina también es
						ampliamente utilizada para muchas aplicaciones de carretera. El sistema óptico de la Pechina se encuentra
						 en un cuerpo de aleación de elegante y muy duradero de aluminio. que se adapta a una amplia gama de lamparas
						  de alta descarga, fabrocada en aluminio resistente a la corrossion acceso para mantenimiento sin herramientas
							y cierre positivo del conjunto de la puerta del dosel. Junta de silicon que garantiza un grado de protección IP66
							 de la unidad global</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/pgr.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PGR.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">pgr</span>
					<a class="meta__price" href="#modal44">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal44" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>pgr</h2>
					<img src="../images/EXTERIOR/pgr.jpg"/>
					<P>Para aplicaciones de estacionamiento. Cubierta superior de aluminio resistente, fundido a presión con
						 juntas de silicón de una sola pieza. El acabado estándar es de pintura blanca de poliéster en polvo de
						  resistente a la corrosión. Otros colores disponibles. Ensamble bajo de acrílico inyectado, moldeado
							de precisión, resistente a los rayos UV acrílico. Sujetado con Bisagras y se fija con cuatro tornillos
							 de acero inoxidable. disponible en Policarbonato.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/PRISMASPHERE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2094.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">PRISMASPHERE</span>
					<a class="meta__price" href="#modal45">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal45" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>PRISMASPHERE</h2>
					<img src="../images/EXTERIOR/PRISMASPHERE.jpg"/>
					<P>Ideal para jardines, camellones, muelles, estacionamientos, calles residenciales. Esfera prismática de
						 bajo brillo. Cápsula en fundición de aluminio bajo en cobre. Fabricada con un tratamiento previo para
						 mayor resistencia a la corrosión. La cápsula bote es de lámina tropicalizada y pintada. Balastro
						 electromagnético autorregulado con alto factor de potencia. Refractor y reflector prismáticos de acrílico
						  o policarbonato de bajo brillo y alta refractancia.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/SERIE GLASWERKS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%20104.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">SERIE GLASWERKS</span>
					<a class="meta__price" href="#modal46">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal46" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SERIE GLASWERKS</h2>
					<img src="../images/EXTERIOR/SERIE GLASWERKS.jpg"/>
					<P>Ideal para las calles municipales, plazas comerciales, centros comerciales, campus, paseos marítimos, zonas residenciales.
						 Glasswerks II es una familia contemporánea, el diseño de estilo europeo utilizando ocho estilos diferentes,
						 combinados con una amplia gama de ópticas de vidrio, hacen de este producto de la familia de productos más amplia
						  disponible en el mercado. Esta oferta de segunda generación se basa fuera de la serie original Glasswerks, los
							 puntos fuertes de la variedad de productos importantes y la elección de estilo, brillante actuación de vidrio
							 de borosilicato prismático, y atractivo perfil sin fisuras, mientras que la adición de un estado totalmente nuevo
							  de alta tecnología de diseño</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/somerset.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2053.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">somerset</span>
					<a class="meta__price" href="#modal47">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal47" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>somerset</h2>
					<img src="../images/EXTERIOR/somerset.jpg"/>
					<P>Ideal para vialidades, estacionamientos, jardines y andadores. Luminario con controlente prismático y
						cápsula de aluminio. Cápsula fabricada en aluminio calibre 18, troquelada y soldada, resistente a la
						corrosión. Puerta fabricada en aluminio con bisabra asegurada con dos tornillos cautivos y pestillos para
						 facilitar el acceso a la lámpara. Con cristal de borosilicato prismático. Balastro autorregulado de
						 alto factor de potencia. Reflector de aleación de aluminio hidroformado, químicamente abrillantado y
						 anodizado para un mejor desempeño.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/tfa.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TFA.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">tfa</span>
					<a class="meta__price" href="#modal48">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal48" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>tfa</h2>
					<img src="../images/EXTERIOR/tfa.jpg"/>
					<P>Excelente para astilleros industriales, estacionamientos, obras de construcción, calles y áreas recreativas.
             Carcasa de construcción resistente.  Caja de fundición contorneada de aluminio y panel frontal. Bisel con
						  bisagras y asegurada para un acceso rápido y fácil sin necesidad de herramientas internas de los
							compartimentos ópticos y eléctricos. La lente es de alta resistencia, térmica y resistente a los golpes,
							 de vidrio transparente, templado sin metal con el contacto de vidrio.Acabado en poliéster en polvo,
							  colores disponibles.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TFL.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TFL.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TFL</span>
					<a class="meta__price" href=#modal49>Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal49" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TFL</h2>
					<img src="../images/EXTERIOR/TFL.jpg"/>
					<P>Proyector pequeño y de apariencia tradicional diseñado para iluminar áreas de recreación, estacionamientos,
						fachadas de edificios y lotes de autos. con una distribución abierta de alta eficiencia. Carcasa robusta
						fabricada en fundición de aluminio y reflector de aluminio anodizado.
            bisel frontal totalmente sellado de una sola pieza,  junta de silicón. La lente es térmica y resistente a
						los golpes, de vidrio transparente, templado. Disponible en aditivos metálicos y sodio de alta presión.</p>
				</div>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TFR-TFM.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TFR.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TFR-TFM</span>
					<a class="meta__price" href="#modal50">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal50" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TFR-TFM</h2>
					<img src="../images/EXTERIOR/TFR-TFM.jpg"/>
					<P>Proyectores de uso general; ideales para iluminar áreas recreativas, estacionamientos, fachadas de edificios,
						 anuncios y paisajes. carcasa compacta fabricada en aluminio inyectado a presión, de contornos suaves para una
						  apariencia estética.Reflector de aluminio anodizado, con selección de distribuciones de luz para diferentes
							 aplicaciones de iluminación, disponible en aditivos metálicos, sodio de alta presión y fluorescente.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/tv.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TV.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">tv</span>
					<a class="meta__price" href="#modal51">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal51" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>tv</h2>
					<img src="../images/EXTERIOR/tv.jpg"/>
					<P>Proyector deportivo que proporciona un haz de luz controlado. Ideal para iluminar áreas recreativas,
						campos deportivos y estacionamientos. La carcasa que contiene el balastros de aluminio hidroformado.
						El reflector de aluminio anodizado brinda una amplia variedad de distribuciones Nema. El lente , sujeto
						 por medio de una bisagra, es de vidrio termotemplado resistente a impactos y choques térmicos.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twa.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TWA.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">twa</span>
					<a class="meta__price" href="#modal52">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal52" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>twa</h2>
					<img src="../images/EXTERIOR/twa.jpg"/>
					<P>Excelente para entradas, huecos de escaleras, corredores y otras áreas peatonales. No recomendado para
						aplicaciones con exposición frecuente a productos químicos rudos o fluidos limpiadores comerciales. Las
						instalaciones en tales ambientes pueden conducir al fracaso prematuro del luminario y pueden dejar vacía
						la garantía. Caja trasera de fundición de aluminio resistente. Lente de una sola pieza, resistente a rayos
						 UV, de policarbonato inyectado, pintado internamente. Resistente a la corrosión incluye ranura hexagonal y
						  sujetadores a prueba de manipulaciones. Acabado en polvo de poliéster resistente a la corrosión de color
							bronce oscuro (DDB).</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twac.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TWAC.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">twac</span>
					<a class="meta__price" href="#modal53">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal53" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>twac</h2>
					<img src="../images/EXTERIOR/twac.jpg"/>
					<P>Excelente para entradas, huecos de escaleras, corredores y otras áreas peatonales. No recomendado para
						 aplicaciones con exposición frecuente a productos químicos rudos o fluidos limpiadores comerciales.
						 Las instalaciones en tales ambientes pueden conducir al fracaso prematuro del luminario y pueden dejar
						 vacía la garantía. Caja trasera de fundición de aluminio resistente. Lente de una sola pieza, resistente
						 a rayos UV, de policarbonato inyectado, pintado internamente. Resistente a la corrosión incluye ranura
						 hexagonal y sujetadores a prueba de manipulaciones. Acabado en polvo de poliéster resistente a la corrosión
						 de color bronce oscuro</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twh.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TWH.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TWH</span>
					<a class="meta__price" href="#modal54">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal54" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TWH</h2>
					<img src="../images/EXTERIOR/twh.jpg"/>
					<P>Excelente para entradas, huecos de escaleras, corredores y otras áreas peatonales. No recomendado para
						 aplicaciones con exposición frecuente a productos químicos rudos o fluidos limpiadores comerciales. Las
						  instalaciones en tales ambientes pueden conducir al fracaso prematuro del luminario y pueden dejar vacía
							la garantía. Caja trasera de fundición de aluminio resistente. Lente de una sola pieza, resistente a rayos
							 UV, de policarbonato inyectado, pintado internamente. Resistente a la corrosión incluye ranura hexagonal
							 y sujetadores a prueba de manipulaciones. Acabado en polvo de poliéster resistente a la corrosión de color
							  bronce oscuro (DDB).</p>
				</div>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/TWN-TWP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TWH.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TWH-TWP</span>
					<a class="meta__price" href="#modal55">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal55" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TWH-TWP</h2>
					<img src="../images/EXTERIOR/TWN-TWP.jpg"/>
					<P>Luminario para montaje en muro. Ideal para áreas de almacenaje, andenes de carga y descarga, rampas de
						vehículos e iluminación perimetral en general. Carcasa robusta y resistente a la corrosión, fabricada
						 en aluminio inyectado a presión. Disponible para lamparas de aditivos metálicos y sodio de alta presión.</p>
				</div>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/twp.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TWP.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TWP</span>
					<a class="meta__price" href="#modal56">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal56" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TWP</h2>
					<img src="../images/EXTERIOR/twp.jpg"/>
					<P>Excelente para entradas, huecos de escaleras, corredores y otras áreas peatonales. No recomendado para
						aplicaciones con exposición frecuente a productos químicos rudos o fluidos limpiadores comerciales. Las
						instalaciones en tales ambientes pueden conducir al fracaso prematuro del luminario y pueden dejar vacía
						la garantía. Caja trasera de fundición de aluminio resistente. Lente de una sola pieza, resistente a rayos
						 UV, de policarbonato inyectado, pintado internamente. Resistente a la corrosión incluye ranura hexagonal y
						 sujetadores a prueba de manipulaciones. Acabado en polvo de poliéster resistente a la corrosión de color
						 bronce oscuro</p>
				</div>
			</div>

       <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/VENUS.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2055.pdf" Target="_blank">Ficha Ténica</a>
					<span class="meta__brand">VENUS</span>
					<a class="meta__price" href="#modal57">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal57" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>VENUS</h2>
					<img src="../images/EXTERIOR/VENUS.jpg"/>
					<P>Ideal para vialidades, estacionamientos, andadores, parques, áreas recreativas. Luminario exterior
						decorativo, de alto rendimiento. Cápsula en fundición de aluminio bajo cobre, fabricada con un tratamiento
						 previo para una mayor resistencia a la corrosión. Balastro electromagnético autorregulado con alto factor
						  de potencia. Refractor prismático de cristal Endural de bajo brillo con curva de distribución tipo V.
							Fácil cableado y conexión por la parte inferior de la cápsula. Fácil acceso al interior de la lámpara,
							retirando el sombrero.</p>
				</div>
			</div>

      <div class="grid__item dresses">
				<div class="slider">
					<div class="slider__item"><img src="../images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/EXTERIOR/wallpack iv.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2060.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">wallpack IV<span>
					<a class="meta__price" href="#modal58">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal58" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>wallpack iv</h2>
					<img src="../images/EXTERIOR/wallpack iv.jpg"/>
					<P>Ideal para muros, plantas industriales, escuelas, áreas de carga y descarga, pasos a desnivel,
						 estacionamientos techados. Luminario para montaje en pared para servicio pesado. Cápsula en fundición
						 de aluminio, fabricada con un tratamiento previo para una mayor resistencia a la corrosión. Puerta
						 removible asegurada don dos tornillos cautivos y bisagras. El conjunto óptico cuenta con un empaque
						 que lo mantiene libre de insectos y polvo. Balastro autorregulado de alto factor de potencia con
						 embobinados de cobre. Reflector de aluminio abrillantado y anodizado para un mejor desempeño;
						 refractor de cristal de borosilicato prismático. Puerta removible para una fácil instalación de la
						 base a la pared.</p>
				</div>
			</div>

			<div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/NEN ENDURALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/NEN ENDURALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/NEN ENDURALUME.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2030.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NEN ENDURALUME</span>
					<a class="meta__price" href="#modal59">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

						<div id="modal59" class="modalmask">
							<div class="modalbox rotate">
								<a href="#close" title="Cerrar" class="close">X</a>
								<h2>NEN ENDURALUME</h2>
								<img src="../images/INDUSTRIAL/NEN ENDURALUME.jpg"/>
								<P>Ideal para bodegas, naves industriales, centros comerciales, gimnasios. Refractor de cristal
									prismático y reflector de aluminio pintado. Cápsula en fundición de aluminio, fabricada con un
									tratamiento previo para una mayor resistencia a la corrosión. Balastro electromagnético autorregulado
									 con alto factor de potencia y alta emisión lumínica por watt consumido. Reflector de aluminio cerrado
									  combinado con un refractor de acrílico o cristal de borosilicato. El diseño reflector-refractor brinda
										 un balance simétrico. Distribución con balance vertical y horizontal de iluminación, con excelente
										  uniformidad y bajo brillo, para crear un ambiente visual confortable. Fácil instalación. </p>
							</div>
						</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUME.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2035.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Petrolume</span>
					<a class="meta__price" href="#modal60">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal60" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Petrolume</h2>
					<img src="../images/INDUSTRIAL/PETROLUME.jpg"/>
					<P>Especial para uso en areas peligrosas. Luminario a prueba de explosión para iluminacion interior y la  al aire libre.
						 El refractor simétrico es ideal para las áreas generales. El diseño superior del refractor proporciona más luz directa
						  en el exterior y hacia abajo, reduciendo el número de luminarias necesarias para lograr un nivel de luz dado.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX II.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://pcdingenieria.com.mx/pdfs/industrial/30.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Petrolux II</span>
					<a class="meta__price" href="#modal61">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal61" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Petrolux II</h2>
					<img src="../images/INDUSTRIAL/PETROLUX II.jpg"/>
					<P>Ideal para industria petroquímica, proceso de metales, silos, pinturas. Luminario de especialidad Clase I,
						División 2; Clase II, Divisiones 1 y 2; Clase III, Divisiones 1 y 2; Cápsula en fundición de aluminio, fabricada
						con un tratamiento previo para una mayor resistencia a la corrosión. Balastro autorregulado de alto factor de
						potencia, con embobinados de cobre. Conjunto óptico de cristal borosilicato prismático Endural resistente al choque
						 térmico. Disponible en dos refractores (con tres distribuciones: simétrica, larga y angosta o asimétrica) o un
						 refflector</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PETROLUX.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2034.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Petrolux</span>
					<a class="meta__price" href="#modal62">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal62" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Petrolux</h2>
					<img src="../images/INDUSTRIAL/PETROLUX.jpg"/>
					<P>Ideal para bodegas, plantas generadoras de energía, plantas tratadoras de agua, industria. Luminario para áreas no
						clasificadas, equipado con refractor de cristal prismático y cristal termotemplado plano. Cápsula en fundición de
						aluminio con diferentes tipos de montaje. Balastro de alto factor de potencia, autorregulable con un alto nivel de
						eficiencia. Cuatro conjuntos ópticos con cinco curvas de distribución. Los dos refractores ofrecen tres distribuciónes:
						curva larga y angosta, simetrica y asimétrica. Los diferentes montajes ofrecen gran versatilidad para su instalación.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/Prismalume cerrado.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/Prismalume cerrado.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/Prismalume cerrado.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.pcdingenieria.com.mx/pdfs/industrial/20.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Prismalume cerrado</span>
					<a class="meta__price" href="#modal63">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal63" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismalume cerrado</h2>
					<img src="../images/INDUSTRIAL/Prismalume cerrado.jpg"/>
					<P>Uso industrial pesado, comercial, almacenamiento, gimnasios, plantas de ensamble. Optica cerrada. El  Prismalume
						 Cerrado es la solución perfecta para una variedad de usos. El  Prismalume cerrado es la solución perfecta para una
						 variedad de zonas industriales de servicio pesado. Holophane también sella la parte superior del reflector para incluir
						  el conjunto óptico completo. Tecnología de supercristal DSI™ da a Prismalume cerrado  una gran uniformidad y ahorro de
							 energía.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMALUME.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMALUME.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.pcdingenieria.com.mx/pdfs/industrial/19.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Prismalume</span>
					<a class="meta__price" href="#modal64">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal64" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismalume</h2>
					<img src="../images/INDUSTRIAL/PRISMALUME.jpg"/>
					<P>Uso industrial, comercial, almacenamiento, escuelas, almacenes.  Prismalume es un luminario de alta resistencia de
						gran altura con un equilibrio único de iluminación hacia arriba y abajo. Prismalume Tiene el brillo y durabilidad de
						vidrio de borosilicato, los reflectores son de auto-limpieza para proporcionar la eficacia a largo plazo y de ahorro de
						 energía. Reflectores nunca libres de mantenimiento. Una amplia selección de tecnologías de iluminación potencia, opciones
						  y accesorios disponibles.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMATITE FLUORESCENTE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMATITE FLUORESCENTE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMATITE FLUORESCENTE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2033.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Prismatite Fluorescente</span>
					<a class="meta__price" href="#modal65">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal65" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismatite Fluorescente</h2>
					<img src="../images/INDUSTRIAL/PRISMATITE FLUORESCENTE.jpg"/>
					<P>Ideal para áreas de mantenimiento, plantas de ensamble, almacenes, lavanderías, manufactura de alimentos. Luminario
						con desempeño óptico y mecánico excepcionales. Gabinete compuesto por tres secciones de aluminio extruído selladas entre
						si para formar un cuerpo rígido. Balastro estándar - electrónico, encendido instantáneo, bajo consumo de energía, alto factor
						 de potencia. Otras opciones de balastro disponibles: de bajas distorsiones armónicas, de emergencia y dimeables. El lente
						 prismático de policargonato resistente a la luz ustravioleta y moldeados por inyeccion a presión, proporcionan un excelente
						  confort visual. </p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMGLO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMGLO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMGLO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2044.pdf" Target="_blank">Ficah Técnica</a>
					<span class="meta__brand">Prismglo</span>
					<a class="meta__price" href="#modal66">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal66" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismglo</h2>
					<img src="../images/INDUSTRIAL/PRISMGLO.jpg"/>
					<P>Ideal para plantas de ensamble, lavanderías, tiendas. Ópticas prismáticas suspendidas que proveen iluminación hacia
						 arriba. Cápsula en fundición de aluminio, fabricada con un tratamiento previo para una mayor resistencia a la
						 corrosión. Balastro autorregulado de alto factor de potencia, con embobinados de cobre para dar la emisión lumínica
						 completa de la lámpara con menor consumo de energía. Cinco diferentes formas de refractores de cristal de borosilicato
						  prismático proveen una óptima visibilidad de bajo brillo. Variedad de métodos de montaje que hacen la instalación rápida
							, fácil y enonómica. </p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK CERRADO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK CERRADO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK CERRADO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2042.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Prismpack Cerrado</span>
					<a class="meta__price" href="#modal67">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal67" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismpack Cerrado</h2>
					<img src="../images/INDUSTRIAL/PRISMPACK CERRADO.jpg"/>
					<P>Ideal para hangares, plantas de ensamble, plantas industriales. Reflectores de cristal prismático; balastro integral
						para lámparas de alta intensidad de descarga; ensamble óptico cerrado. Cápsula en fundición de aluminio fabricada con
						 un tratamiento previo para mayor resistencia a la corrosión. Balastro autorregulado de alto factor de potencia con
						  embobinados de cobre. Conjunto óptico de cristal de borosilicato prismático Endural resistente al choque térmico,
							 sellado con una cubierta de aluminio anodizado. El reflector de cristal cubierto minimiza la depreciación de lúmenes
							  al reducir el polvo acumulado en la superficie interna del reflector.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/PRISMPACK.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.pcdingenieria.com.mx/pdfs/industrial/21.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Prismpack</span>
					<a class="meta__price" href="#modal68">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal68" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Prismpack</h2>
					<img src="../images/INDUSTRIAL/PRISMPACK.jpg"/>
					<P>Ideal para hangares, plataformas de ensamble, gimnasios, áreas de galvanizado y almacenes.Reflectores de cristal
						prismático, balastro integral para lámparas de descarga de alta intensidad, ensamble óptico de auto limpieza.
						Cápsula en fundición de aluminio fabricada con un tratamiento previo para una mayor resistencia a la corrosión.
						 Balastro autorregulado de alto factor de potencia con embobinados de cobre. Conjunto óptico de cristal borosilicato
						  prismático Endural resistente al choque térmico. Opción de cinco medidas de reflectores disponibles que cumplen
							eficientemente con los requerimientos de diseño para distribución de luz.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa22.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa22.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa22.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/SH%20PA22.pdf" Target="_blank">Ficha Técnica</a>
					<a class="meta__brand">SH PA22</a>
					<a class="meta__price" href="#modal69">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal69" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SH PA22</h2>
					<img src="../images/INDUSTRIAL/sh pa22.jpg"/>
					<P>Para las alturas altas de montaje que requieren eficiencias superiores, la alta iluminación horizontal y vertical y
						 control de contraste premium. Ideal para las áreas ligeras de manufactura, almacenes y pasillos. Para su uso en las
						  áreas con contaminantes aerotransportados mínimos. Ciertos contaminantes aerotransportados pueden disminuir la
							integridad del acrílico. Fabricado en acero, terminado en pintura de poliéster en polvo blanca. Todos los componentes
							eléctricos son situados para asegurar la unidad en su montaje pendiente. Está ventilado para la actuación termal
							 óptima.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/sh pa25.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/SH%20PA25.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">SH PA25</span>
					<a class="meta__price" href="#modal70">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal70" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SH PA25</h2>
					<img src="../images/INDUSTRIAL/sh pa25.jpg"/>
					<P>Para las alturas altas de montaje que requieren eficiencias superiores, la alta iluminación horizontal y vertical
						y control de contraste premium. Ideal para las áreas ligeras de manufactura, almacenes y pasillos. Para su uso en las
						 áreas con contaminantes aerotransportados mínimos. Ciertos contaminantes aerotransportados pueden disminuir la
						  integridad del acrílico. Fabricado en acero, terminado en pintura de poliéster en polvo blanca. Todos los componentes
							eléctricos son situados para asegurar la unidad en su montaje pendiente. Está ventilado para la actuación termal óptima</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/th a14.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/th a14.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/th a14.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TH%20A14.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TH A14</span>
					<a class="meta__price" href="#modal71">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal71" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TH A14</h2>
					<img src="../images/INDUSTRIAL/th a14.jpg"/>
					<P>Use en las grandes alturas de montaje que requieren eficiencias altas, iluminación horizontal e iluminación
						 vertical alta. Ideal para áreas de confección y pasillos del almacén donde el color es crítico. Carcasa robusta
						  para servicio pesado, fabricada en aluminio inyectado a presión y con acabado en pintura blanca de poliéster
							en polvo.los componentes eléctricos son de calentamiento lento y horizontalmente opuestos para la operación más
							 fresca. </p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/th.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/th.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/th.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TH.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TH</span>
					<a class="meta__price" href="#modal72">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal72" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TH</h2>
					<img src="../images/INDUSTRIAL/th.jpg"/>
					<P>A14: Excelente para la iluminación vertical.Montaje en alturas de: 18 - 35 ft.
A15: Excelente para la iluminación horizontal. Montaje en alturas de: 18 - 25 ft.
A16: Provee eficiencias altas; El control de resplandor. Montaje en alturas de: 18 - 35 ft.
A17, A22: Para blindaje óptimo de la lámpara; El control de resplandor. Montaje en alturas de: 18 - 40 ft.
PA16, PA22, PA22E, PA22L: Provee eficiencias altas; La iluminación vertical y horizontal; El control de resplandor. Montaje en alturas de: 18 - 35 ft.
PA22N, PA22SP, PA25: Para la eficiencia alta arriba de luz; El control de resplandor; Las distribuciones más estrechas para las alturas más altas de montaje. Montaje en alturas de: 20 - 40 ft.
Balasto modular para opticas high bay. Las piernas pre regulables adjuntas aceptan una selección ancha de aluminio anodizado y reflectores high bay acrílicos prismáticos. Una colección variada de patrones de distribución en las alturas más altas de montaje pueden ser logrados. Estos sistemas proveen claridad mínima y brillo intenso y eficiencia superior de energía.  </p>
				</div>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/THD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/THD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/THD.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TH%20A16.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">THS</span>
					<a class="meta__price" href="#modal73">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal73" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>THS</h2>
					<img src="../images/INDUSTRIAL/THD.jpg"/>
					<P>Luminario industrial con reflector abierto o cerrado. Diseñado para instalarse en áreas con grandes alturas de
						montaje, donde se requiere iluminación horizontal con altos niveles de eficiencia. Ideal para áreas de manufactura,
						almacenes y pasillos de bodegas. Carcasa robusta, fabricada en aluminio inyectado a presión, acabado en pintura blanca
						 de poliéster en polvo. Reflector facetado de alta eficiencia, fabricado en aluminio anodizado.  </p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/THR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/THR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/THR.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TH%20PA22.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">THR</span>
					<a class="meta__price" href="#modal74">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal74" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>THR</h2>
					<img src="../images/INDUSTRIAL/THR.jpg"/>
					<P>Luminario industrial con refractor de acrílico abierto. diseñado para instalarse en áreas con grandes alturas de
						 montaje, donde se requiere iluminación horizontal y vertical con altos niveles de eficiencia y un optimo control
						  del contraste de luz. Ideal para iluminar áreas de manufactura ligera, almacenas y pasillos de tiendas detallistas.
							 Carcasa robusta, fabricada en aluminio inyectado a presión, acabado en pintura blanca de poliéster en polvo.
							 El refractor de acrílico de alta eficiencia es resistente a las decoloraciones causadas por los rayos UV, brinda
							  altos niveles de iluminación en el plano vertical y mantiene al mismo tiempo un bajo nivel de brillo.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/tx a121-a125.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/tx a121-a125.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/tx a121-a125.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TX%20A121-A125.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TX A121/A125</span>
					<a class="meta__price" href="#modal75">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal75" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TX A121/A125</h2>
					<img src="../images/INDUSTRIAL/tx a121-a125.jpg"/>
					<P>Para las áreas que requieren iluminación vertical alta y los espaciamientos anchos. Ideal para pasillos, zonas de
						 servicios y garajes del estacionamiento. Ciertos contaminantes aerotransportados pueden disminuir integridad de
						 acrílico. Carcasa de servicio pesado, fabricada en aluminio a presión. El balasto y los componentes eléctricos son
						  de calentamiento lento y horizontalmente opuestos para la operación más fresca. La brida integral de montaje de la
							 caja del empalme asegura integridad estructural. Pintura blanca de polvo de poliéster aplicada electrostaticamente.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/txc.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/txc.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/txc.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/TX%20A23.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">TXC</span>
					<a class="meta__price" href="#modal76">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal76" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>TXC</h2>
					<img src="../images/INDUSTRIAL/txc.jpg"/>
					<P>Luminario industrial cerrado para distribuciones abiertas. Diseñado para utilizarse en áreas donde se requiere
						 iluminación vertical y control de brillo en bajas alturas de montaje. Ideal para iluminar áreas abiertas, tiendas
						  detallistas y pasillos. Carcasa robusta para servicio pesado, fabricada en aluminio inyectado a presión y con
							acabado en pintura blanca de poliéster en polvo. La óptica esta compuesta por un reflector pintado con pintura
							de poliéster en polvo blanca que proporciona una alta reflectancia y un lente de acrílico virgen inyectado a
							presión.</p>
				</div>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE ALT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE ALT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE ALT.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/VantageALT.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Vantage Alt</span>
					<a class="meta__price" href="#modal77">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal77" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Vantage Alt</h2>
					<img src="../images/INDUSTRIAL/VANTAGE ALT.jpg"/>
					<P>Ideal para areas de almacenamiento de alimentos. La luminaria Vantage ALT es una luminaria de acrílico-con lentes
						 diseñados para la industria alimentaria y otras áreas. Disponible con una cubierta de aluminio con refractor de
						  acrílico para una caida de luz centrada, o un reflector/refractor combinación de acrílico de iluminación hacia
							 arriba hasta 15%, esta luminaria se puede utilizar en múltiples aplicaciones en una lista de lugares húmedos es
							  aceptable. Excelente distribución fotométrica permite que esta luminaria pueda ser montada en una variedad de
								 alturas de montaje. Vantage ALT está disponible de 250 a 400W aditivo metalico o sodio de alta presion.
								  Ciertos contaminantes del aire pueden disminuir la integridad de acrílico</p>
				</div>
			</div>

       <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE MINI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE MINI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE MINI.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/VantageMini.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Vantage Mini</span>
					<a class="meta__price" href="#modal78">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal78" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Vantage Mini</h2>
					<img src="../images/INDUSTRIAL/VANTAGE MINI.jpg"/>
					<P>Ideal para plantas de ensamble, plantas de procesamiento de alimentos, almacenamiento refrigerado o frío, viveros y
						 estacionamientos. Ciertos contaminantes del aire pueden disminuir la integridad de acrílico.
            El bajo perfil de la luminaria Vantage Mini es la solución óptima en el mantenimiento, saneamiento y conservación de
						 la energía son temas clave en ambientes extremos como el de Alimentos y Bebidas. La construcción duradera está diseñado
						  para una larga vida y facilidad de mantenimiento. Disponible en dos configuraciones ópticas, el Mini Vantage satisface
							 las necesidades diferentes de iluminación.</p>
				</div>
			</div>

      <div class="grid__item jackets">
				<div class="slider">
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE RTT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE RTT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/INDUSTRIAL/VANTAGE RTT.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/VantageRTT.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">Vantage RTT</span>
					<a class="meta__price" href="#modal79">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal79" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>Vantage RTT</h2>
					<img src="../images/INDUSTRIAL/VANTAGE RTT.jpg"/>
					<P>Ideal para plantas de ensamble, Plantas de Procesamiento de Alimentos, Almacenamiento Refrigerado o frío, viveros y
						 estacionamientos. Ciertos contaminantes del aire pueden disminuir la integridad de acrílico. El Vantage RTT es una
						 luminaria empotrable 2x2 HID diseñado específicamente para satisfacer las necesidades de la industria alimentaria.
						  El RTT es lo suficientemente resistente para soportar el medio ambiente, al tiempo que ofrece un rendimiento de
							 iluminación superior y la eficiencia. El resultado de la RTT Vantage será de larga vida y durabilidad. El
							 rendimiento de la iluminación superior de la RTT se logra mediante la combinación de los materiales de calidad
							 superior. Esta luminaria está diseñada con un reflector de alto brillo ofreciendo mayores eficiencias. El RTT es
							  de acero laminado en frío y acabado con tratamiento previo Holopane de siete pasos y el proceso de pintura. La
								 luminaria se accede desde la base para mantener la integridad del sello.</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/GDI.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2083.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">GDI</span>
					<a class="meta__price" href="#modal80">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal80" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GDI</h2>
					<img src="../images/Fluorescente/GDI.jpg"/>
					<P>Ideal para instituciones educativas, oficinas privadas, vestíbulos, hospitales. Luminario para iluminación
						semi-directa. Cuerpo con desarrollo estructural para máxima rigidez. Fabricado con un tratamiento previo para una
						 mayor resistencia a la corrosión. Balastro estándar - electrónico, encendido instantáneo, bajo consumo de energía
						  y alto factor de potencia. Otros balastros disponibles: de bajas distorsiones armónicas, de emergencia y dimeables.
							 Luminario de alta eficiencia de difusor perforado y pantalla mylar. Luminario para plafòn reticular o fijo. Fácil
							  mantenimiento.</p>
				</div>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/i-beam.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/ll/documents/psg/fluorescent%20high%20bays.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">i-beam</span>
					<a class="meta__price" href="#modal81">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal81" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>i-beam</h2>
					<img src="../images/Fluorescente/i-beam.jpg"/>
					<P>El primer sistema fluorescente T5HO de alto montaje aprobado por UL para operar en ambientes con temperaturas
						hasta 55º C y tiene 5 años de garantía. Utiliza un avanzado control óptico que proporciona calidad visual superior,
						 sin sacrificar eficiencia y confiabilidad.</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/mrt retrofit kit.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/ll/documents/psg/MRT%20Retrofit%20Kit.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">mrt retrofit kit</span>
					<a class="meta__price" href="#modal82">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal82" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>mrt retrofit kit</h2>
					<img src="../images/Fluorescente/mrt retrofit kit.jpg"/>
					<P>El kit Troffer MRT  de actualización está diseñado para caber fácilmente en la mayoría de troffers fluorescentes
						comerciales para proporcionar la máxima eficiencia y completa, incluso por debajo de la proyección de imagen de la
						 lámpara. Esta serie ofrece altos niveles de luz para las modificaciones de iluminación general de una separación
						  entre sí 2''x4'',''2''x2 y 1''x4'' empotrados. Las aplicaciones típicas incluyen aulas, oficinas, hospitales y
							áreas comerciales. Los reflectores son aluminio formado en precisión para la actuación óptima. Los reflectores
							segmentados están disponibles en una colección variada de finales con elección de reflectancias . La oferta de
							óptica del reflector variando distribuciones fotométricas y espaciando criterios requisitos de aplicación mejor
							conveniente y de presupuesto.</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NEG-FEG.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2084.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NEG-FEG</span>
					<a class="meta__price" href="#modal83">Ver más</span>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal83" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NEG-FEG</h2>
					<img src="../images/Fluorescente/NEG-FEG.jpg"/>
					<P>Ideal para oficinas, instituciones educativas, pasillos, centros comerciales, hospitales. Luminario de bajo perfil
						 con controlente. Cuerpo con desarrollo estructural para máxima rigidez. Con ceja para empotrar en plafón fijo o sin
						  ceja para plafón reticular. Con tratamiento previo para mayor ressistencia a la corrosión. Balastro estándar -
							electrónico, encendido instantáneo; otros balastros disponibles: de bajas distorsiones armónicas, de emergencia y
							dimeables. Luminario de alta eficiencia con dos diferentes de tipos de controlentes. Reflector con acabado blanco
							poliéster de 92% de reflectancia. Puerta abatible sobre bisagras y con cambio de posición izquierda o derecha.
							 Fácil instalación y mantenimiento.</p>
				</div>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NEP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2085.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NEP</span>
					<a class="meta__price" href="#modal84">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal84" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NEP</h2>
					<img src="../images/Fluorescente/NEP.jpg"/>
					<P>Ideal para instituciones educativas, oficinas, pasillos, bibliotecas, librerías, hospitales. Luminario con louver
						 parabólico. Cuerpo con desarrollo estructural para máxima rigidez. Con ceja para empotrar en plafón fijo o sin ceja
						  para plafón reticular. Fabricado con un tratamiento previo para mayor resistencia a la corrosión. Balastro estándar
							 - electrónico, encendido instantáneo. Otras opciones de balastro disponibles: de bajas distorsiones armónicas, de
							 emergencia y dimeables. Luminario de alta eficiencia con louver parabólico. Fácil instalación y mantenimiento.
							  Función de aire disponible para suministro de aire acondicionado.</p>
				</div>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/NHW.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2082.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NHW</span>
					<a class="meta__price" href="#modal85">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal85" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NHW</h2>
					<img src="../images/Fluorescente/NHW.jpg"/>
					<P>Ideal para iluminación general de industrias, instituciones educativas, tiendas detallistas. Luminario envolvente
						con controlente de acrílico. Cuerpo con desarrollo estructural para máxima rigidez. Fabricado con un tratamiento
						previo para mayor resistencia a la corrosión. Balastro estándar - electrónico, encendido instantáneo. Otros balastros
						 disponibles: de bajas distorsiones armónicas, de emergencia y dimeables. Luminario de alta eficiencia con controlente
						  envolvente de bajo brillo, fabricado en inyección de acrílico con terminales soldadas por ultrasonido. Luminario de
							sobreponer o colgar. Fácil instalación y mantenimiento.</p>
				</div>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/pm3x.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PM3X.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">pm3x</span>
					<a class="meta__price" href="#modal86">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal86" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>pm3x</h2>
					<img src="../images/Fluorescente/pm3x.jpg"/>
					<P>Luminarias de alto rendimiento para montaje en superficie parabólica para el control de la luz superior, confort
						 visual de luz cutoff, para aplicaciones de interior abierto. Gabinete de acero con Paramax ® 3", gabinete de aluminio
						  de primera calidad. Un compañero perfecto para luminarias empotradas Paramax ®. Elección del tamaño, la lampara,
							 la configuración de la celda y el acabado del gabinete. El acabado estándar exterior es blanco brillante. cobertura
							 superior completa disponible.</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/pmo.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/PMO.pdf" Target="_blank">Ficha Técnia</a>
					<span class="meta__brand">PMO</span>
					<a class="meta__price" href="#modal87">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal87" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>pmo</h2>
					<img src="../images/Fluorescente/pmo.jpg"/>
					<P>Completa familia de Luminarios parabólicos de control de luz diseñadas para evitar el deslumbramiento de la pantalla
						 VDT, para su uso en ambientes abiertos de oficina. Rejilla parabólica compuesta que proporciona un control optimo de
						  la luz. Diseño optimizado para su uso con lámparas T8 y balastos electrónicos. El acabado del reflector en aluminio
							iridiscente minimiza rejilla. Ideal para uso con lámparas trifósforo.  </p>
				</div>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/rt5.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/RT5.PDF" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">rt5</span>
					<a class="meta__price" href="#modal88">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal88" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>rt5</h2>
					<img src="../images/Fluorescente/rt5.jpg"/>
					<P>El primer luminario que ofrece iluminación volumétrica llenando realmente el espacio con luz, entregando la cantidad
						 ideal de luz de una manera eficiente y económica. Refractor de dos piezas utiliza una combinación de una película
						  difusa y prismas extrudidos para difundir y distribuir, eficiente y suavemente la luz. El reflector utiliza pintura
							 de alta reflexión y microfacetas especialmente diseñadas para trabajar en conjunto con los prismas.  </p>
				</div>
			</div>


      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/s.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/s.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/s.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2047%20(S).pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">s</span>
					<a class="meta__price" href="#modal89">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal89" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>s</h2>
					<img src="../images/Fluorescente/s.jpg"/>
					<P>Para aplicaciones que requieren niveles medianos de iluminación y la construcción estrecha. Adecuado para tareas
						 generales de alumbrado. El canal delgado para el manejo fácil en unidad o en fila, montaje en muro o pared. Acabado
						  de esmalte horneado Reflector especular blanco disponible. Cubierta del canal retenida por sujetador de cuarto de
							 vuelta.  </p>
				</div>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/sb.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/sb.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/sb.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/SB.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">sb</span>
					<a class="meta__price" href="#modal90">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal90" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>sb</h2>
					<img src="../images/Fluorescente/sb.jpg"/>
					<P>Luminario envolvente para sobreponer con difusor de acrílico prismático. las cabeceras pintadas en esmalte
						 blanco realzan su apariencia. Disponible en dos o cuatro lamparas. </p>
				</div>
			</div>

      <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/SP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/SP.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/SP.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/SP.PDF">Ficha Técnica</a>
					<span class="meta__brand">SP</span>
					<a class="meta__price" href="#modal91">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal91" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SP</h2>
					<img src="../images/Fluorescente/SP.jpg"/>
					<P>Completa selección de luminarias de especificación premium, recomendado para todas las aplicaciones empotradas.
						 Marcos de puertas de aluminio disponibles, control del flujo de aire con opción de damppers de eliminación de
						  calor. Clips de seguridad T-bar estándar en 1'x4 ', 2'x2' y accesorios de 2'x4 '. No es necesario instalar los
							clips por separado. Compatible con prácticamente todos los tipos de techo. modificación de campo trim kits también
							 están disponibles</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/wc-ny.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="#" >Ficha Técnica</a>
					<span class="meta__brand">wc-ny</span>
					<a class="meta__price" href="#modal92">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal92" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>wc-ny</h2>
					<img src="../images/Fluorescente/wc-ny.jpg"/>
					<P>Para muro o techo montaje vertical u horizontal. Ideal para huecos de la escalera, corredores, lavatorios o cualquier
						 aplicación de utilidad. Diseño de fácil de mantenimiento individual o en fila . Construido para acceder con la ciudad
						  de Nueva York código eléctrico. Hecho en EEUU. Las partes de metal son moldeadas.
             Acabado de pretratamiento de fosfato de hierro de cinco etapas asegura resistencia de pintura de superior adhesión
						  y de oxidación. Acabado final high-gloss estándar, esmalte blanco horneado.</p>
				</div>
			</div>

       <div class="grid__item shirts">
				<div class="slider">
					<div class="slider__item"><img src="../images/Fluorescente/ww.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ww.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/Fluorescente/ww.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/LL/documents/PSG/WW.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ww</span>
					<a class="meta__price" href="#modal93">Ver más</a>
				</div>
        <button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal93" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ww</h2>
					<img src="../images/Fluorescente/ww.jpg"/>
					<P>Provee iluminación de pared de alto rendimiento, uniforme para resaltar trabajo de arte y señalización. Los
						despliegues destacan en ambientes de reventa o de la oficina. Provee máxima iluminación de la pared de claridad
						 mínima. Elimina situaciones críticas. 92 % de salida ligera ilumina pared. 12 " El ensamblaje ancho fácilmente
						  se adapta a los sistemas comunes de techo.</p>
				</div>
			</div>

        <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/ALX.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/ll/documents/psg/ALX.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">ALX</span>
					<a class="meta__price" href="#modal94">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal94" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>ALX</h2>
					<img src="../images/CON LEDS/ALX.jpg"/>
					<P>Calles, aceras, estacionamientos y áreas circundantes. Robusto, de fundición, de aluminio de una sola pieza. de
						flujo único a través del diseño de optimización de la gestión térmica. El diseño modular permite la facilidad de
						 mantenimiento y el potencial de futuras actualizaciones del sistema. brazo Integral proporciona una fácil instalación
						  de un poste o pared (ALX1 solamente). pantalla metálica cubre la parte superior de la cubierta para evitar la
							 acumulación de residuos al tiempo que permite que circule el aire. Vivienda completamente sellados contra la
							  humedad o contaminantes ambientales. Bajo el perfil del diseño minimiza la carga del viento. montaje de la puerta:
								 marco de la puerta de fundición adjuntando cámaras conductor. Marco de la puerta está completamente sellada con
								  silicona de una sola pieza tubular. El acabado estándar es de bronce oscuro (DDB) capa de polvo de poliéster
									resistente a la corrosión. otros colores disponibles</p>
				</div>
			</div>

       <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/GRANDVILLE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2088.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">GRANDVILLE</span>
						<a class="meta__price" href="#modal95">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal95" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>GRANDVILLE</h2>
					<img src="../images/CON LEDS/GRANDVILLE.jpg"/>
					<P>Granville LED es ideal para los bulevares urbanos, calles, Campus, Estacionamientos, Uso
						 Residencial, y Parques.Se aplica tanto a las nuevas instalaciones y modernización de las
						 instalaciones existentes Granville.  Holophane ha tomado gran cuidado en el diseño de esta
						 luminaria nueva y emocionante ya que sabía que el Granville tenía una reputación seria para
						 mantener y los clientes que se tienen grandes expectativas para el Granville LED. Estamos
						 seguros de que no se arrepentirá y se encuentra que el Granville LED que proporciona toda
						 la alta calidad, alto rendimiento y alta fiabilidad que hemos acostumbrado a los productos
						  Holophane.  El Granville LED combina la tecnología LED de Holophane y la óptica de vidrio
							de primera clase para producir el mejor rendimiento en su tipo. Además de nuestra gestión
							de alta ingeniería térmica y de construcción de calidad, haran que usted este seguro de
							tener una duradera y confiable, nueva luminaria de alta calidad.</p>
				</div>
			</div>



			 <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LEDGEND.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.abl-internationalsales.com/" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LEDGEND</span>
					<a class="meta__price" href="#modal96">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal96" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LEDGEND</h2>
					<img src="../images/CON LEDS/LEDGEND.jpg"/>
					<P>El Ledgend Holophane incluye una  óptica de vidrio prismático para proteger el LED a la vez
						que el control de distribución de la luz y la reducción del deslumbramiento. Mantiene un sistema
						 de gestión térmica de ingeniería en el Ledgend para un máximo rendimiento y larga vida util.
						  El preciso control óptico Ledgend para aplicaciones de alta eficacia y varios paquetes luz
							ofrecen una flexibilidad de diseño que lo convierte en un ajuste perfecto para la mayoría de
							las carreteras. El Ledgend es un diseño respetuoso del medio ambiente con cero iluminación
							 hacia arriba para ayudar a prevenir la contaminación lumínica.</p>
				</div>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LT BEZEL RING.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/LED%20Trailblazer.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LT BEZEL RING</span>
					<a class="meta__price" href="#modal97">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal97" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LT BEZEL RING</h2>
					<img src="../images/CON LEDS/LT BEZEL RING.jpg"/>
					<P>Especial para la iluminación arquitectónica, orientación peatonal, iluminación de acento,
						e iluminación de paisajes. utiliza los LEDs Luxeon premiados de alta potencia de Lumileds, que
						 ofrecen ventajas sobre los LEDs de 5 mm, incluyendo la salida de la luz superior y mantenimiento
						  del flujo luminoso. Ubicado en un cuerpo de aluminio fundido con una puerta de acero inoxidable
							cuadrado, estos LED revolucionarios están disponibles en seis colores - blanco cálido, blanco frío,
							azul, verde, rojo y ámbar, y con lentes de acrílico para dar una opción de ángulos de haz. La baja
							temperatura de la lente hace que sean adecuadas para su uso en las zonas públicas, donde existe la
							posibilidad de las personas tocarlos. Pueden estar en el suelo o empotrada en la pared, así como
							estribo de montaje y mejorar la apariencia de una multitud de aplicaciones arquitectónicas.</p>
				</div>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/LTD.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/LED%20Trailblazer.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">LTD</span>
					<a class="meta__price" href="#modal98">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal98" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>LTD</h2>
					<img src="../images/CON LEDS/LTD.jpg"/>
					<P>Ideal para la iluminación arquitectónica, orientación peatonal, iluminación de acento e
						 iluminación del paisaje utiliza los LEDs Luxeon premiados de alta potencia de Lumileds,
						  que ofrecen ventajas sobre los LEDs de 5 mm, incluyendo la salida superior de la luz y
							mantenimiento del flujo luminoso. Ubicado en un cuerpo de aluminio fundido con una puerta
							 de acero inoxidable cuadrado, estos LED revolucionarios están disponibles en seis colores
							  - blanco cálido, blanco frío, azul, verde, rojo y ámbar, y con lentes de acrílico para dar
								 una opción de ángulos de haz. La temperatura de la lente hace que sean adecuadas para su
								  uso en las zonas públicas, donde existe la posibilidad de las personas tocarlos. Pueden
									ser suelo o pared empotrado, así como estribo de montaje y mejorar la apariencia de una
									multitud de aplicaciones arquitectónicas.</p>
				</div>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/SERIE H670.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="#" >Ficha Técnica</a>
					<span class="meta__brand">SERIE H670</span>
					<a class="meta__price" href="#modal99">Ver más<a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal99" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SERIE H670</h2>
					<img src="../images/CON LEDS/SERIE H670.jpg"/>
					<P>Ideal para fachadas de edificios, parques, esculturas, proyectos de arquitectura, señalizacion,
						 areas secas y humedas. montaje empotrado. La serie de luminarias H670: Sellado para aplicaciones
						 de usos múltiples al aire libre. El H670 está diseñado para montaje empotrado en áreas de siembra o
						  de hormigón para la construcción de fachadas, iluminación, muros, árboles y otras aplicaciones
							similares, donde una fuente de luz ajustable controlada es deseable. La serie H670 ofrece un alto
							 rendimiento y durabilidad en una luminaria de calidad.</p>
				</div>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/teardrop led.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/documents/OtherDocuments/TearDrop_LED_OpChar.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand" >teardrop led</span>
					<a class="meta__price" href="#modal100">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal100" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>teardrop led</h2>
					<img src="../images/CON LEDS/teardrop led.jpg"/>
					<P>Ideal para: calles, estacionamientos, Campus, desarrollos comerciales, plazas, barrios
						 históricos, plazas de pueblos, zonas residenciales, parques, calzadas, bulevares, vías de
						 acceso. Diseñado para replicar las luminarias de estilo lágrima, que iluminó avenidas durante
						  la primera mitad del siglo, el Holophane Tear Drop LED ofrece alternativas a la cabeza de
							cobra utilitarios y unidades de caja de zapatos mientras que proporciona una energía sostenible,
							 eficiente y confiable, EFECTIVA luminaria LED para su necesidades de iluminación. Los siguientes
							  son los atributos de las luminarias de la serie lágrima: Clásico, aspecto elegante, de estilo
								urbano de avenidas  Permanente, diseño duradero refractor de vidrio, control de luz prismático,
								 vidrio múltiples estilos óptica; distribución asimétrica de luz; IESNA, ccutoff y fullcutoff,
								 sistema de gestión térmica de alta ingeniería, acceso sin herramientas a los LEDs y componentes
								  eléctricos; Facilidad de mantenimiento y de instalación.</p>
				</div>
			</div>

      <div class="grid__item led">
				<div class="slider">
					<div class="slider__item"><img src="../images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/CON LEDS/WASHINGTON POSTLITE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.acuitybrandslighting.com/library/HLP/Documents/otherdocuments/HL-2442.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">WASHINGTON POSTLITE</span>
					<a class="meta__price">Ver más<>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal100" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>teardrop led</h2>
					<img src="../images/CON LEDS/teardrop led.jpg"/>
					<P>Ideal para: calles, estacionamientos, Campus, desarrollos comerciales, plazas, barrios
						 históricos, plazas de pueblos, zonas residenciales, parques, calzadas, bulevares, vías de
						 acceso. Diseñado para replicar las luminarias de estilo lágrima, que iluminó avenidas durante
							la primera mitad del siglo, el Holophane Tear Drop LED ofrece alternativas a la cabeza de
							cobra utilitarios y unidades de caja de zapatos mientras que proporciona una energía sostenible,
							 eficiente y confiable, EFECTIVA luminaria LED para su necesidades de iluminación. Los siguientes
								son los atributos de las luminarias de la serie lágrima: Clásico, aspecto elegante, de estilo
								urbano de avenidas  Permanente, diseño duradero refractor de vidrio, control de luz prismático,
								 vidrio múltiples estilos óptica; distribución asimétrica de luz; IESNA, ccutoff y fullcutoff,
								 sistema de gestión térmica de alta ingeniería, acceso sin herramientas a los LEDs y componentes
									eléctricos; Facilidad de mantenimiento y de instalación.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2064.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">1700-AGUILA</span>
					<a class="meta__price" href="#modal101">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal101" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>1700-AGUILA</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/1700-AGUILA.jpg"/>
					<P>Ideal para áreas deportivas, patios de maniobra, puertos, astilleros, monumentos. Proyector de
						 alta especificación con cápsula en fundición de aluminio con bajo contenido de cobre. Balastro
						  electromagnético autorregulado. Configuración interna del reflector especular facetado de alta
							 reflectancia que ofrece curvas de distribución tipo NEMA 6X6 conjugado con un cristal
							 termotemplado GS-1700. La conexión de la unidad de potencia se efectua retirando la tapa de
							  conexiones.</p>
				</div>
			</div>

       <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2065.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">EXPRESS VECTOR</span>
					<a class="meta__price" href="#modal102">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal102" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>EXPRESS VECTOR</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/EXPRESS VECTOR.jpg"/>
					<P>Ideal para autopistas, avenidas, boulevares, áreas de seguridad, complejos industriales.
						 Luminario con gran espaciamiento interpostal. Cápsula en fundición de aluminio, fabricada con
						  un tratamiento previo para mayor resistencia a la corrosión. Balastro autorregulado de alto
							factor de potencia con embobinados de cobre. Los componentes eléctricos se colocan en una
							 puerta removible intdependiente que permite retirarlos y cambiarlos como una unidad integral.
							  Refractor de cristal de borosilicato prismático y reflector de aluminio anodizado para curvas
								 tipo II y III. Tres opciones de montaje: horquilla, rótula y horquilla para punta de poste.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2067.pdf" Target="_blank"> Ficha Técnica</a>
					<span class="meta__brand">HALCON MEDIANO</span>
					<a class="meta__price" href="#modal103">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal103" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>HALCON MEDIANO</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON MEDIANO.jpg"/>
					<P>Ideal para áreas deportivas y recreativas, estacionamientos, fachadas, aeropuertos. Proyector
						 para servicio pesado. Cápsula en fundición de aluminio, fabricada con un tratamiento previo para
						  mayor resistencia a la corrosión. Todos los componentes expuestos son de acero inoxidable.
							 Balastro autorregulado de alto factor de potencia, con embobinados de cobre. Los componentes
							  eléctricos se colocan en una puerta removible independientemente. Reflector de aluminio
								anodizado formado con precisión para maximizar la salidad e luz por watt de entrada con una
								 uniformidad óptima. Disponible en distribuciones angosta, abierta y concentrada. Tres opciones
								  de montaje: horquilla, rótula y horquilla para punta de poste.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2068.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">HALCON PEQUEÑO</span>
					<a class="meta__price" href="#modal104">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal104" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>HALCON PEQUEÑO</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/HALCON PEQUEÑO.jpg"/>
					<P>Ideal para áreas deportivas y recreativas, estacionamientos, fachadas, aeropuertos. Proyector
						 para servicio pesado. Cápsula en fundición de aluminio, fabricada con un tratamiento previo para
						  mayor resistencia a la corrosión. Balastro autorregulado del alto factor de potencia con
							 embobinados de cobre.Los componentes eléctricos se colocan en una puerta removible independiente
							  que permite retirarlos y cambiarlos como una unidad integral. Reflector de aluminio anodizado
								 formado con precisión para maximizar la salida de luz por watt de entrada con una uniformidad
						 óptima. Dos opciones de montaje disponibles: horquilla sencilla y horquilla para punta de poste.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.pcdingenieria.com.mx/pdfs/especiales_exteriores/56.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">HOV 16-HOV 25</span>
					<a class="meta__price" href="#modal105">Ver más<a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal105" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>HOV 16-HOV 25</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/HOV 16-HOV 25.jpg"/>
					<P>Ideal para calles, avenidas, ejes viales, boulevares, periféricos, parques, exhibiciones
						 exteriores. Luminario tradicional para alumbrado público. Cápsula en fundición de aluminio,
						  compuesta de dos partes y fabricada con un tratamiento previo para mayor resistencia a la
							corrosión. Balastro autorregulado de alto factor de potencia con embobinado de cobre; con
							 opción de balastro de bajas pérdidas. Cristal de borosilicato con reflector de aluminio
							  de alta reflectancia que proporciona una curva de distribución Nema tipo II y III. Se
								 puede montar a brazo de poste por medio de abrazaderas y efectuar la conexión abriendo
								  la puerta del luminario.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/lmst.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2066.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">lmst</span>
					<a class="meta__price" href="#modal106">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal106" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>lmst</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/lmst.png"/>
					<P>Áreas de estacionamiento, aeropuertos, centros comerciales, instituciones educativas.
            Equipos ascensores para sistemas de bajo montaje. Existe una gran variedad de luminarios
						disponibles. El sistema ascensor de bajo montaje, utiliza un malacate en la base de cada poste
						 y un ensamble de motor portátil. Recomendado para todo tipo de aplicaciones y terrenos. Los
						 seguros de la parte superior al operar brindan confianza y seguridad a los instaladores para
						 montar, retirar o dar mantenimiento a los luminarios. El equipo puede contar con cables de acero
						  inoxidable para ambientes altamente corrosivos.</p>
				</div>
			</div>

        <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2070.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">MONGOOSE</span>
					<a class="meta__price" href="#modal107">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal107" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>MONGOOSE</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/MONGOOSE.jpg"/>
					<P>Ideal para calles, avenidas, ejes viales, boulevares, periféricos, parques, exhibiciones
						 exteriores. Luminario de diseño arquitectónico para alumbrado público. Cápsula compacta,
						  de estilo arquitectónico, fabricada en fundición de aluminio con un tratamiento previo para
							mayor resistencia a la corrosión. El broche de cierre externo de acero inoxidable. Balastro
							 autorregulado de alto factor de potencia, con embobinado de cobre que suministra toda la
							 capacidad de potenica de la lámpara. Reflectores segmentados o parabólicos hidroformados
							  combinados con un lente plano termotemplado, sencillo o refractores de cristal borosilicato
								 prismático para distribuciones Tipo III. Brazos disponibles: arquitectónico, vertical y
								  horizontal. El luminario puede montarse en punta de poste. El mantenimiento y cambio de
									 lámparas se realiza sin herramientas</p>
				</div>
			</div>

         <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2074.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NHMSC-NHMAO</span>
					<a class="meta__price" href="#modal108">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal108" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NHMSC-NHMAO</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/NHMSC-NHMAO.png"/>
					<P>Distribuidores viales, estacionamientos y grandes áreas.
Luminario de alto y medio montaje; balastro integral para lámparas de alta intensidad de descarga. Cápsula
 en fundición de aluminio, fabricada con un tratamiento previo. Balastro de alto factor de potencia con
 embobinado de cobre que proporciona la potencia total requerida por la lámpara. Arranca confiablemente a
  temperaturas tan bajas como los 5º C. El arillo multiperforado contra intemperie permite el paso de
	 corriente de aire por el interior del conjunto óptico para efectos de autolimpieza sin permitir el
	  paso de lluvia, nieve o hielo.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/NHT.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/NTH.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">NHT</span>
					<a class="meta__price" href="#modal109">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal109" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>NHMSC-NHMAO</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/NHT.jpg"/>
					<P>Ideal para distribuidores viales, estacionamientos y grandes áreas. Luminario de alto y medio
						 montaje; balastro integral para lámparas de alta intensidad de descarga. Cápsula en fundición
						 de aluminio. Balastro autorregulado de alto factor de potencia con embobinado de cobre que
						 proporciona la potencia total requerida por la lámpara. Las distribuciones asimétricas,
						 simétricas, largas y angostas son proporcionadas por un reflector de cristal de borosilicato
						 prismático que lleva una cubierta de tipo abierto de aluminio rechazado. En todos los casos la
						  posición de la lámpara es vertical. El herraje de fijación al poste es de tipo deslizante y
							acepta brazo tubular. El arillo multiperforado contra intemperie permite el paso de corriente
							 de aire por el interior del conjunto óptico para efectos de autolimpieza.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2072.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">POSTE SERIE L5</span>
					<a class="meta__price" href="#modal110">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal110" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>POSTE SERIE L5</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/POSTE SERIE L5.jpg"/>
					<P>Ideal para autopistas, carreteras, aeropuertos, puertos marítimos, áreas de estacionamiento,
						 complejos petroquímicos. Ideal para usar de dos a doce luminarios por poste. Equipos ascensores
						  para sistemas de alto montaje. Poste: la serie L5 utiliza un malacate en la base de cada poste
							 y un ensamble de motor portátil. Varias opciones de luminarios: Halcón, NHT, Prismbeam II,
							  Express Vector, Mongoose. Los seguros de acoplamiento de la parte superior, brindan confianza
								 y seguridad a los instaladores para montar, retirar o dar mantenimiento a los luminarios.
								 El arillo ascensor de gran estabilidad, incluye tres seguros superiores con brazos guìa,
								  autocentrados, tipo iris de contacto continuo para mantener el arhillo con luminarios
									 nivelado y centrado durante el ascenso o descenso en el poste. El equipo cuenta con cables
									  de acero inoxidable para ambientes altamente corrosivos.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2076.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">PRISMBEAM II</span>
					<a class="meta__price" href="#modal111">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal111" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>PRISMBEAM II</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/PRISMBEAM II.jpg"/>
					<P>Proyector con balastro integral para lámparas de alta intensidad de descarga. Cápsula en
						fundición de aluminio fabricada con un tratamiento previo para mayor resistencia a la corrosión.
						 El acabado cumple con lo establecido en la Norma Oficial Mexicana en cámara salina y prueba de
						  adhesión. Todo el herraje externo es de acero inoxidable. Adecuados para uso a la orilla del
							 mar así como condisiones de severos ambientes industriales. Balastro autorregulado de alto
							  factor de potencia con embobinado de cobre. Reflectores de aluminio rechazado, conjugados
								 con refractores de cristal de borosilicato prismático para patrones de luz asimétricos o
								 con lentes de cristal termotemplado claro para patrones de luz simétricos. La reposición de
								  las lámparas sin necesidad de herramientas se logra por medio de cuatro cerrojos, de acero
									 inoxidable, de operación manueal.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2078.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">SIGN VUE</span>
					<a class="meta__price" href="#modal112">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal112" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>SIGN VUE</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/SIGN VUE.jpg"/>
					<P>Para aplicaciones de iluminación de vallas publicitarias, carteles en concreto más grande.
             Regístrate-Vue II Óptica - El de una sola pieza se contornea reflector de aluminio
						 hidroformado para distribuir la luz a través del telescopio refractor de vidrio borosilicato.
						  Con un corte preciso prismas dirigir la luz en la cartelera de la máxima eficiencia y
							uniformidad. fundido resistente carcasa de aluminio contiene el reflector diseñado con
							precisión, altamente eficiente integrante de lastre, Super lámpara de aditivos metálicos y
							 el zócalo, dispone de interruptor on / off, y la puerta de fundición de alta resistencia,
							  sellado con juntas elemento resistente duras.
								Montaje - Conducciones (1 1 / 4 "redondo o 1 1 / 2" tubo cuadrado) encaja perfectamente en la
								 luminaria, medidas drásticas para impedir la rotación.</p>
				</div>
			</div>

      <div class="grid__item alto">
				<div class="slider">
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
					<div class="slider__item"><img src="../images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg" alt="Dummy" /></div>
				</div>
				<div class="meta">
					<a class="meta__title" href="http://www.artefactosluminicos.com.mx/Fichas_Tecnicas/Pagina%20No%2069.pdf" Target="_blank">Ficha Técnica</a>
					<span class="meta__brand">tunel predator</span>
					<a class="meta__price" href="#modal113">Ver más</a>
				</div>
				<button class="action action--button action--buy"><i></i><span class="text-hidden">Add to cart</span></button>
			</div>

			<div id="modal113" class="modalmask">
				<div class="modalbox rotate">
					<a href="#close" title="Cerrar" class="close">X</a>
					<h2>tunel predator</h2>
					<img src="../images/SISTEMAS DE ALTO MONTAJE/tunel predator.jpg"/>
					<P>Proyector para iluminación de túneles. Cápsula en fundición de aluminio, fabricada con un
						 tratamiento previo. Balastro auto-regulado de alto factor de potencia (superior a 90%),
						 con embobinados de cobre, 100% probados para dar la emisión lumínica completa de la lámpara
						  con menor consumo de energía. Los componentes eléctricos se colocan en una puerta removible
							 independiente que permite retirarlos y cambiarlos como una unidad integral. Reflector de
							 aluminio anodizado formado con precisión para maximizar la salida de luz por watt de entrada
							 con una uniformidad óptima.</p>
				</div>
			</div>

		</section>
		<!-- /grid-->
	</div>
	<!-- /view -->
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
