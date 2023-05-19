<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page with Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <style>
    .container-full {
      width: 100%;
      background-color: #f5f5f5;
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="container-full">
  <div class="container">
    <form class="mb-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
        
      </div>
    </form>
    <div class="row">
    @foreach ($users as $user) 
    <p><span>Name:<span> {{$user->name}}</span>
    <p><span>Department:<span> {{ ($user->department ? $user->department->name : 'N/A')  }}</span>
    <p><span>Designation:<span> {{ ($user->designation ? $user->designation->name : 'N/A')  }}</span>
   
   
   @endforeach
     
     
    </div>
    
  </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function(){
    base_url ={!! json_encode(url('/')) !!};
    serach_data(value="");
});

function serach_data(value=""){alert(base_url);
    $.ajax({
            url: base_url+'/serach_data',
            dataType: "json",
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            data: {
                value: value,               
            },
            success: function (data) {
                response(data);
                // $("#cert_memb_father").val("");
                // $("#cert_memb_gender").val("");
                // $("#cert_house_name").val("");
               
            }


        });
        

}

    </script>
</body>
</html>
