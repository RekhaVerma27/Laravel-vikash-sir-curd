<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	<center>
		<a href="{{url('/display-table')}}">
			<button style="float: right;position: absolute;margin-top: 10px;margin-left: 126px;">Student Table</button>
		</a>
	
		<form>
				<h1>Student Details</h1>
			<table>
					<img src="{{url('upload/'.$data->image)}}"
					 style="height: 150px;width: 150px;border-radius: 100%;">
				<tr>
					<th>Name:</th>
					<td>{{$data->name}}</td>

					<th>Email:</th>
					<td>{{$data->email}}</td>
					
				</tr>
				<tr><th>password:</th>
					<td>{{$data->password}}</td>

					<th>Gender:</th>
					<td>{{$data->gender}}</td>
				</tr>
				<tr>
					<th>Education:</th>
					<td>{{$data->education}}</td>

					<th>College:</th>
					<td>{{$data->college}}</td>
				</tr>
				<tr style="align-center;">
					<th>Address:</th>
					<td>{{$data->address}}</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>