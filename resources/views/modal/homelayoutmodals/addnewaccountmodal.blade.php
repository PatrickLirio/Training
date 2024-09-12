<!---MODAL----->
<div class="modal fade" id="add-new-account-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="add-new-account-modal-Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add-new-account-modal-Label">Add New Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                    <div class="row ">
                        <div class="col">
                            <!-- All inputs in a single row -->
                            <div class="row m-2">
                                <div class="col-5">
                                <label>Account ID</label>
                                </div>
                                <div class="col-7">
                                <input type="text" name="accountid" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                <label for="">Account Name</label>
                                </div>
                                <div class="col-7">
                                <input type="text" name="accountname" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                <label for="">Bank Name</label>
                                </div>
                                <div class="col-7">
                                <input type="text" name="bankname" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                <label for="">Current Balance</label>
                                </div>
                                <div class="col-7">
                                <input type="text" name="currentBalance" class="form-control">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-5">
                                <label for="">Date Opening</label>
                                </div>
                                <div class="col-7">
                                <input type="date" name="dateopened" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" id="create-or-update-account" class="btn btn-primary" action=''>Save</button>
        </div>
        </div>
    </div>
</div>
