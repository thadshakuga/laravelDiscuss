<h1>Employee Create Page</h1>
<form action="{{route('employees.store')}}" method="POST">
    @csrf
    <label>First name:</label><input type="text" name="first_name"><br>
    <label>Last Name :</label><input type="text" name="last_name"><br>
    <label>Date of birth:</label><input type="date" name="date_of_birth"><br>
    <label>Basic Salary:</label><input type="number" name="basic_salary"><br>
    <input type="submit" value="Save">

</form>
