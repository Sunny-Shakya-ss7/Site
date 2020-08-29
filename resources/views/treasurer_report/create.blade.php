<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

@extends('layouts.app')
@section('title', 'form_register')
@section('content')

<style>
        .vertical3 { 
            position: absolute;
            width: 9px;
            height:100%;
            min-height: 235%;
        }

        @media (max-width: 500px) {
            .vertical3 {
                width: 5px;
                min-height: 364%;
            }
        }

        @media (max-width: 1080px) {
        .v1 {
            left: 3rem !important;
        }
        .v2 {
            left: 4rem !important;
        }
        .v3 {
            left: 5rem !important;
        }
        .v4 {
            left: 6rem !important;
        }
        }

        @media (max-width: 700px) {
        .v1 {
            left: 2rem !important;
        }
        .v2 {
            left: 3rem !important;
        }
        .v3 {
            left: 4rem !important;
        }
        .v4 {
            left: 5rem !important;
        }
        }
</style>
<div >
    <img class="vertical3 v1" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 6rem;" />
    <img class="vertical3 v2" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 7.5rem;" />
    <img class="vertical3 v3" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 9rem;" />
    <img class="vertical3 v4" src="{{asset('graphics/png/line.png')}}" alt="line" style="left: 10.5rem;"/>
    <img class="image" src="{{asset('graphics/logo/a.png')}}" alt="logo" />
</div>

