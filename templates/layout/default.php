<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!--DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="/"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" href="https://api.cakephp.org/4/">API</a>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html-->

<!--
=========================================================
* Argon Design System - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (http://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=BASE_URL?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=BASE_URL?>img/favicon.ico">
  <title>
    Layer3Cloud | Knowledgebase
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

  <?=
    $this->Html->css([
      'nucleo-icons', 'nucleo-svg', 'font-awesome','nucleo-svg','argon-design-system','custom'
    ])
  ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="<?=BASE_URL?>">
        <img src="<?=BASE_URL?>img/brand/logo-3.jpg">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="<?=BASE_URL?>">
                <img src="<?=BASE_URL?>img/brand/logo-3.jpg">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
          <li class="nav-item dropdown">
            <a href="https://layer3.cloud" class="nav-link" data-toggle="dropdown" role="button">
              <i class="ni ni-bold-left"></i>
              <span class="nav-link-inner--text">Back Home</span>
            </a>
          </li>
        </ul>
        <!--ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item dropdown">
            <a class="nav-link nav-link-icon" href="<?=BASE_URL?>users/logout/" data-toggle="dropdown">
            
              <img src="<?=BASE_URL?>img/brand/user.svg" style="width: 30px;"/>
              <span class="nav-link-inner--text d-lg-none">LOGOUT</span>
            </a>
          </li>
        </ul-->
        <!--ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <img src="<?=BASE_URL?>img/brand/user.svg" style="width: 30px;"/>
              <span class="nav-link-inner--text"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-custom">
              <div class="dropdown-menu-inner">
                <a href="<?=BASE_URL?>users/logout/" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="ni ni-key-25"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">LOGOUT</h6>
                  </div>
                </a>
              </div>
            </div>
          </li>
        </ul-->
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="wrapper">
  <?= $this->fetch('content') ?>
  </div>


  <footer class="footer has-cards">

    <div class="container">

      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-12 text-center">
          <div class="copyright">
            Powered By<a href="https://layer3.cloud" target="_blank"> Layer3 Cloud</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
  </div>

<?=
  $this->Html->script([
    'core/jquery.min','core/popper.min','core/bootstrap.min','plugins/perfect-scrollbar.jquery.min',
    'plugins/bootstrap-switch','plugins/nouislider.min','plugins/moment.min','plugins/datetimepicker',
    'plugins/bootstrap-datepicker.min','argon-design-system.min','custom','ckeditor/ckeditor'
  ])
?>
<?= $this->fetch('script') ?>
<!-- CKEditor -->
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script-->
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
  <script type="text/javascript">
    //triggered when modal is about to be shown
    $('#modal-edit').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var Id = $(e.relatedTarget).data('article-id');
        var text = $(e.relatedTarget).data('article-text');

        //populate the textbox
        $(e.currentTarget).find('input[name="id"]').val(Id);
        $(e.currentTarget).find('input[name="description"]').val(text);
    });
</script>
<script type="text/javascript">
  // initialize ckeditor
//CKEDITOR.replace('body');

// Javascript function to copy image url to clipboard from modal
function copyUrl() {
  var copyText = document.getElementById("post_image_url");
  copyText.select();
  document.execCommand("Copy");

  // replace url with confirm message 
  $('#post_image_url').hide(1000);
  $('#feedback_msg').show();

  // hide modal after 2 seconds
  setTimeout(function(){
    $('#myModal').modal('hide');
    $('#feedback_msg').hide();
    $('#post_image_url').show();
  }, 2000);
}

$(document).ready(function(){
  // When user clicks the 'upload image' button
  $('.upload-img-btn').on('click', function(){
    
    // Add click event on the image upload input
    // field when button is clicked
    $('#image-input').click();


    $(document).on('change', '#image-input', function(e){

      // Get the selected image and all its properties
      var image_file = document.getElementById('image-input').files[0];

      // Initialize the image name
      var image_name = image_file.name;
      var csrf = document.querySelector('[name="_csrfToken"]').value;
      //console.log(csrf);return;

      
      // determine the image extension and validate image
      var image_extension = image_name.split('.').pop().toLowerCase();
      if (jQuery.inArray(image_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert('That image type is not supported');
        return;
      } 

      // Get the image size. Validate size
      var image_size = image_file.size;
      if (image_size > 3000000) {
        alert('The image size is too big');
        return;
      } 

      //console.log(image_file);
      // Compile form values from the form to send to the server
      // In this case, we are taking the image file which 
      // has key 'post_image' and value 'image_file'
      var form_data = new FormData();
      form_data.append('post_image', image_file);
      form_data.append('uploading_file', 1);
      form_data.append('_csrfToken', csrf);
      //console.log(form_data);return;

      var post = {
        post_image: image_file,
        uploading_file: 1,
        _csrfToken: csrf
      };
      //post.post_image = image_file;
      //post.uploading_file = 1;
      //post._csrfToken = csrf;
      //console.log(post);return;


      // upload image to the server in an ajax call (without reloading the page)
      $.ajax({
        //console.log(form_data),
        url: '../saveimage/',
        method: 'POST',
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend : function(){
          //setRequestHeader('X-CSRF-Token', csrf);
        },
        success : function(data){
          console.log(data);
          // how the pop up modal
          $('#myModal').modal('show');

          // the server returns a URL of the uploaded image
          // show the URL on the popup modal
          $('#post_image_url').val(data);
        }
      });


      /*var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = function()
      {
          if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
          {
              console.log(xmlHttp.responseText);
              //$('#myModal').modal('show');
              //$('#post_image_url').val(xmlHttp.responseText);
          }
      }
      xmlHttp.open("post", "../saveimage/"); 
      xmlHttp.send(form_data); */
      /*$.ajax({
        method: 'post',
        url : "<?php echo $this->Url->build(['controller'=>'Articles', 'action'=>'saveimage']);?>",
        data: { post_data: post },
        success: function(response){
          //$('.table-content').html(response);
          console.log(response);
        }
      });*/

    });

  });
});
</script>
</body>

</html>