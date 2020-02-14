@extends('layouts.app')

@section('content')

<div class="container">
  <!-- Content here -->
  <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

     <h1>Restaurant:  Listings</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Size</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($stables as $table)
      <tr>
        <td>{{$table['id']}}</td>
        <td>{{$table['size']}}</td>
        <td>{{$table['status']}}</td>
        
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>


</div>




@endsection