<html>
    <head>
        add student
        </head>
        <body>
            <form action="{{route('student.store')}}" method="post">
                @csrf
                <label> enter the name</label>
                <input type="text" name="name" >
                <label> enter your age</label>
                <input type="number" name="age">
                <select name="gender">
                    <option value="male">male<option>
                    <option value="female">female<option>
</select>
<label> willing to work</label>
<input type="radio" name="willingtowork" value="ready">
<label> english</label>
<input type="checkbox" name="languages" value="english">

<label>hindi</label>
<input type="checkbox" name="languages" value="hindi">
<label>arabic</label>
<input type="checkbox" name="languages" value="arabic">
<label>malayalam</label>
<input type="checkbox" name="languages" value="malayalam">
<button type="submit">add student</button>
</form>
</body>
</html>




