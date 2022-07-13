@section('ext_script')
<script type="text/javascript" src="/assets/js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="/assets/js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $('#demoDate').datepicker(
        {
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true
        }
    );
    $('#demoDate2').datepicker(
        {
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true
        }
    );
    $('#demoDate3').datepicker(
        {
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true
        }
    );
    $('#demoDate4').datepicker(
        {
            format: "dd-mm-yyyy",
            autoclose: true,
            todayHighlight: true
        }
    );
</script>
@endsection