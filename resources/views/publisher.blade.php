@extends('index')
@section('contents')
<div class="row align-self-center" style="width: 100%">
    @if (count($books) == 0)

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">No publisher found</h5>
                <p class="card-text">There are no publisher.</p>
            </div>
        </div>

    </div>

    @else
    @foreach($publishers as $publisher)
    <div class="col-3" style="padding-right: 4px; padding-left:4px">
        <div class="card">
            <img src="{{ $publisher->image }}" class="card-img-top" style="min-height:142px;" alt="...">
            <div class="card-body p-2">
                <div class="fs-5 mb-3" style="min-height:60px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                    {{ $publisher->name }}
                </div>
                <div style="font-size:12px">
                    Publisher Address
                </div>
                <div class="mb-2" style="font-size: 14px; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">
                    {{ $publisher->address }}
                </div>
            <a href="publisher/detail/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        
      </div>    
    @endforeach
    @endif
</div>
@endsection
