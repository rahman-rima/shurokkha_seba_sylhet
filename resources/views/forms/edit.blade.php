<html>
   
   <head>
      <title>Test Appointments | Edit</title>
      <style>
         html {
  background-color: #FFF0F5;
}
         body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}
         .About{
    height: 300px;}
 h1{
    margin-top: 15px;
    text-align: center;
    font-family: sans-serif;
    font-size: 40px;
    color: green;
}
  .k{
   text-align: center;
}
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
   </head>
   
   <body>
      <br>
      <h1 >Edit Here!</h1>
      <form action = "/forms.edit/<?php echo $status[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table style="border:1px solid black;margin-left:auto;margin-right:auto;" height= "70px" width="70px">
            <tr>
               <td>Status</td>
               <td>
                  <input type = 'text' name = 'status' 
                     value = '<?php echo$status[0]->status; ?>'/>
               </td>
               
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update Result" />
               </td>
            </tr>
         </table>
         
       <div  class="k">
       <div>
           <h3>Phase 1: </h3>
           <span>পরীক্ষার তারিখ শীঘ্রই বলা হবে</span>
           </div>
           <div>
           <h3>Phase 2: </h3>
           <span>পরীক্ষার তারিখ:DD/MM/YY </span><br>
           <span>সময়:HH:MM AM/PM</span>
           </div>
           <div>
           <h3>Phase 3: </h3>
           <span>আপনার স্যাম্পল সংগ্রহ করা হয়েছে।</span>
           </div>
           <div>
           <h3>Phase 4: </h3>
           <span>আপনার স্যাম্পল এখন পরীক্ষাগারে আছে।</span>
           </div>
           <div>
           <h3>Phase 5: </h3>
           <span>কোভিড: Positive(+) /</span><br>
           <span>কোভিড: Negative(-)</span>
           </div>
           <br>
           <div >
              <span><h3>Return to:</h3> <a href="/forms.appointments" class="ss">Test Appointments</a></span>
           </div>
        
       </div>

      </form>
   </body>
</html>