<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/funciones.js"></script>
	<script>
		$( document ).ready( 	 function (){
			$('#segundo').click( function (){
				var edad=6;
				if (edad<12){
					alert('esta en la primaria');
				}else{
					alert('ya debe haber salido de primaria');
				}
			});

			$('#otro').click( agregafila );
			$('#tabla').on("click", ".col_nombre", borrar );


	});

	</script>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	click en el enlace 	<a href="#" onClick = "prim();"> de aqui </a>
<hr>
	Click en el segundo enlace <button id="segundo"> de aquí </button>
<hr>
<table id="tabla" class="table">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col_nombre">Juan</td>
				<td>Perez</td>
			</tr>
			<tr>
				<td class="col_nombre">Maria</td>
				<td>Gomez</td>
			</tr>
		</tbody>
	</table>	
	

 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Agregar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="container">
  <form>
  	@csrf
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="texto_nom" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">APELLIDO</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="texto_app" placeholder="Apellido">
      </div>
    </div>
  </form>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      	<button id="otro"  class="btn btn-primary">otro</button>
        <button type="button">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>


</html>






