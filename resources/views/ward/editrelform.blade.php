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
        <label>Father's Name</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="Md. Rezaul Karim">
    </div>

    <div class="form-group">
        <label>Occupation</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="Labour">
    </div>

    <div class="form-group">
        <label>Mobile</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="0127112621">
    </div>

    <div class="form-group">
        <label>Current Address</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur">
    </div>
   
    <div class="form-group">
        <label>Permanant Address</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="h-12, shimuliapara, ward-1, Rahamatpur Union, Parbatipur, Dinajpur">
    </div>

    <div class="form-group">
        <label>Number of Family Members</label>        
        <input type="text" class="form-control" name="departure" placeholder="" value="6">
    </div>

    <div>
    <label>Select Division</label>  
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dhaka
    </button>

    <label>Select Distric</label>  
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Gopalgonj
    </button>

    <label>Select Upazilla</label>  
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Tungipara
    </button>
  
    <label>Select Union</label>  
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Barni
    </button>

    <label>Select Ward</label>  
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ward-1
    </button>

    </div>

<div class="mt-4">
    <label>Upload Relief Member's Image</label>  
    <input type="submit" class="btn" value="Change Image" />
</div>
    <div class="form-group mt-5">
        <div class="row">
            <div class="col">
                <input type="submit" class="form-control btn btn-info" value="Send OTP" />   
            </div>
            <div class="col">
                <input type="text" class="form-control" name="departure" placeholder="Enter OTP Code">
            </div>
        </div>
    </div>

    <input type="submit" class="form-control btn btn-info" value="Send for Chairman's Approval" />
   
</form>