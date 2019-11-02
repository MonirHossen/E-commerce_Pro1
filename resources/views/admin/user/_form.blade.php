<div class="form-group">
    <label class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input type="text"  name="name" class="form-control" value="{{ old('name',isset($user->name) ? $user->name : null) }}" placeholder="Name">
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label" for="example-email">Email</label>
    <div class="col-md-10">
        <input type="email" @isset($user) disabled @endisset value="{{ old('email',isset($user->email) ? $user->email : null ) }}" id="example-email" name="email" class="form-control" placeholder="Email">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

@if(!isset($user))
    <div class="form-group">
        <label class="col-md-2 control-label">Password</label>
        <div class="col-md-10">
            <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Password">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Confirm Password</label>
        <div class="col-md-10">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        </div>
    </div>
@endif

<div class="form-group">
    <label class="col-md-2 control-label">Image</label>
    <div class="col-md-10">
        <input type="file" onchange="document.getElementById('user_image').src = window.URL.createObjectURL(this.files[0])" value="{{ old('image') }}" class="form-control" name="image">
        @if(isset($user) && $user->image != null)
            <img id="user_image" src="{{ asset($user->image) }}" width="20%" alt="">
        @endif
    </div>
    @error('image')
    <span class="text-danger">{{ $message }}</span>
    @enderror

</div><?php
