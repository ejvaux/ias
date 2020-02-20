<div class="modal fade" id="plantsModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Entry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add-plants-form"  method="post" action=''>
                @csrf
                <div class="modal-body" style="">
                    <!-- ____________ FORM __________________ -->
                    <div class="row form-group">
                        {{-- <div class="col-6">
                            <div class="row">
                                <div class="col-5">
                                    <label for="code" class="col-form-label-sm">Name:</label>                  
                                </div>
                                <div class="col-7">
                                    <input class='form-control' type="text" name="name" id="name">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-5">
                            <label for="code" class="col-form-label">Name:</label>                  
                        </div>
                        <div class="col-7">
                            <input class='form-control' type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="row form-group">
                        {{-- <div class="col-6">
                            <div class="row">
                                <div class="col-5">
                                    <label for="code" class="col-form-label-sm">Scientific Name:</label>                  
                                </div>
                                <div class="col-7">
                                    <input class='form-control' type="text" name="sname" id="sname">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-5">
                            <label for="code" class="col-form-label">Scientific Name:</label>                  
                        </div>
                        <div class="col-7">
                            <input class='form-control' type="text" name="sname" id="sname">
                        </div>
                    </div>             
                    <!-- ____________ FORM END __________________ -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" name="submit" id="add-plant-submit"><i class="far fa-save"></i> Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>