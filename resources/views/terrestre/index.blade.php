@extends('layouts3.app')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Transporte Terrestre') }}</div>

                <div class="card-body">
                <form action="{{ route('terrestre.store') }}" method="POST">
                        @csrf


<?php 
use App\Models\Terrestre;
use App\Http\Controllers\TerrestreController;
?>

   

                    
{{ Auth::user()->name}}





   





    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Paciente') }}</div>

                <div class="card-body">






                          <!--  sisreg -->
                          <div class="form-group row">
                            <label for="sisreg" class="col-md-4 col-form-label text-md-right">{{ __('Sisreg') }}</label>
                            <div class="col-md-6">
                                <input id="sisreg" type="text" class="form-control @error('sisreg') is-invalid @enderror" name="sisreg" required autocomplete="sisreg">
                                @error('sisreg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             

                 


















                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 




