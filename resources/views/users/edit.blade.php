<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('users.update',$user->id)}}">
    @csrf
    @method("put")
    <input name="name" value="{{$user->name}}">
    <input name="email" value="{{$user->email}}">
    <button>save
    </button>
</form>
</body>
</html>
