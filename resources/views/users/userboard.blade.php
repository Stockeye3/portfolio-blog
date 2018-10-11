
<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="public/css/mycss1.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <title> user profile </title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body> 
     
    @include('layouts.header')
    

    <hr><hr><hr>
   <div align='center'>
            <h1 > User Profile </h1>
   </div>
    
    <div class='col-5'>
          
        <h3><u> Name:</u> {{ Auth()->user()->name }} </h3> 
         <h3> <u> Email: </u>{{ Auth()->user()->email }}  </h3>
         <h3> <u> User id: </u>{{ Auth()->user()->id }}  </h3>
         <?php 
         $role = 'member';
         if  ( Auth()->user()->isAdmin == 1) 
         $role = 'admin'
        ?>
         
           <h3><u>  Role:</u> {{ $role }}  </h3>

           
           
           <h3><u>  Member since: </u>{{ Auth()->user()->created_at->diffForHumans() }} </h3>
           
    </div>
    <hr>
    
</body>
</html>
 