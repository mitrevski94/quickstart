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
        <h1>Confirm your order!</h1>
        <br><br>
        <div class = "row bold">
            <div class = "col-md-3">
              <a href="/cart"><button class = "btn btn-default">Cart</button></a>
            </div>
            <div class = "col-md-3">
              <a href="/shipping"><button class = "btn btn-default">Shipping</button></a>
            </div>
            <div class = "col-md-3">
              <a href="/billing"><button class = "btn btn-default">Billing</button></a>
            </div>
            <div class = "col-md-3">
              <button class = "btn btn-default active">Confirmation</button>
            </div>  
        </div>
        <div class = "row bold">
            <div class = "col-md-12">
              <h2 style="color:white;">Items</h2>
            </div>
        </div>
        <div class="row bold">
              <div class="col-md-12">
                  <br><br>
                  <div class="col-md-1">Product</div>
                  <div class="col-md-1 col-md-offset-5">Price</div>
                  <div class="col-md-1">Quantity</div>
                  <div class="col-md-2">Subtotal</div>
                  <div class="col-md-2"></div>
              </div>
          </div>
          <hr/>
          <div class="row">
              <div class="col-md-12">
                  <div class="col-md-1"> 
                      <img src="http://www.cirrusoneapp.com/img/phone-img-mobile.jpg" class="img-responsive">
                    </div>
                  <div class="col-md-5">
                      <h4>Product 1</h4>
                      <small>Description</small>
                  </div>
                  <div class="col-md-1 down">
                      20
                  </div>
                  <div class="col-md-1 down">
                      2
                  </div>
                  <div class="col-md-2 down">Total price</div>
                  <div class="col-md-2 down">
                  </div>
              </div>
          </div>
          <hr/>
        <div class = "row bold">
          <br><br>
          <div class = "col-md-8">
            <a href="/billing"><button class="btn btn-warning">Back</button></a>
          </div>
          <div class = "col-md-1">Total: <span>20</span></div>
          <div class = "col-md-2">
            <a href="/app"><button class="btn btn-success">Confirm</button></a>
            <br><br>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
