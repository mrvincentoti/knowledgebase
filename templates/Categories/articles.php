  <div class="section section-typography mt-10">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         <?= $this->Form->create(null) ?>
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              </div>
              
              <input id="searchText" class="form-control" placeholder="Help me with..." type="text">
                <!--?php
                    echo $this->Form->control('searchText',['class'=>'form-control search-box','placeholder'=>'Help me with...', 'label'=>false]);
                ?-->
              <div class="input-group-prepend">
                <span class="input-group-text" style="border-right: 1px solid #cad1d7; border-left: none; border-radius: 0.25rem; margin-left: 0;border-top-left-radius: 0; border-bottom-left-radius: 0;">
                <img id="loader" src="<?=BASE_URL?>img/3.gif" class="lds-dual-ring hidden"/>
                </span>
              </div>
            </div>
          </div>
          <?= $this->Form->end() ?>
        </div>
        <div id="richList" class="col-lg-12">
          
        </div>
        <div class="col-lg-12">
            <?= $this->Flash->render() ?>
        </div>
        <div class="col-lg-6">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=BASE_URL?>">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?=$category->description?></li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 text-right">
          <!--a href="<?=BASE_URL?>articles/add/">
            <button class="btn btn-lg btn-success btn-icon-only rounded-circle">
              <i class="ni ni-fat-add"></i>
            </button>
          </a-->
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
         <a href="<?=BASE_URL?>article-details/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>/" class="a-link">
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
                  <!--span class="text-muted" style="float: right;">
                    <a class="pull-right" href="<?=BASE_URL?>articles/edit/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>">
                      <?= 
                          $this->Html->image('edit.png', array('height' => '100', 'width' => '100','data-toggle'=>'modal','data-target'=>'#modal-edit','data-article-id'=>$article->id, 'data-article-text'=>$article->description));
                      ?>
                    </a>
                  </span-->
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
      <div class="row">
        <div class="col-lg-12">
          <nav class="paginator" aria-label="Page navigation example">
              <ul class="pagination">
                  <!--?= $this->Paginator->first('<< ' . __('')) ?-->
                  <?= $this->Paginator->prev('<i class="fa fa-angle-left"></i>', array('escape' => false,)) ?>
                  <?= $this->Paginator->numbers() ?>
                  <?= $this->Paginator->next('<i class="fa fa-angle-right"></i>', array('escape' => false,)) ?>
                  <!--?= $this->Paginator->last(__('') . ' >>') ?-->
              </ul>
              <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
          </nav>
        </div>
      </div>
    </div>
  </div>
