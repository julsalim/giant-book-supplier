@extends('index')
@section('contents')
<div class="card">
    <img src="../{{ $book->image }}" class="card-img-top" alt="...">
    <div class="card-body p-2">
        <p class="fs-5">
            Title: {{ $book->title  }}
        </p>
        <p class="fs-5">
            Author : {{ $book->author  }}
        </p>
        <p class="fs-5">
            Publisher : {{ $book->publisher->name  }}
        </p>
        <p class="fs-5">
            Year : {{ $book->year  }}
        </p>
        <p class="fs-5">
            Synopsis : <br> {{ $book->synopsis }}
        </p>
    
    </div>
</div>
@endsection