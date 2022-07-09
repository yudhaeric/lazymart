        <footer class="footer text-center">
            Copyright © <?= date('Y'); ?> Lazymart All Right Reserved
        </footer>
        </div>

        <!-- All Javascript -->
        <script src="<?= base_url('assets/admin/'); ?>img/plugins/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url('assets/admin/'); ?>img/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/app-style-switcher.js"></script>

        <!--Wave Effects -->
        <script src="<?= base_url('assets/admin/'); ?>js/waves.js"></script>

        <!--Menu sidebar -->
        <script src="<?= base_url('assets/admin/'); ?>js/sidebarmenu.js"></script>

        <!--Custom JavaScript -->
        <script src="<?= base_url('assets/admin/'); ?>js/custom.js"></script>

        <!--flot chart-->
        <script src="<?= base_url('assets/admin/'); ?>img/plugins/flot/jquery.flot.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>img/plugins/flot.tooltip/js/jquery.flot.tooltip.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/pages/dashboards/dashboard1.js"></script>

        <!-- Export Data -->
        <script src="<?= base_url('assets/admin/'); ?>js/tables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/dataTables.bootstrap5.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/buttons.bootstrap5.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/jszip.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/pdfmake.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/vfs_fonts.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/buttons.html5.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/buttons.print.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>js/tables/buttons.colVis.min.js"></script>

        <script>
            $(document).ready(function() {
                var table = $('#example').DataTable( {
                    lengthChange: false,
                    buttons: [
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: ':visible'
                            },
                        },                      
                        {
                            extend: 'pdf',
                            exportOptions: {
                                columns: ':visible'
                            },
                        },                      
                        {
                            extend: 'excel',
                            exportOptions: {
                                columns: ':visible'
                            },
                        },
                        'colvis'
                    ],
                    // columnDefs: [ {
                    //     targets: -1,
                    //     visible: false
                    // } ]
                } );
            
                table.buttons().container()
                    .appendTo( '#example_wrapper .col-md-6:eq(0)' );
            } );
        </script>
        </body>

        </html>