@extends('layouts.app')

@section('title', 'App Cadastro de Pacientes')

@section('main')

    <div class="card table-responsive" style="margin-top: 1rem; margin-bottom: 1rem">

        <div class="card-header">
            <h1 class="card-title">Lista de Pacientes</h1>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>cpf</th>
                        <th>cns</th>
                        <th>nome</th>
                        <th>nascimento</th>
                        <th>e-mail</th>
                        <th>telefone</th>
                        <th>cidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $patient->id }}</td>
                            <td>{{ mask($patient->cpf, 'cpf') }}</td>
                            <td>{{ mask($patient->cns, 'cns') }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ convert_date_to_pt_br($patient->birth) }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ mask($patient->phone, 'phone') }}</td>
                            <td>{{ $patient->county->name }}/{{ $patient->county->fu }}</td>
                            <td>
                                <a href="{{ route('patients.show', $patient) }}" class="btn btn-info">Detalhe</a>
                                <a href="{{ route('patients.edit', $patient) }}" class="btn btn-warning">Editar</a>
                                <a href="#" class="btn btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">Nenhum registro encontrado!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $patients->links() }}
        </div>

        <div class="card-footer">
            <a href="{{ route('patients.create') }}" class="btn btn-primary">Novo</a>
            <a href="{{ route('home') }}" class="btn btn-danger">Voltar</a>
        </div>

    </div>

@endsection
