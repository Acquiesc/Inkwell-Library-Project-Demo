@extends ('layouts.admin')

@section('content')

<section class="container-fluid">
    <div class="row mt-3">
        <div class="col text-center">
            <a href="/admin/catalog" class="mb-3 fs-5"><i class="bi bi-arrow-left"></i> Return to Admin Catalog</a>
            <h1 class="mb-5">Edit Book #{{$book->id}}</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-12 d-flex flex-column text-center justify-content-center mb-5">
            <img src="/images/books/{{$book->book_img}}" width="200" alt="" class="mx-auto mb-3">
            {!! Form::open(['action' => ['App\Http\Controllers\BooksController@update', $book->id], 'files' => true, 'method' => 'POST', 'class' => 'container']) !!}
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="ISBN" class="form-label">ISBN</label>
                            <input type="text" class="form-control" name="ISBN" value="{{$book->ISBN}}" placeholder="ISBN...">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$book->title}}" placeholder="Title...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control" name="author" value="{{$book->author}}" placeholder="Author...">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="publisher" class="form-label">Publisher</label>
                            <input type="text" class="form-control" name="publisher" value="{{$book->publisher}}" placeholder="Publisher...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="published_date" class="form-label">Published Date</label>
                            <input type="date" class="form-control" name="published_date" value="{{$book->published_date}}" placeholder="Published Date...">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Total Quantity</label>
                            <input type="number" class="form-control" name="quantity" min="1" value="{{$book->total_quantity}}">
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary</label>
                            <textarea class="form-control" name="summary" id="summary" rows="5" placeholder="Summary...">{{$book->summary}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-6">
                        <div class="mb-3">
                            <label for="book_img" class="form-label">Book Image (optional)</label>
                            <input class="form-control" name="book_img" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <div class = "text-center py-5">
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
        
</section>

@endsection