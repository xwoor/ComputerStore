  <?php
  $current_page = 'utilidades';
  include 'components/header.php';
  ?>

    <!-- SECION -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-6 col-lg-6">
                <h1>Valor de venta</h1>

                <!-- FORMULARIO -->
                <label for="basic-url" class="form-label">Valor de compra</label>
                    <div class="input-group mb-3">
                    <input type="number" class="form-control" value="" id="compra" aria-describedby="basic-addon3" required>
                </div>

                <label for="basic-url" class="form-label">% utilidad o ganancia</label>
                    <div class="input-group mb-3">
                    <input type="number" class="form-control" value="" id="utilidad" aria-describedby="basic-addon3" required>
                </div>

                <label for="basic-url" class="form-label">% IVA</label>
                    <div class="input-group mb-3">
                    <input type="number" class="form-control" value="" id="iva" aria-describedby="basic-addon3" required>
                </div>

                <button type="button" class="btn btn-primary" id="calcular">Calcular</button>
                <br>
                <div class="mt-4">
                    <label for="basic-url" class="form-label">Valor de venta $</label>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" value="" id="totalVenta" aria-describedby="basic-addon3" disabled>
                </div>

                <label for="basic-url" class="form-label">Ganancia $</label>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" value="" id="ganancia" aria-describedby="basic-addon3" disabled>
                </div>
                </div> 
            </div>
            
			
				<div class="col-12 col-md-6 col-lg-6">
					<h1>Tamaño de datos</h1>

				<script>
					function calcular(){
    
						var a= document.f1.a.value;
						var b = document.f1.b1.value;
						var x = document.f1.b2.value;
						var r = document.f1.c.value;
						r=(parseFloat(a)*parseFloat(b))/parseFloat(x);
					   document.f1.c.value=r;
					}
				</script> 


					<div class="container" class="mb-3" >
						<form name="f1" action="conversor.html" method="POST">

							<div class="row mt-4">
								  <input type="text" class="form-control" id="a" name="a" placeholder="Digite aquí el valor a convertir" >
  
																										
										<select name="b1" class="form-control" >
										  <Option disabled>Seleccione una opcion</opcion>
										  <option value="1">Byte</option>
										  <option value="1000">Kilobyte</option>	
										  <option value="1000000">Megabyte</option>
										  <option value="1000000000" >Gigabyte</option>
										  <option value="1000000000000">Terabyte</option>
										</select>
									
									<div class= "row mt-4">	
									  <input type="Button" name="" value="convertir" onclick="calcular()" class="btn btn-primary"  style="background-color: #000000">
									</div>
									<div class= "row mt-4">	
										<select name="b2" class="form-control">
										  <Option  disabled>Seleccione una opcion</opcion>	 
										  <option value="1">Byte</option>
										  <option value="1000">Kilobyte</option>	
										  <option value="1000000">Megabyte</option>
										  <option value="1000000000" >Gigabyte</option>
										  <option value="1000000000000">Terabyte</option>
										</select>
									</div>
									<fieldset disabled>
									<div class= "row mt-4" >
										<input type="text" class="form-control" id="c" name="c" placeholder="Resultado">
							</div>	
  						</form>
					</div>
        </div>
    </div>
    <!-- SECION -->
    <?php
    include 'components/footer.php';
    ?>