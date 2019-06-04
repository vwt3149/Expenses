<?php
$sql1 = 
"SELECT 
journal.user_id,
journal_has.journal_id,
img_path.img_path
FROM img_path
INNER JOIN journal_has
ON img_path.id = journal_has.img_path_id
INNER JOIN journal
ON journal.id = journal_has.journal_id
WHERE journal.user_id = '".$id."' 
GROUP BY journal_has.journal_id;
";

$sql =
"SELECT
journal.id,
journal.journal,
journal.user_id,
img_path,
DATE_FORMAT(created_at ,'%M ' '%D ' '%Y ' ' %H:' '%i ' )AS created_at,
DATE_FORMAT(created_at ,'%W')AS `day`
FROM img_path
INNER JOIN journal_has
ON img_path.id = journal_has.img_path_id
INNER JOIN journal
ON journal.id = journal_has.journal_id
WHERE journal.user_id = '".$id."'
";

            
            if($link){
                if(mysqli_select_db($link,$base)){
                    // $query = mysqli_query($link,$sql1);
                    $i = 0;
                    $query = mysqli_query($link,$sql);
                    if(mysqli_num_rows($query) > 0){
                        
                        while($row = mysqli_fetch_assoc($query)){

                            $images = ' 
                            <div class="carousel-item active">
                              <img src="uploads/'.$row['img_path'].'" class="d-block w-100" alt="..." >
                            </div>';
                            
                         
                            $journalId = $row['id'];
                            $journal = $row['journal'];
                            
                            echo  '<div class="card shadow border-left-primary col-xl-5 col-md-8 col-sm-8 mx-sm-auto mx-md-auto  mt-5 mb-5  mx-auto pt-4">
                            <div class="row ">
                                    <p class="card-text col-xl-12 ml-4"><small class="text-muted">ID : '.$journalId.'</small></p>
                            </div>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                             '.$images.'
                                            </div>
                                          
                                          </div>
                          
                            <div class="row  card-body ">  
                                <div class="col-xl-12">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['day'].'</h5>
                                        <p class="card-text col-xl-12">
                                            '.$journal.'
                                        </p>
                                        <p class="card-text"><small class="text-muted">'.$row['created_at'].'</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    }else{
                        '<div class="alert alert-danger">
                                <strong>Error message:</strong> No results!
                          </div>';
                    }
                } else {
                    echo '<div class="alert alert-danger">
                                <strong>Error message:</strong> Can not select database.
                          </div>';
                }
            } else {
                echo '<div class="alert alert-danger">
                            <strong>Error message:</strong> Can not connect to database.
                      </div>';
            }
    $card1 = '
    <div class="card shadow border-left-primary col-md-5  mt-5 mb-5 ml-auto mr-auto pt-4">
        <div class="row ">
                <p class="card-text col-md-12 ml-4"><small class="text-muted">ID : 32432432</small></p>
        </div>
        <div class="row  card-body ml">
            <div class="col-md-5 py-2 ">
                <img src="https://via.placeholder.com/150C/#dfdfdf " class="card-img" alt="...">
            </div>
            <!-- <div class="col-md-4 py-2">
                <img src="https://via.placeholder.com/150C/#dfdfdf " class="card-img" alt="...">
            </div>
            <div class="col-md-4 py-2">
                <img src="https://via.placeholder.com/150C/#dfdfdf " class="card-img" alt="...">
            </div> -->
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">Monday</h5>
                    <p class="card-text">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <p class="card-text"><small class="text-muted">16-06-2019</small></p>
                </div>
            </div>
        </div>
    </div>';

    $card2='<div class="card shadow border-left-primary col-xl-5  mt-5 mb-5 ml-auto mr-auto pt-4">
    <div class="row ">
            <p class="card-text col-xl-12 ml-4"><small class="text-muted">ID : 32432432</small></p>
    </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="uploads/Annotation 2019-03-21 152633.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://via.placeholder.com/150C/#dfdfdf" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://via.placeholder.com/150C/#dfdfdf" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  
                  </div>
  
    <div class="row  card-body ">  
        <div class="col-md-12">
            <div class="card-body">
                <h5 class="card-title">Monday</h5>
                <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit longer.
                </p>
                <p class="card-text"><small class="text-muted">16-06-2019</small></p>
            </div>
        </div>
    </div>
</div>';
 

?>