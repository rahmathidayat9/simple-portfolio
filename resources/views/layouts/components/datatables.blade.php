@section('css-plugins')
<!-- Custom styles for this page -->
<link href="{{ asset('templates/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('js-plugins')
<script src="{{ asset('templates/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('templates/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('templates/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>
@stop