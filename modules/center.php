
<?php include("modules/navbar.php");?>


<div class="">
    
    <!-------------------- 
    1.SIDEBAR SECTION
    ---------------------->
    <div class="container-main-center">
        <?php include("modules/sidebar.php"); ?> 
    </div>

    
    <!-------------------- 
    2.IMAGES SECTION
    ---------------------->
    <div class=" red container-main-center2">
            <!-- include("modules/pictures.php");  -->
    </div>
</div>

   
<!-------------------- 
3.PAGINATION SECTION
---------------------->
<div class="container">
    <div class="pagination-orientation">
        <div class="row pagination-orientation">
            <nav aria-label="...">
                <ul class="pagination ">

                    <select class="form-control">
                        <option class="disabled">no.pic</option>
                        <option>12</option>
                        <option>24</option>
                        <option>48</option>
                        <option>96</option>
                    </select>

                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    
                    <li class="page-item active" aria-current="page">
                    <span class="page-link">
                        3
                        <span class="sr-only">(current)</span>
                    </span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

