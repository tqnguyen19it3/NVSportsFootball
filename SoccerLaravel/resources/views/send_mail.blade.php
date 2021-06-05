<!DOCTYPE html>
<html>
<head>
	<title>Test mail</title>
</head>
<body>
	{{-- @foreach($data->ac as $link) --}}
	<h1>Mail gửi từ: {{htmlspecialchars($email)}}</h1>
	<h3>Tên khách hàng: {{$name}}</h3>
	<h3>SĐT: {{$sdt}}</h3>
	<h4>Với lời nhắn: {{$message}}</h3>
	<h4>Đính kèm: {{$file}}</h4>
	{{-- @endforeach --}}
</body>
</html>