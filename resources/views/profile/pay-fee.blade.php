@extends ('layouts.profile')

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

                <div class="row d-flex flex-column">
                    <div class="col">
                        <h3 class="text-center my-3">Payment Information</h3>
                        <p class="text-muted">Please note this application is not built to accept any form of payment.  All entries
                            to the following fields are abitrary.  You may proceed with the demonstration data that's been
                            pre-filled or enter your own.
                        </p>
                        <hr>
                        <div class="mb-3">
                            <label for="card_number" class="form-label">Card Number</label>
                            <input type="text" class="form-control" name="card_number" id="card_number_input" pattern="\d{4}-\d{4}-\d{4}-\d{4}" value="4242-4242-4242-4242" placeholder="XXXX-XXXX-XXXX-XXXX">
                        </div>
                        <script>
                            const cardNumberInput = document.getElementById('card_number_input');
                          
                            cardNumberInput.addEventListener('input', function(event) {
                              const input = event.target;
                              const inputValue = input.value.replace(/\D/g, ''); // Remove non-digit characters
                              const formattedValue = formatCardNumber(inputValue);
                              input.value = formattedValue;
                            });
                          
                            function formatCardNumber(value) {
                              const chunkSize = 4;
                              const chunks = [];
                            
                              for (let i = 0; i < value.length; i += chunkSize) {
                                chunks.push(value.slice(i, i + chunkSize));
                              }
                            
                              return chunks.join('-');
                            }
                          </script>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" name="cvv" value="123" placeholder="CVV...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="expiration_date" class="form-label">Expiration Date</label>
                                <input type="text" class="form-control" name="expiration_date" value="08/28" placeholder="Expiration Date...">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 class="text-center mb-3">Billing Information</h3>
                            <hr>
                            <div class="mb-3">
                                <label for="street" class="form-label">Street</label>
                                <input type="text" class="form-control" name="street" value="1234 Fulton St." placeholder="Street...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" value="Grand Rapids" placeholder="City...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" name="state" value="Michigan" placeholder="State...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" value="United States" placeholder="Country...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="zipcode" class="form-label">Zipcode</label>
                                <input type="number" class="form-control" name="zipcode" value="49501" placeholder="Zipcode...">
                            </div>
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