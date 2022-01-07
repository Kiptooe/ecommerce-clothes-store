<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style1.css">
    </head>
<body>
                        <?php 
                        for($index=0;$index<count($subcategories);$index++){
                        echo'    
                        <div class="col-sm-6">
                          <div class="card shadow-sm border-success">
                            <div class="card-img-top text-center p-t-50">
                                <i class="fas fa-3x fa-drumstick-bite" style="color: #d65f0a;"></i>
                            </div>
                            <div class="card-body text-center">
                              <h4 class="card-title fw-bold">'.$subcategories[$index]['subcategory_name'].'</h4>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="showsubcategory-'.$subcategories[$index]['subcategory_id'].'" class="btn btn-success text-dark">take me there</a>
                            </div>
                          </div>
                        </div>
                        ';
                        }?>
</body>    
</html>
