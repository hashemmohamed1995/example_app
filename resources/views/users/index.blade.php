<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.create')}}">Add user
    </a>
<table>
<thead>
    <tr>
        <th colspan="2">User Table</th>
    </tr>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>action</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
    <tr>
        <td>
        {{$user->name}}
        </td>
        <td>
        {{$user->email}}
        </td>
        <td>
            @if(!$user->userInformation)
            <button >add Phone</button>
            @else
        {{$user->userInformation?->phone}}
        @endif

        </td>
         <td>
         <a href="{{route('users.edit',$user->id)}}">edit user
        </a>
        <!-- <a href="{{route('users.destroy',$user->id)}}">delete user
        </a> -->
        <form method="post" action = "{{route('users.destroy',$user->id)}}">
        @csrf
        @method("DELETE")
        <button>
                delete user
            </button>
        </form>
        </td>
    </tr>
    @endforeach
</tbody>

</table>
{!!$users->links()!!}
</body>
</html>
