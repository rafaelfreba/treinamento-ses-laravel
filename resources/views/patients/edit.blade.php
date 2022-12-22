@extends('layouts.app')

@section('title', 'Editar Paciente')

@section('main')

    <form action="{{ route('patients.update', $patient) }}" method="POST">
        
        @method('PUT')

        <div class="card mt-5">

            <div class="card-header">
                <h1 class="card-title">Editar Paciente</h1>
            </div>

            <div class="card-body">

                @include('patients._form')

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-1 px-4">OK</button>
                <a href="{{ route('patients.index') }}" class="btn btn-danger">Voltar</a>
            </div>

        </div>

    </form>

@endsection
