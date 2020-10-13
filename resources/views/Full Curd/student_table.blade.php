<center>
	<a href="{{url('/student-form')}}">
		<button style="float: right;position: absolute;margin-top: 10px;margin-left: 126px;">Student Form</button>
	</a>
<table border="2px solid" style="border-collapse: collapse;">
	<h1>Student Table</h1>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Education</th>
		<th>College</th>
		<th>Action</th>
	</tr>
@foreach($datas as $data)
	<tr>
		<td>{{$data->id}}</td>
		<td>{{$data->name}}</td>
		<td>{{$data->email}}</td>
		<td>{{$data->gender}}</td>
		<td>{{$data->education}}</td>
		<td>{{$data->college}}</td>
		<td>
			<a href="{{url('/show/'.$data->id)}}">Show</a>
			<a href="{{url('/edit/'.$data->id)}}">Edit</a>
			<a href="{{url('/delete/'.$data->id)}}">Delete</a>
		</td>
	</tr>
@endforeach
</table>
</center>