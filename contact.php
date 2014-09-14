<?php
require_once("contact_form/config.php");
?>
<div class="page relative">
	<div class="page_layout page_margin_top clearfix">
		<div class="page_header clearfix">
			<div class="page_header_left">
				<h1 class="page_title">Contacto</h1>

			</div>
			
		</div>
		<div class="clearfix">
			<div class="contact_map page_margin_top" id="map">
			</div>
			<div class="page_margin_top clearfix">
				<div class="page_left">
					<h3 class="box_header">
						Solicite informacion a traves de nuestro formulario online o llame gratuitamente.
                                        </h3>
                                    <br><br>
                                    <span class="tlf">900 505 100</span>
					
                                    <p>
                                        Pedir ayuda es el primer paso para superar la enfermedad. Nuestro equipo de asesoramiento estará encantado de atender a sus dudas respecto a las adicciones y su tratamiento.
                                    </p>
                                    <p>
                                        Instituto Castelao ofrece una semana de valoración donde el paciente puede comprobar la eficacia del tratamiento.
                                    </p>
                                    <p>
                                        Si lo desea puede concertar una visita a nuestro centro para conocernos y que podamos valorar su caso.
                                    </p>
					<form class="contact_form" id="contact_form" method="post" action="contact_form/contact_form.php">
						<ul class="clearfix tabs_box_navigation sf-menu">
							<li class="tabs_box_navigation_selected submenu wide">
								<input type="hidden" name="department" value="" />
								<span>Indiquenos el motivo de su consulta:</span>
								<ul>
									<li>
										<a href="#laryngological-clinic" title="Laryngological Clinic">
											Familiar de una persona adicta
										</a>
									</li>
									<li>
										<a href="#primary-health-care" title="Primary Health Care">
											Adicto
										</a>
									</li>
									<li>
										<a href="#ophthalmology-clinic" title="Ophthalmology Clinic">
											Dudas o consultas sobre la adicción
										</a>
									</li>
									
								</ul>
							</li>
						</ul>
						<fieldset class="left">
							<label>Nombre</label>
							<div class="block">
								<input class="text_input" name="first_name" type="text" value="" />
							</div>
						</fieldset>
						<fieldset class="right">
							<label>E-mail</label>
							<div class="block">
								<input class="text_input" type="text" name="email" value="" />
							</div>
						</fieldset>
						<fieldset style="clear:both;">
							<label>Escriba aquí su consulta</label>
							<div class="block">
								<textarea name="message"></textarea>
							</div>
							<input type="hidden" name="action" value="contact_form" />
							<input type="submit" name="submit" value="Enviar" class="more blue" />
						</fieldset>
					</form>
				</div>
				<div class="page_right">
					<h3 class="box_header">
						Instituto Castelao
					</h3>
					<h3 class="sentence">
                                                Las consultas via Internet son tratadas de forma absolutamente confidencial y respondidas por nuestro equipo médico y terapéutico. 
                                        </h3>
					<ul class="columns no_padding page_margin_top clearfix">
						<li class="column_left">
							Instituto Castelao<br />
							Calle Darwin, 6<br />
							Santa Cristina Oleiros<br />
							15172 A coruña, España
						</li>
						<li class="column_right">
							Telefono: 981 634 925<br />
							Codigo de registo en la seguridad social: <br />C-15-002325 <br />
							
						</li>
					</ul>
					<ul class="contact_data page_margin_top">
						<li class="clearfix">
							<span class="social_icon phone"></span>
							<p class="value">
								Phone: <strong>900 505 100</strong>
							</p>
						</li>
						<li class="clearfix">
							<span class="social_icon mail"></span>
							<p class="value">
								E-mail: <a href="mailto:info@institutocastelao.com">info@institutocastelao.com</a>
							</p>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>