
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        

	    <title> একটি টেস্ট বুক করুন </title>
        <style>
            .hover-effect:hover {
        background-color: #0275d8;
        opacity: 1.0;
      }
      .name{
        margin-left: 310px;
        padding-left: 90px; 
      }
        </style>

    
	    <!-- <link rel="stylesheet" href="./CSS/style.css">s -->
    </head>
    
    <body>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @if(session('message'))
     <script>swal("ধন্যবাদ!", "COVID 19 পরীক্ষার নিবন্ধন সফল হয়েছে !!", "success");</script>

    @endif

    <section class="navbar navbar-expand-lg mx-3 ps-5 h3 mt-2 " style="background-color: #e3f2fd;">
       
       <div >
           
           <ul class="navbar-nav ">
               <li class="nav-item"><a href="/" class="nav-link hover-effect"><i class="fa fa-home" aria-hidden="true">  হোম</i> </a></li>
               <li class="nav-item ps-3"><a href="#About" class="nav-link hover-effect"> সম্পর্কিত </a></li>
               <li class="nav-item ps-3"><a href="#Symptoms" class="nav-link hover-effect"> উপসর্গ </a></li>
               <li class="nav-item ps-3"><a href="#Prevention" class="nav-link hover-effect"> প্রতিরোধ </a></li>
               <li class="nav-item ps-3"><a href="#Doctors" class="nav-link hover-effect"> ডাক্তার </a></li>
               <li class="nav-item ps-3"><a href="#News" class="nav-link hover-effect"> খবর </a></li>
               <li class="nav-item ps-3"><a href="forms.test" class="nav-link hover-effect"> টেস্ট বুকিং </a></li>
               <li class="nav-item ps-3"><a href="#Vaccination" class="nav-link hover-effect"> ভ্যাকসিন </a></li>
               <li class="nav-item ps-3"><a href="forms.result" class="nav-link hover-effect"> ফলাফল </a></li>
               <li class="nav-item ps-3"><a href="admin_login" class="nav-link hover-effect"> অ্যাডমিন </a></li>                      
           </ul>                    
       </div>   
   </section>

        <section class="linebreak">
            <div class="linebreak">
                
            </div>
        </section>

        <section class="BookTest text-center mt-5 border border-info shadow-lg mb- pt-5 " style="background-color: lavender;">
            <h1 class="text-success">
                একটি টেস্ট বুক করুন
            </h1>
          

            <div class="Testbooking">
    
                <table class="text-center name">
                    <tr>
                        <td>
                            <form action="{{route('forms.store')}}" method="POST">
                            @csrf

                                <br><b>নাম: </b><input  type="text" name="name">
                                &nbsp; &nbsp; &nbsp; <b>জাতীয় পরিচয়পত্রের নাম্বার: </b><input type="text" name="NID_no"><br><br>
                                <b>জন্মতারিখ: </b><input type="date" name="date_of_birth">
                                &nbsp; &nbsp; &nbsp; <b>ফোন নাম্বার: </b><input type="text" name="phone">
                                &nbsp; &nbsp; &nbsp; <b>ইমেইল: </b><input type="email" name="email"> <br><br>

                                <b>লিঙ্গ:</b>
                                <input type="radio" name="gender" value="male">পুরুষ
                                <input type="radio" name="gender" value="female">মহিলা
                                <input type="radio" name="gender" value="other">অন্যান্য

                                <b>&nbsp; &nbsp; &nbsp; রক্তের গ্রুপ:</b>
                                <select name="blood_group">
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select><br><br>

                                <b>ঠিকানা: </b><input type="text" name="address">
                                
                                <b>&nbsp; &nbsp; &nbsp; ওয়ার্ড নং:</b>
                                    <select name="Ward_no">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                </select><br><br>

                                <b>ভ্যাকসিন নিয়েছেন?</b>
                                <input type="radio" name="vaccinate" value="yes">হ্যাঁ
                                <input type="radio" name="vaccinate" value="no">না
                                
                                <b>&nbsp; &nbsp; &nbsp; ভ্যাকসিনের নাম:</b>
                                <select name="vaccine_name">
                                <option>কোনটি না</option>
                                    <option>AstraZeneca</option>
                                    <option>Sinopharm</option>
                                    <option>Pfizer</option>
                                    <option>Moderna</option>
                                    <option>Sputnik V</option>
                                    <option>অন্যান্য</option>
                                    
                                </select><br><br>

                                <input type="checkbox" name="dosage">১ম ডোজ সম্পন্ন
                                <b>&nbsp; &nbsp; &nbsp; তারিখ: </b><input type="date" name="1stdose"><br>
                                <input type="checkbox" name="dosage">২য় ডোজ সম্পন্ন
                                <b>&nbsp; &nbsp; &nbsp; তারিখ: </b><input type="date" name="2nddose"><br><br>

                                <b>আগে করোনায় আক্রান্ত হয়েছেন?</b>
                                <input type="radio" name="prior_diagnosis" value="yes">হ্যাঁ
                                <input type="radio" name="prior_diagnosis" value="no">না<br><br>
                                
                                <input class="btn btn-warning pe-3 me-3" type="reset" style="margin-left: 70px; width:140px; height:60px; font-size: 18px; color: green;"value="রিসেট করুন">
                                <input class="btn btn-info me-3" type="submit" style="margin-left: 20px; width:140px; height:60px; font-size: 18px; color: green;"value="সাবমিট করুন"><br><br>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </section>

    
    
        
        
        
        
        
        <div class="footer mt-5 text-center" style="background-color: #e3f2fd;">

	
	        <p class="copyright">&copy; 2023 Surokkha Seba Sylhet<br>
            All Rights Reserved by Samia Rahman Rima and Tusty Rani Dhar</p>
        </div>
        
        
        
        
        <!-- Scripts -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://kit.fontawesome.com/1c202b4ef8.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
        
        
        
        
        
        
        
    
    
    
    </body>
    
    
    

    </body>
    </html>