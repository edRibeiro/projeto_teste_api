@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Estabelecimento de Saúde</div>
                <form action="{{ url('establishments') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="NomeFantasia">Nome Fantasiao</label>
                            <input type="text" required class="form-control{{$errors->has('NomeFantasia') ? ' is-invalid':''}}" value="{{ old('NomeFantasia') }}" id="NomeFantasia" name="NomeFantasia">
                            <div class="invalid-feedback">{{ $errors->first('NomeFantasia') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="RazaoSocial">Razao Social</label>
                            <input type="text" required class="form-control{{$errors->has('RazaoSocial') ? ' is-invalid':''}}" value="{{ old('RazaoSocial') }}" id="RazaoSocial" name="RazaoSocial">
                            <div class="invalid-feedback">{{ $errors->first('RazaoSocial') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="CNPJ">CNPJ</label>
                            <input type="text" required class="form-control{{$errors->has('CNPJ') ? ' is-invalid':''}}" value="{{ old('CNPJ') }}" id="CNPJ" name="CNPJ">
                            <div class="invalid-feedback">{{ $errors->first('CNPJ') }}</div>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" required class="form-control{{$errors->has('telefone') ? ' is-invalid':''}}" value="{{ old('telefone') }}" id="telefone" name="telefone">
                            <div class="invalid-feedback">{{ $errors->first('telefone') }}</div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" value="{{ old('email') }}" id="email" name="email" placeholder="email@provedor.com.br">
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
