@extends('layouts.master')
@push('css')
    <!-- the css in the <head> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
<link rel="stylesheet" href="{{ URL::asset('plugins/jmenu/bootstrap-iconpicker/css/bootstrap-iconpicker.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<style>
  .pr-0, .px-0 {
    padding-right: 10px !important;
}

.list-group-item {
  
    border: 3px solid rgb(167 167 167 / 13%) !important;
}
</style>
@endpush

@section('title') Menu Editor @endsection
@section('content')
<div style="padding-top: 20px" class="row">

<section class="col-lg-6">
<div class="card">
    <div class="card-header">
      <h3 style="padding-top: 10px" class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
     Menu Editor
      </h3>
     

    </div>
    <div class="card-body">
      <ul id="myEditor" class="sortableLists list-group">
      </ul>
      <div class="card-footer">
        <button type="submit" id="btnSimpan" class="btn btn-primary"><i class="fas fa-sync-alt"></i>  Simpan</button>
      
    </div>
      
 
  </div>
</section>

<section class="col-lg-6">
  <div class="card">
      <div class="card-header">
        <h3 style="padding-top: 10px" class="card-title">
          <i class="fas fa-chart-pie mr-1"></i>
          Edit Item
        </h3>
       
  
      </div>
      <div class="card-body">
        <div class="card border-primary mb-3">
          <div class="card-header bg-primary text-white">Edit item</div>
              <div class="card-body">
              <form id="frmEdit" class="form-horizontal">
              <div class="form-group">
              <label for="text">Text</label>
              <div class="input-group">
              <input type="text" required class="form-control item-menu" name="text" id="text" placeholder="Text">
              <div class="input-group-append">
              <button type="button" id="myEditor_icon" class="btn btn-outline-secondary"></button>
              </div>
              </div>
              <input type="hidden" name="icon" class="item-menu">
              </div>
              <div class="form-group">
              <label for="href">URL</label>
              <input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
              </div>
              <div class="form-group">
              <label for="target">Target</label>
              <select name="target" id="target" class="form-control item-menu">
              <option value="_self">Self</option>
              <option value="_blank">Blank</option>
              <option value="_top">Top</option>
              </select>
              </div>
              <div class="form-group">
                <label>Role Menu</label>
                <div class="select2-blue">
                  <select id="role" name="role" class="select2 item-menu" multiple="multiple" data-placeholder="Select Role" data-dropdown-css-class="select2-blue" style="width: 100%;">
                    @foreach ($roles as $item=>$value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              </form>
              </div>
          <div class="card-footer">
              <button type="button" id="btnUpdate" class="btn btn-primary" disabled><i class="fas fa-sync-alt"></i> Update</button>
              <button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
          </div>
      </div>
       
  
      </div>
    </div>
  </section>
</div>
@endsection
@push('js')
    <!-- (Recommended) Just before the closing body tag </body> -->
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="{{ URL::asset('plugins/jmenu/bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jmenu/bootstrap-iconpicker/js/bootstrap-iconpicker.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jmenu/jquery-menu-editor.min.js') }}"></script>
<script src="{{ URL::asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script>
$(document).ready(function(){
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

       //Initialize Select2 Elements
       $('.select2').select2()

 

//Initialize Select2 Elements
$('.select2bs4').select2({
  theme: 'bootstrap4'
})

  // icon picker options
var iconPickerOptions = {searchText: "Cari...", labelHeader: "{0}/{1}"};
// sortable list options
var sortableListOptions = {
    placeholderCss: {'background-color': "#cccccc"}
};
var editor = new MenuEditor('myEditor', 
            { 
            listOptions: sortableListOptions, 
            iconPicker: iconPickerOptions,
            maxLevel: 5 // (Optional) Default is -1 (no level limit)
            // Valid levels are from [0, 1, 2, 3,...N]
            });
editor.setForm($('#frmEdit'));
editor.setData({!! json_encode($menu) !!});
editor.setUpdateButton($('#btnUpdate'));
//Calling the update method
$("#btnUpdate").click(function(){
    editor.update();
    $('.select2').val([]);
    $('.select2').trigger('change');
});
// Calling the add method
$('#btnAdd').click(function(){
    editor.add();
});

$("#btnSimpan").click(function(){
  var str = editor.getString();
console.log(str);
  $("#frmEdit").submit();
  $.ajax({
          url: "menu/update",
          type:"POST",
          data:{
            menu_json:editor.getString(),
          },
          success:function(response){
            console.log(response);
            // location.reload();
          },
         });


  // $("#frmEdit").submit();
//   var str = editor.getString();
// console.log(str);
});





 
});

</script>

@endpush