@extends('layouts3.app')
@section('content')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">


<script type="text/javascript">
$(document).ready(function () {
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-12 control-label" for="nome-anexo">Nome do Anexo</label> <div class="col-md-12"> <input id="nome-anexo" name="nome-anexo" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-12 control-label" for="anexo">Anexo</label> <div class="col-md-12"></div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<div class="col-md-12"><button id="remove' + (next - 1) + '" class="btn btn-danger remove-me pull-right" >Remover</button></div></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });

});
</script>




<SCRIPT> 
function k(i) {
	var v = i.value.replace(/\D/g,'');
	v = (v/100).toFixed(2) + '';
	v = v.replace(".", ",");
	v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
	v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
	i.value = v;
}
</script>


<SCRIPT> 
<!--
function valida()
{

if(document.regform.nome.value=="" || document.regform.nome.value.length < 5)
{
alert( "Preencha campo Nome com Nome Completo!" );
regform.nome.focus();
return false;
}

if(document.regform.cns.value.length < 12  || document.regform.cns.value.length > 16)
{
alert( "Preencha campo CNS corretamente ");
regform.cns.focus();
return false;
}

if(document.regform.sexo.value=="") 
{
alert( "Preencha campo Sexo Corretamente ");
regform.sexo.focus();
return false;
}


if(document.regform.cpf.value.length < 11  || document.regform.cpf.value.length > 12)
{
alert( "Preencha campo CPF corretamente ");
regform.cpf.focus();
return false;
}

if(document.regform.rg.value.length < 8  || document.regform.rg.value.length > 16)
{
alert( "Preencha campo RG corretamente ");
regform.rg.focus();
return false;
}

if(document.regform.orgaoEmissor.value.length < 3  || document.regform.orgaoEmissor.value.length > 60)
{
alert( "Preencha campo Orgão Emissor Corretamente ");
regform.orgaoEmissor.focus();
return false;
}



if(document.regform.estado.value=="") 
{
alert( "Preencha campo Estado Corretamente ");
regform.estado.focus();
return false;
}


if(document.regform.diagnostico.value==""  || document.regform.diagnostico.value.length < 10)   
{
alert( "Preencha campo Diagnóstico com No Mínimo 10 Dígitos ");
regform.diagnostico.focus();
return false;
}


if(document.regform.macroOrigem.value==""  || document.regform.macroOrigem.value.length < 6)   
{
alert( "Preencha campo Macro de Origem Corretamente ");
regform.macroOrigem.focus();
return false;
}


if(document.regform.hospitalOrigem.value==""  || document.regform.hospitalOrigem.value.length < 6)   
{
alert( "Preencha campo Hospital de Origem Corretamente ");
regform.hospitalOrigem.focus();
return false;
}


if(document.regform.LeitoOrigem.value==""  || document.regform.LeitoOrigem.value.length < 2)   
{
alert( "Preencha campo Leito de Origem Corretamente com no mínimo 2 Dígitos ");
regform.LeitoOrigem.focus();
return false;
}

if(document.regform.macroDestino.value==""  || document.regform.macroDestino.value.length < 6)   
{
alert( "Preencha campo Macro de Destino Corretamente ");
regform.macroDestino.focus();
return false;
}


if(document.regform.hospitalDestino.value==""  || document.regform.hospitalDestino.value.length < 6)   
{
alert( "Preencha campo Hospital de Destino Corretamente ");
regform.hospitalDestino.focus();
return false;
}


if(document.regform.LeitoDestino.value==""  || document.regform.LeitoDestino.value.length < 2)   
{
alert( "Preencha campo Leito de Destino Corretamente com no mínimo 2 Dígitos ");
regform.LeitoDestino.focus();
return false;
}


if(document.regform.padrao.value=="") 
{
alert( "Selecione campo Padrão com Sim / Não ");
regform.padrao.focus();
return false;
}

if(document.regform.contato.value=="") 
{
alert( "Selecione campo contato com Sim / Não ");
regform.contato.focus();
return false;
}


if(document.regform.respiratoria.value=="") 
{
 alert( "Selecione campo respiratoria com Sim / Não ");
regform.respiratoria.focus();
return false;
}


if(document.regform.covid.value=="") 
{
 alert( "Selecione campo covid com Supeito / Confirmado ");
regform.covid.focus();
return false;
}

if(document.regform.metodo.value=="") 
{
 alert( "Selecione campo metodo com TR / PCR ");
regform.metodo.focus();
return false;
}


if(document.regform.sng.value=="") 
{
 alert( "Preencha Campo SNG ");
regform.sng.focus();
return false;
}

if(document.regform.svd.value=="") 
{
 alert( "Preencha Campo SVD ");
regform.svd.focus();
return false;
}

if(document.regform.dreno.value=="") 
{
 alert( "Preencha Campo Dreno ");
regform.dreno.focus();
return false;
}

if(document.regform.tottqd.value=="") 
{
 alert( "Preencha Campo tottqd ");
regform.tottqd.focus();
return false;
}

if(document.regform.gtt.value=="") 
{
 alert( "Preencha Campo gtt ");
regform.gtt.focus();
return false;
}


if(document.regform.pai.value=="") 
{
 alert( "Preencha Campo pai ");
regform.pai.focus();
return false;
}



if(document.regform.kehr.value=="") 
{
 alert( "Preencha Campo kehr ");
regform.kehr.focus();
return false;
}


if(document.regform.acessoVenosoCentral.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Central ");
regform.acessoVenosoCentral.focus();
return false;
}


if(document.regform.acessoVenosoPeriferico.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Periferico ");
regform.acessoVenosoPeriferico.focus();
return false;
}


if(document.regform.cateterDialise.value=="") 
{
 alert( "Preencha Campo Cateter Dialise ");
regform.cateterDialise.focus();
return false;
}


if(document.regform.dve.value=="") 
{
alert( "Preencha Campo dve ");
regform.dve.focus();
return false;
}


if(document.regform.outros.value=="") 
{
alert( "Preencha Campo outros ");
regform.outros.focus();
return false;
}


if(document.regform.drogas.value=="") 
{
alert( "Preencha drogas ");
regform.drogas.focus();
return false;
}

if(document.regform.suporteo2.value=="") 
{
alert( "Preencha suporteo2 ");
regform.suporteo2.focus();
return false;
}

if(document.regform.cateter.value=="") 
{
alert( "Preencha cateter  ");
regform.cateter.focus();
return false;
}

if(document.regform.mascara.value=="") 
{
alert( "Preencha mascara  ");
regform.mascara.focus();
return false;
}


if(document.regform.outroSu.value=="") 
{
alert( "Preencha outros  ");
regform.outroSu.focus();
return false;
}

if(document.regform.vm.value=="") 
{
alert( "Preencha vm  ");
regform.vm.focus();
return false;
}


if(document.regform.fiO2.value=="") 
{
alert( "Preencha FiO2  ");
regform.fiO2.focus();
return false;
}


if(document.regform.peep.value=="") 
{
alert( "Preencha peep  ");
regform.peep.focus();
return false;
}


if(document.regform.spO2.value=="") 
{
alert( "Preencha spO2  ");
regform.spO2.focus();
return false;
}


if(document.regform.prona.value=="") 
{
alert( "Preencha prona  ");
regform.prona.focus();
return false;
}

if(document.regform.risco.value=="") 
{
alert( "Preencha a Classificação do Risco do Transporte  ");
regform.risco.focus();
return false;
}


if(document.regform.aguda.value=="") 
{
alert( "Preencha o Campo Definição Renal Aguda");
regform.aguda.focus();
return false;
}

if(document.regform.aguda.value=="") 
{
alert( "Preencha o Campo Funcionalidade Prévia");
regform.aguda.focus();
return false;
}


if(document.regform.pa.value=="") 
{
alert( "Preencha o Campo Funcionalidade PA");
regform.pa.focus();
return false;
}

if(document.regform.fc.value=="") 
{
alert( "Preencha o Campo Funcionalidade fc");
regform.fc.focus();
return false;
}


if(document.regform.spo2c.value=="") 
{
alert( "Preencha o Campo Funcionalidade spo2c");
regform.spo2c.focus();
return false;
}


if(document.regform.temp.value=="") 
{
alert( "Preencha o Campo Funcionalidade temp");
regform.temp.focus();
return false;
}



if(document.regform.peso.value=="") 
{
alert( "Preencha o Campo Funcionalidade peso");
regform.peso.focus();
return false;
}







return true;
}
 
