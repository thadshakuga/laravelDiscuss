<h1>Student index</h1>
<table border=1>
@foreach($students as $student)
<tr>
    <td>
        {{$student->first_name}}
    </td>
    <td>
        {{$student->last_name}}
    </td>
    <td>
        {{$student->gender}}
    </td>
    <td>
        {{$student->grade}}
    </td>
    <td>
        {{$student->address}}
    </td>
    <td>
        {{$student->subject}}
    </td>
    <td>
        {{$student->date_of_birth}}
    </td>
    <td>
        {{$student->email_address}}
    </td>
    <td>
        {{$student->mobile_no}}
    </td>
    <td>
        <a href="{{route('students.show',$student->id)}}">Show</a>
    </td>
    <td>
        <a href="{{route('students.edit',$student->id)}}">Edit</a>
    </td>
    <td id="demo">
        <form action="{{route('students.destroy',$student->id)}}" method="post">
            @csrf 
            @method('delete')
            <button onclick="myFunction()">Delete</button>
            <script>
                function myFunction(){
                    var txt;
                    if(confirm("Are you want to delete?")){
                       txt="{{route('students.destroy',$student->id)}}";
                    }
                    else
                    {
                        txt="{{route('students.index')}}";
                    }
                    
                }
            </script>
           
        </form>
    </td>
</tr>
@endforeach
</table>
<br><br>
<a href="{{route('students.create')}}">Add a new Student</a>