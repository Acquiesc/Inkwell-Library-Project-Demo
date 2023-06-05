@extends ('layouts.standard')

@section('content')

<section class="container-fluid">
    <div class="row mt-3 mb-5">
        <div class="col text-center">
            <a href="/catalog" class="fs-3 fw-bold"><i class="bi bi-arrow-left"></i> Return to Catalog</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column text-center justify-content-center mb-5">
            <img src="/images/books/{{$book->book_img}}" alt="" class="mx-auto mb-3 w-50">
        </div>
        <div class="col-12 col-md-6">
            <h3 class="mb-3 text-center"><strong>{{$book->title}}</strong></h3>
            <p class="mb-3"><strong>Author:</strong> {{$book->author}}</p>
            <p class="mb-3"><strong>Summary:</strong> {{$book->summary}}</p>
            <p class="mb-3"><strong>ISBN:</strong> {{$book->ISBN}}</p>
            <p class="mb-3"><strong>Publisher:</strong> {{$book->publisher}}</p>
            <p class="mb-3"><strong>Published Date:</strong> {{$book->published_date}}</p>
            <p class="mb-3"><strong>Quantity Available:</strong> {{$book->total_quantity - $book->total_currently_checked_out}}</p>
            @if(($book->total_quantity - $book->total_currently_checked_out) > 0)
            <div class="my-5 text-center">
                {!! Form::open(['action' => ['App\Http\Controllers\CartsController@store'], 'files' => false, 'method' => 'POST']) !!}
                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                    {!! Form::hidden('book_id', $book->id) !!}
                    {{ Form::submit('Add to Cart', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
            @endif
        </div>
    </div>
    
        
</section>

@endsection