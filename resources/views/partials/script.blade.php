      <script>
            document.addEventListener('DOMContentLoaded', function() {
                  const logoutLinks = document.querySelectorAll('a.menu-link[href="{{ route("logout") }}"]');
                  logoutLinks.forEach(link => {
                        link.addEventListener('click', function(e) {
                              e.preventDefault();
                              const logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
                              logoutModal.show();
                        });
                  });
            });
      </script>

      <script src={{asset("assets/js/bootstrap.bundle.min.js")}}></script>
      <script src={{asset("assets/js/sidebar-menu.js")}}></script>
      <script src={{asset("assets/js/dragdrop.js")}}></script>
      <script src={{asset("assets/js/rangeslider.min.js")}}></script>
      <script src={{asset("assets/js/quill.min.js")}}></script>
      <script src={{asset("assets/js/data-table.js")}}></script>
      <script src={{asset("assets/js/prism.js")}}></script>
      <script src={{asset("assets/js/clipboard.min.js")}}></script>
      <script src={{asset("assets/js/feather.min.js")}}></script>
      <script src={{asset("assets/js/simplebar.min.js")}}></script>
      <script src={{asset("assets/js/apexcharts.min.js")}}></script>
      <script src={{asset("assets/js/echarts.min.js")}}></script>
      <script src={{asset("assets/js/swiper-bundle.min.js")}}></script>
      <script src={{asset("assets/js/fullcalendar.main.js")}}></script>
      <script src={{asset("assets/js/jsvectormap.min.js")}}></script>
      <script src={{asset("assets/js/world-merc.js")}}></script>
      <script src={{asset("assets/js/moment.min.js")}}></script>
      <script src={{asset("assets/js/lightpick.js")}}></script>
      <script src={{asset("assets/js/custom/apexcharts.js")}}></script>
      <script src={{asset("assets/js/custom/echarts.js")}}></script>
      <script src={{asset("assets/js/custom/custom.js")}}></script>