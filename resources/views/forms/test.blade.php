
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	    <title> একটি টেস্ট বুক করুন </title>

    
	    <link rel="stylesheet" href="./CSS/style.css">
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
                
            </div>
        </section>

        <section class="BookTest">
            <h1>
                একটি টেস্ট বুক করুন
            </h1>
          

            <div class="Testbooking">
    
                <table>
                    <tr>
                        <td>
                            <form action="{{route('forms.store')}}" method="POST">
                            @csrf

                                <br><b>নাম: </b><input type="text" name="names">
                                &nbsp; &nbsp; &nbsp; <b>জাতীয় পরিচয়পত্রের নাম্বার: </b><input type="text" name="NID_no"><br><br>
                                <b>জন্মতারিখ: </b><input type="date" name="birthdate">
                                &nbsp; &nbsp; &nbsp; <b>ফোন নাম্বার: </b><input type="text" name="phoneN">
                                &nbsp; &nbsp; &nbsp; <b>ইমেইল: </b><input type="email" name="mailaddress"> <br><br>

                                <b>লিঙ্গ:</b>
                                <input type="radio" name="sex" value="male">পুরুষ
                                <input type="radio" name="sex" value="female">মহিলা
                                <input type="radio" name="sex" value="other">অন্যান্য

                                <b>&nbsp; &nbsp; &nbsp; রক্তের গ্রুপ:</b>
                                <select name="BloodG">
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
                                    <select name="Wardno">
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
                                <input type="radio" name="veksinate" value="yes">হ্যাঁ
                                <input type="radio" name="veksinate" value="no">না
                                
                                <b>&nbsp; &nbsp; &nbsp; ভ্যাকসিনের নাম:</b>
                                <select name="Vname">
                                    <option>AstraZeneca</option>
                                    <option>Sinopharm</option>
                                    <option>Pfizer</option>
                                    <option>Moderna</option>
                                    <option>Sputnik V</option>
                                    <option>অন্যান্য</option>
                                    <option>কোনটি না</option>
                                </select><br><br>

                                <input type="checkbox" name="dosage">১ম ডোজ সম্পন্ন
                                <b>&nbsp; &nbsp; &nbsp; তারিখ: </b><input type="date" name="1stdose"><br>
                                <input type="checkbox" name="dosage">২য় ডোজ সম্পন্ন
                                <b>&nbsp; &nbsp; &nbsp; তারিখ: </b><input type="date" name="2nddose"><br><br>

                                <b>আগে করোনায় আক্রান্ত হয়েছেন?</b>
                                <input type="radio" name="priordiagnosis" value="yes">হ্যাঁ
                                <input type="radio" name="priordiagnosis" value="no">না<br><br>
                                
                                <input type="reset" style="margin-left: 70px; width:120px; height:60px; font-size: 18px; color: green;"value="রিসেট করুন">
                                <input type="submit" style="margin-left: 20px; width:120px; height:60px; font-size: 18px; color: green;"value="সাবমিট করুন"><br><br>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </section>

    
    
        
        
        
        
        
        <div class="footer">

	
	        <p class="copyright">&copy; 2021 Surokkha Seba Sylhet<br>
            All Rights Reserved by Shabib Chowdhury and Samia Rahman Rima</p>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
    
    
    
    </body>
    
    
    
</html>