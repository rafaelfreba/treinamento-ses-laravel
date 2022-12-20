<h1>Lista de Pacientes</h1>

<table>
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
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)        
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->cpf }}</td>
                <td>{{ $patient->cns }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->birth }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>{{ $patient->county->name }}/{{ $patient->county->fu }}</td>
            </tr>            
        @empty
            <tr>
                <td colspan="9">Nenhum registro encontrado!</td>
            </tr>
        @endforelse
    </tbody> 
 </table>