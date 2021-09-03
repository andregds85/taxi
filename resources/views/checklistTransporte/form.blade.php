<hr>
<div class="formulario">
    <div class="itens">
 
    <div id="item" class="item">
        <div class="form-row">
            <div class="form-group col-md-10">
                {{ Form::label('Titulo')}}
                <input type="text" class="form-control" name="{{$name}}[title][]">
            </div>
            <div class="form-group col-md-2">
                <button class="removerCondicao btn btn-outline-danger" type="button">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
        </div>
 
 
        <div class="registros">
            <div id="row1" class="content_registros row form-row">
                <div class="form-group col-sm-2">
                    {{ Form::label('% Entrada') }}
                    <input type='text' class='form-control' name='{{$name}}[rows][entrada_percentua][]'>
                </div>
 
                <div class="form-group col-sm-2">
                    {{ Form::label('Valor de Entrada') }}
                    <input type="text" class="form-control" name="{{$name}}[rows][entrada_valor][]">
                </div>
 
                <div class="form-group col-sm-2">
                    {{ Form::label('Número de Parcelas') }}
                    <input type="text" class="form-control" name="{{$name}}[rows][parcelas][]">
                </div>
 
                <div class="form-group col-sm-2">
                    {{ Form::label('Valor das Parcelas') }}
                    <input type="text" class="form-control" name="{{$name}}[rows][parcelas_valor][]">
                </div>
 
                <div class="form-group col-sm-2">
                    <button class="removerRegistro btn btn-outline-danger" type="button">
                        <i class="fas fa-times-circle"></i>
                    </button>
                </div>
            </div>
        </div>
 
        <button class="novoRegistro btn btn-outline-primary" type="button">Adicionar Registro</button>
        <hr>
    </div>
    </div>
    <button class="novaCondicao btn btn-outline-primary" type="button">Adicionar Condição</button>
</div>
 
@push('scripts')
    <script>
        $(document).ready(function () {
 
            var entrada_per = '{{$name}}[rows][entrada_percentua][]';
            var entrada_valor = '{{$name}}[rows][entrada_valor][]';
            var parcelas = '{{$name}}[rows][parcelas][]';
            var parcelas_valor = '{{$name}}[rows][parcelas_valor][]';
 
            var $form = $('.formulario'),
                $itens = $form.find('.itens'),
 
            // Conteudo do Formulário
                $item = $form.find('.item').clone();
 
            //  Cria uma nova condição
            $form.on('click', '.novaCondicao', function (e) {
                e.preventDefault();
                $item.clone().appendTo($itens);
            });
 
            // Criando um novo registro
            $form.on('click', '.novoRegistro', function (e) {
                e.preventDefault();
 
                // Contando as Row da class registro
                length = $(this).parent('.item').children('.registros').children('.row').length;
 
                fields = '<div id="row' + (length + 1) + '" class="content_registros row form-row">';
                fields += '<div class="form-group col-sm-2"> <label>% Entrada</label> <input type="text" class="form-control" name="'+entrada_per+'' + (length + 1) + '">   </div>';
                fields += '<div class="form-group col-sm-2"> <label>Valor Entrada</label> <input type="text" class="form-control" name="'+entrada_valor+'"> </div>';
                fields += '<div class="form-group col-sm-2"> <label>Número de Parcelas</label> <input type="text" class="form-control" name="'+parcelas + '"> </div>';
                fields += '<div class="form-group col-sm-2"> <label>Parcelas</label> <input type="text" class="form-control" name="'+ parcelas_valor+'"> </div> ';
                fields += '<div class="form-group col-sm-2"> <button class="removerRegistro btn btn-outline-danger" type="button"> <i class="fas fa-times-circle"></i> </button> </div>';
 
                container = $(this).parent('.item').children('.registros');
                container.append(fields);
            });
 
            // Remover Registro
            $form.on('click', '.removerRegistro', function () {
                $(this).parents('.content_registros').first().remove();
            });
 
            // Remover Condicao
            $form.on('click', '.removerCondicao', function () {
                $(this).parents('.item').first().remove();
            });
 
        });
    </script>
 
@endpush