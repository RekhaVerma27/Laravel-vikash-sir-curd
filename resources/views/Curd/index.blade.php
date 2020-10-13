
<center>
	
		<a href="{{url('/display')}}">
		<button>Student Table</button>
	</a>
		<h1 style="text-align: center;">Student Form</h1>
<form action="{{url('/save')}}" method="post">
	@csrf
	
	Name:<input type="text" name="name">
	<br>
	<br>
	Email:<input type="email" name="email">
	<br>
	<br>
	Password:<input type="password" name="password">
	<br>
	<br>
	<center>
		<input type="submit" name="">
	</center>
</form>

</center>