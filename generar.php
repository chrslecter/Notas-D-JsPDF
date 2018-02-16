<!DOCTYPE html>
<html>
  <?php require_once('includes/session.php'); ?>
  <?php require_once('includes/header.php'); ?>
<body >
<?php require_once('includes/nav.php'); ?>
  
<main class="container">
  	<div class="card">
  		<div class="card-content">
	    	<div class="row"> 
	      		<div align="center" class="col s12 m12 l12">
	      		<h3>Notas de duelo</h3>
	        		<form>
	        			<div class="input-field col s4 m2 l2">
						    <select id="titulo" hidden> 
						      <option value="Ing" selected>Ing.</option>
						      <option value="Sr">Sr.</option>
						      <option value="Sra">Sra.</option>
						      <option value="Mr">Mr.</option>
						      <option value="Ms">Ms.</option>
						      <option value="Dr">Dr.</option>
						      <option value="Dra">Dra.</option>
						    </select>
						    <label >Título</label>
						 </div>
				        <div class="input-field col s8 m5 l5">
				          <input  id="nombres" name="nombres" type="text" class="validate">
				          <label for="nombres">Nombres</label>
				        </div>
				        <div class="input-field col s12 m5 l5">
				          <input  id="apellidos" name="apellidos" type="text" class="validate">
				          <label for="apellidos">Apellidos</label>
				        </div>
		      			<div class="row">
		      				<div class="input-field col s4 m2">
		      				<input type="checkbox" id="labora" />
     						<label for="labora">Labora en zamorano</label>
     					</div>
				    		<div class="input-field col s8 m5 l5"> <input  id="lugar" name="lugar" type="text" class="validate"> <label for="lugar">Lugar del acontecimiento</label> </div>


				    		<div class="input-field col s12 m5 l5"> <input  id="lugar" name="lugar" type="date" class="validate"> <label for="lugar">Fecha</label> </div>
				    	</div>

					    <div class="row">
					        <div class="col s12 m12">
					          	<div class="card grey lighten-5">
					            	<div class="card-content" id="contenido"> 




					            	</div>
						            <div class="card-action">

						            	<a class="btn-flat grey lighten-2 teal-text" id="gZamorano"><i class="material-icons left"></i>Graduado Zamorano</a>
						            	<a class="btn-flat grey lighten-2 teal-text" id="empleado"><i class="material-icons left"></i>Familiar de empleado</a>
						            </div>
				          		</div>
				        	</div>
				    	</div>
				    	
	        		</form>
	    		</div> 
	   		</div>
		   <div class="row"> 
		      	<div align="center" class="col s12 m12 l12">
		      	<a class="waves-effect waves-light btn-large" id="generar"><i class="material-icons right">file_download</i>Descargar pdf</a>
		    	</div> 
		   </div> 
		</div>
   	</div>    
</main>

<script type="text/javascript" src="js/jspdf.min.js"></script>

<script type="text/javascript">
// Default export is a4 paper, portrait, using milimeters for units
	var doc = new jsPDF()
	var generar = document.getElementById('generar');
	var nombres = document.getElementById('nombres');
	var nombre = '';
	var zamorano = document.getElementById('gZamorano');
	var empleado = document.getElementById('empleado');

	doc.text('Hello world!', 10, 10)
	doc.viewerPreferences({'FitWindow': true}, true)

	generar.addEventListener('click', function(){
		doc.save('nota de duelo '+nombre+'.pdf')
	})

	nombres.addEventListener('change', function(){
		nombre = nombres.value;
	})
	

	zamorano.addEventListener('click', function(){
	document.getElementById('contenido').innerHTML='<div class="row"> <div class="input-field col s12"><input id="clase" name="clase" type="number" class="validate"><label for="clase">Clase de graduación</label></div></div>';
		zamorano.children[0].textContent='check_circle';
		empleado.children[0].textContent='';
	})
	
	empleado.addEventListener('click', function(){
	document.getElementById('contenido').innerHTML='<div class="row"><div class="input-field col s6 m6 l6"><select class="browser-default" id="parentesco" ><option value="" disabled selected>Selecciona un tipo de parentesco</option><option value="Padre" >Padre</option><option value="Abuelo">Abuelo</option><option value="Tio">Tio</option><option value="Hermano">Hermano</option><option value="Primo">Primo</option><option value="Esposo">Esposo</option><option value="Hijo">Hijo</option><option value="Nieto">Nieto</option><option value="Sobrino">Sobrino</option></select></div><div class="input-field col s6 m6 l6"><select class="browser-default" id="genero" ><option value="" disabled selected>Selecciona un enero</option><option value="f" >Femenino</option><option value="m">Maculino</option></select></div></div><div class="row"><div class="input-field col s12 m12 l12"> <input id="nombreEmpleado" name="nombreEmpleado" type="text" class="validate"> <label for="nombreEmpleado">Nombre del empleado</label> </div></div>';
		empleado.children[0].textContent='check_circle';
		zamorano.children[0].textContent='';
	})

</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('select').material_select();
  });
</script>




			<div class="row-fluid">
				<div class="span6" style="float: right">
					<iframe class="preview-pane" type="application/pdf" width="100%" height="650" frameborder="0" style="position:relative;z-index:999"></iframe>
				</div>
				

				<div id="editor" class="bypass"></div>

			   

			</div>

		<!-- Scripts down here -->

		<!-- Code editor -->

		<script src="js/ace.js" type="text/javascript" charset="utf-8"></script>

		<!-- Scripts in development mode -->
		<!--script type="text/javascript" src="jspdf.js"></script>
		<script type="text/javascript" src="./libs/FileSaver.js/FileSaver.js"></script>
		<script type="text/javascript" src="./libs/Blob.js/Blob.js"></script>
		<script type="text/javascript" src="./libs/Blob.js/BlobBuilder.js"></script>

		<script type="text/javascript" src="./libs/deflate.js"></script>
		<script type="text/javascript" src="./libs/adler32cs.js/adler32cs.js"></script>

		<script type="text/javascript" src="./plugins/addimage.js"></script>
		<script type="text/javascript" src="./plugins/from_html.js"></script>
		<script type="text/javascript" src="./plugins/ie_below_9_shim.js"></script>
		<script type="text/javascript" src="./plugins/svg.js"></script>
		<script type="text/javascript" src="./plugins/split_text_to_size.js"></script>
		<script type="text/javascript" src="./plugins/standard_fonts_metrics.js"></script-->

		<!-- Editor -->
		<script type="text/javascript" src="js/editor.js"></script>






<?php require_once('includes/footer.php'); ?>
  </body>
</html>





