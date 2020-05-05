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
    @include('wardmembernav')

    <div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col">

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
                <td>1000</td>
                <td>990</td>
                <td>10</td>
                </tr>

                <tr>
                <td>Pulse (kg)</td>
                <td>1000</td>
                <td>990</td>
                <td>10</td>
                </tr>

                <tr>
                <td>Soy. Oil (ltr)</td>
                <td>1000</td>
                <td>990</td>
                <td>10</td>
                </tr>

                <tr>
                <td>Sugar (kg)</td>
                <td>1000</td>
                <td>990</td>
                <td>10</td>
                </tr>

                <tr>
                <td>Salt (kg)</td>
                <td>1000</td>
                <td>990</td>
                <td>10</td>
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

                <h4>Issue Relief</h4>
                <img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="150" height="120" alt="...">
                <h6 class="mt-2">Name: Md. Abdul Karim</h6>
                <h6 class="mt-2">Father's Name: Md. Rezaul Karim</h6>
                <h6 class="mt-2">NID: 123123121</h6>
                <h6 class="mt-2">Mobile: 0127112621</h6>
                <h6 class="mt-2">Address: h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</h6>
                <h6 class="mt-2">Ward: 1</h6>
                <h6 class="mt-2">Union: Ulpur</h6>
                <h6 class="mt-2">Upazilla: Gopalganj Sadar</h6>
                <h6 class="mt-2">District: Gopalganj</h6>
                <h6 class="mt-2">Division: Dhaka</h6>
            </div>
        </div>
    </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col">
                <div class="container">
                    <h4 class="mt-4">Relief Chart</h4>
                    <div class="row">
                        <div class="col border border-success bg-success text-white p-4 m-1">
                            <p>Status: Success</p>
                            <p>Rice (kg): 10</p>
                            <p>Pulse (kg): 5</p>
                            <p>Soy. Oil (ltr): 2</p>
                            <p>Sugar (kg): 1</p>
                            <p>Salt (kg): 1</p>
                            <p>Flour (kg): 0</p>
                            <p>Money: 0</p>
                            <p>Issue Date: 15 March, 2020</p>
                        </div>
                        <div class="col border border-success bg-success text-white p-4 m-1">
                            <p>Status: Success</p>
                            <p>Rice (kg): 10</p>
                            <p>Pulse (kg): 5</p>
                            <p>Soy. Oil (ltr): 2</p>
                            <p>Sugar (kg): 1</p>
                            <p>Salt (kg): 1</p>
                            <p>Flour (kg): 0</p>
                            <p>Money: 0</p>
                            <p>Issue Date: 1 April, 2020</p>
                        </div>
                        <div class="col border border-success bg-success text-white p-4 m-1">
                            <p>Status: Success</p>
                            <p>Rice (kg): 10</p>
                            <p>Pulse (kg): 5</p>
                            <p>Soy. Oil (ltr): 2</p>
                            <p>Sugar (kg): 1</p>
                            <p>Salt (kg): 1</p>
                            <p>Flour (kg): 0</p>
                            <p>Money: 0</p>
                            <p>Issue Date: 16 April, 2020</p>
                        </div>
                        <div class="col border border-success bg-primary text-white p-4 m-1">
                            <p>Status: Not Confirmed</p>
                            <p>Rice (kg): 10</p>
                            <p>Pulse (kg): 5</p>
                            <p>Soy. Oil (ltr): 2</p>
                            <p>Sugar (kg): 1</p>
                            <p>Salt (kg): 1</p>
                            <p>Flour (kg): 0</p>
                            <p>Money: 0</p>
                            <div>otp: <input type="text" > </div>
                            <a  href="{{ url('/issue-relief-done') }}" class="btn m-2 btn-success">Confirm</a>
                            
                        </div>
                    </div>

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