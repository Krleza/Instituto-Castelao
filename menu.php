<ul class="sf-menu header_right">
	<li class="submenu<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" || $_GET["page"]=="home_3" || $_GET["page"]=="home_4" || $_GET["page"]=="home_5" || $_GET["page"]=="home_small_slider" ? " selected" : ""); ?>">
		<a href="?page=home" title="INICIO">
			INICIO
		</a>
		
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="galicia" || $_GET["page"]=="galeria#filter=.galicia" || $_GET["page"]=="personal" || $_GET["page"]=="galeria" || $_GET["page"]=="malaga" || $_GET["page"]=="galeria#filter=.malaga"  ? " selected" : ""); ?>">
		<a href="#" title="NUESTROS CENTROS">
			NUESTROS CENTROS
		</a>
		<ul>
			<li<?php echo ($_GET["page"]=="galicia" ? " class='selected'" : ""); ?>>
				<a href="?page=galicia" title="Nuestro centro en Galicia">
					Galicia
				</a>
                            
                                <ul class="wide">
					<li>
						<a href="?page=galicia" title="Features Styles">
							El centro
						</a>
					</li>
					<li>
						<a href="?page=galeria#filter=.galicia" title="Carousel">
							Galería
						</a>
					</li>
                                        <li>
						<a href="?page=personal" title="Carousel">
							Equipo médico
						</a>
					</li>

				</ul>
                            
			</li>
			<li<?php echo ($_GET["page"]=="malaga" || $_GET["page"]=="malaga" ? " class='selected'" : ""); ?>>
				<a href="?page=malaga" title="malaga">
					Málaga
				</a>

				<ul class="wide">
					<li>
						<a href="?page=malaga" title="Features Styles">
							El centro
						</a>
					</li>
					<li>
						<a href="?page=galeria#filter=.malaga" title="Carousel">
							Galería
						</a>
					</li>
                                        <li>
						<a href="?page=personal" title="Carousel">
							Equipo médico
						</a>
					</li>
				</ul>
				
			</li>

		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="enfermedad" || $_GET["page"]=="adiccion" || $_GET["page"]=="diagnostico" || $_GET["page"]=="voluntad" || $_GET["page"]=="ayuda" ? " selected" : ""); ?>">
		<a href="#" title="LA ADICCION">
			LA ADICCIÓN
		</a>
		<ul>
                        <li<?php echo ($_GET["page"]=="enfermedad" ? " class='selected'" : ""); ?>>
				<a href="?page=enfermedad" title="La enfermedad">
					La enfermedad
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="adiccion" ? " class='selected'" : ""); ?>>
				<a href="?page=adiccion" title="¿Qué es una adicciï¿½n?">
					¿Qué es una adicción?
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="diagnostico" ? " class='selected'" : ""); ?>>
				<a href="?page=diagnostico" title="ï¿½Cï¿½mo se diagnostica?">
					¿Cómo se diagnostica?
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="voluntad" ? " class='selected'" : ""); ?>>
				<a href="?page=voluntad" title="Cuando la voluntad no puede">
					Cuando la voluntad no puede
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="ayuda" ? " class='selected'" : ""); ?>>
				<a href="?page=ayuda" title="La ayuda necesaria">
					La ayuda necesaria
				</a>
			</li>
			
		</ul>
	</li>
	<li class="submenu wide<?php echo ($_GET["page"]=="test" ? " selected" : ""); ?>">
		<a href="?page=test" title="TEST SINTOMATICO">
			TEST SINTOMÁTICO
		</a>
		
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="tratamiento" || $_GET["page"]=="objetivos" || $_GET["page"]=="fases" || $_GET["page"]=="abordaje" || $_GET["page"]=="familiares" ? " selected" : ""); ?>">
		<a href="#" title="EL TRATAMIENTO">
			EL TRATAMIENTO
		</a>
		<ul class="submenu">
                    	<li>
				<a href="?page=tratamiento" title="El tratamiento hipocrates">
					El tratamiento Hipócrates
				</a>
			</li>
			<li>
				<a href="?page=objetivos" title="Obejtivos del tratamiento">
					Obejtivos del tratamiento
				</a>
			</li>
			<li>
				<a href="?page=fases" title="Fases del tratamiento">
					Fases del tratamiento
				</a>
			</li>
			<li>
				<a href="?page=abordaje" title="Abordaje terapï¿½utico">
					Abordaje terapéutico
				</a>
			</li>
			<li>
				<a href="?page=familiares" title="familiares y pareja">
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
				<a href="?page=alcohol" title="2 Columns">
					Alcohol
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="cocaina" ? " class='selected'" : ""); ?>>
				<a href="?page=cocaina" title="3 Columns">
					Cocaína
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="cannabis" ? " class='selected'" : ""); ?>>
				<a href="?page=cannabis" title="4 Columns">
					Cannabis
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="varias" ? " class='selected'" : ""); ?>>
				<a href="?page=varias" title="With Sidebar">
					Varias drogas
				</a>
			</li>
		</ul>
	</li>
	<li<?php echo ($_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
		<a href="?page=contact" title="CONTACTO">
			CONTACTO
		</a>
	</li>
</ul>


	<div class="top_hint">
		<span class="resp_hide">Llamada gratuita:</span> <a href="tel:900-505-100">900 505 100</a>
	</div>

<div id='cssmenu' class="header_right">
<ul id='slidemenu'>
   <li><a href='?page=home'><span>Inicio</span></a></li>
   <li class='has-sub'><a href='#'><span>Nuesros Centros</span></a>
      <ul>
         <li><a href='?page=galicia'><span>Galicia</span></a>
         </li>
         <li class='last'><a href='?page=malaga'><span>Málaga</span></a>
         </li>
      </ul>
   </li>
  
   <li class='has-sub'><a href='#'><span>La adicción</span></a>
      <ul>
        <li><a href='?page=enfermedad'><span>La enfermedad</span></a></li>
        <li><a href='?page=adiccion'><span>¿Qué es una adicción?</span></a></li>
        <li><a href='?page=diagnostico'><span>¿Cómo se diagnostica?</span></a></li>
        <li><a href='?page=voluntad'><span>Cuando la voluntad no es suficiente</span></a></li>
        <li class='last'><a href='?page=ayuda'><span>La ayuda necesaria</span></a></li>
      </ul>
   </li>
    

   <li><a href='?page=test'><span>Test sintomático</span></a></li>
   
    <li class='has-sub'><a href='#'><span>El tratamiento</span></a>
      <ul>
        <li><a href='?page=tratamiento'><span>El tratamiento Hipócrates</span></a></li>
        <li><a href='?page=objetivos'><span>Objetivos del tratamiento</span></a></li>
        <li><a href='?page=fases'><span>Fases del tratamiento</span></a></li>
        <li><a href='?page=abordaje'><span>El abordaje terapeútico</span></a></li>
        <li class='last'><a href='?page=familiares'><span>Familiares y pareja</span></a></li>
      </ul>
   </li>
   
    <li class='has-sub'><a href='#'><span>Sustancias</span></a>
      <ul>
        <li><a href='?page=alcohol'><span>Alcohol</span></a></li>
        <li><a href='?page=cocaina'><span>Cocaína</span></a></li>
        <li><a href='?page=cannabis'><span>Cannabis</span></a></li>
        <li class='last'><a href='?page=varias'><span>Varias Drogas</span></a></li>
      </ul>
   </li>

   <li class='last'><a href='?page=contact'><span>Contacto</span></a></li>
</ul>
</div>



