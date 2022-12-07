@include('admin.layout.header')
<!-- jQuery -->
<script src="{{ url('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
@yield('content')

@include('sweetalert::alert')
@include('admin.layout.footer')
