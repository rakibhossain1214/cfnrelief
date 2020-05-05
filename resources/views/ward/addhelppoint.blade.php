<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add help location</title>

    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }

       body {
        background-image: url("");
        background-color: #cccccc;
        }

      
    </style>
  </head>
  <body>
  @include('wardmembernav')

    <div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Add a relief help location on map</h4>
                @include('ward/wardhelpmap')
            </div>

            <div class="col">
            <form action="{{ url('/schedules/store') }}" method="post">
                @csrf
                
                <div class="form-group mt-5">
                    <label>Nid:</label>        
                    <input type="text" class="form-control" name="route" placeholder="" value="12312312847">
                </div>

                <div class="form-group">
                    <label>Name:</label>        
                    <input type="text" class="form-control" name="fare" placeholder="" value="Md. Abdul Karim">   
                </div>

                <div class="form-group">
                    <label>Mobile</label>        
                    <input type="text" class="form-control" name="departure" placeholder="" value="0171126214">
                </div>

                <div class="form-group">
                    <label>longitude</label>        
                    <input type="text" class="form-control" name="departure" placeholder="" value="23.12212">
                </div>

                <div class="form-group">
                    <label>Lattitude</label>        
                    <input type="text" class="form-control" name="departure" placeholder="" value="90.131131">
                </div>

                <div>

                <div class="mt-3">
                    <label>Select Division</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dhaka
                    </button>
                </div>

                <div class="mt-3">
                    <label>Select Distric</label>  
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gopalgonj
                        </button>
                </div>
                    
                <div class="mt-3">
                <label>Select Upazilla</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tungipara
                    </button>
                
                </div>

                <div class="mt-3">
                <label>Select Union</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Barni
                    </button>
                </div>    
                   
                <div class="mt-3">
                <label>Select Ward</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ward-1
                    </button>
                </div>
                   

                </div>

                <input type="submit" class="form-control btn btn-info mt-3" value="Add Helping Point" />
            
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