</script>




<script>

function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Controle de Corridas ') }}</div>

                <div class="card-body">
                <form action="{{ route('checklist.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
                        @csrf

<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>
 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>



                        </div>
                        </div>
                        </div>
                        </div>
                        </div>


    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Controle de Corridas') }}</div>
                <div class="card-body">
           
              
                    <!--  Dia -->
                     <div class="form-group row" required>
                            <label for="dia" class="col-md-4 col-form-label text-md-right">{{ __('Dia') }}</label>
                            <div class="col-md-6">
                            <select id="Dia" class="form-control" name="dia">
                            <option selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                           </select>    
                            </div>
                        </div>
                     <br>                     
  
                        
                    <!--  mês -->
                     <div class="form-group row" required>
                            <label for="mes" class="col-md-4 col-form-label text-md-right">{{ __('Mês') }}</label>
                            <div class="col-md-6">
                            <select id="Dia" class="form-control" name="mes">
                            <option selected></option>
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                           </select>    
                            </div>
                        </div>
                     <br>                     
  

        
                    
                                                                  
                    <!--  Ano -->
                    <div class="form-group row" required>
                            <label for="mes" class="col-md-4 col-form-label text-md-right">{{ __('Ano') }}</label>
                            <div class="col-md-6">
                            <select id="Dia" class="form-control" name="ano">
                            <option selected></option>
                            <option value=<?php $d; ?> ><?php  echo $d='20'.date('y'); ?></option>
            
                           </select>    
                            </div>
                        </div>
                     <br> 
            

                    <!--  Semana -->
                    <div class="form-group row" required>
                            <label for="semana" class="col-md-4 col-form-label text-md-right">{{ __('Semana') }}</label>
                            <div class="col-md-6">
                            <select id="Dia" class="form-control" name="semana">
                            <option selected></option>
                            <option value="1">Domingo</option>
                            <option value="2">Segunda Feira</option>
                            <option value="3">Terça Feira</option>
                            <option value="4">Quarta Feira </option>
                            <option value="5">Quinta Feira</option>
                            <option value="6">Sexta Feira</option>
                            <option value="7">Sábado</option>
                     </select>    
                            </div>
                        </div>
                     <br> 



                   <!--  Motorista -->
                   <div class="form-group row" required>
                            <label for="mes" class="col-md-4 col-form-label text-md-right">{{ __('Motorista') }}</label>
                            <div class="col-md-6">
                            <select id="Dia" class="form-control" name="ano">
                            <option selected></option>
                            <option value="{{Auth::user()->name}}" >{{ Auth::user()->email}}</option>
            
                           </select>    
                            </div>
                        </div>
                     <br> 

                
                                                
                    <!-- Código da Placa -->
                        <div class="form-group row">
                            <label for="codPlaca" class="col-md-4 col-form-label text-md-right">{{ __('Código da Placa') }}</label>
                            <div class="col-md-6">
                            <input type="text"  name="codPlaca" class="form-control @error('codPlaca') is-invalid @enderror"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                @error('codPlaca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!--  horaInicial -->
                       <div class="form-group row">
                            <label for="horaInicial" class="col-md-4 col-form-label text-md-right">{{ __('Hora Inicial') }}</label>
                            <div class="col-md-6">
                                <input type="time" id="horaInicial" name="horaInicial"
                                 min="00:00" max="23:59" required>

                                @error('horaInicial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <!--  horaFinal -->
                       <div class="form-group row">
                            <label for="horaFinal" class="col-md-4 col-form-label text-md-right">{{ __('Hora Final') }}</label>
                            <div class="col-md-6">
                                <input type="time" id="horaFinal" name="horaFinal"
                                 min="00:00" max="23:59" required>

                                @error('horaInicial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
     
        <br>

                 </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                    <div class="card-body">




                    <!--  Kilometragem Final -->
                        <div class="form-group row">
                            <label for="Kfinal" class="col-md-4 col-form-label text-md-right">{{ __('kilometragem Final') }}</label>
                            <div class="col-md-6">
                            <input type="text"  name="Kfinal" class="form-control @error('Kinicial') is-invalid @enderror"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                @error('Kfinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


          
                            <!--  Kilometragem Kinicial -->
                            <div class="form-group row">
                            <label for="Kinicial" class="col-md-4 col-form-label text-md-right">{{ __('kilometragem Inicial') }}</label>
                            <div class="col-md-6">
                            <input type="text"  name="Kinicial" class="form-control @error('Kinicial') is-invalid @enderror"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                @error('Kinicial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                    <!--  tipo de Combustivel  -->
                    <div class="form-group row" required>
                            <label for="tcombustivel" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Combustível') }}</label>
                            <div class="col-md-6">
                            <select id="tcombustivel" class="form-control" name="tcombustivel">
                            <option selected></option>
                            <option value="Gasolina">Gasolina</option>
                            <option value="Álcool">Álcool </option>
                            <option value="Eletrico">Elétrico</option>
                            <option value="GNV">GNV</option>
                     </select>    
                            </div>
                        </div>
                     <br> 

                   

                        <!-- Valor do Combustivel Combustível -->
                         <div class="form-group row">
                            <label for="vCombustivel" class="col-md-4 col-form-label text-md-right">{{ __('Valor do Combustivel ') }}</label>
                            <div class="col-md-6">
                            <input type="text"  onkeyup="k(this);" name="vCombustivel" class="form-control @error('vCombustivel') is-invalid @enderror"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                @error('vCombustivel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      
                                   
                     
                        <!-- outros -->
                        <div class="form-group row">
                            <label for="outros" class="col-md-4 col-form-label text-md-right">{{ __('Outros Valores:') }}</label>
                            <div class="col-md-6">
                            <input type="text"  onkeyup="k(this);" name="outros" class="form-control @error('outros') is-invalid @enderror"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
                                @error('outros')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                       
					<!--  Especificar outros -->
					<div class="form-group row">
                            <label for="Espoutros" class="col-md-4 col-form-label text-md-right">{{ __('Especificar Outros Valores:') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('Espoutros') is-invalid @enderror" name="Espoutros"  required autocomplete="Espoutros" rows="3"></textarea>
                                @error('Espoutros')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>
					</div>






                    <div class="col-xs-12">
  <div class="col-md-12" >
    <div id="field">
      <div id="field0">
        <!-- Text input-->
        <div class="form-group">
          {!! Form::label('nome-anexo', 'Nome do anexo', ['class' => 'col-md-12 control-label'])!!}
           </div>
        <br><br>


      </div>
    </div>
    <!-- Button --><br>
    <div class="form-group pull-right">
      <div class="col-md-8">
        <button id="add-more" name="add-more" class="btn btn-primary">Adicionar Campo</button>
      </div>
    </div>
    <br><br>
  </div>
</div>






































                        </div>
                        </div>
                        </div>


                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            </div>
            </div>

            </div>
            </div>
            </div>
     





        



























@endsection

 



