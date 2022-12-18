<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
  <style>
    html {
        /* font-size: 62.5%; */
        box-sizing: border-box;
      }
      
      *,
      *::before,
      *::after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
      }
      
      .calculator {
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 400px;
      }
      
      .calculator-screen {
        width: 100%;
        height: 80px;
        border: none;
        background-color: #252525;
        color: #fff;
        text-align: right;
        padding-right: 20px;
        padding-left: 10px;
        font-size: 4rem;
      }
      
      button {
        height: 60px;
        font-size: 1.5rem!important;
      }
      
      .equal-sign {
        height: 60px;
        /* width: 300px; */
        /* grid-area: 2 / 4 / 6 / 5; */
      }
      
      .calculator-keys {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        padding: 20px;
      }
      </style>
</head>
<body>
  <div id="message_p"></div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-4">
        <div class="calculator card">
          <input type="text" class="calculator-screen z-depth-1" value="" disabled id="screen" />
          <div class="calculator-keys">
            <button type="button" value="(" onclick="digit(this.value)" class="btn btn-light waves-effect">(</button>
            <button type="button" value=")" onclick="digit(this.value)" class="btn btn-light waves-effect">)</button>
            <button type="button" value="." onclick="digit(this.value)" class="btn btn-light waves-effect">.</button>
            <button type="button" onclick="digit(this.value)" class="decimal function btn btn-info" value="AC" >AC</button>

            <button type="button" class="operator btn btn-info" onclick="digit(this.value)" value="+">+</button>
            {{-- <button type="button" onclick="clear()" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button> --}}
            <button type="button" class="operator btn btn-info" onclick="digit(this.value)" value="-">-</button>
            <button type="button" class="operator btn btn-info" onclick="digit(this.value)" value="*">&times;</button>
            <button type="button" class="operator btn btn-info" onclick="digit(this.value)" value="/">&divide;</button>
            {{-- <button type="button" value="0" onclick="digit(this.value)" class="btn btn-light waves-effect">0</button> --}}
            <button type="button" value="9" onclick="digit(this.value)" class="btn btn-light waves-effect">9</button>
            <button type="button" value="8" onclick="digit(this.value)" class="btn btn-light waves-effect">8</button>
            <button type="button" value="7" onclick="digit(this.value)" class="btn btn-light waves-effect">7</button>
            <button type="button" value="6" onclick="digit(this.value)" class="btn btn-light waves-effect">6</button>
            <button type="button" value="5" onclick="digit(this.value)"class="btn btn-light waves-effect">5</button>
            <button type="button" value="4" onclick="digit(this.value)" class="btn btn-light waves-effect">4</button>
            <button type="button" value="3" onclick="digit(this.value)" class="btn btn-light waves-effect">3</button>
            <button type="button" onclick="digit(this.value)" class="decimal function btn btn-light" value="2">2</button>
            <button type="button" onclick="digit(this.value)" class="decimal function btn btn-light" value="1">1</button>
            <button type="button" onclick="digit(this.value)" class="decimal function btn btn-light" value="0" >0</button>
            <button type="button" class="equal-sign operator btn btn-info" value="=" onclick="calculate()">=</button> 

            {{-- <button type="button" onclick="digit(this.value)" class="decimal function btn btn-info" value="AC" >AC</button> --}}
            <button type="button" name="save" onclick="save()" class="decimal function btn btn-success" value="save">Save</button>
    
          
            
            {{-- <button type="button" class="equal-sign operator btn btn-default" value="=" onclick="calculate()">=</button> --}}
    
          </div>
      </div>
      </div>
      <div class="col-8">
            <div class="table-responsive">
              <table class="table text-center">
                <thead class="table-dark">
                  <tr>
                    <th>Input</th>
                    <th>Output</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $record )
                
                  <tr>
                    <td>  {{$record->input}}</td>
                    <td>                  {{$record->output}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
       
      </div>
    </div>
  </div>
  
    
   
{{-- <div>
 
</div> --}}

  

</body>
<script>
var exp='';
var result = '';

//restrict user to use keyboard keys
document.onkeydown = function (e) {
        return false;
}

//get value of pressed button and make expression
    function digit(val)
    {
      if(val=='AC')
      {
        exp = '';
      document.getElementById('screen').value=0;
      }
      else{
        exp +=val;
        
        document.getElementById('screen').removeAttribute("disabled");

        document.getElementById('screen').value=exp;
      }

    }

    //function to calculate the expression on click of =
    function calculate()
    {
     

      result = eval(exp);
     
      document.getElementById('screen').value=result;


    }
    //save expression and result to database
    function save()
    {
      
      var token = $('meta[name="csrf-token"]').attr('content');
      if(exp!='' && result!=''){

        $.ajax(
    {
        url:'/',
        type:"POST",
        data:{'exp':exp,'result':result,'_token':token},
        success:function(data){
          window.location.reload();

        

      }
        


    });
      }
      else{
        var html='<div class="alert alert-danger w-25 text-center  mx-auto " role="alert">Input and output both required</div>';
                                $('#message_p').html(html);
                                $("#message_p").fadeTo(2000, 2000).slideUp(500,
                                    function() {
                                        $("#message_p").slideUp(500);
                                    });
      }

  }

    </script>
</html>