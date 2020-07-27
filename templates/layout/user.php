
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
    HelpDocs
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


</script>
</body>

</html>