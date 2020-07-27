<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article) ?>
            <fieldset>
                <legend><?= __('Edit Article') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('date_created');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div-->

<!--div class="section section-typography mt-10">
    <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">
              <h3 class="display-3">Edit Article</h3>
          </div>
          <div class="col-lg-8 offset-md-2">
              <?= $this->Form->create($article) ?>
              <div class="row">
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
                        $this->Form->control('category_id', ['options' => $categories, 'class'=>'form-control', 'label'=>false,'empty'=>'Category']);
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
                <div class="col-md-12">
                  <?= $this->Form->button(__('Submit'),["class"=>"btn btn-success"]) ?>
                </div>
              </div>
            <?= $this->Form->end() ?>
          </div>
      </div>
    </div>
</div-->

<div class="section section-typography mt-10">
    <div class="container">
      <div class="row">
           <div class="card shadow">
            <div class="card-body cb">
              <div class="col-lg-10 offset-md-1 mb-3">
                <span class="h4 text-success">Edit Article</span>
                <span class="h4 text-success pull-right">
                  <a href="<?=BASE_URL?>articles/index">
                  <button class="btn btn-icon btn-3 btn-success" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                    <span class="btn-inner--text">List Articles</span>
                  </button>
                  </a>
                </span>
              </div>
              <div class="col-lg-10 offset-md-1">
                  <?= $this->Form->create($article, ['id'=>'myform']) ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <?=
                            $this->Form->control('title', ['class'=>'form-control','placeholder'=>'Title', 'label'=>false]);
                        ?>
                      </div>
                    </div>
                    <div class="col-md-12">
                    <a href="#" class="btn btn-sm btn-danger pull-right upload-img-btn" data-toggle="modal" data-target="#myModal">upload image</a>
                    <!-- Input to browse your machine and select image to upload -->
                    <input type="file" id="image-input" name="image-input" style="display: none;">
                    <!--?=
                      $this->Form->control('image-input', ['id','image-input','type'=>'file','style'=>'display: none;'])
                    ?-->
                    <div class="form-group">
                      <?=
                          $this->Form->control('description', ['type'=>'textarea','class'=>'form-control ckeditor','placeholder'=>'Decription', 'label'=>false,'rows'=>10]);
                      ?>
                    </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <?=
                            $this->Form->control('category_id', ['options' => $categories, 'class'=>'form-control', 'label'=>false,'empty'=>'Category']);
                        ?>
                      </div>
                    </div>
                    <!--div class="col-md-12">
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
                    </div-->
                    <div class="col-md-12">
                      <?= $this->Form->button(__('Submit'),["class"=>"btn btn-success"]) ?>
                    </div>
                  </div>
                <?= $this->Form->end() ?>
              </div>
            </div>
            </div>
          </div>  
    </div>
</div>
<!-- Pop-up Modal to display image URL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title-1" id="myModalLabel">Click below to copy image url</h4>
      </div>
      <div class="modal-body">
    <!-- returned image url will be displayed here -->
    <input 
      type="text" 
      id="post_image_url" 
      onclick="return copyUrl()" 
      class="form-control"
      >
    <p id="feedback_msg" style="color: green; display: none;"><b>Image url copied to clipboard</b></p>
      </div>
    </div>
  </div>
</div>




