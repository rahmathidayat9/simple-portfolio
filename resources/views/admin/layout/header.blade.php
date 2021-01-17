@extends('layouts.backend.app',[
    'title' => 'Header Layout',
    'pageTitle' => 'Header Layout',
])
@section('content')
@include('layouts.components.alert-dismissible')

<div class="row">
	@foreach($headers as $header)
	<div class="col-md-6 mb-2">
		<div class="card">
			<div class="card-header">
				<span class="badge badge-success">{{ $header->title }}</span>

				<span class="badge badge-primary ml-2">{{ $header->navbar_title }}</span>
			</div>
			<div class="card-body">
				<img src="{{ asset('storage/uploads/image/header/'.$header->image) }}" width="100%" style="height: 270px; object-fit: cover; object-position: center;">

				<div class="jumbotron mt-3">
				  <h3 class="">{{ $header->up_text }}</h3>
				  <p class="lead">{{ $header->down_text }}</p>
				</div>
			</div>
			<div class="card-footer">
				@php
					if($header->is_active==1){
						$checked = "checked";
					}else{
						$checked = "";
					}
				@endphp
				<div class="custom-control custom-switch">
				  <input type="checkbox" <?= $checked ?> value="{{ $header->is_active }}" class="custom-control-input activate" data-id="{{ $header->id }}" id="{{ $header->id }}">
				  <label class="custom-control-label switch" for="{{ $header->id }}"></label>
				</div>
			</div>
		</div>
	</div>
	@endforeach	
</div>
	<div class="pagination justify-content-center">
		{{ $headers->links() }}
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
				url: '/admin/layout/setheader',
				type: 'POST',
				data: {
					status : status,
					id : id
				},
				success:function(){
					document.location.href='{{ route("layout.header") }}'
				},
			});
	
	});
</script>
@stop