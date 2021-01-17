@extends('layouts.backend.app',[
    'title' => 'Footer Layout',
    'pageTitle' => 'Footer Layout',
])
@section('content')
@include('layouts.components.alert-dismissible')
<div class="row">
	@foreach($footers as $footer)
	<div class="col-md-6 mb-2">
		<div class="card">
		  <div class="card-header">
		  		@php
					if($footer->is_active==1){
						$checked = "checked";
					}else{
						$checked = "";
					}
				@endphp
				<div class="custom-control custom-switch float-right">
				  <input type="checkbox" <?= $checked ?> value="{{ $footer->is_active }}" class="custom-control-input activate" data-id="{{ $footer->id }}" id="{{ $footer->id }}">
				  <label class="custom-control-label switch" for="{{ $footer->id }}"></label>
				</div>
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">{{ $footer->title }}</h5>
		    <p class="card-text">{{ $footer->description }}</p>
		  </div>
		</div>
	</div>
	@endforeach	
</div>
	<div class="pagination justify-content-center">
		{{ $footers->links() }}
	</div>
@stop

@section('js-script')
<script type="text/javascript">

	if ($(".activate").val()==1) {
		$(this).attr('checked', 'checked');
	}

	$(".activate").on("click",function(){
		var status = $(this).val()
		var id = $(this).data("id")

			$.ajax({
				url: '/admin/layout/setfooter',
				type: 'POST',
				data: {
					status : status,
					id : id
				},
				success:function(){
					document.location.href='{{ route("layout.footer") }}'
				},
			});
	
	});
</script>
@stop