  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4 class="display-4 mb-0 mt-10">All Categories</h4>
        </div>


      </div>
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
        <?php 
           //debug(json_encode( $cats, JSON_PRETTY_PRINT)); exit;
           foreach ($cats as $cat) {
        ?>
        <div class="col-lg-4 mb-10">
         <!--a href="<?=BASE_URL?>category/1/drass/" class="a-link"-->
          <div class="card shadow">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <p class="text-center">
                    <a href="<?=BASE_URL?>articles-in-category/<?=$cat->id?>/<?=$this->GenerateUrl($cat->description)?>/" class="a-link bold-text"><?=$cat->description?></a>
                </p>
               <p class="card-text mt-10">
                  <a href="<?=BASE_URL?>category/<?=$cat->id?>/<?=$this->GenerateUrl($cat->description)?>/">
                      <img class="img-fluid" src="<?=BASE_URL?>img/article.png">
                      <span class="text-muted">
                        <?=sizeof($cat->articles)?>
                      </span>
                      <span class="text-muted">
                        Articles
                       </span>
                   </a>
                   <!--span class="text-muted float-right">
                    <?= 
                        $this->Html->image('edit.png', array('height' => '100', 'width' => '100','data-toggle'=>'modal','data-target'=>'#modal-edit','data-article-id'=>$cat->id, 'data-article-text'=>$cat->description));
                    ?>
                   </span-->
                </p>
              </div>
            </div>
          </div>
         <!--/a-->
        </div>
        <?php 
          }
        ?>
      </div><!--/end row-->
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
      <!--/end row-->
  </div>