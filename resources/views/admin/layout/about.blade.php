@extends('layouts.backend.app',[
    'title' => 'About Layout',
    'pageTitle' => 'About Layout',
])
@section('content')
@include('layouts.components.alert-dismissible')
<div class="row">
	@foreach($abouts as $about)
	<div class="col-md-6 mb-2">
		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img src="{{ asset('storage/uploads/image/about/'.$about->image) }}" width="100%" style="height: 270px; object-fit: cover; object-position: center;" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body">

		      	@php
					if($about->is_active==1){
						$checked = "checked";
					}else{
						$checked = "";
					}
				@endphp
				<div class="custom-control custom-switch float-right">
				  <input type="checkbox" <?= $checked ?> value="{{ $about->is_active }}" class="custom-control-input activate" data-id="{{ $about->id }}" id="{{ $about->id }}">
				  <label class="custom-control-label switch" for="{{ $about->id }}"></label>
				</div>
		        
		        <h5 class="card-title">{{ $about->title }}</h5>
		        <p class="card-text">{{ $about->name }} , {{ $about->description }}</p>
		        <p class="card-text"><small class="text-muted">{{ $about->email }}</small></p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	@endforeach	
</div>
	<div class="pagination justify-content-center">
		{{ $abouts->links() }}
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
				url: '/admin/layout/setabout',
				type: 'POST',
				data: {
					status : status,
					id : id
				},
				success:function(){
					document.location.href='{{ route("layout.about") }}'
				},
			});
	
	});
</script>
@stop