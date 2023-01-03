<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ফলাফল</title>
    
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
.ss {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #207cca;
                background-color:#207cca;
                color:#fafafa;
}
.ss:hover  {
                background-color:#fafafa;
                color:#207cca;
}
    </style>
    <style >
  td {
    padding: 0 20px;
  }
  
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.header {
    width: 1346px;
    height: 100px;
     margin: auto;
}


.headmenu {
    width: 100%;
    height: 100%;
    
}

.headmenu ul{
    margin-top: 20px; 
    margin-left: 40px;
}

.headmenu ul li {
    
    list-style: none;
    display: inline-block;

}
.headmenu ul li {
    text-decoration: none;
    font-size: 25px;
    line-height: 45px;
    padding: 10px 15px;
     font-family: 'Ropa Sans', sans-serif;
    color:black;
    text-transform: uppercase;
    margin-left: 10px;
}

.headmenu li:hover{
background-color:lavenderblush;
}
  .AboutCVV{
    /* margin-top: 5px; */
    width: 1366x;
    background-color: lavender;
}
.footer {
    width: 1356x;
    height: 40px;
    margin-top: 20px;
    text-align: center;
    background-color: coral;
}
.linebreak{
    width: 1356x;
    height: 5px;
    margin-top: 20px;
    text-align: center;
    background-color:red;
}
.About{
    height: 300px;}
.About h2{
    margin-top: 15px;
    text-align: center;
    font-family: sans-serif;
    font-size: 40px;
    color: green;
}
.AboutCVV{
    margin-top: 5px;
    width: 1366x;
    background-color: lavender;
}
.AboutCVV p{  
    font-size: 25px;
    margin-left: 50px;
    margin-right: 30px;
}
.coll{
    color: red;
    font-weight: 900;
}
.kk{
    color: blue;
}
</style>

</head>
<body>
<section class="header">
       
       <div class="headmenu">
           
       <ul>
                    <li><i class="fa fa-home" aria-hidden="true"></i> <a href="http://127.0.0.1:8000/"> হোম </a></li>
                    <li><a href="http://127.0.0.1:8000/#About"> সম্পর্কিত </a></li>
                    <li><a href="http://127.0.0.1:8000/#Symptoms"> উপসর্গ </a></li>
                    <li><a href="http://127.0.0.1:8000/#Prevention"> প্রতিরোধ </a></li>
                    <li><a href="http://127.0.0.1:8000/#Doctors"> ডাক্তার </a></li>
                    <li><a href="http://127.0.0.1:8000/#News"> খবর </a></li>
                    <li><a href="forms.test"> টেস্ট বুকিং  </a></li>
                    <li><a href="http://127.0.0.1:8000/#Vaccination"> ভ্যাকসিন </a></li>
                    <li><a href="forms.result"> ফলাফল </a></li>
                    <li><a href="admin_login"> অ্যাডমিন </a></li>                      
                </ul>                      
       </div>   
   </section>
          <section class="linebreak">
          <div class="linebreak">
          <section class="About" id="About"> 
            <h2>
            ফলাফল
            </h2>
            
             <form action="{{route('web.search')}}" method="GET" class="AboutCVV">
        

                <p>
                <div >
                <br>
                  <h3> <label for="">জাতীয় পরিচয়পত্রের নাম্বার লিখুন:</label></h3>
                  <br>
                   <input type="text"  name="query" placeholder="Search here....." value="{{ request()->input('query') }}" style="width: 180px; height: 30px">
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                   <button type="submit" class="ss" style="width: 80px; height: 30px">Search</button>
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
             <br>
             <br>
             
             <br>
             <br>
             <br>
             
             <br>
             @if(isset($form))

               <table class="table_table-hover">
                   <thead>
                       <tr>
                       <th>NID</th>
                      <th>Name</th>
                     <th>DOB</th>
                       <th>Phone</th>
                       <th>Email</th>
                        <th>Gender</th>
                         <th>BloodG</th>
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
           
             <br>
             <br>
             <br>
           
             <br>
             <br>
             <br>
             
             <br>
             <br>
             <br>
             
             <br>
             <br>
             <br>
             <br>
             
             <br>
            
             


          <div class="footer">

	
	        <p class="copyright">&copy; 2021 Surokkha Seba Sylhet<br>
            All Rights Reserved by Shabib Chowdhury and Samia Rahman Rima</p>

            
        </div>
</body>
</html>