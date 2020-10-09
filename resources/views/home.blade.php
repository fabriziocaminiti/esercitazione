@extends('layouts.app')

@section('title')@endsection

@section('description') Descrizione che appare @endsection

@push('styles') @endpush

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-12 text-center mt-5">
            <h1>Blog flash news</h1>

            @livewireStyles

            @livewire('info',['sport'=>'sport','cronaca'=>'cronaca'])

            @livewireScripts

        </div>
    </div>
</div>

<div style="margin-top: 4000px;"></div>


@endsection

@push('scripts')

@endpush
