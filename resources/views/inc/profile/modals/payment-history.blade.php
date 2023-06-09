<div class="modal fade" id="fee-{{$payment->id}}-details" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Payment ID #{{$payment->id}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start">
        <div class="row d-flex justify-content-center mb-3">
          <div class="col-auto">
            <img src="/images/books/{{$payment->order->book->book_img}}" width="150" alt="" class="m-auto">
          </div>
        </div>
        <h3>Order Details</h3>
        <p class=""><strong>Order ID: </strong><span class="text-nowrap">{{$payment->order->id}}</span></p>
        <p class=""><strong>Checked Out: </strong><span class="text-nowrap">{{$payment->created_at}}</span></p>
        <p class=""><strong>Days Overdue: </strong><span class="text-nowrap">{{$payment->order->days_overdue}}</span></p>
        @if($payment->order->checked_in_date != null)
        <p class=""><strong>Checked In: </strong><span class="text-nowrap">{{$payment->order->checked_in_date}}</span></p>
        @else
        <p class=""><strong>Checked In: </strong><span class="text-nowrap">Not checked in</span></p>
        @endif
        <hr>
        <h3>Payment Details</h3>
        <p class=""><strong>Total Fees Accrued: </strong><span class="text-nowrap">${{$payment->order->total_fees_accrued}}</span></p>
        <p class=""><strong>Total Fees Paid: </strong><span class="text-nowrap">${{$payment->order->total_fees_paid}}</span></p>
        <p class=""><strong>Amount Paid: </strong><span class="text-nowrap">${{$payment->amount_paid}}</span></p>
        <p class=""><strong>Paid On: </strong><span class="text-nowrap">{{$payment->created_at}}</span></p>
        <p class=""><strong>Payment ID: </strong><span class="text-nowrap">{{$payment->id}}</span></p>
        <hr>
        <h3>Payment Record</h3>
        <p class=""><strong>Card: </strong><span class="text-nowrap">{{$payment->card_number}}</span></p>
        <p class=""><strong>CVV: </strong><span class="text-nowrap">{{$payment->cvv}}</span></p>
        <p class=""><strong>Expiration Date: </strong><span class="text-nowrap">{{$payment->expiration_date}}</span></p>
        <hr>
        <h3>Billing Information</h3>
        <p class="">{{$payment->street}} {{$payment->city}},</p>
        <p>{{$payment->state}} {{$payment->country}} {{$payment->zipcode}}</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
      </div>
  </div>
</div>