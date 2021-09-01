@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('taxi @ taxifloripa.ml') }}</div>
                <div class="card-header"><img src="img/4.gif"> Taxi Floripa</div>
                <br>

                <br>
                <div class="card-header"><img src="img/3.gif"> </div>


                <br>
                <!--
                <div class="card-header"><img src="img/aereo.jpg"> Transporte Aero (Modal em Breve)
                </div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
         
            </div>
        </div>
    </div>
</div>






@endsection



