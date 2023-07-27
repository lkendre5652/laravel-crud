<div class="container">
    <form method="post" action="/update-action/" >
    {{ csrf_field() }}    
    {{ $data[0]['password']}}       
    <div class="mb-3">
        <input type="hidden" name='id' value="{{ $data[0]['id']}}" />
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" value="{{ $data[0]['name']}}" name="email" aria-describedby="email">
        @error('email')
        <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        @enderror       
    </div>       
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" value="{{ $data[0]['password']}}"  id="password">
    </div>  
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>