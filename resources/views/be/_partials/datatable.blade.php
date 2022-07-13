@section('ext_script')
<script
    type="text/javascript"
    src="/assets/js/plugins/jquery.dataTables.min.js"
></script>
<script
    type="text/javascript"
    src="/assets/js/plugins/dataTables.bootstrap.min.js"
></script>
<script type="text/javascript">
    $("#sampleTable").DataTable();
</script>
@endsection