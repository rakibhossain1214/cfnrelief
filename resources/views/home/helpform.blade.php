<form action="{{ url('/schedules/store') }}" method="post">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control" name="route" placeholder="Name">
        
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="route" placeholder="Organization Name">
        
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="fare" placeholder="Email">
       
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="departure" placeholder="Mobile no">
        
    </div>

</form>