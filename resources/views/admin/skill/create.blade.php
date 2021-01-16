@extends('layouts.backend.app',[
	'title' => 'Create Skill',
	'pageTitle' => 'Create Skill',
])
@section('content')
@include('layouts.components.datatables')
@include('layouts.components.alert-dismissible')
<div class="card shadow mb-4">
    <div class="card-header py-3">
    	<a href="{{ route('skill.index') }}" class="btn btn-danger btn-sm">Batalkan</a>
    </div>
        <div class="table-responsive">
            <form id="dynamic_form">
                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
                   <thead>
                    <tr>
                        <th width="35%">Skill</th>
                        <th width="30%">Action</th>
                    </tr>
                   </thead>
                   <tbody>

                   </tbody>
                   <tfoot>
                    <tr>
                        <td colspan="1" align="right">&nbsp;</td>
                        <td>
                      @csrf
                      <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                     </td>
                    </tr>
                   </tfoot>
                </table>
            </form>
       </div>
</div>
@stop

@section('js-script')
<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" required id="skill" name="skills[]" class="form-control" /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        $.ajax({
            url:'{{ route("skill.store") }}',
            method:'POST',
            data:$(this).serialize(),

            success:function(){
              <?php session()->flash('success','Data berhasil ditambah') ?>
              document.location.href='{{ route("skill.index") }}'
            }
        });
 });

});
</script>
@stop