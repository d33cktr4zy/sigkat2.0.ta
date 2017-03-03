@section('metaFooter')
@parent
<!--
this is the footer of the html
it will contain eveything that need to be placed in the page
right outside the body tag and before html tag
-->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
<script src="/js/offcanvas.js"></script>
{{--{!! dd($__env->yieldContent('footScript')) !!}--}}

@yield('footScript')

@append