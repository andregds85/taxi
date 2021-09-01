@extends('layouts3.app')
@section('content')


    <?php
    use App\Models\Checklist;

echo   $user=Auth::user()->email;

$tabe = Checklist::all();


$tabela = Checklist::where(['usuario' =>  'andregds85@gmail.com']);

/*
$count = Flight::where('active', 1)->count();

*/

?>
<!-- DataTales  -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Semana</th>
          <th>Data</th>
 
        </tr>
      </thead>

      <tbody>
      @foreach ($tabela as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->semana}}</td>

            <td>  <a class="btn btn-info" href="{{ route('checklistadm.show',$t->id) }}">Vizualizar</a>

<a class="btn btn-info" href="{{ url('checklistpdf',$t->id) }}">Imprimir PDF</a></td>
        </tr>
        @endforeach 
      </tbody>
  </table>
</div>
</div>
</div>





<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection


