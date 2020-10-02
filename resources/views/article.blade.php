@extends('layouts.app')

@section('title'){{$article->title}}@endsection

@section('description') {{$article->getPreview()}}

@endsection

@push('styles')

@endpush
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>{{$article->title}}</h1>
            <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" class="img-fluid"> 
            <h4>{{$article->description}}</h4>
            <p>{{$article->user->name}}</p>
            
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush