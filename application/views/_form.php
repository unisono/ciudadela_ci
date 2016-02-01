<body>
    
    
				<div id="pageoptions">
			<ul>
				<li><?php echo anchor('nadairreal/logout', 'Salir') ?></li>
				
			</ul>
			<div>
						<h3>Place for some configs</h3>
						<p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores.</p>
			</div>
		</div>

			<header style="display: none;">
		<div id="logo">
			<a href="test.html">Logo Here</a>
		</div>
		<div id="header" style="display: none;">
			<ul id="headernav">
				<li><ul>
					<li><a href="icons.html">Icons</a><span>300+</span></li>
					<li><a href="#">Submenu</a><span>4</span>
						<ul>
							<li><a href="#">Just</a></li>
							<li><a href="#">another</a></li>
							<li><a href="#">Dropdown</a></li>
							<li><a href="#">Menu</a></li>
						</ul>
					</li>
					<li><a href="login.html">Login</a></li>
					<li><a href="wizard.html">Wizard</a><span>Bonus</span></li>
					<li><a href="#">Errorpage</a><span>new</span>
                                            
						<ul>
							<li><a href="error-403.html">403</a></li>
							<li><a href="error-404.html">404</a></li>
							<li><a href="error-405.html">405</a></li>
							<li><a href="error-500.html">500</a></li>
							<li><a href="error-503.html">503</a></li>
						</ul>
					</li>
				</ul></li>
			</ul>
			<div id="searchbox">
				<form id="searchform">
					<input type="search" name="query" id="search" placeholder="Search">
				</form>
			</div>
		</div>
	</header> 

    
				<nav>
                                    
                                        
                                       
			<ul id="nav">
                           
                            <?php foreach ($todas_categorias as $t){ ?>
                            
                            <?php $count = ($t['cantidad_topicos']==0) ?'' :'<strong class="cantidad">'.$t['cantidad_topicos'].'</strong></span>' ; ?>
                            <li class="i_create_write"><?php 
                                echo anchor('nadairreal/dashboard/'.$this->uri->segment(3).'/'. $t['id_categoria'] , 
                                '<span>'. $t["titulo"]. $count, 
                               ($this->uri->segment(4)==$t['id_categoria'] ?"class=active" : "") ) ?>
                            
                            </li>
                            <?php } ?>

			</ul>
                                    <?php    ?>
		</nav>
		
			
		<section id="content">
			
			<div class="g12">
                            
                            <h3 class="tema"><span class="tema">TEMA: <?php echo $temas[0]['tema'] ?></span><span class="fecha-inicio"> Proximo N.I: <?php echo tiempo_transcurrido($temas[0]['fecha_inicio']); ?></span> <?php echo  $_SESSION['username']?><h3>
			<h1 style="font-size: 60px;"><?php echo $categorias[0]['titulo']; ?> </h1>
			<script>
                            $(document).ready(function() {
                           // $('.chat').addClass('loading');
                            //$('<div class="loading">Cargando...</div>').appendTo('.widgets');
                            
                               
                      // $('.chat').load('/ciudadela/nadairreal/chat/<?php echo $this->uri->segment(3) ?>/<?php echo $this->uri->segment(4) ?>');
                        //  $('.chat').removeClass('loading');
                        
                            });
                        </script>
                        
                       
                        
                       
                       
                        <button id="boxSet"  class="i_speech_bubble icon green" style="float:right; margin-bottom: 20px; margin-top:-30px;">Crear Nuevo Topico</button>
                       
                        
                        <div style="clear:both;"></div>
                        <input id="cat" type="hidden" value="<?php echo $categorias[0]['id_categoria']; ?>">
                        
<div class="b-c"  style="display:none; box-shadow: 10px 14px 100px 10px #999; position:fixed; top:-112%; z-index: 99999; right: 20%">
                        </div>


                        
                        
                        
                        
                        
                        
    <div class="widgets" style="clear:both; "> 
                        
             <div class="widget" id="ajax_widget_reload" data-load="/nadairreal/chat/<?php echo $this->uri->segment(3) ?>/<?php echo $this->uri->segment(4) ?>" data-reload="30" data-remove-content="false">
					<h3 class="handle">TOPICOS: <?php echo $count; ?></h3>
					<div class="chat">
						<?php $this->load->view('chat'); ?>
					</div>
                        </div> 
                </div>
                            
                     
