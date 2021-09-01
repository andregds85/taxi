@extends('layouts4.app')
@section('content')
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Exportar Usuários</h5>
    <p class="card-text">
   <a class="nav-link" href="{{url('import_export') }}">Exportar Usuários</a>
    </p>
  </div>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gerenciamento de Usuários</h2>
        </div>
      
   </div>
 </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">

 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}
    {{ $user->name }}
    {{ $user->email }}
    
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
   

       <a class="btn btn-link" href="{{ route('users.show',$user->id) }}">Mostrar</a>
       <a class="btn btn-link" href="{{ route('users.edit',$user->id) }}">Editar</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'fas fa-trash text-danger mr-1']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>

<script>
navigator.geolocation.getCurrentPosition(function(posicao) {
    var url = "http://nominatim.openstreetmap.org/reverse?lat="+posicao.coords.latitude+"&lon="+posicao.coords.longitude+"&format=json&json_callback=preencherDados";

    var script = document.createElement('script');
    script.src = url;
    document.body.appendChild(script);
});



function preencherDados(dados) {
  alert("Sua Localização: " +dados.address.city);

}

</script>




{!! $data->render() !!}
<p class="text-center text-primary"><small>usuários</small></p>
@endsection











