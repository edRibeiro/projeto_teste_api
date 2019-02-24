@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profissionais</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover" style="margin-bottom: inherit">
                        <tbody>
                            @foreach ($professionals as $professional)
                            <tr>
                                <td>
                                    <a href="{{ url('professionals/'.$professional->id) }}">
                                        <img src="{{ $professional->foto }}" class="img-avatar-xs">
                                    </a>
                                </td>
                                <td>
                                    <a class='a-line' href="{{ url('professionals/'.$professional->id) }}">
                                        {{ $professional->nome }}
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class='a-line' href="{{ url('professionals/'.$professional->id) }}">
                                        {{ $professional->telefone }}
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell">
                                    <a class='a-line' href="{{ url('professionals/'.$professional->id) }}">
                                        {{ $professional->email }}
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
