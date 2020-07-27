  <div class="section section-typography mt-10">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              </div>
              <input class="form-control search-box" placeholder="Help me with..." type="text">
            </div>
          </div>
        </div>
        <div class="col-lg-12">
            <?= $this->Flash->render() ?>
        </div>
        <div class="col-lg-6">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=BASE_URL?>categories/">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$category->description?></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 text-right">
          <!--a href="<?=BASE_URL?>articles/add/">
          <button class="btn btn-icon btn-3 btn-primary pull-right" type="button">
            <span class="btn-inner--text"></span>
            <span class="btn-inner--icon">ADD<i class="ni ni-fat-add"></i></span>
          </button>
          </a-->
          <!--a class="nav-link active" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="true">
            <button class="btn btn-lg btn-success btn-icon-only rounded-circle" type="button" data-toggle="modal" data-target="#modal-add-art">
              <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            </button>
          </a-->
          <a href="<?=BASE_URL?>articles/add/">
            <button class="btn btn-lg btn-success btn-icon-only rounded-circle">
              <i class="ni ni-fat-add"></i>
            </button>
          </a>
        </div>
        <div class="col-lg-12 text-center mb-10">
          <p class="card-text">
            <span class="text-muted bold-text"><?=$category->description?></span><br/>
            <span class="text-muted"><?=sizeof($articles)?> Articles</span>
          </p>
        </div>
        <?php 
           foreach ($articles as $article) {
        ?>
        <div class="col-lg-6 mb-10">
         <a href="<?=BASE_URL?>articles/view/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>/" class="a-link">
          <div class="card shadow">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
              <p class="bold-text"><?=$article->title?></p>
                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                  <p class="description">
                    
                  </p>
                </div>

               <p class="card-text">
                    <img class="img-fluid" src="<?=BASE_URL?>img/update.png">
                  <span class="text-muted">
                    Last updated
                  </span>
                  <span class="text-muted">
                    <?=$article->date_created?>
                  </span>
                  <span class="text-muted" style="float: right;">
                    <a class="pull-right" href="<?=BASE_URL?>articles/edit/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>">
                      <?= 
                          $this->Html->image('edit.png', array('height' => '100', 'width' => '100','data-toggle'=>'modal','data-target'=>'#modal-edit','data-article-id'=>$article->id, 'data-article-text'=>$article->description));
                      ?>
                    </a>
                  </span>
                </p>
              </div>
            </div>
          </div>
         </a>
        </div>
        <?php 
          }
        ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-add-art" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document" style="max-width: 850px !important;">
      <div class="modal-content bg-gradient-success">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">New Article</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?= $this->Form->create(null, ['url' => ['controller' => 'Articles', 'action' => 'add']]) ?>
            <div class="modal-body">
              <div class="py-3">
                <!--i class="ni ni-bell-55 ni-3x"></i-->
                <!--div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                      <?php
                          echo $this->Form->control('title');
                          echo $this->Form->control('description');
                          echo $this->Form->control('category_id', ['options' => $categories, 'default'=>$category->id]);
                          echo $this->Form->control('date_created');
                          echo $this->Form->control('user_id', ['options' => $users]);
                          echo $this->Form->control('status');
                      ?>
                    </div>
                </div-->
                                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('title', ['class'=>'form-control','placeholder'=>'Title', 'label'=>false]);
                    ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('description', ['type'=>'textarea','class'=>'form-control','placeholder'=>'Decription', 'label'=>false]);
                    ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('category_id', ['options' => $categories, 'default'=>$category->id, 'class'=>'form-control', 'label'=>false,'empty'=>'Category']);
                    ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('date_created', ['class'=>'form-control','placeholder'=>'Date Created', 'label'=>false]);
                    ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('user_id', ['options' => $users, 'class'=>'form-control', 'label'=>false,'empty'=>'User']);
                    ?>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <?=
                        $this->Form->control('status', ['class'=>'form-control','label'=>false]);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <?= $this->Form->button(__('Submit'),['class'=>'btn btn-white']) ?>
              <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Cancel</button>
            </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
</div>