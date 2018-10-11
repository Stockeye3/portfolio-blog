
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
        <title> {{ Auth()->user()->name }}'s dashboard </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <hr><hr><hr>
        <div align='center'>
            <h1 > {{ Auth()->user()->name }}'s Dashboard </h1>
        </div>

        <hr>
        <table align='center' width='50%'>


            <tr>
                <th><h3> Id </h3></th>
                <th><h3>User's Name</h3></th> 
                <th><h3>User's E-Mail</h3></th>
                <th><h3>Role</h3></th>
                <th><h3>Member Since</h3></th>
                <th><h3>Password</h3></th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>  {{ $user->id }}  </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>
                
                <?php
                $role = 'Member';
                if ($user->isAdmin == 1)
                    $role = 'Admin';
                ?>
                
                <td> {{ $role  }} </td>
                <td> {{ $user->created_at->diffForHumans() }} </td>
                <td> <input type="button" value="Change Password" /> </td>
            </tr>
            @endforeach


        </table>


    </body>
</html>
