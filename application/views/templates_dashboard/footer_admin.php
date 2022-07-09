        <footer class="footer text-center">
            Copyright © <?= date('Y'); ?> Lazymart All Right Reserved
        </footer>
    </div>

    <!-- All Jquery -->
    <script src="<?= base_url('assets/'); ?>admin/img/plugins/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/'); ?>admin/img/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/app-style-switcher.js"></script>

    <!--Wave Effects -->
    <script src="<?= base_url('assets/'); ?>admin/js/waves.js"></script>

    <!--Menu sidebar -->
    <script src="<?= base_url('assets/'); ?>admin/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/'); ?>admin/js/custom.js"></script>

    <!--flot chart-->
    <script src="<?= base_url('assets/'); ?>admin/img/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/img/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url('assets/'); ?>admin/js/pages/dashboards/dashboard1.js"></script>

    <!-- Chart -->
    <script src="<?= base_url('assets/admin/'); ?>js/highcharts.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/modules/accessibility.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/modules/data.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/modules/drilldown.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/modules/export-data.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/modules/exporting.js"></script>

    <script>
        // Chart Column Penjualan
        Highcharts.chart('chart-penjualan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Penjualan Bulanan Lazymart 2021'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category',
                title: {
                    text: 'Bulan'
                }
            },
            yAxis: {
                title: {
                    text: 'Total Penjualan'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Browsers",
                colorByPoint: true,
                data: [{
                        name: "Januari",
                        y: 92.74
                    },
                    {
                        name: "Februari",
                        y: 82.57
                    },
                    {
                        name: "Maret",
                        y: 91.23
                    },
                    {
                        name: "April",
                        y: 70.23
                    },
                    {
                        name: "Mei",
                        y: 80.89
                    },
                    {
                        name: "Juni",
                        y: 90.5
                    },
                    {
                        name: "Juli",
                        y: 60.72
                    },
                    {
                        name: "Agustus",
                        y: 70.62
                    },
                    {
                        name: "September",
                        y: 80.9
                    },
                    {
                        name: "Oktober",
                        y: 67.64
                    },
                    {
                        name: "November",
                        y: 80.52
                    },
                    {
                        name: "Desember",
                        y: 0
                    },
                ]
            }],
        });
    </script>
</body>

</html>