<div class="form-group">
    <label class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input type="text"  name="name" class="form-control" value="{{ old('name',isset($category->name) ? $category->name : null) }}" placeholder="Name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="example-description">Description</label>
    <div class="col-md-10">
        <textarea name="description" class="form-control" id="#" cols="30" rows="10">{{ old('description',isset($category->description)? $category->description : null) }}</textarea>
        @error('description')
         <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="example-status" class="col-md-2 control-label">Category Status</label>
    <div class="col-md-10">
        <select name="status" class="form-control">
            <option @if (old('status',isset($category->status) ? $category->status : null ) == 'active') selected @endif value="active">Active</option>
            <option  @if (old('status',isset($category->status) ? $category->status : null ) == 'inactive') selected @endif value="inactive">Inactive</option>
        </select>
    </div>
    @error('status')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
