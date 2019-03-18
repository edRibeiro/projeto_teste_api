@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Estabelecimento de Saúde</div>
                <form action="{{ url('establishments/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        @method('PUT')

                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome Fantasia</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->NomeFantasia) }}" id="nome" name="NomeFantasia">
                            <div class="invalid-feedback">{{ $errors->first('nome') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="RazaoSocial">Razao Social</label>
                            <input type="text" required class="form-control{{$errors->has('nome') ? ' is-invalid':''}}" value="{{ old('nome', $data->RazaoSocial) }}" id="RazaoSocial" name="RazaoSocial">
                            <div class="invalid-feedback">{{ $errors->first('RazaoSocial') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="CNPJ">CNPJ</label>
                            <input type="text" required class="form-control{{$errors->has('CNPJ') ? ' is-invalid':''}}" value="{{ old('CNPJ', $data->CNPJ) }}" id="CNPJ" name="CNPJ">
                            <div class="invalid-feedback">{{ $errors->first('CNPJ') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" required class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone', $data->Telefone) }}" id="telefone" name="Telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email', $data->Email) }}" id="email" name="Email" placeholder="email@provedor.com.br">
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="#" onclick="history.back()" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
