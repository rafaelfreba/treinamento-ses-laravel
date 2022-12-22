@extends('layouts.app')

@section('title', 'Detalhe Paciente')

@section('main')

    <div class="card mt-5">

        <div class="card-header">
            <h1 class="card-title">Detalhe Paciente<strong></strong></h1>
        </div>

        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Nome: {{ $patient->name }}</li>
                <li class="list-group-item">CPF: {{ mask($patient->cpf, 'cpf') }}</li>
                <li class="list-group-item">CNS: {{ mask($patient->cns, 'cns') }}</li>
                <li class="list-group-item">Nascimento: {{ convert_date_to_pt_br($patient->birth) }}</li>
                <li class="list-group-item">E-mail: {{ $patient->email }}</li>
                <li class="list-group-item">Telefone: {{ mask($patient->phone, 'phone') }}</li>
                <li class="list-group-item">Cidade/UF: {{ $patient->county->name }}/{{ $patient->county->fu }}</li>                
            </ul>
        </div>

        <div class="card-footer">
            <a href="{{ route('patients.index') }}" class="btn btn-danger">Voltar</a>
        </div>

    </div>

@endsection
