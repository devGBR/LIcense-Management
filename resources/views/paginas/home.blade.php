@extends('layouts.main')

@section('content')
<div class="container">
    <div class="buscar">
        <div class="busca">
    <h2>Insira sua placa</h2>
    <form  class = "form-inline" action="" method="post">
        
        <input class="tm w-25" type="text" >
      <button type="submit" class="btn btn-primary mb-2">buscar</button>

    </form>
    </div>
    </div>
    <br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><H2 style = "font-weight: bold;">Licença Taxi</H2></div>
                <div class = "card-body">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Veiculo</th>
      <th scope="col">Placa</th>
      <th scope="col">Licença</th>
      <th scope="col">validade</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Cleiton Hayashi</td>
      <td>Honda CG 160</td>
      <td>QLS5322</td>
      <td class = "pagamentos">Paga</td>
      <td> 05/09 a 10/10 </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@stop 