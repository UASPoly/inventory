
<div class="modal fade" id="addProperty" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <b>NEW HOUSE</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('property.register')}}" method="post">
                    @csrf
                    <div class="form-group mt-2 pr-4 pl-4">
                        <label for="size">House Size</label>
                        <input type="text" class="input-group form-control" placeholder="Size" id ="size" value="{{old('size')}}" name="size">
                    </div>
                    
                    
                    <div class="form-group mt-2 pr-4 pl-4">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="input-group form-control" placeholder="Address" value="{{old('address')}}" name="address">
                    </div>
                    
                    <div class="form-group mt-2 pr-4 pl-4">
                        <label for="price">Price</label>
                        <input type="number" class="input-group form-control" placeholder="Price" value="{{old('price')}}" name="price">
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