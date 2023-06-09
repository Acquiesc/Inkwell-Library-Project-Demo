@extends ('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row d-flex justify-content-center mb-5">
        <div class="col text-center">
            <h1>Fees</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row d-flex justify-content-evenly gap-5 p-3 mb-5" >
        <div class="col-12 col-lg-5 p-3 shadow border border-dark" style="background-color: var(--ivory);">
            <h1 class="text-center mb-5">Order # {{$order->id}}</h1>
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <img src="/images/books/{{$order->book->book_img}}" width="150" alt="" class="m-auto">
                    </div>
                    <div class="col">
                        <p class="w-100"><strong>Title:</strong><br> {{$order->book->title}}</p>
                        <p class="w-100"><strong>Author:</strong><br> {{$order->book->author}}</p>
                        <p class="w-100"><strong>ISBN:</strong><br> {{$order->book->ISBN}}</p>
                        <p class="w-100"><strong>Days Overdue: </strong><span class="text-nowrap">{{$order->days_overdue}}</span></p>
                        <p class="w-100"><strong>Fees: </strong><span class="text-nowrap">${{$order->total_fees_due}}</span></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-12 col-lg-5 p-3 shadow border border-dark" style="background-color: var(--ivory);">
            <h1 class="text-center mb-5">Pay Fee</h1>
            {!! Form::open(['action' => ['App\Http\Controllers\FeesController@store'], 'files' => false, 'method' => 'POST']) !!}
                <div class="row">
                    <div class="col">
                        <h3 class="text-center my-3">Order Details</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="order_id" class="form-label">Order ID</label>
                            <input type="integer" class="form-control" readonly name="order_id" value="{{$order->id}}" placeholder="Order ID...">
                        </div>
                        <div class="mb-3">
                            <label for="amount_paid" class="form-label">Amount</label>
                            <input type="number" class="form-control" name="amount_paid" step="0.01" min="0.00" value="{{$order->total_fees_due}}" placeholder="Amount...">
                        </div>
                    </div>
                </div>
                <div class = "text-center py-5">
                    {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>



@endsection