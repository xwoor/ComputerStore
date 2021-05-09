<!-- Modal INSERTAR-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


      <form class="form-horizontal" action="script/insertar.php" role="form" method="POST">
							<div class="form-group">
							<label>Codigo de producto:</label>
							<input type="text" class="form-control" name="codigo" placeholder="Ingrese datos">
							</div>
							<div class="form-group">
							<label>Nombre del producto:</label>
							<input type="text" class="form-control" name="nombre" placeholder="Ingrese datos">
							</div>
							<div class="form-group">
							<label>Marca del producto:</label>
							<input type="text" class="form-control" name="marca" placeholder="Ingrese datos">
							</div>
							<div class="form-group">
							<label>Cantidad Comprada:</label>
							<input type="number" class="form-control" name="cantidad" placeholder="Ingrese datos">
							</div>
							<div class="form-group">
							<label>Precio de Compra:</label>
							<input type="number" class="form-control" name="precio" placeholder="Ingrese datos">
							</div>
							<button type="submit" name="submit" class="btn btn-primary mt-2 mt-2">Registrar producto</button>
						</form>


      </div>
  
    </div>
  </div>
</div>

<?php 
//Conexion DB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbunad7";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Fallo la conexion: " . $conn->connect_error);
}

$sql = "SELECT * FROM tabla7";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
  ?>
<!-- Modal ACTUALIZAR-->
<div class="modal fade" id="actualizarModal<?php echo $row["id"];?>" tabindex="-1" aria-labelledby="actualizarModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="actualizarModalLabel">Actualizar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        


      <form class="form-horizontal" action="script/actualizar.php" role="form" method="POST">
							<div class="form-group">
							<label>Codigo de producto:</label>
              <input type="text" class="form-control" name="id" value="<?php echo $row["id"];?>" hidden>
							<input type="text" class="form-control" name="codigo" value="<?php echo $row["codigo"];?>">
							</div>
							<div class="form-group">
							<label>Nombre del producto:</label>
							<input type="text" class="form-control" name="nombre" value="<?php echo $row["nombre"];?>">
							</div>
							<div class="form-group">
							<label>Marca del producto:</label>
							<input type="text" class="form-control" name="marca" value="<?php echo $row["marca"];?>">
							</div>
							<div class="form-group">
							<label>Cantidad Comprada:</label>
							<input type="number" class="form-control" name="cantidad" value="<?php echo $row["cantidad"];?>">
							</div>
							<div class="form-group">
							<label>Precio de Compra:</label>
							<input type="number" class="form-control" name="precio" value="<?php echo $row["precio"];?>">
							</div>
							<button type="submit" name="submit" class="btn btn-primary mt-2 mt-2">Actualizar producto</button>
						</form>


      </div>
  
    </div>
  </div>
</div>
<?php
}
		} 
		$conn->close();
		?>	


