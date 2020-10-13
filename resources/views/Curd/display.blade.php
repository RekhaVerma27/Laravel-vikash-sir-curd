
<center>
<table border="2px solid" style="border-collapse: collapse;">
	<a href="{{url('/index')}}">
		<button>Student Form</button>
	</a>
	<h1 style="text-align: center;">Student Table</h1>
	
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	@foreach($datas as $data)
	<tr>
	
		<td>{{$data->id}}</td>
		<td>{{$data->name}}</td>
		<td>{{$data->email}}</td>
		<td>
			<a href="{{url('/show/'.$data->id)}}">Show</a>
			<a href="{{url('/edit/'.$data->id)}}">Edit</a>
			<a href="{{url('/delete/'.$data->id)}}">Delete</a>
		</td>
	</tr>
	@endforeach
</table>
</center>