  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-7" style="margin-top: 16px;">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mb-3">
                <img src="<?=BASE_URL?>img/logo-3.jpg" style="width: 100%;"/>
                <small>Sign in</small>
              </div>
            </div>
            <div class="card-body bg-white px-lg-5 py-lg-5">
              <!--form role="form"-->
              <?= $this->Flash->render() ?>
              <?= $this->Form->create() ?>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <?= $this->Form->control('username', ['required' => true, 'class'=>'form-control','placeholder'=>'Username', 'label'=>false]) ?>
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <?= $this->Form->control('password', ['required' => true, 'class'=>'form-control','placeholder'=>'Password', 'label'=>false]) ?>
                  </div>
                </div>
                
                <div class="text-center">
                  <!--button type="button" class="btn btn-danger my-4">Sign in</button-->
                  <?= $this->Form->submit(__('Sign in'),['class'=>'btn btn-danger my-4'])?>
                </div>
              <!--/form-->
              <?= $this->Form->end() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>