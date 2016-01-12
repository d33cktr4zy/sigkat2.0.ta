@section('footScript')
@parent
        <!--Calendar Footscript -->
{!! Html::script('/js/bootstrap-datepicker.js') !!}
{!! Html::script('/js/bootstrap-datepicker.id.min.js') !!}

<script type="text/javascript">
    $(document).ready(function() {
        $('#calendarSidebar').datepicker({
            startDate: "01/01/1980",
            endDate: "12/31/2016",
            todayBtn: true,
            language: "id",
            keyboardNavigation: false,
            todayHighlight: true
        });

    });
</script>
<!-- end calendar footscript -->
@append

@section('headStyles')
@parent
        <!--Calendar Headstyle -->
{!! Html::style('/css/bootstrap-datepicker.css') !!}
        <!--end Calendar headStyle -->
@append

@section('calendar')
    <div id="calendarSidebar"></div>
@endsection

{{--
todo :
Make the date clickable and add the goto pengumuman
--}}