<div class="form-group">
    <label for="example-status" class="col-md-2 control-label">Category</label>
    <div class="col-md-10">
        <select name="category_id" class="form-control">
            <option value="">--Select Category--</option>
            @foreach($categories as $category)
                <option @if(old('category_id',isset($product->category_id) ? $product->category_id : null)) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="example-status" class="col-md-2 control-label">Vendor</label>
    <div class="col-md-10">
        <select name="vendor_id" class="form-control">
            <option value="">--Select Vendor--</option>
            @foreach($vendors as $vendor)
                <option @if(old('vendor_id',isset($product->vendor_id) ? $product->vendor_id : null)) selected @endif value="{{ $vendor->id }}">{{ $vendor->name }}</option>
            @endforeach
        </select>
        @error('vendor_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input type="text"  name="name" class="form-control  border-danger" value="{{ old('name',isset($product->name) ? $product->name : null) }}" placeholder="Name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Brand Name</label>
    <div class="col-md-10">
        <input type="text"  name="brand" class="form-control" value="{{ old('brand',isset($product->brand) ? $product->brand : null) }}" placeholder="Brand">
        @error('brand')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label" for="example-description">Description</label>
    <div class="col-md-10">
        <textarea name="description"  class="form-control" id="editor1" cols="30" rows="10">{{ old('description',isset($product->description)? $product->description : null) }}</textarea>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Unit Price</label>
    <div class="col-md-10">
        <input type="number" min="1"  step=".01" value="{{ old('unit_price',isset($product->unit_price) ? $product->unit_price : null) }}" name="unit_price" class="form-control">
        @error('unit_price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Stock</label>
    <div class="col-md-10">
        <input type="number" min="1"  value="{{ old('stock',isset($product->stock) ? $product->stock : null) }}" name="stock" class="form-control">
        @error('stock')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="example-status" class="col-md-2 control-label">Product Status</label>
    <div class="col-md-10">
        <select name="status" class="form-control">
            <option value="">Slect Status</option>
            <option @if (old('status',isset($product->status) ? $product->status : null ) == 'active') selected @endif value="active">Active</option>
            <option  @if (old('status',isset($product->status) ? $product->status : null ) == 'inactive') selected @endif value="inactive">Inactive</option>
        </select>
        @error('status')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

@if(!isset($product))
    <div class="form-group">
        <label class="col-md-2 control-label">Product Image</label>
        <div class="col-md-10">
            <input type="file" class="form-control" multiple name="image[]">
        </div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
@endif
