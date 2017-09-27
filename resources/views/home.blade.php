@include('inc.header')
   <div class="container">
   	 <div class="row">
   	 	<legend>Laravel CRUD Application</legend>
      @if(session('info'))
       {{ session() }}
      @endif
   	 	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  	    @if(count($articales) > 0)
          @foreach($articales as $articale)
  	     <tr>
		      <td>{{ $articale->id }}</td>
          <td>{{ $articale->title }}</td>
          <td>{{ $articale->description }}</td>
		      <td>
		      	<a href='{{ url("read/$articale->id") }}'' class="label label-primary">Read</a>|
		      	
		      	<a href='{{ url("/delete/$articale->id") }}'' class="label label-danger">Delete</a>
		      	
		      </td>
		    </tr>
          @endforeach
   	    @endif
  </tbody>
</table> 
   	 	
   	 </div>
   </div>
@include('inc.footer')
