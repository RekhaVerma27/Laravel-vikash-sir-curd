<!DOCTYPE html>
<html>
<head>
	<title>Student Form</title>
</head>
<body>
	<center>
		<a href="{{url('/display-table')}}">
			<button style="float: right;position: absolute;margin-top: 10px;margin-left: 135px;">Student Table</button>
		</a>
	
		<form action="{{url('/update')}}" method="post" enctype="multipart/form-data">@csrf
				<h1>Student Edit Form</h1>
				<input type="hidden" name="id" value="{{$data->id}}">
			<table>

					<img src="{{url('upload/'.$data->image)}}"
					 style="height: 150px;width: 150px;border-radius: 100%;">
					 <input type="file" name="image" value="{{asset($data->image)}}">
				<tr>
					<th>Name:</th>
					<td><input type="text" name="name" value="{{$data->name}}"></td>
				</tr>
				<tr>
					<th>Email:</th>
					<td><input type="email" name="email" value="{{$data->email}}"></td>
				</tr>
				<tr>
					<th>Password:</th>
					<td><input type="text" name="password" value="{{$data->password}}"></td>
				</tr>
				<tr>
					<th>Gender:</th>
					<td><input type="radio" name="gender" value="male" @if($data->gender == 'male') checked @endif>Male
						<input type="radio" name="gender" value="female" @if($data->gender == 'female') checked @endif>Female
					</td>
				</tr>
				<tr>
					<th>Education:</th>
					<td>
						<input type="checkbox" name="education[]" value="BE"
						 @if(strpos($data->education,'BE')!== false) checked @endif
						 >BE
						<input type="checkbox" name="education[]" value="BCA"
						 @if(strpos($data->education,'BCA')!== false) checked @endif
						 >BCA
						<input type="checkbox" name="education[]" value="MCA"
						 @if(strpos($data->education,'MCA')!== false) checked @endif
						 >MCA
						<input type="checkbox" name="education[]" value="B.ed"
						 @if(strpos($data->education,'B.ed')!== false) checked @endif
						 >B.ed
						 <input type="checkbox" name="education[]" value="B.com"
						 @if(strpos($data->education,'B.com')!== false) checked @endif
						 >B.com
						<input type="checkbox" name="education[]" value="M.com"
						 @if(strpos($data->education,'M.com')!== false) checked @endif
						 >M.com
					</td>
				</tr>
				<tr>
					<th>College:</th>
					<td>
					<select name="college">
						<option>------Select College-----</option>
						<option value="MPCT" @if($data->college == 'MPCT') selected @endif>MPCT</option>
						<option value="RJIT" @if($data-> college == 'RJIT') selected @endif>RJIT</option>
						<option value="ITM" @if($data-> college == 'ITM') selected @endif>ITM</option>
						<option value="MITS" @if($data-> college == 'MITS') selected @endif>MITS</option>
					</select>
					</td>
				</tr>
				<tr>
					<th>Address</th>
					<td><input type="text" name="address" value="{{$data->address}}"></td>
				</tr>
			</table>
			<br>
			<center>
				<input type="submit" name="" value="Update">
			</center>
		</form>
	</center>
</body>
</html>