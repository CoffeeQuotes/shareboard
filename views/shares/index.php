<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 mt-5">
                    <a class="btn btn-success btn-share" href="<?php ROOT_PATH;?>shares/add">Share Something</a>
                </div>
            </div>    
        </div>
    <?php endif; ?>  
    <?php 
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12/ $numOfCols;
    ?>  
    <?php foreach($viewmodel as $item) : ?>
        <div class="card col-md-<?php echo $bootstrapColWidth; ?> ml-4 mb-5 float-left">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item['title']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['create_date']; ?></h6>
            <p class="card-text"><?php echo substr($item['body'], 0, 100); ?>...</p>
            <a href="<?php echo $item['link'];?>" class="card-link" target="_blank">See</a>
          </div>
        </div>
    <?php endforeach; ?>    
</div>
