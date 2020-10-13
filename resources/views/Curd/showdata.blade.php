

<center>
	<a href="{{url('/display')}}">
		<button>Student Table</button>
	</a>
		<h1 style="text-align: center;">Student Form</h1>
<form>
	Name: <input type="text" name="name" value="{{$data->name}}" disabled>
	<br>
	<br>
	Email: <input type="email" name="email" value="{{$data->email}}" disabled="">
	<br>
	<br>
	Password: <input type="text" name="password" value="{{$data->password}}" disabled="">
	<br>
	<br>
</form>
</center>