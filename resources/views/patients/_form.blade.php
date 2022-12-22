
@csrf

@inject('resource', 'App\Http\Services\ServicesProvider')

<div class="row">

    <div class="form-group col-md-3">
        <label for="cpf" class="form-label">cpf</label>
        <input type="text" name="cpf" class="form-control" value="{{ old('cpf', $patient->cpf ?? '') }}" />
    </div>

    <div class="form-group col-md-3">
        <label for="cns" class="form-label">cns</label>
        <input type="text" name="cns" class="form-control" value="{{ old('cns', $patient->cns ?? '') }}" />
    </div>

    <div class="form-group col-md-6">
        <label for="name" class="form-label">nome</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $patient->name ?? '') }}" />
    </div>

    <div class="form-group  col-md-3">
        <label for="birth" class="form-label">nascimento</label>
        <input type="date" name="birth" class="form-control" value="{{ old('birth', $patient->birth ?? '') }}" />
    </div>

    <div class="form-group  col-md-4">
        <label for="email" class="form-label">e-mail</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $patient->email ?? '') }}" />
    </div>

    <div class="form-group  col-md-4">
        <label for="phone" class="form-label">telefone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone', $patient->phone ?? '') }}" />
    </div>

    <div class="form-group  col-md-4">
        <label for="county_id" class="form-label">cidade</label>
        <select name="county_id" class="form-select">
            <option selected></option>
            @foreach ($resource->counties() as $county)
                <option value="{{ $county->id }}" @selected(old('county_id', $patient->county_id ?? '') == $county->id)>
                    {{ $county->name }}/{{ $county->fu }}
                </option>
            @endforeach
        </select>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
