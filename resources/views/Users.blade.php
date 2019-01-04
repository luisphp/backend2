<!doctype html>

<html lang="en">
<head>


<meta charset="utf-8">

<meta name="viewport"
content ="width-device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, mainimu-.scale=1.0,">

<meta http-equiv="X-UA-Compatible" content="ie-edge">


<!-- Styleos bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!--JavaScript bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@include('headerPrincipal')

<br>


<title>Listado de usuarios</title>

<body>

<h1>Todos los Usuarios</h1>

<hr>

@if (!empty($Users))


	<table class="table table-hover align-middle">
  <thead>
    <tr>
      <th scope="col"># de Registro</th>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      
      <th scope="col">Profession</th>
      <th scope="col">Role</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Acciones	</th>
    </tr>
  </thead>
  <tbody>


		@foreach($Users as $usuarios)

		 <tr>
		 <th scope="row">{{$loop->index}}</th>
		 <td scope="align-baseline">{{ $usuarios->id }}</td>
		 <td class="align-baseline">{{ $usuarios->name }}</td>
		 <td class="align-baseline">{{ $usuarios->email }}</td>
		 
		 <td class="align-baseline">{{ $usuarios->fk_profession }}</td>
		 <td class="align-baseline">{{ $usuarios->role }}</td>
		 <td class="align-baseline">{{ $usuarios->created_at }}</td>
		 <td class="align-baseline">{{ $usuarios->updated_at}}</td>

	<td class="align-baseline">

	<button type="button" class="btn btn-primary btn-sm">Editar</button>
	<button type="button" class="btn btn-secondary btn-sm">Borrar</button>
	<button type="button" class="btn btn-success btn-sm">Habilitar</button>

<td>
</tr>
	@endforeach


  </tbody>
</table>


@else

<p>No hay usuarios registrados</p>

@endif



</body>

</head>

</html>
