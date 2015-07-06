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

    <link href="assets/css/site.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <div class="operations-page-wrapper">
      
      <div class="row">
        <section class="col-sm-4 col-xs-12">
          <div class="panel panel-danger">
            <div class="panel-body">
              <h1>Total Batches #</h1>
              <h2>2666</h2>
            </div><!--/.panel-body-->
            <div class="panel-footer"><a href="#">more info</a></div>
          </div>
        </section>
        <section class="col-sm-4 col-xs-12">
          <div class="panel panel-success">
            <div class="panel-body">
              <h1>Total Messages #</h1>
              <h2>266666</h2>
            </div><!--/.panel-body-->
            <div class="panel-footer"><a href="#">more info</a></div>
          </div><!--/.panel-->
        </section>
        <section class="col-sm-4 col-xs-12">
          <div class="panel panel-warning">
            <div class="panel-body">
              <h1>In Progress Batches #</h1>
              <h2>62</h2>
            </div><!--/.panel-body-->
            <div class="panel-footer"><a href="#">more info</a></div>
          </div>
        </section>
      </div>

      <div class="row">
        <section class="col-sm-7 col-xs-12">
          <h1>Exception (last 24 hrs)</h1>
          <div class="graph-placeholder"></div>
        </section>
        <section class="col-sm-5 col-xs-12">
          <h1>Batch Status</h1>

          <ul class="list-group batch-status">
            <li class="list-group-item bg-red-dark">
              <span class="badge">2</span>
              Failed Validation
            </li>
            <li class="list-group-item bg-red">
              <span class="badge">21</span>
              Failed Status
            </li>
            <li class="list-group-item bg-green">
              <span class="badge">2</span>
              Validated/P. Review
            </li>
            <li class="list-group-item bg-teal">
              <span class="badge">2</span>
              Normalized
            </li>
            <li class="list-group-item bg-green">
              <span class="badge">2</span>
              Staged
            </li>
            <li class="list-group-item bg-blue">
              <span class="badge">2</span>
              Initialized
            </li>
          </ul>


        </section>
      </div>
      








    </div><!--/.operations-page-wrapper-->
  </div><!--/.container-->
  <script>
      $(document).ready(function () {
          $('[data-toggle="offcanvas"]').click(function () {
              $('.row-offcanvas').toggleClass('active')
          });
      });
  </script>
  </body>
</html>