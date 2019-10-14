@extends('master')

@section('title', 'Homepage')

@section('content')
  <div id="showcase">
    <div class="overlay"></div>
    <div class="title"><h1>Phukhet Chinese & Thai</h1></div>
    <div><img class="showitem" src="images/showcase1.png" alt=""></div>
    <div><img class="showitem" src="images/showcase2.png" alt=""></div>
    <div><img class="showitem" src="images/showcase3.png" alt=""></div>
  </div>
  
  <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("showitem");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 3000);
    }
  </script>

@endsection