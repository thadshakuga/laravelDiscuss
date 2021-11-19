<h1>Employee index</h1>
<table border=1>
@foreach($employees as $employee)
<tr>
    <td>
        {{$employee->first_name}}
    </td>
    <td>
        {{$employee->last_name}}
    </td>
    <td>
        {{$employee->date_of_birth}}
    </td>
    <td>
        {{$employee->basic_salary}}
    </td>
    <td>
        <a href="{{route('employees.show',$employee->id)}}">Show</a>
    </td>
    <td>
        <a href="{{route('employees.edit',$employee->id)}}">Edit</a>
    </td>
</tr>
@endforeach
</table>