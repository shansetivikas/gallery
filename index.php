<?php include("includes/header.php"); ?>
<?php


$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 2;
$items_total_count = Photo::count_all();

/*$photos = Photo::find_all();*/


$paginate = new Paginate($page, $items_per_page, $items_total_count);
$sql = "SELECT * FROM photos ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";

$photos = Photo::find_by_query($sql);

?>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

      <div class="thumbnails row">
            <?php foreach($photos as $photo):?>
                
              
                   <div class="col-xs-6 col-md-3">
                      <a class="thumbnail" href="photo.php?id=<?php echo $photo->id;?>">
                         <img src="admin/<?php echo $photo->picture_path();?>" alt="" class="home_page_photo img-responsive">
                      </a>
                   </div>
                
                
            <?php endforeach;?>
          </div>
                
                <div class="row">
                    <ul class="pager">
                        <?php
                          $a = $paginate->page_total;
                           $b = ceil($paginate->items_total_count/$paginate->items_per_page);
                           if($paginate->page_total() > 1){
                             if($a<=$b){
                                    echo "<li class='next'><a href='index.php?page={$paginate->next()}'>Next</a></li>";
                                }
                               if($paginate->has_previous()){
                                    echo "<li class='previous'><a href='index.php?page={$paginate->next()}'>Next</a></li>";
                                }
                              }
                        ?>
                       
                    
                    </ul>
                
                </div>
         

            </div>




            <!-- Blog Sidebar Widgets Column -->
           <!-- <div class="col-md-4">

            
                 <?php/* include("includes/sidebar.php");*/ ?>



        </div>-->
        <!-- /.row -->

        <?php include("includes/footer.php"); ?>
