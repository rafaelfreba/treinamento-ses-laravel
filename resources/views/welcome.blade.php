@extends('layouts.app')

@section('title', 'Home')

@section('main')

    <div class="card" style="margin-top: 1rem; margin-bottom: 1rem">

        <div class="card-header">
            <h1 class="card-title">Home</h1>
        </div>

        <div class="card-body">
            <p class="lead">
                Integer ullamcorper ligula nec volutpat consectetur. Nullam eu libero justo. Vestibulum ante ipsum primis in
                faucibus orci luctus et ultrices posuere cubilia curae; In eu massa vitae tortor fringilla consectetur a
                egestas sem. Sed viverra libero libero, non ullamcorper nisi dapibus vel. Ut leo augue, tincidunt vel
                interdum vel, ornare mattis mauris. Ut porttitor venenatis congue. Class aptent taciti sociosqu ad litora
                torquent per conubia nostra, per inceptos himenaeos. Praesent a felis quis nunc egestas dapibus. Sed a
                molestie velit. Maecenas eget hendrerit sapien, id convallis mi. Cras laoreet orci auctor tortor ornare
                ultrices.

                Curabitur vel placerat tellus. Integer laoreet nisi sed nulla gravida, at tincidunt leo pellentesque.
                Curabitur posuere vitae leo vel luctus. Sed a ullamcorper purus. Morbi ut rhoncus arcu. Donec elementum,
                enim sed auctor egestas, magna felis porttitor lacus, gravida rhoncus leo lorem viverra ligula. Curabitur
                facilisis, lorem eget fermentum viverra, enim est consectetur mauris, nec dapibus est mauris eget turpis.
                Proin id lorem gravida, scelerisque ante sit amet, tincidunt mauris. Cras sit amet ex ultrices, finibus
                lacus ut, tristique erat. Donec pretium scelerisque elit, a lobortis enim pretium in. Ut et orci eu urna
                elementum ultricies. Maecenas elementum metus eget dui imperdiet vehicula.

                Etiam non lobortis lorem. Sed dolor sapien, tristique at tortor ut, pretium euismod dui. Donec nec metus non
                ante convallis rhoncus eget eget mi. Cras vitae hendrerit orci. Nullam ut auctor magna. Aliquam dictum nulla
                at dolor dapibus commodo. Etiam mattis quis odio eget tincidunt. Pellentesque nec lorem at nibh pellentesque
                fringilla nec eu nisi. Proin tincidunt aliquam magna sit amet gravida. Phasellus molestie erat ac est
                bibendum suscipit. Sed iaculis turpis vel auctor dapibus.

                Cras vel lorem laoreet, molestie felis eget, vulputate urna. Aliquam dolor dui, ornare sit amet turpis
                vitae, tempor venenatis ipsum. Suspendisse sit amet ex vehicula, rhoncus enim sed, vestibulum odio. Integer
                aliquet libero sit amet eros viverra, auctor malesuada purus porttitor. Integer non nunc vitae orci
                facilisis sodales. Mauris magna tellus, auctor vitae imperdiet venenatis, maximus tempor sem. Donec egestas
                varius nisi ac finibus. Pellentesque viverra at leo at efficitur.               
            </p>
        </div>

        <div class="card-footer">
            <a href="{{ route('patients.index') }}" class="btn btn-primary">Pacientes</a>
            <a href="#" class="btn btn-primary">Cidades</a>
        </div>

    </div>
@endsection
