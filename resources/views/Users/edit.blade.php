<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSO</title>
</head>

<body>
    <h1>Edit User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>



        @endif

    </div>
    <!-- eto yung gagawan nyu ng popup window para sa edit -->
    <form method="post" action="{{route('user.update',['user' => $user])}}">
        @csrf
        @method('put')
        <div>
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="First Name" value="{{$user->FirstName}}"/>
        </div>

        <div>
            <label>Middle Name:</label>
            <input type="text" name="MiddleName" placeholder="Middle Name" value="{{$user->MiddleName}}"/>
        </div>

        <div>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Last Name" value="{{$user->LastName}}"/>
        </div>

        <div>
            <label>Designation:</label>
            <input type="text" name="Designation" placeholder="Designation" value="{{$user->Designation}}"/>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="Email" placeholder="firstnamelastname@bulsu.edu.ph" value="{{$user->Email}}"/>
        </div>

        <div>
        <label for="UserType">User Type:</label>
        <select id="UserType" name="UserType" required>
            <option value="dean" {{ $user->UserType == 'dean' ? 'selected' : '' }}>Dean</option>
            <option value="head" {{ $user->UserType == 'head' ? 'selected' : '' }}>Head</option>
        </select>
    </div>

        <div>
            <input type="submit" value="Update User">
        </div>


    </form>

</body>
</html>