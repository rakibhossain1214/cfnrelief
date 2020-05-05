<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img class="navbar-brand" src="{{ asset('/images/logo.png') }}" width="120" height="80" alt="...">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/relief-help')}}">Request help<span class="sr-only">(current)</span></a>
      </li>
       
    </ul>
    <span class="navbar-text">
        <a class="nav-link" href="{{ url('/login')}}"> <span class="oi oi-person"> Login </span> <span class="sr-only">(current)</span></a>
    </span>
  </div>
</nav>