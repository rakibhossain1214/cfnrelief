<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Relief</title>

    <style>
       body {
        background-image: url("");
        background-color: #cccccc;
        }
    </style>
  </head>
  <body>
    @include('adminnav')

    <div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Add a Representative</h4>
                <form action="{{ url('/schedules/store') }}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label>Name:</label>        
                        <input type="text" class="form-control" name="fare" placeholder="">   
                    </div>

                    <div class="form-group">
                        <label>Mobile</label>        
                        <input type="text" class="form-control" name="departure" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Email</label>        
                        <input type="text" class="form-control" name="departure" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>User name</label>        
                        <input type="text" class="form-control" name="departure" placeholder="">
                    </div>
                
                    <div class="form-group">
                        <label>Password</label>        
                        <input type="text" class="form-control" name="departure" placeholder="">
                    </div>

                    
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        UNO
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/home/') }}">UNO</a>
                        <a class="dropdown-item" href="#">Upazilla Chairman</a>
                        <a class="dropdown-item" href="#">Union Chairman</a>
                        <a class="dropdown-item" href="#">Ward Members</a>
                    </div>
                    </div>

                    <input type="submit" class="form-control btn btn-info mt-3" value="Create Account" />
                
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>