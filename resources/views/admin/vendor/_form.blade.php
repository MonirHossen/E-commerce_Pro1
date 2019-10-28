    <div class="form-group">
    <label class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input type="text"  name="name" class="form-control" value="{{ old('name',isset($vendor->name) ? $vendor->name : null) }}" placeholder="Name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    </div><div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input type="email" @isset($vendor) disabled @endisset name="email" class="form-control" value="{{ old('email',isset($vendor->email)? $vendor->email:null ) }}" placeholder="Email">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="example-description">Address</label>
    <div class="col-md-10">
        <textarea name="address" class="form-control" placeholder="Address" id="#" cols="25" rows="10">{{ old('address',isset($vendor->address)? $vendor->address : null) }}</textarea>
        @error('address')
         <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="example-status" class="col-md-2 control-label">Vendor Status</label>
    <div class="col-md-10">
        <select name="status" class="form-control">
            <option @if (old('status',isset($vendor->status) ? $vendor->status : null ) == 'active') selected @endif value="active">Active</option>
            <option  @if (old('status',isset($vendor->status) ? $vendor->status : null ) == 'inactive') selected @endif value="inactive">Inactive</option>
        </select>
    </div>
    @error('status')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
