@extends('inc.welcome') 

@section('content')
<style>
    .form-group{
        display: none;
    }
     .form-control{
        margin: 7px;
     }
     .page-link{
        cursor: pointer;
     }
</style>
    <div class="well well-lg" style="margin: auto  25%;">
                <h1 class="text-center">FORMS REG</h1>
                <div class="regForm" style="margin-left: 15%;">
                    {!! Form::open(['method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Name'); !!} 
                        {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Full Name..', 'style' => 'width:75%;'])}}                        <br>
                        {!! Form::label('title', 'User Name'); !!} 
                        {{Form::text('username','',['class' => 'form-control', 'placeholder' => 'User Name..','style' => 'width:75%;'])}}              
                    </div>
                    <div class="form-group">
                        {!! Form::label('title', 'Email Address'); !!} 
                        {{Form::text('name','',['class' => 'form-control', 'placeholder' => '','style' => 'width:75%;'])}}
                        {!! Form::label('title', 'Password'); !!} 
                        {{Form::text('name','',['class' => 'form-control', 'placeholder' => '','style' => 'width:75%;'])}}
                    </div>
                    {!! Form::close() !!}
                        <ul class="pagination" style="margin-left: 15%;">
                            <li class="page-item"><a  class="page-link" id="prevbtn" onclick="nextPrev(-1)">Previous</a></li>
                            <li class="page-item"><a class="page-link">1</a></li>
                            <li class="page-item"><a class="page-link">2</a></li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item"><a  class="page-link" id="nextbtn"onclick="nextPrev(+1)">Next</a></li>
                        </ul>
                </div>
    </div>
    <script>
        var viewPage = 0;
        showPage(viewPage);
        var x = document.getElementsByClassName("form-group");

        function showPage(viewPage){
            x[viewPage].style.display = "block";
            if(viewPage == 0){
                document.getElementById("prevbtn").style.display = "hidden";
            } else {
                document.getElementById("prevbtn").style.display = "inline";
            }

            if(n == (x.length-1)){
                document.getElementById("nextbtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextbtn"),innerHTML = "Next";
            }

            pageIndicator(n);
        }

        function nextPrev(n){
            x[viewPage].style.display = "none";

            viewPage += n;
            if(viewPage >= x.length){
                document.getElementByClass("regForm").submit();
            }
            showPage(viewPage);
            }

            function pageIndicator(n){
                var i, y = document.getElementsByClass("page-item");
                for( i=0, i < x.length; i++){
                    y[i].className = x[i].className.replace("active","");
                }
                y[n].className += "active";
            }
    </script>
@endsection