<!--                        <form id="form" action="/ciudadela/nadairreal/posteos" method="post" autocomplete="off">
                            <fieldset>
						<label>VIDEO INTRODUCCION</label>
						
						<section><label for="textarea_auto">Comentarios<br><span>(W)hat (y)ou (s)ee (i)s (w)hat (y)ou (g)et</span></label>
							<div><textarea id="textarea_wysiwyg" name="texto" class="html" rows="12"></textarea>
							</div>
						</section>
                                               <input name="topico" title="A Tooltip"  type="hidden" id="text_tooltip" value="<?php echo $chat[0]['id_topico']; ?>" >
                                                
                                                <section>
							<label>Tipo de respuesta</label>
							<div>
								<input type="radio" id="apples_radio" name="tipo" value="1" ><label for="apples_radio">Respuesta al último comentario</label>
								<input type="radio" id="bananas_radio" name="tipo" value="0" ><label for="bananas_radio">Comentario</label>
								
							</div>
						</section>
                                                <section>
							<div><button class="reset">Reset</button><button class="submit" name="posteo-chat" value="submitbuttonvalue">Submit</button></div>
						
                                                </section>
					</fieldset>
                            
                        </form>
			

				<form id="form" action="submit.php" method="post" autocomplete="off">
					<fieldset>
						<label>Text Fields</label>
						<section><label for="text_field">Text Field</label>
							<div><input type="text" id="text_field" name="text_field"></div>
						</section>
						<section><label for="text_tooltip">Field with Tooltip</label>
							<div><input type="text" id="text_tooltip" name="text_tooltip" title="A Tooltip">
							<span>Just specify a title attribut to get a Tooltip</span>
							</div>
						</section>
						<section><label for="text_tooltip">Placeholder Text</label>
							<div><input type="text" id="text_placeholder" name="text_placeholder" placeholder="your placeholder text">
							<span>use the placeholder attribute <code>placeholder="your placeholder text"</code></span>
							</div>
						</section>
						<section><label for="textarea">Textarea</label>
							<div><textarea id="textarea" name="textarea" rows="10"></textarea></div>
						</section>
						<section><label for="textarea_auto">Autogrow Textarea<br><span>Some extra information</span></label>
							<div><textarea id="textarea_auto" name="textarea_auto" data-autogrow="true"></textarea>
								<span>will expand after you hit the bottom edge</span>
							</div>
						</section>
						<section><label for="textarea_auto">WYSIWYG Editor<br><span>(W)hat (y)ou (s)ee (i)s (w)hat (y)ou (g)et</span></label>
							<div><textarea id="textarea_wysiwyg" name="textarea_wysiwyg" class="html" rows="12"></textarea>
							</div>
						</section>
					</fieldset>
					<div class="alert info">Some Fields are MouseWheel enabled!</div>
					<fieldset>
					<label>Numbers</label>
						<section><label for="integer">Integer</label>
							<div><input id="integer" name="integer" type="number" class="integer">
							<br><span>This must be an integer</span>
							</div>
						</section>
						<section><label for="decimal">Decimal</label>
							<div><input id="decimal" name="decimal" type="number" class="decimal">
							<br><span>This must be a decimal number</span>
							</div>
						</section>
						<section><label for="integer_minmax">Define min and max values</label>
							<div><input id="integer_minmax" name="integer_minmax" type="number" class="integer" min="20" max="40"><input id="decimal_minmax" name="decimal_minmax" type="number" class="decimal" min="-20" max="20">
							<br><span>Define ranges with <code>data-min="20" data-max="40"</code> and <code>data-min="-20" data-max="20"</code></span>
							</div>
						</section>
						<section><label for="integer_minmax">Define steps<br><span>only for mousewheel</span></label>
							<div><input id="integer_steps" name="integer_steps" type="number" class="integer" data-step="50" title="Use your MouseWheel!"><input id="decimal_steps" name="decimal_steps" type="number" class="decimal" step="0.04" data-decimals="4">
							<br><span>Define steps with <code>data-step="50"</code> and <code>data-step="0.04" data-decimals="4"</code></span>
							</div>
						</section>
						<section><label for="integer_start_from">Define a start<br><span>only for mousewheel</span></label>
							<div><input id="integer_start_from" name="integer_start_from" type="number" class="integer" data-start="1900" min="1900"> - <input id="integer_start_to" name="integer_start_to" type="number" class="integer" data-start="2000" max="2011">
							<br><span>Simulate Year Fields with <code>data-start="1900" data-min="1900"</code> and <code>data-start="2000" data-max="2011"</code></span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>Validation <span>with regular expressions</span></label>
						<section><label for="regex_letter">Only Letters</label>
							<div><input id="regex_letter" name="regex_letter" type="text" data-regex="^[a-zA-Z ]+$"><span>Regular Expression: <code>data-regex="^[a-zA-Z ]+$"</code></span></div>
						</section>
						<section><label for="regex_number">Only Numbers</label>
							<div><input id="regex_number" name="regex_number" type="text" data-regex="^[0-9 ]+$"><span>Regular Expression: <code>data-regex="^[0-9 ]+$"</code></span></div>
						</section>
						<section><label for="email">Email</label>
							<div><input id="email" name="email" type="email"></div>
						</section>
						<section><label for="url">Url</label>
							<div><input id="url" name="url" type="url" placeholder="http://">
							<br><span>Instant is off for URLs. Use <code>data-instant="true"</code> for instant validation</span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>File Upload <span>not all files are allowed in the livepreview</span></label>
						<section><label for="file_upload">Single File Upload<br><span>your uploaded data will get delete within 1 hour</span></label>
							<div><input type="file" id="file_upload" name="file_upload"></div>
						</section>
						<section><label for="file_upload_multiple">Multi File Upload</label>
							<div><input type="file" id="file_upload_multiple" name="file_upload_multiple" multiple>
							</div>
						</section>
						<section><label for="file_upload_manual">Manual start<br><span>only jpgs and gifs are allowed with less than 100 kb</span></label>
							<div><input type="file" id="file_upload_manual" name="file_upload_manual" data-auto-upload="false" multiple data-allowed-extensions="[jpg,jpeg,gif]" data-max-file-size="100000">
							<span>drag &amp; drop is currenlty only supported on Firefox 3.6+ Safari 5+ and Chrome 6+</span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>Other Fields</label>
						<section><label for="password">Password<br><span>with confirmation</span></label>
							<div><input type="password" id="password" name="password"></div>
						</section>
						<section><label for="color">Color</label>
							<div><input type="text" id="color" name="color" class="color"><br>
							<span>use mousewheel for brightness, mousewheel+shift for saturation and mousewheel+shift+alt for hue (not supported in all browsers)</span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>Autocomplete</label>
						<section><label for="autocomplete">Simple Autocomplete</label>
							<div><input id="autocomplete" name="autocomplete" type="text" class="autocomplete">
							<br><span>the source is defined within the call <code>$(selector).wl_Autocomplete({source:[...,...]});</code></span>
							</div>
						</section>
						<section><label for="autocomplete_inline">Autocomplete with inline data</label>
							<div><input id="autocomplete_inline" name="autocomplete_inline" type="text" class="autocomplete" data-source="[abc,def,ghi,jkl,mno,pqr,stu,vwx,yz]">
							<br><span>inline data with <code>data-source="[abc,def,ghi,jkl,mno,pqr,stu,vwx,yz]"</code></span>
							</div>
						</section>
						<section><label for="autocomplete_function">Autocomplete with user function</label>
							<div><input id="autocomplete_function" name="autocomplete_function" type="text" class="autocomplete" data-source="myAutocompleteFunction">
							<br><span>source is a user function with <code>data-source="myAutocompleteFunction"</code>. Function must return an array</span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>Date &amp; Time</label>
						<section><label for="date">Simple Date Field</label>
							<div><input id="date" name="date" type="text" class="date">
							<br><span>You can define displayed format within the settings. yyyy-mm-dd will always be used on submit</span>
							</div>
						</section>
						<section><label for="datetime">Date Field with Time<br><span>mousewheel enabled!</span></label>
							<div><input id="datetime" name="datetime" type="text" class="date"><input type="text" class="time" data-connect="datetime">
							<br><span>These fields get converted to a single date value on submit (yyyy-mm-dd hh:mm)</span>
							</div>
						</section>
						<section><label for="predefined_time">Predefined Time</label>
							<div><input id="predefined_time" name="predefined_time" type="text" class="date" data-value="+7"><input type="text" class="time" data-connect="predefined_time" data-value="now">
							<br><span>This fields always display the date in one week with <code>data-value="+7"</code> for the date field and <code>data-value="now"</code> for the time field</span>
							</div>
						</section>
						<section><label for="time_only_12">Time only</label>
							<div><input type="text" class="time" id="time_only_12" data-timeformat="12"><input type="text" class="time" id="time_only_24" title="Hold down the shift key to scroll hours!">
							<br><span>Use 12h timeformat with <code>data-timeformat="12"</code>. Both fields are always in 24h format on submit</span>
							</div>
						</section>
						<section><label>Inline Date Field<br><span>mousewheel enabled! Use shift key to scroll trough month</span></label>
							<div><div class="date" id="inline_date" data-value="tomorrow"></div>
							<br><span>yyyy-mm-dd on submit. Can't be undefined</span>
							</div>
						</section>
					</fieldset>
					<fieldset>
					<label>Sliders <span>working on iPhone and iPad!</span></label>
						<section><label>Slider</label>
							<div><div class="slider" id="slider"></div></div>
						</section>
						<section><label>vertical Sliders</label>
							<div>
								<div>
									<div class="slider" data-connect="slider_v_1" data-orientation="vertical" data-range="min"></div>
									<div class="slider" data-connect="slider_v_2" data-orientation="vertical" data-range="min"></div>
									<div class="slider" data-connect="slider_v_3" data-orientation="vertical" data-range="min"></div>
									<div class="slider" data-connect="slider_v_4" data-orientation="vertical" data-range="min"></div>
									<div class="slider" data-connect="slider_v_5" data-orientation="vertical" data-range="min"></div>
								</div>
								<div>
									<input type="number" class="integer w_25p" id="slider_v_1">
									<input type="number" class="integer w_25p" id="slider_v_2">
									<input type="number" class="integer w_25p" id="slider_v_3">
									<input type="number" class="integer w_25p" id="slider_v_4">
									<input type="number" class="integer w_25p" id="slider_v_5">
								</div>
							</div>
						</section>
						<section><label>Slider with tooltip</label>
							<div><div class="slider" id="slider_tooltip" data-tooltip="true" data-range="min"></div></div>
						</section>
						<section><label>Slider with custom tooltip Pattern</label>
							<div><div class="slider" id="slider_tooltip_pattern" data-tooltip="true" data-orientation="vertical" data-tooltip-pattern="current value is $ %n,-" data-range="min"></div><br><span>use <code>data-tooltip-pattern="current value is $ %n,-"</code></span></div>
						</section>
						<section><label>Slider with connected input field</label>
							<div><div class="slider" data-connect="slider_connect" data-value="30" data-range="min"></div>
							<input type="number" class="integer" id="slider_connect"><span>set the start value within the input or with <code>data-value="30"</code> within the slider</span>
							</div>
						</section>
						<section><label>Range Slider</label>
							<div><div id="slider_range" class="slider" data-range="true" data-max="1000" data-values="[350,650]"></div>
							</div>
						</section>
						<section><label>Connected Range Slider</label>
							<div><div class="slider" data-range="true" data-max="1000" data-values="[250,750]" data-connect="[slider_range_from,slider_range_to]"></div>
							<input type="number" class="integer" id="slider_range_from">
							<input type="number" class="integer" id="slider_range_to">
							<br><span>Use the shift key for faster scrolling</span>
							</div>
						</section>
						<section><label>Custom Callback</label>
							<div><div class="slider" id="slider_callback"></div>
								<div id="slider_callback_bar" style="background:#aaa;padding:2px;">Scroll!</div>
							</div>
						</section>
					</fieldset>
					<fieldset>
						<label>Other Basic Fields</label>
						<section>
							<label>Checkboxes</label>
							<div>
								<input type="checkbox" id="apples_check" ><label for="apples_check">Apples</label>
								<input type="checkbox" id="bananas_check" ><label for="bananas_check">Bananas</label>
								<input type="checkbox" id="oranges_check" ><label for="oranges_check">Oranges</label>
							</div>
						</section>
						<section>
							<label>Radio Buttons</label>
							<div>
								<input type="radio" id="apples_radio" name="radio" value="Apples" ><label for="apples_radio">Apples</label>
								<input type="radio" id="bananas_radio" name="radio" value="Bananas" ><label for="bananas_radio">Bananas</label>
								<input type="radio" id="oranges_radio" name="radio" ><label for="oranges_radio">Oranges</label>
							</div>
						</section>
						<section>
							<label for="dropdown_vegetables">Dropdown</label>
							<div>					
								<select name="dropdown_vegetables" id="dropdown_vegetables">
									<optgroup label="Vegetables">
										<option value="Broccoli">Broccoli</option>
										<option value="Corn">Corn</option>
										<option value="Spinach">Spinach</option>
									</optgroup>
								</select>
								<select name="dropdown_fruits" id="dropdown_fruits">
									<optgroup label="Fruits">
										<option value="Apples">Apples</option>
										<option value="Bananas">Bananas</option>
										<option value="Oranges">Oranges</option>
									</optgroup>
								</select>
							</div>
						</section>
						<section>
							<label for="multiselect">Multiple Select<br><span>use ctrl + shift key. The selection(right) is sortable with drag n' drop</span></label>
							<div>					
								<select name="multiselect" id="multiselect" multiple>
										<option value="artichoke">Artichoke</option>
										<option value="beans">Beans</option>
										<option value="broccoli">Broccoli</option>
										<option value="carrot">Carrot</option>
										<option value="corn">Corn</option>
										<option value="chicory">Chicory</option>
										<option value="kohlrabi">Kohlrabi</option>
										<option value="melon">Melon</option>
										<option value="onion">Onion</option>
										<option value="potato">Potato</option>
										<option value="pumpkin">Pumpkin</option>
										<option value="spinach">Spinach</option>
										<option value="tomato">Tomato</option>
								</select>
							</div>
						</section>
					</fieldset>
					<fieldset>
						<label>Required Fields</label>
						<section><label for="required_field">Required Text Field</label>
							<div><input type="text" id="required_field" name="required_field" required></div>
						</section>
						<section><label for="required_field_msg">Required Text Field with custom error message</label>
							<div><input type="text" id="required_field_msg" name="required_field_msg" required data-errortext="This is an custom error text!">
							<br><span>use <code>data-errortext="This is an custom error text!"</code> for custom message</span>
							</div>
						</section>
						<section><label for="required_valid_field">Required Field with validation</label>
							<div>
							<span>Please type in 'OK':</span><br>
							<input type="text" id="required_valid_field" name="required_valid_field" required data-regex="^OK$" class="w_10">
							</div>
						</section>
						<section>
							<div>
								<input type="checkbox" id="agreed" data-errortext="This is mandatory!" required><label for="agreed">I agree that this form is awesome ;)</label>
							</div>
						</section>
						<section>
							<div><button class="reset">Reset</button><button class="submit" name="submitbuttonname" value="submitbuttonvalue">Submit</button></div>
						</section>
					</fieldset>
				</form>	
				</div>-->
		</section><!-- end div #content -->
		<footer>Copyright by revaxarts.com 2011</footer>
</body>
</html>