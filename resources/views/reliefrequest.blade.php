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
  @include('unionchairmannav')

  <div class="mt-5">
    <div class="container">
        <div class="row">
            <div clas="col">
                
    <h4>Relief Current Stock</h4>
    <h5>Date: 21 April, 2020 </h5>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Total Stock</th>
                <th scope="col">Served</th>
                <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Rice (kg)</td>
                <td>100000</td>
                <td>99000</td>
                <td>1000</td>
                </tr>

                <tr>
                <td>Pulse (kg)</td>
                <td>100000</td>
                <td>99000</td>
                <td>1000</td>
                </tr>

                <tr>
                <td>Soy. Oil (ltr)</td>
                <td>100000</td>
                <td>99000</td>
                <td>1000</td>
                </tr>

                <tr>
                <td>Sugar (kg)</td>
                <td>100000</td>
                <td>99000</td>
                <td>1000</td>
                </tr>

                <tr>
                <td>Salt (kg)</td>
                <td>100000</td>
                <td>99000</td>
                <td>1000</td>
                </tr>

                <tr>
                <td>flour (kg)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                </tr>

                <tr>
                <td>Money (tk)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                </tr>
                
            </tbody>
        </table>

        <h4 class="mt-5">Relief Requests List</h4>
                
                <h4 class="mt-2">Filter Search</h4>
                <div>
                    <label>Approval</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All
                    </button>

                    <label>Last Issued</label>  
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All
                    </button>
                
                </div>


                <table class="table mt-5">
                    <thead>
                        <tr>
                        <th scope="col">Select</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">NID</th>
                        <th scope="col">Family Members</th>
                        <th scope="col">Last Allocation</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                            </div>
                                </td>
                            <td><img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdUUEp18Hj3Y87qFxpbge87j8Ex-CsV58kmirLWqermMErlopF&usqp=CAU" width="64" height="64" alt="..."></td>
                            <td>Md. Rahim Bhuiyan</td>
                            <td>01714426171</td>
                            <td>1316171123</td>
                            <td>7</td>
                            <td>21 April, 2020</td>
                            <td>
                            <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                            </div>
                                </td>
                            <td><img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdUUEp18Hj3Y87qFxpbge87j8Ex-CsV58kmirLWqermMErlopF&usqp=CAU" width="64" height="64" alt="..."></td>
                            <td>Md. Rahim Bhuiyan</td>
                            <td>01714426171</td>
                            <td>1316171123</td>
                            <td>7</td>
                            <td>21 April, 2020</td>
                            <td>
                            <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                            </div>
                                </td>
                            <td><img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdUUEp18Hj3Y87qFxpbge87j8Ex-CsV58kmirLWqermMErlopF&usqp=CAU" width="64" height="64" alt="..."></td>
                            <td>Md. Rahim Bhuiyan</td>
                            <td>01714426171</td>
                            <td>1316171123</td>
                            <td>7</td>
                            <td>21 April, 2020</td>
                            <td>
                            <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                            </div>
                                </td>
                            <td><img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdUUEp18Hj3Y87qFxpbge87j8Ex-CsV58kmirLWqermMErlopF&usqp=CAU" width="64" height="64" alt="..."></td>
                            <td>Md. Rahim Bhuiyan</td>
                            <td>01714426171</td>
                            <td>1316171123</td>
                            <td>7</td>
                            <td>21 April, 2020</td>
                            <td>
                            <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                </label>
                            </div>
                                </td>
                            <td><img class="rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTdUUEp18Hj3Y87qFxpbge87j8Ex-CsV58kmirLWqermMErlopF&usqp=CAU" width="64" height="64" alt="..."></td>
                            <td>Md. Rahim Bhuiyan</td>
                            <td>01714426171</td>
                            <td>1316171123</td>
                            <td>7</td>
                            <td>21 April, 2020</td>
                            <td>
                            <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                      
                    </tbody>
                </table>
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