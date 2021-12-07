<html>
 <head>
    simple project
 </head>
 <a href="{{route('student.create')}}">add student</a>
        <body>
            <table>
                <tr>
                    <th>
                        name
            </th>
            <th>age</th>
            <th>
                gender
</th>
<th>
        ready yo work
</th>
<th>
    languages</th>
    <th>actions</th>
    
</tr>
@foreach($students as $student)
<tr>
<td>{{$student->name}}</td>

<td>{{$student->age}}</td>
<td>{{$student->gender}}</td>
<td>{{$student->willingtowork}}</td>
<td>{{$student->languages}}</td>
<td>
    <a href="{{route('student.edit',$student->id)}}">edit</a>
    <a href="{{route('student.delete',$student->id)}}">delete</a>
</tr>
@endforeach
</table>
</body>
</html>