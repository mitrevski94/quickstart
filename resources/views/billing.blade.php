<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/">
    <link rel="stylesheet" href="styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Polyfill(s) for older browsers -->
    <script src="node_modules/core-js/client/shim.min.js"></script>

    <script src="node_modules/zone.js/dist/zone.js"></script>
    <script src="node_modules/systemjs/dist/system.src.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="systemjs.config.js"></script>
    <script>
      System.import('main.js').catch(function(err){ console.error(err); });
    </script>

<style>
		h1 {
		  	text-align: center;
		  	color:white;
		}
  		.btn-default, .btn-success, .btn-warning{
			width: 260px;
 		}
  		.bold{
  		    font-weight: bold;
		}
</style>
</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "col-md-12">
        <h1>Please fill out your billing details</h1>
        <br><br>
        <div class = "row bold">
            <div class = "col-md-3">
              <a href="/cart"><button class = "btn btn-default">Cart</button></a>
            </div>
            <div class = "col-md-3">
              <a href="/shipping"><button class = "btn btn-default">Shipping</button></a>
            </div>
            <div class = "col-md-3">
              <button class = "btn btn-default active">Billing</button>
            </div>
            <div class = "col-md-3">
              <button class = "btn btn-default" disabled>Confirmation</button>
            </div>  
        </div>
        <br><br>
        <form>
    <div class="row">
      <div class="form-group">
        <div class="col-lg-6">
            <input type="text" class="form-control" placeholder="FirstName"/>
            <br>
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control" placeholder="LastName"/>
            <br>
          </div>
        <div class="col-lg-12">
            <input type="text" class="form-control" placeholder="Credit Card Number"/>
            <br>
          </div>  
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="CCV"/>
            <br>
        </div>
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="Month"/>
            <br>
          </div>  
        <div class="col-lg-4">
            <input type="text" class="form-control" placeholder="Year"/>
            <br>
        </div>
      </div>
    </div>
  </form>
  <div class = "row bold">
          <br><br>
          <div class = "col-md-9">
          <a href="/shipping"><button class="btn btn-warning">Back</button></a>
          </div>
          <div class = "col-md-2">
            <a href="/confirmation"><button class="btn btn-success">Next</button></a>
            <br><br>
          </div>
    </div>  
      </div>
    </div>
  </div>



</body>