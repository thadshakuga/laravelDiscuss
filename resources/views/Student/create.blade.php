<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>


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
<div class="container">
<form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          First radio
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Second radio
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          Third disabled radio
        </label>
      </div>
    </div>
  </fieldset>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</body>
</html>