@extends('layout')
 
@section('content')
 
    <h1>{{ $title }}</h1>
 
    @if (count($items) > 0)
 
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-light">
                <tr>
                    <th>ID</td>
                    <th>Vārds</td>
                    <th>&nbsp;</td>
                </tr>
            </thead>
            <tbody>
 
            @foreach($items as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td>Labot / Dzēst</td>
            </tr>
            @endforeach
 
            </tbody>
        </table>
 
    @else
 
        <p>Nav atrasts neviens ieraksts</p>
 
    @endif

       <a href="/authors/create" class="btn btn-primary">Izveidot jaunu</a>
 
@endsection