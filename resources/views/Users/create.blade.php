<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSO</title>
</head>

<body>
    <h1>Create New User</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

    </div>
    <!-- eto yung gagawan nyu ng popup window para sa create -->
    <form method="post" action="{{route('user.store')}}">
        @csrf
        @method('post')
        <div>
            <label>First Name:</label>
            <input type="text" name="FirstName" placeholder="First Name"/>
        </div>

        <div>
            <label>Middle Name:</label>
            <input type="text" name="MiddleName" placeholder="Middle Name"/>
        </div>

        <div>
            <label>Last Name:</label>
            <input type="text" name="LastName" placeholder="Last Name"/>
        </div>

        <div>
            <label>Designation:</label>
            <input type="text" name="Designation" placeholder="Designation"/>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="Email" placeholder="firstnamelastname@bulsu.edu.ph"/>
        </div>

        <div>
            <label for="UserType">User Type:</label>
            <select id="UserType" name="UserType" onclick="hideNullOption()">
                <option value="null">-select-</option>
                <option value="dean">Dean</option>
                <option value="head">Head</option>
            </select>
        </div>
        <script>
            function hideNullOption() {
                const userTypeSelect = document.getElementById("UserType");
                const nullOption = userTypeSelect.querySelector('option[value="null"]');
                
                if (nullOption) {
                    nullOption.remove();
                }
            }
        </script>

        <div>
            <input type="submit" value="Create">
        </div>
        


    </form>

</body>
</html>