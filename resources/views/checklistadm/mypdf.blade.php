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
      <td align="center"><b>
      <br>Ticket<br>
     </td>
     </tr>
  </tbody>
</table>



<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="5"><b>ID</b> :{{$t->id }} <br>
    <b>Data de Criação :</b>{{$t->created_at }} <br>
    <b> Dia:</b> {{$t->dia }} <br>
    <b> Mês:</b> {{$t->mes }} <br>
    <b> Ano:</b> {{$t->ano }} <br>

    <b> Nome: </b>{{$t->nome }}<br>
    </td>
    </tr>
  </tbody>
  </table>

  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Semana:</b>{{$t->semana }} <br>
          <b>Hora Inicial:</b>{{$t->horaInicial }}<br>
           <b>Hora Final: </b> {{$t->horaFinal }}<br>
           <b>Motorista:</b>{{$t->motorista }}<br>
           <b>Cod da placa:</b>{{$t->codPlaca }}<br>
     </td>
    
     <td><b>Semana:</b>{{$t->semana }} <br>
     <b>Kilometro Final:</b>{{$t->Kfinal }}<br>

          <?php $kf=$t->Kfinal;   ?>
                
           <b>Kilometro Inicial: </b> {{$t->Kinicial }}<br>
            <?php $kI=$t->Kinicial;   
            echo  $aa=$kf-$$kI;
           ?>
     </td>

  

    </tr>

  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Total por Motorista:</b>{{$t->total }} <br>
          <b>Fatura Bruta:</b>{{$t->Fbruta }}<br>
           <b>Porcentagem</b> {{$t->porcentagem }}<br>
      </td>
          <td><b>Comissão:</b>{{$t->comissao }}<br>
          <b>Combustivel:</b>{{$t->combustivel}}<br>

          <?php   
          $c=$t->comissao;
          $gasol=$t->combustivel;
          
          $soma=$gasol+$c; 
          ?>
         <b>Fatura Líquida:</b><?php echo $soma; ?><br>
        </td>

   </tr>
  </tbody>
</table>




<table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Tanke Cheio: :</b>{{$t->tanqueK }} <br>

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








 