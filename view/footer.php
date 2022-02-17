  <!-- Main Footer -->
  <footer class="main-footer">
      <strong>Copyright &copy; 2022 Inventory Gudang </strong>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
      $(document).ready(function() {
          var table = $('#tabel_mie').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100],
              "lengthChange": false,
              buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
              .appendTo('#tabel_mie_wrapper .col-md-6:eq(0)');

          var table = $('#tabel_minyak').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100],
              "lengthChange": false,
              buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
              .appendTo('#tabel_minyak_wrapper .col-md-6:eq(0)');

          var table = $('#tabel_plastik').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100],
              "lengthChange": false,
              buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
              .appendTo('#tabel_plastik_wrapper .col-md-6:eq(0)');

          var table = $('#tabel_terigu').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100],
              "lengthChange": false,
              buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
              .appendTo('#tabel_terigu_wrapper .col-md-6:eq(0)');

          var table = $('#tabel_keluar').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100]
          });

          table.buttons().container()
              .appendTo('#tabel_keluar_wrapper .col-md-6:eq(0)');

          var table = $('#tabel_riwayat').DataTable({
              "pagingType": "full_numbers",
              "paging": true,
              "lengthMenu": [10, 25, 50, 75, 100],
              buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
              .appendTo('#tabel_riwayat_wrapper .col-md-6:eq(0)');
      });
  </script>
  </body>

  </html>