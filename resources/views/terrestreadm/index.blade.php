@extends('layouts4.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Solicitação de Transporte Terrestre</h5>
            </div>
          
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Terrestre;

    $tabela = Terrestre::all();
?>
    <table class="table table-bordered">
        <tr>
            <th>Semana</th>
            <th>Data</th>
            <th>idade</th>
        </tr>

    @foreach ($tabela as $t)
	    <tr>
            <td>{{$t->semana}}</td>
            <td>{{$t->dia }}/{{$t->mes }}/{{$t->ano}}</td>
            <td>{{$t->idade }}</td>
  
                @endforeach


     

          





    </table>

<p class="text-center text-primary"><small>Transporte Terrestre</small></p>
@endsection
