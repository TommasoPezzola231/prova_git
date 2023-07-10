@extends('layouts.admin')

@section('content')

    <form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    

    <h1 class="text-center">Aggiungi Post</h1>

    <label for="title">Titolo</label>
    <input class="form-control" type="text" name="title" required >

    <label for="content">Contenuto</label>
    <input class="form-control" type="text" name="content" required >

    <label for="url">Url Immagine</label>
    <input class="form-control" type="text" name="url" required >

    <input class="btn btn-primary my-2" type="submit" value="Crea">

    </form>

@endsection