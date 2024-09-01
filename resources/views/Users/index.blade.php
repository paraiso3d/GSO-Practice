<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSO</title>
</head>
<body>
    <h1>User</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success')}}
            </div>
        @endif
    </div>
   
   
    <div>
        <table border= "1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>College/Office</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>
            @foreach($userlist as $userlists)
                    <tr>
                        <td>{{$userlists->id}}</td>
                        <td>{{ $userlists->FirstName }} {{ $userlists->MiddleName }} {{ $userlists->LastName }}</td>
                        <td>{{$userlists->Email}}</td>
                        <td>{{$userlists->Designation}}</td>
                        <td>{{$userlists->UserType}}</td>
                        <td>
                        <a href="{{route('user.edit', ['user' => $userlists])}}">Edit</a>
                            <form method='post' action="{{route('user.delete', ['user' => $userlists])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete"/>
                            </form>
                        </td>
                        
                    </tr>

            @endforeach
        </table>
    </div>
</body>
</html>