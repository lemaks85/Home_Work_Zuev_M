<form name="employee-form" id="employee-form" method="post" action="{{url('store-form')}}">
    
    <div class="form-group">
        <labal for="name">Name</labal>
        <input type="text" id="name" name="name" class="form-control" require="true">
    </div>
    <div class="form-group">
        <labal for="email">Description</labal>
        <input type="email" id="email" name="email" class="form-control" require="true">
    </div>
    <div class="form-group">
        <labal for="workData">workData</labal>
        <textarea name="workData" class="form-control" require="true"></textarea>
    </div>
        <button type="submit" class="btn-prymary">Submit</button>
</form>