
      </div>          <!----------Footer-area------------>
                <div class="footer-area">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-9 col-6">
                            <div class="footer-item">
                                <p>Copyright © 2022 <a href="https://codepopular.com/">codepopular</a> - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-3 col-6">
                            <div class="footer-item text-right">
                                <p>Version : 1.0.4</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
    <!-- Jquery javascript library -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/vendors/sparkline/js/jquery.sparkline.min.js"></script>
    <!-- Bootstrap bundle javascript -->
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scrollbar javascript -->
    <script src="assets/vendors/scroll/scrollbar.min.js"></script>
    <!-- Waypoints javascript -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Chart javascript -->
    <script src="assets/js/chart.js"></script>
    <!-- Jquery counterup javascript -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Summernote lite javascript -->
    <script src="assets/vendors/summernote/js/summernote-lite.min.js"></script>
  <!-- Jquery datatable javascript -->
  <script src="assets/vendors/datatable/jquery.dataTables.min.js"></script>
    <!-- Datatables bootstrap javascript -->
    <script src="assets/vendors/datatable/dataTables.bootstrap.min.js"></script>


    <!-- Custom script -->
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/admin.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
    <script>
        tinymce.init({
            selector: '#tnmyEditor',
            height: 350
        });
    </script>
    <script>
        $('#sampleTable').DataTable();
    </script>
    <script>

        var data = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56],
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86],
                },
            ],
        };
        var pdata = [
            {
                value: 300,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "Red",
            },
            {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green",
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow",
            },
        ];

        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
        var ctxr = $("#radarChartDemo").get(0).getContext("2d");
        var radarChart = new Chart(ctxr).Radar(data);

        var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
        var polarChart = new Chart(ctxpo).PolarArea(pdata);

        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);

        var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
        var doughnutChart = new Chart(ctxd).Doughnut(pdata);

        var ctxd = $("#chart-area").get(0).getContext("2d");
        var doughnutChart = new Chart(ctxd).PolarArea(pdata);
    </script>
</body>

</html>