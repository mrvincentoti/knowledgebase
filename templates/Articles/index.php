<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<!--div class="articles index content">
    <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Articles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('date_created') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $this->Number->format($article->id) ?></td>
                    <td><?= h($article->title) ?></td>
                    <td><?= $article->has('category') ? $this->Html->link($article->category->id, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                    <td><?= h($article->date_created) ?></td>
                    <td><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($article->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
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
              <input id="search-box" class="form-control search-box" placeholder="Help me with..." type="text">
            </div>
          </div>
          <?= $this->Form->end() ?>
        </div>
        <div id="result-box" class="col-lg-12">
          
        </div>
        <div class="col-lg-12">
            <?= $this->Flash->render() ?>
        </div>
        <div class="col-lg-6">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?=BASE_URL?>Categories/">Categories</a></li>
              <li class="breadcrumb-item active" aria-current="page">Articles</li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 pull-right">
            <a href="<?=BASE_URL?>articles/add/">
            <button class="btn btn-lg btn-success btn-icon-only rounded-circle">
              <i class="ni ni-fat-add"></i>
            </button>
            </a>
          <!--a href="<?=BASE_URL?>articles/add/" class="nav-link active" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="true">
            <button class="btn btn-lg btn-success btn-icon-only rounded-circle" type="button">
              <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
            </button>
          </a-->
        </div>
        <!--div class="col-lg-12 text-center mb-10">
          <p class="card-text">
            <span class="text-muted bold-text">DRass</span><br/>
            <span class="text-muted">10 Articles</span>
          </p>
          
        </div-->
        <?php foreach ($articles as $article): ?>
            <div class="col-lg-6 mb-10">
             <a href="<?=BASE_URL?>articles/view/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>/" class="a-link">
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                  <p><?=$article->title?></p>
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                      <p class="description">
                          
                      </p>
                    </div>

                    <p class="card-text mt-10">
                      <a href="<?=BASE_URL?>articles/view/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>/">
                          <img class="img-fluid" src="<?=BASE_URL?>img/update.png">
                          <span class="text-muted">
                            <!--?=sizeof($category->articles)?-->
                            Created
                          </span>
                          <span class="text-muted">
                            <?=$article->date_created?>
                           </span>
                       </a>
                       <span class="text-muted float-right">
                       <a href="<?=BASE_URL?>articles/edit/<?=$article->id?>/<?=$this->GenerateUrl($article->title)?>">
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
        <?php endforeach; ?>
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
                  <a href="#" class="btn btn-sm btn-danger pull-right upload-img-btn" data-toggle="modal" data-target="#myModal">upload image</a>
                  <!-- Input to browse your machine and select image to upload -->
                  <input type="file" id="image-input" style="display: none;">
                  <div class="form-group">
                    <?=
                        $this->Form->control('description', ['type'=>'textarea','id'=>'body','class'=>'form-control ckeditor','placeholder'=>'Decription', 'label'=>false]);
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

      <!-- Pop-up Modal to display image URL -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Click below to copy image url</h4>
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


<script type="text/javascript">
  CKEDITOR.replace('body');
</script>