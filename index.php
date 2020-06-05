<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to AndreiBast's Photography Page</title>

    <!-------
    CSS LINKS
    -------->
        <link rel="stylesheet" href="css/style.css">
        <!--FONT-AWESOME --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--CSS-BOOTSTRAP--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-----------
    SCRIPT LINKS
    ------------>
        <!--JQUERY       --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--POPPER JS    --><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-  Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--BOOTSTRAP JS  --><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        

</head>
<body>


    <!-------------------------------------Top Section------------------------------------------------->
    <div class="jumbotron-fluid element-visible-lg-xl">
        <img id="banner" class="" src="modules/pictures/topsitebanner.jpg">
    </div>

    <div>
        <div>
            <?php include("modules/carousel.php"); ?>
        </div>
        <div class="element-visible-lg-xl">
            <?php include("modules/topbar.php"); ?> 
        </div>
        <div class="element-visible-from-sm element-visible-till-md">
            <?php include("modules/top-bar-mini/top-bar-mini.php"); ?>
            
        </div>

        <div class="element-visible-xs">
            <?php include("modules/top-bar-xs/top-bar-xs.php"); ?> 
        </div>
         
    </div>


    

    <!-------------------------------------Center Section------------------------------------------------->
    <div>
        <div class="zone red">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2.5 element-visible-lg-xl">
                        <?php include("modules/center-page-elements/sidebar-filters.php"); ?></div>
                    </div>
                    
                        <div class="zone green col-md">
                            <div class="element-visible-lg-xl"> 
                                <?php include("modules/center-page-elements/sort-navigation-large.php"); ?>
                            </div>

                            <div class="row">
                                <div class="zone blue col-md" style="margin: 15px 15px  15px  15px;">
                                    <?php include("modules/center-page-elements/image-gallery.php"); ?>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-------------------------------------Footer Section------------------------------------------------->
    <div> <!--the separate div will keep the footer and its properties separate-->
        <?php include("modules/footer.php"); ?>
    </div>  

    
    

    

</body>
</html>
