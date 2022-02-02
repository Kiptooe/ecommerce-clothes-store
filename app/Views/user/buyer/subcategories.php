<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style1.css">
    </head>
<body>
                        <?php 
                        for($index=0;$index<count($subcategories);$index++){
                        echo'    
                        <div class="col-sm-6" style="margin: 0 auto ;">
                          <div class="card shadow-sm border-success">
                            <div class="card-img-top text-center p-t-50">
                                <i class="fas fa-3x fa-drumstick-bite" style="color: #d65f0a;"></i>
                            </div>
                            <div class="card-body text-center">
                              <h4 class="card-title fw-bold">'.$subcategories[$index]['subcategory_name'].'</h4>
                              <br>
                              <a href="showsubcategory-'.$subcategories[$index]['subcategory_id'].'" class="btn btn-success text-dark">take me there</a>
                            </div>
                          </div>
                        </div>
                        ';
                        }?>
</body>    
</html>
