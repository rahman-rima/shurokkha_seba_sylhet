@extends('forms.layout')
@section('admincontent')


    <table  class="table table-bordered table-responsive-lg" style="width: 100%;" >
        <tr>
            <th>NID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>BloodG</th>
            <th>Address</th>
            <th>WardNo</th>
            <th>Vaccinated</th>
            <th>Vac_name</th>
            <th>Covid_Happened</th>
            <th>Status</th>
            <th>Action</th>
            
        </tr>
        @foreach ($form as $forms)
            <tr>
                <td>{{$forms->NID_no}}</td>
                <td>{{$forms->names}}</td>
                <td>{{$forms->birthdate}}</td>
                <td>{{$forms->phoneN}}</td>
                <td>{{$forms->mailaddress}}</td>
                <td>{{$forms->sex}}</td>
                <td>{{$forms->BloodG}}</td>
                <td>{{$forms->address}}</td>
                <td>{{$forms->Wardno}}</td>
                <td>{{$forms->veksinate}}</td>
                <td>{{$forms->Vname}}</td>
                <td>{{$forms->priordiagnosis}}</td>
                <td>{{$forms->status}}</td>
                <td>			
					
                    <a href = 'forms.edit/{{ $forms->id }}' class="btn btn-primary">Edit</a>
                    <!-- <a class="btn btn-primary">Email</a> -->
                    
                    <form action="{{route('forms.appointments.destroy', $forms->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                  

                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                   </form>
                </td>
                
            </tr>
        @endforeach
    </table>

   

@endsection
