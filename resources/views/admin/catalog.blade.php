@extends ('layouts.admin')

@section('content')

<section class="container-fluid">
    <div class="row">
        @foreach($books as $book)
        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column text-center justify-content-center mb-5">
            <a href="/admin/catalog/edit/{{$book->id}}"><img src="/images/books/{{$book->book_img}}" width="100" height="150" alt="" class="mx-auto mb-3"></a>
            <a href="/admin/catalog/edit/{{$book->id}}"><h5>{{$book->title}}</h5></a>
        </div>
        @endforeach
    </div>
    
        
</section>

@endsection