@extends('layouts.app')

@section('stylecss')
<style>
.form-control-static {
    font-weight: bold;
}
.img-avatar {
    max-width: 100%;
    border: 1px solid #c0c0c0;
    border-radius: 5px;
    margin-bottom: 15px;
}
</style>
@endsection

@section('javascript')
<script type="text/javascript">
function validate_delete() {
    return confirm('Excluir o registro atual? Essa ação não pode ser desfeita.');
}
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Estabelecimento de Saúde</div>
                <form action="{{ url('establishments/'.$data->id) }}" method="post" onsubmit="return validate_delete()">
                    <div class="card-body">
                        @method('DELETE')

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ $data->Foto }}" class="img-avatar">
                            </div>
                            <div class="col-sm-8">

                                <div class="form-group">
                                    <label for="NomeFantasia">Nome Fantasia</label>
                                    <p class="form-control-static">{{ $data->NomeFantasia }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Telefone">Telefone</label>
                                    <p class="form-control-static">{{ $data->Telefone }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="Email">E-mail</label>
                                    <p class="form-control-static">{{ $data->Email }}</p>
                                </div>

                            </div>
                        </div><!-- /.row -->
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                        <a href="{{ url('establishments/'.$data->id.'/edit') }}" class="btn btn-primary">Editar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
