<!-- jQuery -->
<script src="{{ asset('projects/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('projects/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('projects/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('projects/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('projects/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('projects/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('projects/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('projects/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('projects/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('projects/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('projects/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('projects/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('projects/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('projects/admin/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('projects/admin/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('projects/admin/js/demo.js')}}"></script>

{{-- form --}}


<!-- bs-custom-file-input -->
<script src="{{ asset('projects/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

 <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
 </script>
 <script>
    document.querySelector(".old-password").addEventListener("input", function(e) {

      const newPasswordElements = document.querySelectorAll(".new-password");

  if (e.data !== null) {
    newPasswordElements.forEach(element => {
        element.removeAttribute("disabled");
    });
  } else {
    newPasswordElements.forEach(element => {
        element.setAttribute("disabled", "disabled");
    });
  }
    });
  </script>
@yield('scripts');