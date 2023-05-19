<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  </head>
  <body>
    <!-- <div class=""> -->  
      <div class="outer">  
        <div class="container first">
          <div class="search"><h4 class="heading4">Search</h4>
             <input type="text" autofocus autocomplete="off"  id="search_box"  onkeyup="search_data(this.value)" placeholder="Search Name / Department / Designation">
          </div>
        </div>
        <div id="data_div" class="container">            
        </div>
     </div>
    <script src="{{asset('asset/js/jquery.min.js')}}"></script>
    
<script>

$(document).ready(function(){
    base_url ={!! json_encode(url('/')) !!};
    search_data();
    
});

function search_data(value=""){
    $.ajax({
            url: base_url+'/serach_data',
            method: "GET",            
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            data: {
                value: value,               
            },
            success: function (data) { 
                  $("#data_div").html(data.output);     
            }
        });
}

    </script>
  </body>
</html>
