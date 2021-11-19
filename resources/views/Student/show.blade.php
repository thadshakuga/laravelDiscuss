<h1>Show Page</h1>
<p>First Name : {{$student->first_name}}</p>
<p>Last Name : {{$student->last_name}}</p>
<p>Gender : {{$student->gender}}</p>
<p>Grade : {{$student->grade}}</p>
<p>Address : {{$student->address}}</p>
<p>Subject : {{$student->subject}}</p>
<p>Date of Birth : {{$student->date_of_birth}}</p>
<p>Email Address : {{$student->email_address}}</p>
<p>Mobile No : {{$student->mobile_no}}</p>

<a href="{{route('students.edit',$student->id)}}">Edit Student information</a><br>
<a href="{{route('students.index')}}">Go back to student index page</a>