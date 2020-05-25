<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-------
    CSS LINKS
    -------->
        <!--FONT-AWESOME --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--CSS-BOOTSTRAP--><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!--CSS-CUSTOM  --><link rel="stylesheet" type="text/css" href="../../css/style-image-gallery.css">
        <!--CSS-RATEYO  --><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
        <!--CSS-FANCYBOX--><link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
       
    
    
    <!-----------
    SCRIPT LINKS
    ------------>
    
        <!--JQUERY       --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--CUSTOM JQUERY--><script src="../../js/image-gallery.js"></script>
        <!--RATEYO       --><script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <!--FANCYBOX     --><script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    
        <!--POPPER JS    --><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-  Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <!--BOOTSTRAP JS  --><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>
<body>
                
                <div class="container-fluid category_container">
                        <p class="category_item" id="all">ALL</p>
                        <p class="category_item" id="jacket-m">Jacket Man</p>
                        <p class="category_item" id="coat">Coat</p>
                        <p class="category_item" id="shoes">Shoes</p>
                        <p class="category_item" id="man">T-Shirt Man</p>
                        <p class="category_item" id="woman">T-Shirt Woman</p>
                </div>
    
                <div class="container-fluid pictures-container-grid block_container" style="margin-bottom: 20px;">
                    
                    <!-----------------------------------------CATEGORY 1: JACKET MAN-------------------------------------------------->

                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item jacket-m">
                        <div class="hashtag-block">
                            <div class="float-left hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="float-right hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                        <img id="pic1" src="../center-page-elements/image-gallery-pictures/man-jacket-1.jpg" class="card-img card-img-radius" alt="">
                        <div class="overlay">
                            <div>
                                <div id="rateYo1"  data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks1" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a  data-fancybox="images" href="../center-page-elements/image-gallery-pictures/man-jacket-1.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>                                   
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-1" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item jacket-m">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic2" src="../center-page-elements/image-gallery-pictures/man-jacket-2.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo2" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks2" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/man-jacket-2.jpg" ><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-2" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------CATEGORY 2: COATS------------------------------------------------------>
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item coat">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic3" src="../center-page-elements/image-gallery-pictures/coat-1.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo3" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks3" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/coat-1.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-3" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item coat">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic4" src="../center-page-elements/image-gallery-pictures/coat-2.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo4" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks4" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/coat-2.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-4" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-----------------------------------------CATEGORY 3: SHOES---------------------------------------------->
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item shoes">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic5" src="../center-page-elements/image-gallery-pictures/jacket-1.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo5" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks5" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/jacket-1.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-5" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item shoes">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic6" src="../center-page-elements/image-gallery-pictures/jacket-2.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo6" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks6" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/jacket-2.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-6" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-----------------------------------------CATEGORY 4: T-SHIRT MAN--------------------------------------------->
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item man">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic7" src="../center-page-elements/image-gallery-pictures/man-1.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo7" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks7" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/man-1.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-7" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item man">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic8" src="../center-page-elements/image-gallery-pictures/man-2.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo8" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks8" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/man-2.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-8" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------------------CATEGORY 5:  T-SHIRT WOMAN------------------------------------------>
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item woman">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic9" src="../center-page-elements/image-gallery-pictures/tshirt-1.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo9" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks9" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/tshirt-1.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-9" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="mydiv" class="card card-radius zone bg-dark text-white clothes_item woman">
                        <div class="hashtag-block">
                            <div class="hashtag-left">
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top" >#firstTag</a>
                                <a href="#" data-toggle="tooltip" title="Click to sort by tag name!" data-placement="top">#secondTag</a>
                            </div>
                                <div class="hashtag-right" data-toggle="tooltip" title="Average user rating" data-placement="top">Average rating: <span>4.7</span></div>
                        </div>
                      <img id="pic10" src="../center-page-elements/image-gallery-pictures/tshirt-2.jpg" class="card-img card-img-radius" alt="">
                       <div class="overlay">
                            <div>
                                <div id="rateYo10" data-toggle="tooltip" title="Click to confirm your score!" data-placement="top"></div>
                                <p id="thanks10" class="thanks-message"></p>
                            </div>                            
                            <div>
                                <div class="align-bottom float-left">
                                   <div class="gallery">
                                        <a data-fancybox="images" href="../center-page-elements/image-gallery-pictures/tshirt-2.jpg"><button data-toggle="tooltip" title="Expand" data-placement="top"  class="btn btn-light"><i class="fa fa-expand"></i></button></a>
                                    </div>
                                </div>                       
                                <div class="align-bottom float-right">
                                    <button id="download-button-10" data-toggle="tooltip" title="Semi-Download(front-end)" data-placement="left" class="btn btn-light"><i class="fa fa-download" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                  
</body>
</html>