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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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

<body class="login-page bg-gradient-secondary">
  <?= $this->fetch('content') ?>
    <!--footer class="footer has-cards">

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
  </footer-->
  <!--   Core JS Files   -->
<?=
  $this->Html->script([
    'core/jquery.min','core/popper.min','core/bootstrap.min','plugins/perfect-scrollbar.jquery.min',
    'plugins/bootstrap-switch','plugins/nouislider.min','plugins/moment.min','plugins/datetimepicker',
    'plugins/bootstrap-datepicker.min','argon-design-system.min'
  ])
?>
<?= $this->fetch('script') ?>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>
