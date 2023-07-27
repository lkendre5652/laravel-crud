<div class="container">
    <h2 class="text-success text-center">Add Form</h2>
    <form method="post" action="/create-action/" >
    {{ csrf_field() }}       
    <div class="mb-3">        
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email"  name="email" aria-describedby="email">
        @error('email')
        <div id="email" class="form-text text-warning">We'll never share your email with anyone else.</div>
        @enderror       
    </div>       
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password"  id="password">
        @error('password')
        <div id="email" class="form-text text-warning">We'll never share your password with anyone else.</div>
        @enderror       
    </div>  
    <button type="submit" class="btn btn-primary">Create Query</button>
    </form>
</div>