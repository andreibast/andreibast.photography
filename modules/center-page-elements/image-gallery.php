<!DOCTYPE html>
<html lang="en">
<head>
    <!-------
    CSS LINKS
    -------->
        <!--CSS-CUSTOM  --><link rel="stylesheet" type="text/css" href="css/style-image-gallery.css">
        <!--CSS-RATEYO  --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <!--CSS-FANCYBOX--><link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    
    <!-----------
    SCRIPT LINKS
    ------------>
        <!--CUSTOM JQUERY--><script src="js/image-gallery.js"></script>
        <!--RATEYO       --><script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <!--FANCYBOX     --><script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>
<body>
                
                <div class="container-fluid category_container">
                        <p class="category_item" id="all">ALL</p>
                        <p class="category_item" id="animals">Animals</p>
                        <p class="category_item" id="cities">Cities</p>
                        <p class="category_item" id="grafitti">Grafitti</p>
                        <p class="category_item" id="macro">MACRO</p>
                        <p class="category_item" id="museum">Museums</p>
                </div>
    
                <div class="container-fluid pictures-container-grid block_container" style="margin-bottom: 20px;">
                    
                    <!-----------------------------------------CATEGORY 1: ANIMALS------------------------------------------->
                    <?php include("modules/center-page-elements/image-gallery-parts/animals.php"); ?>

                    <!-----------------------------------------CATEGORY 2: French Cities------------------------------------->
                    <?php include("modules/center-page-elements/image-gallery-parts/cities.php"); ?>
                    
                    <!-----------------------------------------CATEGORY 3: Grafitti------------------------------------------>
                    <?php include("modules/center-page-elements/image-gallery-parts/grafitti.php"); ?>
                    
                    <!-----------------------------------------CATEGORY 4: MACRO--------------------------------------------->
                    <?php include("modules/center-page-elements/image-gallery-parts/macro.php"); ?>
                    
                    <!-----------------------------------------CATEGORY 5:  MUSEUMS------------------------------------>
                    <?php include("modules/center-page-elements/image-gallery-parts/museums.php"); ?>
                    
                </div>
                  
</body>
</html>