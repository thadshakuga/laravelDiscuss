<h1>Edit Page</h1>
<form action="{{route('employees.update',[$employee->id])}}" method="POST">
    @csrf 
    @method('PUT')
<p>First Name : <input type="text" value="{{$employee->first_name}}" name="first_name"></p>
<p>Last Name : <input type="text" value="{{$employee->last_name}}" name="last_name"></p>
<p>Date Of Birth : <input type="date" value="{{$employee->date_of_birth}}" name="date_of_birth"></p>
<p>Basic Salary : <input type="number" value="{{$employee->basic_salary}}" name="basic_salary"></p>
<p><input type="submit" value="Update"></p>
</form>