@extends ('layouts.admin')

@section('content')

<h1 class="text-center mt-5 mb-3">Manage User</h1>

<section class="container">
    <div class="row border shadow p-3">
        <div class="col-12 text-center">
            <h3 class="mb-3">Active Orders</h3>
            <hr>
        </div>
        <div class="col-12 justify-content-evenly mb-3">
            @if(count($active_orders) > 0)
            @foreach($active_orders as $order)
            <div class="row d-flex gap-2 justify-content-evenly align-items-center">
                <div class="col-12 col-md-auto d-flex justify-content-center">
                    <img src="/images/books/{{$order->book->book_img}}" class="mb-3 mx-auto" width="125" alt="">
                </div>
                <div class="col-12 col-md-auto">
                    <p><strong>Title: </strong><br>{{$order->book->title}}</p>
                    <p><strong>Due: </strong><br>{{$order->due_date}}</p>
                </div>
                @if($order->total_fees_due > 0)
                <div class="col-12 col-md-auto">
                    <p><strong>Total Fees: </strong><br>${{$order->total_fees_accrued}}</p>
                    <p><strong>Fees Paid: </strong><br>${{$order->total_fees_paid}}</p>
                    <p><strong>Fees Due: </strong><br>${{$order->total_fees_due}}</p>
                </div>
                @endif
                <div class="col-12 col-md-auto">
                    @if($order->total_fees_due > 0)
                    <div class="col text-center">
                        <a href="/admin/fees/manage/{{$order->id}}" class="btn btn-danger">Collect Fees</a>
                    </div>
                    @else
                    <div class="col text-center">
                        {!! Form::open(['action' => ['App\Http\Controllers\OrdersController@update', $order->id], 'files' => false, 'method' => 'POST']) !!}
                            <div class = "text-center py-5">
                                {{ Form::hidden('_method', 'PUT') }}
                                {{ Form::submit('Check In', ['class'=>'btn btn-success'])}}
                            </div>
                        {!! Form::close() !!}
                    </div>
                    @endif
                </div>
            </div>
            <hr>
            @endforeach
            @else
            <p class="text-center my-3"><strong>This user has no active orders</strong></p>
            @endif
        </div>
    </div>
</section>

<section class="container">
    <div class="row border shadow p-3">
        <div class="col-12 text-center">
            <h3 class="mb-3">Order History</h3>
            <hr>
        </div>
        <div class="col-12 justify-content-evenly mb-3">
            @if(count($order_history) > 0)
            @foreach($order_history as $order)
            <div class="row d-flex gap-2 justify-content-evenly align-items-center">
                <div class="col-12 col-md-auto d-flex justify-content-center">
                    <img src="/images/books/{{$order->book->book_img}}" class="mb-3 mx-auto" width="125" alt="">
                </div>
                <div class="col-12 col-md-auto">
                    <p><strong>Title: </strong><br>{{$order->book->title}}</p>
                    <p><strong>Due: </strong><br>{{$order->due_date}}</p>
                    <p><strong>Checked In: </strong><br>{{$order->checked_in_date}}</p>
                </div>
                <div class="col-12 col-md-auto">
                    <p><strong>Total Fees: </strong><br>${{$order->total_fees_accrued}}</p>
                    <p><strong>Fees Paid: </strong><br>${{$order->total_fees_paid}}</p>
                    <p><strong>Fees Due: </strong><br>${{$order->total_fees_due}}</p>
                </div>
            </div>
            <hr>
            @endforeach
            @else
            <p class="text-center my-3"><strong>This user has no order history</strong></p>
            @endif
        </div>
    </div>
</section>

@endsection