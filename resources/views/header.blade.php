@section('navbar')
<div class="container-fluid bg-warning py-3 text-center">
    <span class="fs-2 text-white ">
        Giant Book Supplier
    </span>
</div>
<ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" aria-current="page" href="/">Home</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </a>
        <ul class="dropdown-menu dropdown-menu">
            @foreach($categories as $category)
            <li><a class="dropdown-item" href="/category/{{ $category->id }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/publisher">Publisher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact</a>
    </li>
</ul>
@endsection