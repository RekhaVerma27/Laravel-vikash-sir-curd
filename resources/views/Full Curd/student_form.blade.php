<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<body>
	<center>
		<a href="{{url('/display-table')}}">
			<button style="float: right;position: absolute;margin-top: 10px;margin-left: 126px;">Student Table</button>
		</a>
	
		<form action="{{url('/save')}}" method="post" enctype="multipart/form-data">@csrf
				<h1>Student Form</h1>
			<table>
				<tr>
					<th>Name:</th>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<th>Password:</th>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<th>Gender:</th>
					<td><input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<th>Education:</th>
					<td>
						<input type="checkbox" name="education[]" value="BE">BE
						<input type="checkbox" name="education[]" value="BCA">BCA
						<input type="checkbox" name="education[]" value="MCA">MCA
						<input type="checkbox" name="education[]" value="B.ed">B.ed
						<input type="checkbox" name="education[]" value="B.com">B.com
						<input type="checkbox" name="education[]" value="M.com">M.com
					</td>
				</tr>
				<tr>
					<th>College:</th>
					<td>
					<select name="college">
						<option>------Select College-----</option>
						<option value="MPCT">MPCT</option>
						<option value="RJIT">RJIT</option>
						<option value="ITM">ITM</option>
						<option value="MITS">MITS</option>
					</select>
					</td>
				</tr>
				<tr>
					<th>Address:</th>
					<td><input type="text" name="address"></td>
				</tr>
				<tr>
					<th>Image:</th>
					<td><input type="file" name="image"></td>
				</tr>
			</table>
			<br>
			<center>
				<input type="submit" name="">
			</center>
		</form>
	</center>
</body>
</html>