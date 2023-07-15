<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ফলাফল</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./CSS/style.css"> -->
    <style>
       /* form {
                width:500px;
                margin:50px auto;
}
.search {
                padding:8px 15px;
                background:rgba(50, 50, 50, 0.2);
                border:0px solid #dbdbdb;
} */
.hover-effect:hover {
        background-color: #0275d8;
        opacity: 1.0;
}
.coll{
    color: red;
    font-weight: 900;
}
.kk{
    color: blue;
}

  td, th{
    padding: 0 20px;
  }
</style>

</head>
<body>
<section class="navbar navbar-expand-lg mx-3 ps-5 h3 mt-2 " style="background-color: #e3f2fd;">
       
       <div >
           
           <ul class="navbar-nav ">
               <li class="nav-item"><a href="/" class="nav-link hover-effect"><i class="fa fa-home" aria-hidden="true">  হোম</i> </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> সম্পর্কিত </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> উপসর্গ </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> প্রতিরোধ </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> ডাক্তার </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> খবর </a></li>
               <li class="nav-item ps-3"><a href="forms.test" class="nav-link hover-effect"> টেস্ট বুকিং </a></li>
               <li class="nav-item ps-3"><a href="/" class="nav-link hover-effect"> ভ্যাকসিন </a></li>
               <li class="nav-item ps-3"><a href="forms.result" class="nav-link hover-effect"> ফলাফল </a></li>
               <li class="nav-item ps-3"><a href="admin_login" class="nav-link hover-effect"> অ্যাডমিন </a></li>                      
           </ul>                    
       </div>   
   </section>
          <section class="linebreak text-center mt-5" style="background-color: lavender;">
          <div class="linebreak">
          <section class="About" id="About"> 
            <h1 class="text-success">
            ফলাফল
            </h1>
            
             <form action="{{route('web.search')}}" method="GET" class="AboutCVV">
        

                <p>
                <div >
                <br>
                  <h3> <label for="">জাতীয় পরিচয়পত্রের নাম্বার লিখুন:</label></h3>
                  <br>
                  
                   <input type="text"  name="query" placeholder="Search here....." value="{{ request()->input('query') }}" style="width: 180px; height: 30px">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                   <button type="submit" class="btn btn-info ">Search</button>
                   <br><br>
                </div>
                </p>
               
                
                 <!-- <button type="submit" class="btn btn-primary">Search</button> -->
                
             </form>
           </section>
          </div>
          </section>
          
          <section>
          <div>
             <br>
             <br>
             <br>
            
            
             
             <br>
             @if(isset($form))

               <table class="table_table-hover ">
                   <thead>
                       <tr>
                       <th>NID</th>
                      <th>Name</th>
                     <th>DOB</th>
                       <th>Phone</th>
                       <th>Email</th>
                        <th>Gender</th>
                         <th>BloodGroup</th>
                       <th>Address</th>
                         <!--<th>WardNo</th>
                       <th>Vaccinated</th>
                        <th>Vac_name</th>
                     <th>Covid_Happened</th> -->
                         <th class="coll"><b>Status</b></th>
                       </tr>
                   </thead>
                   <tbody>
                       @if(count($form) > 0)
                           @foreach($form as $forms)
                              <tr>
                              <td>{{$forms->NID_no}}</td>
                                <td>{{$forms->names}}</td>
                               <td>{{$forms->birthdate}}</td>
                                 <td>{{$forms->phoneN}}</td>
                                 <td>{{$forms->mailaddress}}</td>
                               <td>{{$forms->sex}}</td>
                               <td>{{$forms->BloodG}}</td>
                           <td>{{$forms->address}}</td>
                           <!--<td>{{$forms->Wardno}}</td>
                              <td>{{$forms->veksinate}}</td>
                          <td>{{$forms->Vname}}</td>
                           <td>{{$forms->priordiagnosis}}</td> -->
                             <td class="kk">{{$forms->status}}</td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>
             
              

             @endif
          </div>
          </section>
       
          <br>
             <br>
           <br> <br>
             <br>
             <br>
             
             <br>
             <br>
             <br>
            
            
             


          <div class="text-center"  style="background-color: #e3f2fd;">

	
	        <p class="copyright">&copy; 2023 Surokkha Seba Sylhet<br>
            All Rights Reserved by Samia Rahman Rima and Tusty Rani Dhar</p>

            
        </div>

        <!-- scripts -->
        <script>
            const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});
        </script>

        
        <script src="https://kit.fontawesome.com/1c202b4ef8.js" crossorigin="anonymous"></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>