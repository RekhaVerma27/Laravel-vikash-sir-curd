

<center>
	<a href="{{url('/display')}}">
		<button>Student Table</button>
	</a>
		<h1 style="text-align: center;">Student Form</h1>
<form action="{{url('/update')}}" method="post">@csrf
	<input type="hidden" name="id" value="{{$data->id}}">
	Name: <input type="text" name="name" value="{{$data->name}}" >
	<br>
	<br>
	Email: <input type="email" name="email" value="{{$data->email}}">
	<br>
	<br>
	Password: <input type="text" name="password" value="{{$data->password}}">
	<br>
	<br>
	<input type="submit" name="" value="Update">
</form>
</center>