<?php include 'inc/header.inc.php';?>

    
            
<div class="container" style="padding-top:70px;">
 <div class="row">
  <div class="col-md-10"><!--col for the outer most-->
    <div class="row">
        <div class="col-md-8">
            <div class="">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/mc/mc2.jpeg" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-md-8">
                        <h1><a href="" target=""> MC NTALE</a></h1>
                        <h5 class=""><i class="fa fa-phone"></i> 0713366303</h5>
                        <h5 class=""><i class="fa fa-envelope"></i> ntale@gmail.com</h5>
                        <h5 class=""><i class="fa fa-globe"></i> www.mcs.com</h5> 
                        <button type="button" class="btn btn-labeled btn-info" href="#">
                        <span class="btn-label"><i class="fa fa-thumbs-up"></i></span>like</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--start photo section-->
<div class="row">

    <div class="col-md-12">
        <h3 class="page-header">My Photo Gallery</h3>
    
            <div class="col-md-3 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/mc/mc1.jpg" alt="Short alt text">
            </a>
        </div>
            <div class="col-md-3 thumb">
             <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/mc/mc1.jpg" alt="Short alt text">
            </a>
        </div>
            <div class="col-md-3 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/mc/mc1.jpg" alt="Short alt text">
            </a>
        </div>
        <div class="col-md-3 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="img/mc/mc1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/mc/mc1.jpg" alt="Short alt text">
            </a>
        </div>
</div>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div><!--end col10-->
<div class="col-md-2"><!--col for the outer most-->    
</div><!--end col2-->
</div><!--end row for the outer most-->  
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/userprofile.js"></script>
