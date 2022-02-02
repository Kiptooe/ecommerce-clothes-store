<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Buyer Page </title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
<body>
                        <?php 
                        for($index=0;$index<count($categories);$index++){
                        echo'    
                        <div class="col-sm-6" style="margin:0 auto ;>
                          <div class="card shadow-sm border-success">
                            <div class="card-img-top text-center p-t-50">
                                <i class="fas fa-3x fa-drumstick-bite" style="color: #d65f0a;"></i>
                            </div>
                            <div class="card-body text-center">
                              <h4 class="card-title fw-bold">'.$categories[$index]['category_name'].'</h4>
                              <br>
                              <a href="showcategory-'.$categories[$index]['category_id'].'" class="btn btn-success text-dark">take me there</a>
                            </div>
                          </div>
                        </div>
                        ';
                        }?>
</body>    
</html>
