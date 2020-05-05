

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dhaka
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="">Dhaka</a>
      <a class="dropdown-item" href="#">Rajshahi</a>
      <a class="dropdown-item" href="{{ url('/home/rangpur') }}">Rangpur</a>
      <a class="dropdown-item" href="#">Khulna</a>
      <a class="dropdown-item" href="#">Barisal</a>
      <a class="dropdown-item" href="#">Sylhet</a>
      <a class="dropdown-item" href="#">Mymensingh</a>
      <a class="dropdown-item" href="#">Chittagong</a>
  </div>
</div>

<div class="dropdown mt-3">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Union Parishad
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Municipalities</a>
      <a class="dropdown-item" href="#">City Corporation</a>
  </div>
</div>

<div class="container mt-2">
        Start Date: <input id="startDate" width="600" />
        End Date: <input id="endDate" width="600" />
  </div>


<table class="table mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Govt. Divisions</th>
      <th scope="col">Dist. Parishads</th>
      <th scope="col">Upazilla Parishads</th>
      <th scope="col">Union Parishads</th>
      <th scope="col">Wards</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <h5>
          <a href="#" data-toggle="modal" data-target="#exampleModal1">Dhaka</a>
            @include('home/modals/div')
        </h5>
        <p> Total Victims: 1000000 </p>
        <p> Served Victims: 980000 </p>
      </td>
      <td>
        <h5>
        <a href="#" data-toggle="modal" data-target="#exampleModal2">Gopalganj</a>
            @include('home/modals/dist')
        </h5>
        <p> Total Victims: 30000 </p>
        <p> Served Victims: 29000 </p>
      </td>
      <td>
        <h5>
          <a href="#" data-toggle="modal" data-target="#exampleModal3">Gopalganj Sadar</a>
            @include('home/modals/upazilla')
        </h5>
        <p> Total Victims: 3000 </p>
        <p> Served Victims: 2990 </p>
      </td>
      <td>
        <h5>
          <a href="#" data-toggle="modal" data-target="#exampleModal4">Borashi</a>
            @include('home/modals/union')
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
          <a href="#" data-toggle="modal" data-target="#exampleModal5">Wards</a>
            @include('home/modals/wards')
        </h5>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Boultoli</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Durgapur</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
     
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Gobra</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Nijra</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Satpur</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Ulpur</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>


    <tr>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Tungipara</a>
        </h5>
        <p> Total Victims: 3000 </p>
        <p> Served Victims: 2990 </p>
      </td>
      <td>
        <h5>
        <a href="#">Barni</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Durmuria</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Kushli</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
     
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Patgati</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>        
        <a href="#">Bhabki</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <h5>
        <a href="#">Gopalpur</a>
        </h5>
        <p> Total Victims: 200 </p>
        <p> Served Victims: 199 </p>
      </td>
      <td>
        <h5>
        <a href="#">Wards</a>
        </h5>
      </td>
    </tr>

  </tbody>
</table>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<script>
   var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });
        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });
</script>