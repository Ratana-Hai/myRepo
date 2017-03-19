@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Student</div>

                <div class="panel-body">
                	<table class="table table-bordered">
                		<thead>
                			<th>No</th>
                			<th>Id</th>
                			<th>FName</th>
                			<th>LName</th>
                            <th>Sex</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Phone</th>
                            
                            
                			<th>
                				<a href="{{asset('/')}}/index.php/student/New">(+) New</a>
                			</th>
                		</thead>
                		<tbody>
                			@foreach($students as $index => $student)
                			<tr>
                				<td>{{ $index + 1}}</td>
                				<td>{{ $student['ID'] }}</td>
                				<td>{{ $student['fname'] }}</td>
                				<td>{{ $student['lname']}}</td>
                                <td>{{ $student['sex'] }}</td>
                                <td>{{ $student['dob']}}</td>
                                <td>{{ $student['address'] }}</td>
                                <td>{{ $student['phone']}}</td>
                				<td>Edit | Delete</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection