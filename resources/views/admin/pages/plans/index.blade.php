@extends('adminlte::page')
@section('title', 'Planos')
@section('content_header')
    <h1>Listagem de Planos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">#Filtros</div>
        <div class="card-body">
            <table class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th>Plano</th>
                    <th>Preço</th>
                    <th width="50px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($plans as $plan)
                    <tr>
                        <td>{{ $plan->name }}</td>
                        <td>{{ $plan->price }}</td>
                        <td>
                            <a href="#" class="text-info">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop
