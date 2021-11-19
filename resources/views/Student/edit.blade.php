<h1>Edit Page</h1>
<form action="{{route('students.update',[$student->id])}}" method="POST">
    @csrf 
    @method('PUT')
<p>First Name : <input type="text" value="{{$student->first_name}}" name="first_name"></p>
<p>Last Name : <input type="text" value="{{$student->last_name}}" name="last_name"></p>

<p>Gender : <input type="radio" name="gender" id="female" value="female" @if(old('gender',$student->gender)=="Female") checked @endif>Female
            <input type="radio" name="gender" id="male" value="male"@if(old('gender',$student->gender)=="male") checked @endif>Male
</p>
<p>Grade : 
<select name="grade" id="grade">
    <option value="10A" @if(old('grade',$student->grade)=="10A") selected @endif>10A</option>
    <option value="10B" @if(old('grade',$student->grade)=="10B") selected @endif>10B</option>
    <option value="11A" @if(old('grade',$student->grade)=="11A") selected @endif>11A</option>
    <option value="11B" @if(old('grade',$student->grade)=="11B") selected @endif>11B</option>
</select>    


<p>Address : </p><textarea name="address" id="address" cols="30" rows="4">{{$student->address}}</textarea><br>
{{$student->subject}}
<?php $sub=explode(',',$student->subject)?>
<?php print_r($sub)?>
<p>Subject : </p>
<input type="checkbox" name="subject[]" id="tamil" value="Tamil" <?php
        if(in_array('Tamil',$sub)){
            echo 'checked';
        }
        ?> >
        <label for="Tamil">Tamil</label>
        <br>
<input type="checkbox" id="english" name="subject[]" value="English"
    <?php
        if(in_array('English',$sub)){
            echo 'checked';
        }
        ?> ><label for="english">English</label><br>
<input type="checkbox" id="religion" name="subject[]" value="Religion"
<?php
        if(in_array('Religion',$sub)){
            echo 'checked';
        }
        ?> ><label for="religion">Religion</label><br>
<input type="checkbox" id="history" name="subject[]" value="History"
<?php
        if(in_array('History',$sub)){
            echo 'checked';
        }
        ?> ><label for="history">History</label><br>
<input type="checkbox" id="maths" name="subject[]" value="Maths"
<?php
        if(in_array('Maths',$sub)){
            echo 'checked';
        }
        ?> ><label for="maths">Maths</label><br>
<input type="checkbox" id="science" name="subject[]" value="Science"
<?php
        if(in_array('Science',$sub)){
            echo 'checked';
        }
        ?> ><label for="science">Science</label><br>
<input type="checkbox" id="IT" name="subject[]" value="IT"
<?php
        if(in_array('IT',$sub)){
            echo 'checked';
        }
        ?> ><label for="IT">IT</label><br>
<input type="checkbox" id="commerce" name="subject[]" value="Commerce"
<?php
        if(in_array('Commerce',$sub)){
            echo 'checked';
        }
        ?> ><label for="commerce">Commerce</label><br>

<p>Date of Birth : <input type="date" value="{{$student->date_of_birth}}" name="date_of_birth"></p>
<p>Email address : <input type="email" value="{{$student->email_address}}" name="email"></p>
<p>Mobile no : <input type="tel" value="{{$student->mobile_no}}" name="mobile"></p>
<button onclick="myFunction()">Update</button>
<script>
    var txt;
    function myFunction(){
        alert("Updated!");
        
    }
</script>

</form>

<a href="{{route('students.index')}}">Back to Student index page</a>