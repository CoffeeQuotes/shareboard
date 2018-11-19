<div class="col-12">
<div class="card">
  <h5 class="card-header">Share Something</h5>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
         <label for="title">Share Title</label>
         <input type="text" name="title" class="form-control"/>
      </div>
      <div class="form-group">
         <label for="title">Share Description</label>
         <Textarea  name="body" class="form-control"></Textarea>
      </div>
      <div class="form-group">
         <label for="title">Share Link</label>
         <input type="text" name="link" class="form-control"/>
      </div>
    <input type="submit"class="mr-2 btn btn-outline-success" name="submit" value="Share"/>
    <a class="btn btn-outline-danger" href="<?php echo ROOT_PATH; ?>shares">Cancel</a>
    </form>  
  </div>
</div>
</div>
