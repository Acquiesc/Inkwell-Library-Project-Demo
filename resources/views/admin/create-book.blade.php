@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class = "text-center">Create Book</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {!! Form::open(['action' => ['App\Http\Controllers\BooksController@store'], 'files' => true, 'method' => 'POST']) !!}
                <div class="mb-3">
                    <label for="ISBN" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="ISBN" placeholder="ISBN...">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title...">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Author...">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="Publisher...">
                </div>
                <div class="mb-3">
                    <label for="published_date" class="form-label">Published Date</label>
                    <input type="date" class="form-control" name="published_date" placeholder="Published Date...">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Total Quantity</label>
                    <input type="number" class="form-control" name="quantity" min="1" value="1">
                </div>
                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <textarea class="form-control" name="summary" id="summary" rows="5" placeholder="Summary..."></textarea>
                </div>
                <div class="mb-3">
                    <label for="book_img" class="form-label">Book Image (optional)</label>
                    <input class="form-control" name="book_img" type="file" id="formFile">
                </div>

                <div class = "text-center py-5">
                    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>



@endsection