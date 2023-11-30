
<div class="modal fade" id="addFeature" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <b>NEW FEATURE</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{route('property.feature.register',[$property->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="input-group form-control" placeholder="name" value="{{old('name')}}" name="name">
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <input type="file" class="input-group form-control" placeholder="QUANTITY" value="{{old('quantity')}}" name="quantity">
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