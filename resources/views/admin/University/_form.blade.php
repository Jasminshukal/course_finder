<div class="col-md-6">
    <div class="form-group">
        <label for="c_name">Name</label>
           <input type="text" name="name" id="c_name" class="form-control" value="{{ $uni->name }}">
    </div>
   </div>
   <div class="col-md-6">
       <div class="form-group">
           <label for="c_address">Address</label>
              <input type="text" name="address" id="c_address" class="form-control" value="{{ $uni->address }}">
       </div>
   </div>
   <div class="col-md-12">
       <div class="form-group">
           <label for="c_description">Description</label>
           <textarea name="description" id="c_description" cols="30" rows="10" class="form-control">{{ $uni->description }}</textarea>
       </div>
   </div>





