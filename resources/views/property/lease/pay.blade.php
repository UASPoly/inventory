
<div class="modal fade" id="edit_{{$agreement->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <b>ADD PAYMENT</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="{{route('property.lease.pay',[$agreement->id])}}" method="post">
                    @csrf
                    
                    <div class="form-group mt-2">
                        <label for="security_deposite">Amount</label>
                        <input type="number" class="input-group form-control" value="{{$agreement->balance()}}" name="amount">
                    </div>
                    <div class="form-group mt-2">
                        <label for="duration">Date</label>
                        <input type="date" class="input-group form-control" value="{{old('date')}}" name="date">
                    </div>
                    <div class="form-group mt-2">
                        <label for="start_at">PaymentType</label>
                        <select name="payment_type_id" id="" class="form-control">
                        <option value="">Payment Type</option>
                        @foreach(App\Models\PaymentType::all() as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="end_at">Mode of Payment</label>
                        <select name="payment_mode" id="" class="form-control">
                            <option value="">Payment Mode</option>
                            <option value="bank">Bank</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-primary">REGISTER</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>