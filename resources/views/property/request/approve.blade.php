
<div class="modal fade" id="edit_{{$request->id}}" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <b>APPROVE REQUEST</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="{{route('property.request.update',[$request->id])}}" method="post">
                    @csrf
                    <div class="form-group mt-2">
                        <label for="amount">Amount</label>
                        <input type="text" class="input-group form-control" placeholder="Amount" value="{{$request->property->price}}" name="amount">
                    </div>
                    <div class="form-group mt-2">
                        <label for="security_deposite">Security Deposit</label>
                        <input type="text" class="input-group form-control" placeholder="Security Deposite" value="{{old('security_deposite')}}" name="security_deposite">
                    </div>
                    <div class="form-group mt-2">
                        <label for="duration">Duration in Months</label>
                        <input type="number" class="input-group form-control" placeholder="Duration" value="{{old('duration')}}" name="duration">
                    </div>
                    <div class="form-group mt-2">
                        <label for="start_at">Start At</label>
                        <input type="date" class="input-group form-control" placeholder="Start At" value="{{old('start_at')}}" name="start_at">
                    </div>
                    <div class="form-group mt-2">
                        <label for="end_at">End At</label>
                        <input type="date" class="input-group form-control" placeholder="End At" value="{{old('end_at')}}" name="end_at">
                    </div>
                    
                    <button class="btn btn-primary">UPDATE</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>