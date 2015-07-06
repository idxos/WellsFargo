<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard #1</title>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <link href="kendo/examples/content/shared/styles/examples-offline.css" rel="stylesheet">
    <link href="kendo/styles/kendo.common.min.css" rel="stylesheet">
    <link href="kendo/styles/kendo.rtl.min.css" rel="stylesheet">
    <link href="kendo/styles/kendo.default.min.css" rel="stylesheet">
    <link href="kendo/styles/kendo.dataviz.min.css" rel="stylesheet">
    <link href="kendo/styles/kendo.dataviz.default.min.css" rel="stylesheet">
    <script src="kendo/js/jquery.min.js"></script>
    <script src="kendo/js/kendo.all.min.js"></script>
    <script src="kendo/examples/content/shared/js/console.js"></script>
    <link href="_css/off-canvas-styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



    <div class="container">

          <div class="row row-offcanvas row-offcanvas-right">


            <section class="col-xs-12">
              <button type="button" class="btn btn-pink bd-none pull-right" data-toggle="offcanvas">
                <i class="fa fa-bars fa-lg"></i>
              </button>
            </section>

            <div class="col-xs-12 col-sm-12">

              
              <div class="row">
                <div class="col-xs-12">
                  <h2>Kendo Charts</h2>
                  
                  <div id="example">
                      <div class="demo-section k-content">
                          <div id="chart" style="background: center no-repeat url('kendo/examples/content/shared/styles/world-map.png');"></div>
                      </div>
                      <script>
                          function createChart() {
                              $("#chart").kendoChart({
                                  title: {
                                      text: "Gross domestic product growth /GDP annual %/"
                                  },
                                  legend: {
                                      position: "top"
                                  },
                                  seriesDefaults: {
                                      type: "column"
                                  },
                                  series: [{
                                      name: "India",
                                      data: [3.907, 7.943, 7.848, 9.284, 9.263, 9.801, 3.890, 8.238, 9.552, 6.855]
                                  }, {
                                      name: "Russian Federation",
                                      data: [4.743, 7.295, 7.175, 6.376, 8.153, 8.535, 5.247, -7.832, 4.3, 4.3]
                                  }, {
                                      name: "Germany",
                                      data: [0.010, -0.375, 1.161, 0.684, 3.7, 3.269, 1.083, -5.127, 3.690, 2.995]
                                  },{
                                      name: "World",
                                      data: [1.988, 2.733, 3.994, 3.464, 4.001, 3.939, 1.333, -2.245, 4.339, 2.727]
                                  }],
                                  valueAxis: {
                                      labels: {
                                          format: "{0}%"
                                      },
                                      line: {
                                          visible: false
                                      },
                                      axisCrossingValue: 0
                                  },
                                  categoryAxis: {
                                      categories: [2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011],
                                      line: {
                                          visible: false
                                      },
                                      labels: {
                                          padding: {top: 135}
                                      }
                                  },
                                  tooltip: {
                                      visible: true,
                                      format: "{0}%",
                                      template: "#= series.name #: #= value #"
                                  }
                              });
                          }

                          $(document).ready(createChart);
                          $(document).bind("kendo:skinChange", createChart);
                      </script>
                    </div>


                </div><!--/col-->
              </div><!--/row-->
            </div><!--/span-->




            <div class="col-xs-3 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
              <h1>Reports</h1>
              <div class="list-group">
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - ZL Dead Message Queue Some extra spacing</a>
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - ZL Unknown User Department Some extra spacing</a>
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - ZL 5000 Status</a>
                <a href="#" class="list-group-item">5/23 @ 5:44 pm - ZLLT 5000 Status</a>
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - Volume Variance</a>
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - Message Timeliness</a>
                <a href="#" class="list-group-item">5/23 @ 4:24 pm - Missing Message</a>
              </div>

              <h1>Reports</h1>
              <div class="list-group">
                <a href="#" class="list-group-item">All Shoes</a>
                <a href="#" class="list-group-item">Size</a>
                <a href="#" class="list-group-item">Brand</a>
                <a href="#" class="list-group-item">Color</a>
                <a href="#" class="list-group-item">Style</a>
                <a href="#" class="list-group-item">Trend</a>
                <a href="#" class="list-group-item">Occasion</a>
                <a href="#" class="list-group-item">Boots</a>
                <a href="#" class="list-group-item">Lookbooks</a>
                <a href="#" class="list-group-item">Sale</a>
              </div>
            </div><!--/span-->


          </div><!--/row-->





    </div>















    <script>
        $(document).ready(function () {
            $('[data-toggle="offcanvas"]').click(function () {
                $('.row-offcanvas').toggleClass('active')
            });
        });
    </script>
  </body>
</html>