  <?php
  $current_page = 'inventario';
  include 'components/header.php';
  ?>
  <div class="container">
	  <div class="row">
		  <div class="col">
		  <!-- Button trigger modal -->
		  <button type="button" class="btn btn-primary mt-4 mb-4" data-toggle="modal" data-target="#exampleModal">
		  Agregar producto
		  </button>
		  </div>
	  </div>
  <div class="row">
	  <div class="col">
		  <h1 class="text-center mt-4 mb-4">Lista de productos</h1>
	  <table class="table">
		  <thead>
			  <tr>
			  <th>Código</th>
			  <th>Nombre</th>
			  <th>Marca</th>
			  <th>Cantidad</th>
			  <th>Precio</th>
			  <th>Opciones</th>
			  </tr>
		  </thead>
		  <tbody>
		  

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
			echo "
			<tr>
					<td>".$row["codigo"]."</td>
					<td>".$row["nombre"]."</td>
					<td>".$row["marca"]."</td>
					<td>".$row["cantidad"]."</td>
					<td>".$row["precio"]."</td>
					<td>
					<button type='button' class='btn btn-primary mt-4 mb-4 btn-sm' data-toggle='modal' data-target='#actualizarModal".$row["id"]."'>
					Editar
					</button>
					<button class='btn btn-outline-primary btn-sm' type='submit' ><a href='script/borrar.php?id=". $row["id"]."'>Borrar</a></button>
					</td>
					</tr>";
		}
		} else {
		echo "No hay productos registrados";
		}
		$conn->close();
		?>	
				</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
	include 'components/modal.php';
  	include 'components/footer.php';
  ?>