<div class="col-12 mt-5">
<div class="card float-right mt-5" style="width: 18rem; background-color: rgba(0, 0, 0, 0.6); color: #fff;">
  <h5 class="card-header">Login Now</h5>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
         <label for="title">Email</label>
         <input type="text" class="form-control" name="email">
      </div>
      <div class="form-group">
         <label for="title">Password</label>
         <input type="password" name="password" class="form-control"/>
      </div>
    <input type="submit"class="mr-2 btn btn-outline-success" name="submit" value="Login Now"/>
    </form>  
  </div>
</div>
</div>
