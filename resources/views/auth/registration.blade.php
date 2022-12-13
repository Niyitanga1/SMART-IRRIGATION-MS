<html>
<head>
    <title></title>
</head>

<body>
    

    <h1>REGISTRATION</h1>

    <form action="{{ route('registerUser') }}" method="POST">
@csrf
       NAme: <input type="text" name="name" id=""><br>
       <span class="text-danger">@error('name') {{ $message }} @enderror</span>
       Email <input type="text" name="email"  id=""><br>
       <span class="text-danger">@error('email') {{ $message }} @enderror</span>
       Password <input type="text" name="password"  id="">
       <span class="text-danger">@error('password') {{ $message }} @enderror</span>
        <input type="submit">

    </form>
    
</body>

</html>