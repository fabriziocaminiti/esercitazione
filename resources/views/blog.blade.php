@extends('layouts.app')

@section('title')Blog @endsection

@section('description') Descrizione che appare @endsection

@push('styles')

@endpush

@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col-12 text-center mt-5">
            <h1>Progetto Accelerate</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo sed placeat odit voluptate sequi, ab, cupiditate eos error fugiat voluptatibus, nihil et magni illum officia delectus consectetur similique repellat. Atque?</p>
        </div>
    </div>



    <section class="row py-5">

        @foreach($articles as $article)

        <div class="col-12 col-md-4">
            <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" class="img-fluid" width="200">
            <h2>{{$article->title}}</h2>
            <p>{{$article->getPreview()}}</p>
            <a href="{{$article->url()}}" class="btn btn-success btn-lg px-4">Clicca</a>
        </div>

        @endforeach

        <div class="col-12">
            {{$articles->render()}}
        </div>

    </section>

</div>

@endsection

@push('scripts')

@endpush