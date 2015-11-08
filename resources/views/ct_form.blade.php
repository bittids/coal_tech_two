<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<!-- jquery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
//	console.log("4 reached");

	
	$("#update_btn").click(function(){
//console.log("1 reached");
        var product_name = $("#product_name").val();
        var quantity = $("#quantity").val();
        var price = $("#price").val();
        var results;
               
		propagate_csrf_code();
//		console.log("2 reached");
   		jQuery.ajax({
            url: "/ct_form",
            type: "POST",
            data: {   
                "product_name":product_name,
                "quantity":quantity,
                "price":price
			},
            dataType : "json",
            beforeSend: function () {
            },               
            success: function( data ) {
                console.log(data);
                $('#results').html(start_row());
                $('#results').append(start_column(3));
                $('#results').append("Product");
                $('#results').append(end_div());
                $('#results').append(start_column(3));
                $('#results').append("Quantity");
                $('#results').append(end_div());
                $('#results').append(start_column(3));
                $('#results').append("Price");
                $('#results').append(end_div());
                $('#results').append(start_column(3));
                $('#results').append("Date/time");
                $('#results').append(end_div());
                $('#results').append(end_div());
                // end headings row
                console.log($('#results').html());
                
                $.each( data, function( key, value ) {
 //               	  console.log( value.product_name );
                      $('#results').append(start_column(3));
                      $('#results').append(value.product_name);
                      $('#results').append(end_div());
                      $('#results').append(start_column(3));
                      $('#results').append(value.quantity);
                      $('#results').append(end_div());
                      $('#results').append(start_column(3));
                      $('#results').append(value.price);
                      $('#results').append(end_div());
                      $('#results').append(start_column(3));
                      $('#results').append(value.curr_time);
                      $('#results').append(end_div());
                      $('#results').append(end_div());
				});  // end .each loop
//             	$("#first_name").val(data.first_name);
//             	$("#last_name").val(data.last_name);
//             	$("#email").val(data.email);
			},
            error: function( xhr, status, errorThrown ) {
                console.log("Ajax error");
            }
        });  // end jquery ajax
//   		console.log("3 reached");
        
    }); // end on dropdown change


    function propagate_csrf_code()
    {
        var csrf_token = $("input[name=_token]").val();

// laravel imposes csrf protection - the ajax setup 
// sends the csrf token in the header to remove the 
// 500 internal service error 
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': csrf_token
			}
		});
    }     // end function propagate_csrf_code  
});

function start_row()
{
	return '<div class="row">';
}

function start_column(width)
{
	return '<div class="col-sm-' + width + '">';
}

function end_div()
{
	return "</div>";
}


</script>

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
 <input type="text" name="product_name" id="product_name" value="">
   
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
 <input type="text" name="quantity" id="quantity" value="">
   
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
 <input type="text" name="price" id="price" value="">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
       
<div class="row">
<div class="col-sm-1"> <br><br><br></div>

<div class="col-sm-8">
 <input type="button" id="update_btn" value="update info">
   
</div>
    <div class="col-sm-2"> </div>
<div class="col-sm-1"> </div>
</div><!-- end row -->
  
  
</form>
<div id="results"></div>
</div>
    </body>
</html>
