@extends('index')
@section('contents')
<div class="container bg-secondary">
    <span class="fs-6 text-white">
        Address - {{ $publisher->address  }} <br>
        Phone - {{ $publisher->phone }} <br>
        Email - {{ $publisher->email }}
    </span>
</div>
<div class="row align-self-center" style="width: 100%">
    @if (count($books) == 0)

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">No books found</h5>
                <p class="card-text">There are no books from this publisher.</p>
            </div>
        </div>

    </div>

    @else
    @foreach($books as $book) 
    <div class="col-3" style="padding-right: 4px; padding-left:4px">
        <div class="card mb-2" style="">
            <img src="../../{{ $book->image }}" class="card-img-top" style="min-height:228px;">
            <div class="card-body p-2">
                <div class="fs-5 mb-3" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                    {{ $book->title }}
                </div>
                <div class="mb-1" style="font-size:12px">
                    by
                </div>
                <div class="mb-3 text-truncate" style="font-size: 14px">
                    {{ $book->author }}
                </div>
            <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        
      </div>    
    @endforeach
    @endif
</div>
@endsection