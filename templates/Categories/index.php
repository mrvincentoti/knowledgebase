<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<!--div class="categories index content">
    <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->id) ?></td>
                    <td><?= h($category->description) ?></td>
                    <td><?= $this->Number->format($category->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div-->
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4 class="display-4 mb-0 mt-10">All Categories</h4>
        </div>
        <div class="col-lg-6 text-right">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="true">
              <button class="btn btn-lg btn-success btn-icon-only rounded-circle" type="button" data-toggle="modal" data-target="#modal-notification">
                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
              </button>
            </a>
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
              
              <input id="search-box" class="form-control search-box" placeholder="Help me with..." type="text">
                <!--?php
                    echo $this->Form->control('searchText',['class'=>'form-control search-box','placeholder'=>'Help me with...', 'label'=>false]);
                ?-->
            </div>
          </div>
          <?= $this->Form->end() ?>
        </div>
        <div id="result-box" class="col-lg-12">
          
        </div>
        <div class="col-lg-12">
            <?= $this->Flash->render() ?>
        </div>
        <?php 
           foreach ($categories as $category) {
        ?>
        <div class="col-lg-4 mb-10">
         <!--a href="<?=BASE_URL?>category/1/drass/" class="a-link"-->
          <div class="card shadow">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <p class="text-center">
                    <a href="<?=BASE_URL?>category/<?=$category->id?>/<?=$this->GenerateUrl($category->description)?>/" class="a-link bold-text"><?=$category->description?></a>
                </p>
               <p class="card-text mt-10">
                  <a href="<?=BASE_URL?>category/<?=$category->id?>/<?=$this->GenerateUrl($category->description)?>/">
                      <img class="img-fluid" src="<?=BASE_URL?>img/article.png">
                      <span class="text-muted">
                        <?=sizeof($category->articles)?>
                      </span>
                      <span class="text-muted">
                        Articles
                       </span>
                   </a>
                   <span class="text-muted float-right">
                    <?= 
                        $this->Html->image('edit.png', array('height' => '100', 'width' => '100','data-toggle'=>'modal','data-target'=>'#modal-edit','data-article-id'=>$category->id, 'data-article-text'=>$category->description));
                    ?>
                   </span>
                </p>
              </div>
            </div>
          </div>
         <!--/a-->
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
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-success">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">New Category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?= $this->Form->create(null, ['url' => ['controller' => 'Categories', 'action' => 'add']]) ?>
            <div class="modal-body">
              <div class="py-3">
                <!--i class="ni ni-bell-55 ni-3x"></i-->
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                      <?php
                        echo $this->Form->control('description', ['class'=>'form-control']);
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

<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-content bg-gradient-warning">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-notification">Edit</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <?= $this->Form->create(null, ['url' => ['controller' => 'Categories', 'action' => 'edit']]) ?>
            <div class="modal-body">
              <div class="py-3">
                <!--i class="ni ni-bell-55 ni-3x"></i-->
                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                      <?php
                        echo $this->Form->control('description', ['class'=>'form-control']);
                      ?>
                      <input type="hidden" name="id"/>
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
