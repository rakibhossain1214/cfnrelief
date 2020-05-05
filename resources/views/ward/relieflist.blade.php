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
            <div clas="col">
                <h4>Relief Members List</h4>

                <h4 class="mt-5">Filter Search</h4>
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
                
                <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" name="departure" placeholder="Enter NID">
                        </div>
                        <div class="col">
                            <input type="submit" class="btn btn-info" value="Find Victim" />
                        </div>
                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">NID</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Last Relief</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>21 April, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>15 March, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Approved</td>
                            <td>15 March, 2020</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Not Approved</td>
                            <td>-</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
                                <a href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td><img class="rounded" src="https://nijhoom.b-cdn.net/wp-content/uploads/2018/03/read-beard-600-o.jpg" width="64" height="64" alt="..."></td>
                            <td>Md. Abdul Karim</td>
                            <td>12312312847</td>
                            <td>01714426171</td>
                            <td>h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur</td>
                            <td>Not Approved</td>
                            <td>-</td>
                            <td>Karim Mia</td>
                            <td>

                                <a href="{{ url('/issue-relief') }}">Issue Relief</a>  |  
                                <a href="{{ url('/edit-relief') }}">Edit</a>  |  
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