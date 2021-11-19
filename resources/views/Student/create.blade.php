<h1>Student Create page</h1>
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
@endif
<form action="{{route('students.store')}}" method="POST">
@csrf
<p><label> First Name:</label><input type="text" name="first_name" value="{{old('first_name')}}"></p>
<p><label>Last Name:</label><input type="text" name="last_name" value="{{old('last_name')}}"></p>
<p><label>Gender:</label>
<input type="radio" id="female" name="gender" value="Female"><label for="female">Female</label>
<input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
</p>
<p><label>Grade:</label>
<select name="grade" id="grade">
    <option value="10A">10A</option>
    <option value="10B">10B</option>
    <option value="11A">11A</option>
    <option value="11B">11B</option>
</select>
</p>
<p>
<label>Address :</label></p><textarea name="address" id="address" cols="50" rows="5"></textarea>
<p><label>Subject :</label><br>
<input type="checkbox" id="tamil" name="subject[]" value="Tamil"><label for="tamil">Tamil</label><br>
<input type="checkbox" id="english" name="subject[]" value="English"><label for="english">English</label><br>
<input type="checkbox" id="religion" name="subject[]" value="Religion"><label for="religion">Religion</label><br>
<input type="checkbox" id="history" name="subject[]" value="History"><label for="history">History</label><br>
<input type="checkbox" id="maths" name="subject[]" value="Maths"><label for="maths">Maths</label><br>
<input type="checkbox" id="science" name="subject[]" value="Science"><label for="science">Science</label><br>
<input type="checkbox" id="IT" name="subject[]" value="IT"><label for="IT">IT</label><br>
<input type="checkbox" id="commerce" name="subject[]" value="Commerce"><label for="commerce">Commerce</label>
</p>
<p><label>Date of Birth :</label><input type="date" name="date_of_birth" required></p>
<p><label>Email Address :</label><input type="email" name="email"></p>
<p><label>Mobile No :</label><input type="tel" name="mobile_no" pattern="[0-9]{10}" placeholder="07xxxxxxxx" required></p>
<button onclick="myFunction()">Create</button>
<script>
    var txt;
    function myFunction(){
        alert("Student created successfully!");
        
    }
</script>
</form>

<a href="{{route('students.index')}}">Back</a>