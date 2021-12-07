<html>
    <head>
        edit student
        </head>
        <body>
            <form action="{{route('student.update',$student->id)}}" method="post">
                @csrf
                <label> enter the name</label>
                <input type="text" name="name" value="{{$student->name}}" >
                <br>
                <label> enter your age</label>
                <input type="number" value="{{$student->age}}" name="age"><br>
                <select name="gender">
                    <option value="male" {{ ($student->gender=="male")? "checked" : "" }}>male<option>
                        <br>
                    <option value="female" {{ ($student->gender=="female")? "checked" : "" }}>female<option><br>
</select>
<br>
<label> willing to work</label>
<input type="radio" name="willingtowork"  value="ready"{{ ($student->willingtowork=="ready")? "checked" : "" }}>
<br>
<label> english</label>
<input type="checkbox" name="languages" value="english" {{ ($student->languages=="english")? "checked" : "" }} >
<br>

<label>hindi</label>
<input type="checkbox" name="languages" value="hindi" {{ ($student->languages=="hindi")? "checked" : "" }}>
<br>
<label>arabic</label>
<input type="checkbox" name="languages" value="arabic" {{ ($student->languages=="arabic")? "checked" : "" }}>
<br>
<label>malayalam</label>
<input type="checkbox" name="languages" value="malayalam" {{ ($student->languages=="malayalam")? "checked" : "" }}>
<button type="submit">update student</button>
</form>
</body>
</html>

