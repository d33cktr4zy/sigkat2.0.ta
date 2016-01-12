@section('footScript')
    @parent
@append


@section('footer')
{{--
 The body footer of the generic page
 --}}
<div class="row" id="footer">
    <!--<div class="col-md-12 col-xs-12 col-sm-12">-->
    <div>
        <p>{!! config('sigkat.copyright') !!}</p>
    </div>
</div><!--end Footer -->
@endsection