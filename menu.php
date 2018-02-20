<ul class="sf-menu header_right">
	<li class="submenu<?php echo ($_GET["page"]=="home" ? " selected" : ""); ?> border">
		<a href="home" title="INICIO">
			INICIO
		</a>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="galicia" || $_GET["page"]=="galeria#filter=.galicia" || $_GET["page"]=="personal" || $_GET["page"]=="galeria" || $_GET["page"]=="malaga" || $_GET["page"]=="galeria#filter=.malaga"  ? " selected" : ""); ?>">
		<a href="#" title="NUESTROS CENTROS">
			CENTROS
		</a>
		<ul>
         <li<?php echo ($_GET["page"]=="alicante" || $_GET["page"]=="madrid" ? " class='selected'" : ""); ?>>
				<a href="madrid" title="Madrid">
					Madrid
				</a>				
			</li>
			<li<?php echo ($_GET["page"]=="galicia" ? " class='selected'" : ""); ?>>
				<a href="galicia" title="Nuestro centro en Galicia">
					Galicia
				</a>
                            
                    <ul class="wide">
					<li>
						<a href="galicia" title="El centro de Galicia">
							El centro
						</a>
					</li>
					<li>
						<a href="galeria#filter=.galicia" title="Galería de Galicia ">
							Galería
						</a>
					</li>
                    <!-- <li>
						<a href="personal" title="Carousel">
							Equipo de dirección
						</a>
					</li> -->

				</ul>
                            
			</li>
			<li<?php echo ($_GET["page"]=="malaga" || $_GET["page"]=="malaga" ? " class='selected'" : ""); ?>>
				<a href="malaga" title="Málaga">
					Andalucía
				</a>

				<ul class="wide">
					<li>
						<a href="malaga" title="El centro de Andalucía">
							El centro
						</a>
					</li>
					<li>
						<a href="galeria#filter=.malaga" title="Galería de Andalucía">
							Galería
						</a>
					</li>
                  <!--  <li>
						<a href="personal" title="Carousel">
							Equipo de dirección

						</a>
					</li> -->
				</ul>
				
			</li>
			<li<?php echo ($_GET["page"]=="alicante" || $_GET["page"]=="alicante" ? " class='selected'" : ""); ?>>
				<a href="alicante" title="Alicante">
					Alicante
				</a>

				
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="enfermedad" || $_GET["page"]=="adiccion" || $_GET["page"]=="diagnostico" || $_GET["page"]=="voluntad" || $_GET["page"]=="ayuda" ? " selected" : ""); ?>">
		<a href="#" title="LA ADICCION">
			LA ADICCIÓN
		</a>
		<ul>
                        <li<?php echo ($_GET["page"]=="enfermedad" ? " class='selected'" : ""); ?>>
				<a href="enfermedad" title="La enfermedad">
					La enfermedad
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="adiccion" ? " class='selected'" : ""); ?>>
				<a href="adiccion" title="¿Qué es una adicción?">
					¿Qué es una adicción?
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="diagnostico" ? " class='selected'" : ""); ?>>
				<a href="diagnostico" title="¿Cómo se diagnostica?">
					¿Cómo se diagnostica?
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="voluntad" ? " class='selected'" : ""); ?>>
				<a href="voluntad" title="Cuando la voluntad no puede">
					Cuando la voluntad no puede
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="ayuda" ? " class='selected'" : ""); ?>>
				<a href="ayuda" title="La ayuda necesaria">
					La ayuda necesaria
				</a>
			</li>
			
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="test" ? " selected" : ""); ?> border">
		<a href="test" title="TEST SINTOMATICO">
			TEST
		</a>
		
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="tratamiento" || $_GET["page"]=="objetivos" || $_GET["page"]=="fases" || $_GET["page"]=="abordaje" || $_GET["page"]=="familiares" ? " selected" : ""); ?>">
		<a href="#" title="EL TRATAMIENTO">
			TRATAMIENTO
		</a>
		<ul class="submenu">
                    	<li>
				<a href="tratamiento" title="El tratamiento Castelao">
					El tratamiento Castelao
				</a>
			</li>
			<li>
				<a href="objetivos" title="Objetivos del tratamiento">
					Objetivos del tratamiento
				</a>
			</li>
			<li>
				<a href="fases" title="Fases del tratamiento">
					Fases del tratamiento
				</a>
			</li>
			<li>
				<a href="abordaje" title="Abordaje terapéutico">
					Abordaje terapéutico
				</a>
			</li>
			<li>
				<a href="familiares" title="familiares y pareja">
					Familiares y pareja
				</a>
			</li>
			
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="alcohol" || $_GET["page"]=="cocaina" || $_GET["page"]=="cannabis" || $_GET["page"]=="varias" ? " selected" : ""); ?>">
		<a href="#" title="SUSTANCIAS">
			SUSTANCIAS
		</a>
		<ul>
			<li<?php echo ($_GET["page"]=="alcohol" ? " class='selected'" : ""); ?>>
				<a href="alcohol" title="Alcohol">
					Alcohol
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="cocaina" ? " class='selected'" : ""); ?>>
				<a href="cocaina" title="Cocaína">
					Cocaína
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="cannabis" ? " class='selected'" : ""); ?>>
				<a href="cannabis" title="Cannabis">
					Cannabis
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="varias" ? " class='selected'" : ""); ?>>
				<a href="varias" title="Varias drogas">
					Varias drogas
				</a>
			</li>
		</ul>
	</li>
    	<li class="submenu<?php echo ($_GET["page"]=="testimonios" ? " selected" : ""); ?> border">
		<a href="testimonios" title="TESTIMONIOS">
			TESTIMONIOS
		</a>
		
	</li>
	<li<?php echo ($_GET["page"]=="prensa" ? " class='selected'" : ""); ?>>
		<a href="prensa" title="PRENSA">
			PRENSA
		</a>
	</li>
    	<li<?php echo ($_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
		<a href="contact" title="CONTACTO">
			CONTACTO
		</a>
	</li>
</ul>


	<div class="toptel" >
             <span class="resp_hide">24h: </span><a onclick="goog_report_conversion('tel:900-505-100')" href="tel:900505100" >900 505 100</a>
        

	</div>
	<div class="top_hint" >
<a class="resp_hide claro" onclick="goog_report_conversion('tel:918-339-026')" href="#" >Madrid: 918 339 026<br> </a>
		<a class="resp_hide claro" onclick="goog_report_conversion('tel:981-639-921')" href="#" >Galicia: 981 639 921<br> </a>
        <a class="resp_hide claro" onclick="goog_report_conversion('tel:951-209-201')" href="#" >Andalucía: 951 209 201<br> </a>
        <a class="resp_hide  claro" onclick="goog_report_conversion('tel:965-775-655')" href="#" >Alicante: 965 775 655<br> </a>
		
	</div>
	<div class="titulo" >
		<h1 class="resp_hide tit_main">INSTITUTO CASTELAO</h1> 
		<h2 class="serv">Centros médicos para el tratamiento de adicciones</h2> 
	</div>

<div id='cssmenu' class="header_right">
<ul id='slidemenu'>
   <li class='has-sub'><a href='#'><span>Centros</span></a>
      <ul>
          <li><a href='madrid'><span>Madrid</span></a>
         </li>
         <li><a href='galicia'><span>Galicia</span></a>
         </li>
         <li><a href='malaga'><span>Andalucía</span></a>
         </li>
          <li class='last'><a href='alicante'><span>Alicante</span></a>
         </li>
      </ul>
   </li>
  
   <li class='has-sub'><a href='#'><span>La adicción</span></a>
      <ul>
        <li><a href='enfermedad'><span>La enfermedad</span></a></li>
        <li><a href='adiccion'><span>¿Qué es una adicción?</span></a></li>
        <li><a href='diagnostico'><span>¿Cómo se diagnostica?</span></a></li>
        <li><a href='voluntad'><span>Cuando la voluntad no es suficiente</span></a></li>
        <li class='last'><a href='ayuda'><span>La ayuda necesaria</span></a></li>
      </ul>
   </li>
    

   <li><a href='test'><span>Test sintomático</span></a></li>
   
    <li class='has-sub'><a href='#'><span>El tratamiento</span></a>
      <ul>
        <li><a href='tratamiento'><span>El tratamiento Castelao</span></a></li>
        <li><a href='objetivos'><span>Objetivos del tratamiento</span></a></li>
        <li><a href='fases'><span>Fases del tratamiento</span></a></li>
        <li><a href='abordaje'><span>El abordaje terapeútico</span></a></li>
        <li class='last'><a href='familiares'><span>Familiares y pareja</span></a></li>
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Sustancias</span></a>
      <ul>
        <li><a href='alcohol'><span>Alcohol</span></a></li>
        <li><a href='cocaina'><span>Cocaína</span></a></li>
        <li><a href='cannabis'><span>Cannabis</span></a></li>
        <li class='last'><a href='varias'><span>Varias Drogas</span></a></li>
      </ul>
   </li>
    <li><a href='testimonios'><span>Testimonios</span></a></li>
    <li><a href='prensa'><span>Prensa</span></a></li>
<li><a href='docs/Instituto-Castelao.pdf'><span>Guía informativa</span></a></li>
   <li class='last'><a href='contact'><span>Contacto</span></a></li>
</ul>
</div>



