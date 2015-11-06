<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<!-- jquery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
    <body>
<div class="container">
<div class="row">
<div class="col-sm-3"><br> </div>
<div class="col-sm-6"> 
Coalition Tech form
    </div>
<div class="col-sm-3"> </div>
</div><!-- end row -->

	<form method="POST" action="/ct_form">
   {!! csrf_field() !!}
     
<div class="row">
<div class="col-sm-1"> <br><br><br></div>
<div class="col-sm-3"> 
   Product name            
    </div>
<div class="col-sm-5">
 <input type="text" name="product_name" value="">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
       
<div class="row">
<div class="col-sm-1"> <br><br><br></div>
<div class="col-sm-3"> 
   Quantity in stock           
    </div>
<div class="col-sm-5">
 <input type="text" name="quantity" value="">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
       
<div class="row">
<div class="col-sm-1"> <br><br><br></div>
<div class="col-sm-3"> 
   Price per item            
    </div>
<div class="col-sm-5">
 <input type="text" name="price" value="">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
       
<div class="row">
<div class="col-sm-1"> <br><br><br></div>

<div class="col-sm-8">
 <input type="submit" value="submit form">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
  
</form>
</div>
    </body>
</html>
