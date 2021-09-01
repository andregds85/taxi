<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

$tabela = Checklist::all(); 
$itensP = Checklist::where('id',$id)->get(); 

?>

<form>
   <input type="button" value="Imprimir" onClick="window.print()" />
</form>


    @foreach ($itensP  as $t)

 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
<body>
<table class="table table-bordered">
  <tbody>

    <tr>
    <td>
    <img src="img/logo_menor.jpg" width="100" height="100"> 
</td>
      <td align="center"><b>
      <br>Taxi Floripa
      <br>taxifloripa.ml </b>
     </td>
     </tr>
  </tbody>
</table>


<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="5"><b>ID</b> :{{$t->id }} <br>
    <b>Data :</b>{{$t->created_at }} <br>
    <b> Semana:</b> {{$t->semana }} <br>
    </td>
    </tr>
  </tbody>
  </table>

  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Hora Inicial:</b>{{$t->horaInicial }} <br>
          <b>Hora Final:</b>{{$t->horaFinal }}<br>
           <b>Mês: </b> {{$t->mes }}<br>
           <b>Ano:</b>{{$t->ano }}<br>
           <b>motorista:</b>{{$t->motorista }}<br>
     <b>CodPlaca: </b> {{$t->codPlaca }}<br>
     </td>
    <td>
   <b> Kilometro Final: </b> {{$t->Kfinal}}<br>
    <b> Kilometro Inicial:</b> {{$t->Kinicial}}</td>
   </tr>
  </tbody>
</table>



<table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Total </b>{{$t->total }} <br>
          <b>F bruta:</b>{{$t->Fbruta }}<br>
           <b>Porcentagem</b> {{$t->porcentagem }}<br>
      </td>
          <td><b>Comissão:</b>{{$t->comissao }}<br>
          <b>combustivel:</b>{{$t->combustivel }}<br>
           <b>Fatura Líquida:</b> {{$t->fliquida }}<br>
           <b>Tanque Cheio K:</b> {{$t->tanqueK }}<br>
        </td>
    </tr>
  </tbody>
</table>




      <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

    @endforeach
 
   </html>






  


