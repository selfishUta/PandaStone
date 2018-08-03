@extends('layouts/admin')
@section('js')
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.pie.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.resize.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.time.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.growraf.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.categories.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.stack.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="{{asset('admin')}}/plugins/charts/flot/date.js"></script>
<script src="{{asset('admin')}}/plugins/charts/sparklines/jquery.sparkline.js"></script>
<script src="{{asset('admin')}}/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
<script src="{{asset('admin')}}/plugins/forms/icheck/jquery.icheck.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tags/jquery.tagsinput.min.js"></script>
<script src="{{asset('admin')}}/plugins/forms/tinymce/tinymce.min.js"></script>
<script src="{{asset('admin')}}/plugins/misc/highlight/highlight.pack.js"></script>
<script src="{{asset('admin')}}/plugins/misc/countTo/jquery.countTo.js"></script>
<script src="{{asset('admin')}}/plugins/ui/weather/skyicons.js"></script>
<script src="{{asset('admin')}}/plugins/ui/notify/jquery.gritter.js"></script>
<script src="{{asset('admin')}}/plugins/ui/calendar/fullcalendar.js"></script>
<script src="{{asset('admin')}}/js/jquery.sprFlat.js"></script>
<script src="{{asset('admin')}}/js/app.js"></script>
<script src="{{asset('admin')}}/js/pages/dashboard.js"></script>
@endsection