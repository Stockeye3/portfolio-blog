

@extends ('layouts.master')
@include ('layouts.header')
@section('content')
<hr><hr><hr>
<h1> {{ Auth()->user()->name . '\'s'}} Portfolio </h1>


<table width='50%'>
   
    
   <tr>
       <th><h3>Share Name</h3></th>
    <th><h3>Price</h3></th> 
    <th><h3>Qty</h3></th>
    <th><h3>Subtotal</h3></th>
  </tr>
  
  <?php $total = 0 ?>
  @foreach ($shares as $share)
 <?php  $subtotal = $share->qty * $share->price ?>
  <tr>

      <td> <strong><h5>
                  {{ $share->name }} </strong></h5>
 </td>
 <td align="center">
 {{'$ ' . $share->price  }}
 </td> 
 <td align="center">
 {{ $share->qty }}
 </td>
 <td align="center" >
     
 {{ '$ ' . $subtotal }}
 <?php $total += $subtotal ?>
 </td>
 <td align="center"> 
     <a href="/shares/{{$share->id}}/edit" class="btn btn-dark">Edit Position</a>
 </td>
   <td align="center">
                <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

  </tr>

  @endforeach

  <tr>
      <td colspan="3" align="right">
          <h4> Portfolio total: </h4>
      </td>
      <td align='center'>
          {{ '$' . $total }}
      </td>
  </tr>
  
</table>

<a href='shares/create'><h5>Add a new position</h5></a>
@endsection
