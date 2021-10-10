<div class="col-sm-6 col-md-4 col-xl-3">
    <div id="modal_edit_group"  class="modal fade" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
      tabindex="-1">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title mt-0" id="modal_title">Edit List Role Permissions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="row" id="form_editor">
              <div class="col-12">
                <form  id="form_edit_group" enctype="multipart/form-data">
                  @csrf

                 

                  <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Group Permission</label>
                    <input  placeholder="Group Permission" name="group" type="text"
                      id="group" class="input form-control">
                  </div>

                
                  <div class="form-group">
                   <label for="example-text-input" class="col-form-label">Set Permissions for role</label>
                  
                   <div style="padding-top:7px;float: right" class="form-check">
                     <label style="padding-right: 20px" class="form-check-label">Select All</label>  
                     <input id="check_all" class="form-check-input" type="checkbox">
                  </div>
                 
                     <table id="table-edit-permissions" class=" table table-bordered">
                       <thead>
                         <tr>
                           <th style="width: 10px">No</th>
                           <th>Name</th>
                           <th style="width: 40px">#</th>
                         </tr>
                       </thead>
                       <tbody>
                       
                    
                       
                       </tbody>
                     </table>
                 
                
                 </div>

                  <div class="modal-footer justify-content-between">
                    <button type="button" data-dismiss="modal" class="btn_kembali btn btn-secondary">Batal</button>
                    <button  value="Validate" class="btn_update btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- end col -->
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>