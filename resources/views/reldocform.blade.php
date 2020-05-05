<form action="{{ url('/schedules/store') }}" method="post">
    @csrf
    <input type="submit" class="btn btn-sm btn-info" value="Print" />

    <div class="form-group mt-5">
        <label>Select Funding Option</label>        
        <input type="text" class="form-control" name="route" placeholder="Name">
    </div>

    <div class="form-group">
        <label>Select Funding Option</label>        
        <input type="text" class="form-control" name="fare" placeholder="Email">
       
    </div>

    <div class="form-group">
        <label>Select Funding Option</label>        
        <input type="text" class="form-control" name="departure" placeholder="Mobile no">
        
    </div>

    <div class="form-group">
        <label>Select Funding Option</label>        
    </div>

   

</form>