<div class="container" style="margin-left: 15%">
     <div class="text-center">
        <h1 style="color: gold;">Treasurer Report 2020/2021</h1>
     </div>
     <a href="/treasurer" class="btn btn-success">Go Back</a>
     <hr>
     {!! Form::open(['action' => 'TreasurerController@store', 'method' => 'POST']) !!}    
        <div class="form-group" style="width:40%">
          <h5>{{Form::label('title', 'Leo Club Name *')}}</h5>
          {{Form::select('club_name', ['Bagmati Leo Club' => 'Bagmati Leo Club', 'Banepa Leo Club' => 'Banepa Leo Club', 'Bhaktapur Araniko Leo Club' => 'Bhaktapur Araniko Leo Club', 'Bhaktapur Dibyaswori Leo Club' => 'Bhaktapur Dibyaswori Leo Club', 'Bhaktapur Golden Gate Leo Club' => 'Bhaktapur Golden Gate Leo Club', 'Bhaktapur Heart & Diabetes Center Leo Club' => 'Bhaktapur Heart & Diabetes Center Leo Club', 'Bhaktapur Kedareshwor Leo Club' => 'Bhaktapur Kedareshwor Leo Club', 'Bhaktapur Rose Village Leo Club' => 'Bhaktapur Rose Village Leo Club', 'Bhaktapur Suryabinayak Leo Club' => 'Bhaktapur Suryabinayak Leo Club', 'Dhanusha Janakpur Leo Club' => 'Dhanusha Janakpur Leo Club', 'Hariwon Leo Club' => 'Hariwon Leo Club', 'Janakpur Monastic Leo Club' => 'Janakpur Monastic Leo Club', 'Kabhre Banepa Leo Club' => 'Kabhre Banepa Leo Club', 'Kabhre Sankhu Leo Club' => 'Kabhre Sankhu Leo Club', 'Kathmandu Eureka Leo Club' => 'Kathmandu Eureka Leo Club', 'Kathmandu Capital Leo Club' => 'Kathmandu Capital Leo Club', 'Kathmandu Synergy Leo Club' => 'Kathmandu Synergy Leo Club', 'Kathmandu Alka Leo Club' => 'Kathmandu Alka Leo Club', 'Kathmandu Central Leo Club' => 'Kathmandu Central Leo Club', 'Kathmandu Chabahil City Leo Club' => 'Kathmandu Chabahil City Leo Club', 'Kathmandu Chabahil Leo Club' => 'Kathmandu Chabahil Leo Club', 'Kathmandu Creation Leo Club' => 'Kathmandu Creation Leo Club', 'Kathmandu Diamond Leo Club' => 'Kathmandu Diamond Leo Club', 'Kathmandu Doab Leo Club' => 'Kathmandu Doab Leo Club', 'Kathmandu Downtown Leo Club' => 'Kathmandu Downtown Leo Club', 'Kathmandu Futurestar Leo Club' => 'Kathmandu Futurestar Leo Club', 'Kathmandu High Vision Leo Club' => 'Kathmandu High Vision Leo Club', 'Kathmandu Himchuli Leo Club' => 'Kathmandu Himchuli Leo Club', 'Kathmandu Horizon Leo Club' => 'Kathmandu Horizon Leo Club', 'Kathmandu Imperial Leo Club' => 'Kathmandu Imperial Leo Club', 'Kathmandu Kageshwori Leo Club' => 'Kathmandu Kageshwori Leo Club', 'Kathmandu Kailash Leo Club' => 'Kathmandu Kailash Leo Club', 'Kathmandu Kirtipur Leo Club' => 'Kathmandu Kirtipur Leo Club', 'Kathmandu Natural Leo Club' => 'Kathmandu Natural Leo Club', 'Kathmandu Peace Leo Club' => 'Kathmandu Peace Leo Club', 'Kathmandu Pioneer Leo Club' => 'Kathmandu Pioneer Leo Club', 'Kathmandu Ramechap Leo Club' => 'Kathmandu Ramechap Leo Club', 'Kathmandu Rays Leo Club' => 'Kathmandu Rays Leo Club', 'Kathmandu Regency Leo Club' => 'Kathmandu Regency Leo Club', 'Kathmandu Roshni Leo Club' => 'Kathmandu Roshni Leo Club', 'Kathmandu Samriddhi Leo Club' => 'Kathmandu Samriddhi Leo Club', 'Kathmandu Samriddhi Mega Chapter Leo Club' => 'Kathmandu Samriddhi Mega Chapter Leo Club', 'Kathmandu Sunrise Arundayo Academy Leo Club' => 'Kathmandu Sunrise Arundayo Academy Leo Club', 'Kathmandu Unique Leo Club' => 'Kathmandu Unique Leo Club', 'Kathmandu Vision Leo Club' => 'Kathmandu Vision Leo Club', 'Lahan City Leo Club' => 'Lahan City Leo Club', 'Lalbandi City Leo Club' => 'Lalbandi City Leo Club', 'Mount 8848 Leo Club ** Kohinoor' => 'Mount 8848 Leo Club ** Kohinoor', 'Nepal Eco Friendly Leo Club' => 'Nepal Eco Friendly Leo Club', 'Nepal Excellence Leo Club' => 'Nepal Excellence Leo Club', 'Okhaldhunga Leo Club' => 'Okhaldhunga Leo Club', 'Panauti Leo Club' => 'Panauti Leo Club', 'Sindhuli City Leo Club' => 'Sindhuli City Leo Club'], null, ['class' => ' form-control input', 'placeholder' => '','required' => 'required'])}}
        </div> 
        <div class="form-group" style="width:40%">
          <h5>{{Form::label('title', 'Month Of Report*')}}</h5> 
          {{Form::select('month_name', ['January'=>'January','February'=>'February','March'=>'March','April'=>'April','May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December'], null, ['class' => 'form-control input', 'placeholder' => '','required' => 'required'])}}
        </div> 

        <div class="form-group" >
          <label for="administrative"> Administrative Account :</label> <br>
          <table class="table table-bordered"  id="dynamic_field_admin" style="color:white;";  >
            <tr class="form-group" >
               <th>Expenses/Expenditure	</th>
              <th>Amount</th>
              <th>..........Income............</th>
              <th>Amount(Rs.)</th>
            </tr>
            <tr >
              <td><input type="text" name="admin_expenses[]" placeholder="Expenditure	" class="form-control name_list" required/></td> 
              <td><input type="number" name="admin_amount1[]" placeholder=" Amount" class="form-control name_list" value="0" required/></td> 
              <td><input type="text" name="admin_income[]" placeholder=" Income" class="form-control name_list" required/></td> 
              <td><input type="number" name="admin_amount2[]" placeholder=" Amount" class="form-control name_list" value="0" required/></td>  
              <td><button type="button" name="add[]" id="admin_add" class="btn btn-success" style="width:7rem;">Add More</button></td>  
              
            </tr>
          </tr>
          </table>   
          &nbsp&nbsp Total:
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="number" name="admin_amount1_total" readonly/> 
          &nbsp&nbsp&nbsp&nbsp Total:
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="number" name="admin_amount2_total" readonly/> <br>
          <br><br>

          <label for="administrative"> Service Account :</label> <br>
          <table class="table table-bordered"  id="dynamic_field_serv" style="color:white;";  >
            <tr class="form-group" >
               <th>Expenses/Expenditure	</th>
              <th>Amount</th>
              <th>..........Income............</th>
              <th>Amount(Rs.)</th>
            </tr>
            <tr >
              <td><input type="text" name="serv_expenses[]" placeholder="Expenditure	" class="form-control name_list" required/></td> 
              <td><input type="number" name="serv_amount1[]" placeholder=" Amount" class="form-control name_list" value="0" required/></td> 
              <td><input type="text" name="serv_income[]" placeholder=" Income" class="form-control name_list" required/></td> 
              <td><input type="number" name="serv_amount2[]" placeholder=" Amount" class="form-control name_list" value="0" required/></td>  
              <td><button type="button" name="add[]" id="serv_add" class="btn btn-success" style="width:7rem;">Add More</button></td>  
            </tr>
          </table> 
          &nbsp&nbsp Total:
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="number" name="serv_amount1_total" readonly/> 
          &nbsp&nbsp&nbsp&nbsp Total:
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <input type="number" name="serv_amount2_total" readonly/> <br>
          <br><br>
          <div class="form-group">
            <h5>{{Form::label('title', 'Total Fund Raised From Fundraiser Programmes.*')}}</h5> 
            {{Form::number('tot_fund','',['class' => 'form-control col-md-3 input','required' => 'required'])}}
          </div>  

          <div class="form-group">
            <h5>{{Form::label('title', 'Total Cash In Hand*')}}</h5> 
            {{Form::number('tot_cash','',['class' => 'form-control col-md-3 input','required' => 'required'])}}
          </div>  
   
          <div class="form-group">
            <h5>{{Form::label('title', 'Treasurer Name *')}}</h5> 
            {{Form::select('tr_prefix', ['leo'=>'leo'], null, ['class' => ' col-1  input'])}}
            {{Form::text('tr_fname','',['class' => ' col-md-3 ml-3 input','required' => 'required'])}}
            {{Form::text('tr_lname','',['class' => 'col-md-3 ml-3 input','required' => 'required'])}} <br>
            {{Form::label('title', 'Prefix',['class' => ' mr-5 ml-3'])}}
            {{Form::label('title', 'First Name',['class' => ' ml-5 mr-5'])}}
            {{Form::label('title', 'Last Name',['class' => ' ml-5' ])}}
          </div> 

          <div class="form-group">
            <h5>{{Form::label('title', 'Contact Number')}}</h5> 
            {{Form::number('tr_cont_num','',['class' => 'form-control col-md-3 input','required' => 'required'])}}
          </div> 

          
          <div class="form-group">
            <h5>{{Form::label('title', 'Joint Treasurer Name *')}}</h5> 
            {{Form::select('jtr_prefix', ['leo'=>'leo'], null, ['class' => ' col-1  input'])}}
            {{Form::text('jtr_fname','',['class' => ' col-md-3 ml-3 input'])}}
            {{Form::text('jtr_lname','',['class' => 'col-md-3 ml-3 input'])}} <br>
            {{Form::label('title', 'Prefix',['class' => ' mr-5 ml-3'])}}
            {{Form::label('title', 'First Name',['class' => ' ml-5 mr-5'])}}
            {{Form::label('title', 'Last Name',['class' => ' ml-5' ])}}
          </div>  

          <div class="form-group">
            <h5>{{Form::label('title', 'Contact Number')}}</h5> 
            {{Form::number('jtr_cont_num','',['class' => 'form-control col-md-3 input'])}}
          </div> 

          <div class="form-group">
            <h5>{{Form::label('title', 'Joint Treasurer Name *')}}</h5> 
            {{Form::select('jtr_prefix_1', ['leo'=>'leo'], null, ['class' => ' col-1  input', 'placeholder' => 'leo'])}}
            {{Form::text('jtr_fname_1','',['class' => ' col-md-3 ml-3 input'])}}
            {{Form::text('jtr_lname_1','',['class' => 'col-md-3 ml-3 input'])}} <br>
            {{Form::label('title', 'Prefix',['class' => ' mr-5 ml-3'])}}
            {{Form::label('title', 'First Name',['class' => ' ml-5 mr-5'])}}
            {{Form::label('title', 'Last Name',['class' => ' ml-5' ])}}
          </div> 
          
          
          {{Form::submit('Submit Form', ['class' => 'ml-4 p-2 btn btn-success'])}}
    {!! Form::close() !!}
</div>   
@endsection

<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1; 
      
      $("input").change(function(){
          var admin_amount1=0;
          $('input[name="admin_amount1[]"]').each(function(){
                admin_amount1=admin_amount1+parseInt($(this).val());  
          });
          $("input[name=admin_amount1_total]").val(admin_amount1);
      });

      $("input").change(function(){
          var admin_amount2=0;
          $('input[name="admin_amount2[]"]').each(function(){
                admin_amount2=admin_amount2+parseInt($(this).val());  
          });
          $("input[name=admin_amount2_total]").val(admin_amount2);
      });

      $('#admin_add').click(function(){  
          i++;  
          $('#dynamic_field_admin').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="admin_expenses[]" placeholder="Enter your Expenses/Expenditure" class="form-control name_list" required/></td><td><input type="number" name="admin_amount1[]" placeholder="Enter your Amount" class="form-control name_list" value="0"  required/></td><td><input type="text" name="admin_income[]" placeholder="Enter your income" class="form-control name_list"  required/></td><td><input type="number" name="admin_amount2[]"  placeholder="Enter your amount" class="form-control name_list" value="0" required/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
        
          $("input").change(function(){
          var admin_amount1=0;
          $('input[name="admin_amount1[]"]').each(function(){
              admin_amount1=admin_amount1+parseInt($(this).val()); 
          });
          $("input[name=admin_amount1_total]").val(admin_amount1);
          });

          $("input").change(function(){
          var admin_amount2=0;
          $('input[name="admin_amount2[]"]').each(function(){
                admin_amount2=admin_amount2+parseInt($(this).val());  
          });
          $("input[name=admin_amount2_total]").val(admin_amount2);
      });

          
          


      });  
     

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

         
      $("input").change(function(){
          var serv_amount1=0;
          $('input[name="serv_amount1[]"]').each(function(){
               serv_amount1=serv_amount1+parseInt($(this).val());  
          });
          $("input[name=serv_amount1_total]").val(serv_amount1);
      });

      $("input").change(function(){
          var serv_amount2=0;
          $('input[name="serv_amount2[]"]').each(function(){
            serv_amount2=serv_amount2+parseInt($(this).val());  
          });
          $("input[name=serv_amount2_total]").val(serv_amount2);
      });


      $('#serv_add').click(function(){  
           i++;  
           $('#dynamic_field_serv').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="serv_expenses[]" placeholder="Enter your Expenses/Expenditure" class="form-control name_list" /></td><td><input type="number" name="serv_amount1[]" value="0" placeholder="Enter your Amount" class="form-control name_list" /></td><td><input type="text" name="serv_income[]" placeholder="Enter your income" class="form-control name_list" /></td><td><input type="number" name="serv_amount2[]" value="0" placeholder="Enter your amount" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
               
      $("input").change(function(){
          var serv_amount1=0;
          $('input[name="serv_amount1[]"]').each(function(){
               serv_amount1=serv_amount1+parseInt($(this).val());  
          });
          $("input[name=serv_amount1_total]").val(serv_amount1);
      });

      $("input").change(function(){
          var serv_amount2=0;
          $('input[name="serv_amount2[]"]').each(function(){
            serv_amount2=serv_amount2+parseInt($(this).val());  
          });
          $("input[name=serv_amount2_total]").val(serv_amount2);
      });
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>