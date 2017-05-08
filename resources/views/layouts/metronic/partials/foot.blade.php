<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<script src="/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->

      <!-- BEGIN CORE PLUGINS -->
      <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/bootstrap/js/bootstrap.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
      <script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.js" type="text/javascript"></script>
      <!-- END CORE PLUGINS -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
         @yield('foot-page-level-plugins')
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="/assets/global/scripts/app.js" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <!-- BEGIN PAGE LEVEL SCRIPTS -->
         @yield('foot-page-level-scripts')
      <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
      <script src="/assets/layouts/layout/scripts/layout.js" type="text/javascript"></script>
      <script src="/assets/layouts/layout/scripts/demo.js" type="text/javascript"></script>
      <script src="/assets/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>
      <script src="/assets/layouts/global/scripts/quick-nav.js" type="text/javascript"></script>
      <!-- END THEME LAYOUT SCRIPTS -->
      <script>
         $(document).ready(function()
         {
             $('#clickmewow').click(function()
             {
                 $('#radio1003').attr('checked', 'checked');
             });
         })
      </script>
   </body>

</html>