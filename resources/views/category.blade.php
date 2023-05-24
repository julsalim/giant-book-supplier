@extends('index')
@section('contents')
<div class="row  align-self-center" style="width: 100%">
    @foreach($books as $book) 
    <div class="col-3" style="padding-right: 4px; padding-left:4px">
        <div class="card">
            <img src="../{{ $book->image }}" class="card-img-top" alt="...">
            <div class="card-body p-2">
                <div class="fs-5 mb-3" style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                    {{ $book->title }}
                </div>
                <div style="font-size:12px">
                    by
                </div>
                <div class="text-truncate" style="font-size: 14px">
                    {{ $book->author }}
                </div>
            <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        
      </div>    
    @endforeach
    
    {{-- @for ($i = 0; $i < count({{ $books }}); $i++)
    
    @endfor --}}
</div>
@endsection
