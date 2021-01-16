@if($flash=Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ $flash }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if($flash=Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  {{ $flash }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if($flash=Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ $flash }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if($flash=Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $flash }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif