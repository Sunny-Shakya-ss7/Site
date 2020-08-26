@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

</style>
<div>
    
    <div class="container ">
        <div><a href="/treasurer" class="btn btn-success float-left">Go Back</a></div><br><br><br>
        <h4 class="text-center">Treasurer report of {{$treasurer->club_name}}</h4>  <br>  
        
            <br>
            Club Name : {{$treasurer->club_name}} <br>
            Month Name : {{$treasurer->month_name}} <br><br>
            Administrative Accounts: <br>
                <table class="table-bordered">
                    <tr>
                        <th>Expenses/Expenditure</th>
                        <th>Amount(Rs.)</th>
                        <th>Income</th>
                        <th>Amount(Rs.)</th>
                    </tr>
                    @foreach($treasurer->admin_expenses as $expense)  
                        <tr>
                            <td>  {{$expense}}</td>  
                            @foreach($treasurer->admin_amount1 as $amount1)  
                            @endforeach    
                                <td>  {{$amount1}}</td>
                            @foreach($treasurer->admin_income as $income)  
                            @endforeach    
                                 <td>  {{$income}}</td>
                            @foreach($treasurer->admin_amount2 as $amount2)  
                            @endforeach    
                            <td>  {{$amount2}}</td>  
                    @endforeach  

                    <tr>
                        <td>Total</td>
                        <td>  {{$treasurer->admin_amount1_total}}</td>
                        <td>Total</td>
                        <td>  {{$treasurer->admin_amount2_total}}</td>
                    </tr>
                </table>
            <br><br>
            Service Accounts: <br>
                <table class="table-bordered">
                    <tr>
                        <th>Expenses/Expenditure</th>
                        <th>Amount(Rs.)</th>
                        <th>Income</th>
                        <th>Amount(Rs.)</th>
                    </tr>
                    @foreach($treasurer->serv_expenses as $expense)  
                        <tr>
                            <td>  {{$expense}}</td>  
                            @foreach($treasurer->serv_amount1 as $amount1)  
                            @endforeach    
                                <td>  {{$amount1}}</td>
                            @foreach($treasurer->serv_income as $income)  
                            @endforeach    
                                 <td>  {{$income}}</td>
                            @foreach($treasurer->serv_amount2 as $amount2)  
                            @endforeach    
                            <td>  {{$amount2}}</td>  
                    @endforeach  
                    <tr>
                        <td>Total</td>
                        <td>{{$treasurer->serv_amount1_total}}</td>
                        <td>Total</td>
                        <td>{{$treasurer->serv_amount2_total}}</td>
                    </tr>
                </table>

                </table>    
            <br><br>
            Total Fund Raised From Fundraiser Programmes :  {{$treasurer->tot_fund}} <br>
            Total Cash In Hand :{{$treasurer->tot_cash}} <br>
            Treasurer Name :  {{$treasurer->tr_fname}} {{$treasurer->tr_lname}} <br>
            Contact Number :  {{$treasurer->tr_cont_num}} <br>
            @if($treasurer->jtr_fname!=NULL)
                Joint Treasurer Name :  {{$treasurer->jtr_fname}} {{$treasurer->jtr_lname}} <br>
                Contact Number :  {{$treasurer->jtr_cont_num}} <br>
            @endif
            @if($treasurer->jtr_fname_1!=NULL)
                Joint Treasurer Name :  {{$treasurer->jtr_fname_1}} {{$treasurer->jtr_lname_1}} <br> <br>
            @endif
    </div>
                           
</div>
<style>
</style>

@endsection