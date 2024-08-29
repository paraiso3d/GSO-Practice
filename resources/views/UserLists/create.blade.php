<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deans Master List</title>
</head>
<body>
    <h1>Create New User</h1>
   {{-- eto yung form ng create ng new users --}}
    <form method="post" action="{{route('UserLists.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Last Name :</label>
            <input type="text" lastname ="LastName" placeholder="Last Name" />
        </div>

        <div>
            <label>First Name :</label>
            <input type="text" name ="FirstName" placeholder="First Name" />
        </div>

        <div>
            <label>Middle Name :</label>
            <input type="text" name ="MiddleName" placeholder="Middle Name" />
        </div>

        <div>
            <label>Designation :</label>
            <input type="text" name ="Designation" placeholder="Designation" />

        </div>

        <div>
            <label>Email Address :</label>
            <input type="text" name ="Email" placeholder="firstname.lastname@bulsu.edu.ph" />
        </div>

        <div>
            <label>User Type:</label>
            <select id="userType" name ="userType">
                <option value="dean">Dean</option>
                <option value="head">Head</option>
            </select>
        </div>
           <div>
            <input type="submit" value="Create";/>
           </div>

    </form>
</body>
</html>