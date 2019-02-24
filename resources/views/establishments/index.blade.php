@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Estabelecimentos de Saúde</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover" style="margin-bottom: inherit">
                        <tbody>
                            @foreach ($establishments as $establishment)
                            <tr>
                                <td>
                                    <a href="{{ url('establishments/'.$establishment->id) }}">
                                        <img src="{{ $establishment->Foto }}" class="img-avatar-xs">
                                    </a>
                                </td>
                                <td>
                                    <a class='a-line' href="{{ url('establishments/'.$establishment->id) }}">
                                        {{ $establishment->NomeFantasia }}
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class='a-line' href="{{ url('establishments/'.$establishment->id) }}">
                                        {{ $establishment->Telefone }}
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class='a-line' href="{{ url('establishments/'.$establishment->id) }}">
                                        {{ $establishment->Email }}
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
