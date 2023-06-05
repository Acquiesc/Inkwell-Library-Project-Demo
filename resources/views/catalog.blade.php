@extends ('layouts.standard')

@section('content')

<section class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-5 fw-bold mt-3 mb-5">Inkwell Library Catalog</h1>
        </div>
    </div>
    <div class="row">
        @foreach($books as $book)
        <div class="col-12 col-md-6 col-lg-3 d-flex flex-column text-center justify-content-center mb-5">
            <a href="/catalog/view/{{$book->id}}"><img src="/images/books/{{$book->book_img}}" width="100" height="150" alt="" class="mx-auto mb-3"></a>
            <a href="/catalog/view/{{$book->id}}"><h5>{{$book->title}}</h5></a>
            <!-- Button trigger modal -->
            <div class="text-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#book-detail-{{$book->id}}">
                    <i class="fs-5 bi bi-eye"></i>
                </button>
            </div>

            @include('inc.book-details-modal')

        </div>
        @endforeach
    </div>
    
        
</section>

@endsection