

@extends('layouts.master1')

@section('gallery')
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
@stop

@section('content')
<style>
        .gallery:hover
    {
        -moz-box-shadow: 0 0 10px #ccc;
        -webkit-box-shadow: 0 0 10px #ccc;
        box-shadow: 0 0 10px #ccc;
    -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
    }
</style>


    <!-- Navigation -->
               <div class="col-md-12">
                <h2>CHRISTIPIDELIS Galleries</h2>
            </div>

    <!-- Page Content -->
    <div class="container">

      <div class="row text-center text-lg-left">

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/1.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/1.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/2.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/2.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>          
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/3.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/3.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/4.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/4.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/5.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/5.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/6.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/6.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/7.png">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/7.png" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/8.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/8.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/9.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/9.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/10.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/10.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#myModal" data-toggle="modal" data-img-url="/images/gallery/11.jpg">
            <img class="img-fluid img-thumbnail gallery" src="/images/gallery/11.jpg" style="height: 200px; width: 400px; margin-top: 30px" alt="">
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </a>
        </div>

      </div>

    </div>
    <!-- /.container -->

                  <!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<button type="button" class="close" data-dismiss="modal"><b><font color="white">X</font></b></button>
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">

            <div class="modal-body text-center">
                <center><img class="img-responsive" src="#"/></center>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$('a').click(function(e) {
    $('#myModal img').attr('src', $(this).attr('data-img-url')); 
});
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




@stop
