<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSO</title>
</head>
<body>
    <h1>List of User</h1>
    <form action="{{ route('user.create') }}" method="GET">
        <button type="submit" class="btn btn-primary">Create New Users</button>
    </form>
    <form action="{{ route('dashboard') }}" method="GET">
        <button type="submit" class="btn btn-primary">Dashboard</button>
    </form>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success')}}
            </div>
        @endif
    </div>
   
   
    <div>
        <br>
        <table border= "2">
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
                        
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(event)">Delete</button>

                        <form id="delete-form" action="{{ route('user.delete', $userlists->id) }}" method="POST" style="display:none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        
                        <script>
                            function confirmDelete(event) {
                                event.preventDefault();
                                if (confirm('Are you sure you want to delete this user? This action cannot be undone.')) {
                                    document.getElementById('delete-form').submit();
                                }
                            }   
                        </script>
                        </td>
                        
                    </tr>

            @endforeach
        </table>
    </div>
</body>
</html>