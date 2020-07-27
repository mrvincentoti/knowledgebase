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
            <?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Article'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles view content">
            <h3><?= h($article->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($article->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $article->has('category') ? $this->Html->link($article->category->id, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($article->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($article->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Created') ?></th>
                    <td><?= h($article->date_created) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($article->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div-->

 <div class="section section-typography mt-10">
    <div class="container">
      <div class="row">
          <div class="col-lg-10 offset-md-1 mx-auto">
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
              <div id="richList" class="col-lg-12">
                
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?=BASE_URL?>">Category</a></li>
                  <li class="breadcrumb-item"><a href="<?=BASE_URL?>articles-in-category/<?=$article->category->id.'/'.$this->GenerateUrl($article->category->description)?>/"><?=$article->category->description?></a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?=$article->title?></li>
                </ol>
              </nav>
              <div class="card shadow">
                <div class="card-body" style="padding: 3rem;">
                    <h6 class="display-4"><?=$article->title?></h6>
                    <p class="card-text meta">
                        <img class="img-fluid img-circle" src="https://www.gravatar.com/avatar/a3cf489cf263578b4954268aef63f49c?d=mm&amp;s=150">
                      
                        <span class="text-muted">

                          Updated <?php echo date('d M, Y', strtotime($article->date_created));?>
                          by
                          <?=$article->user->fname.' '.$article->user->lname?>
                        </span>
                    </p>
                    <p>
                        <?=$article->description?>
                    </p>

                    <hr/>
                    <div class="text-center">
                      <small class="text-uppercase text-muted font-weight-bold">RELATED ARTICLES</small>
                      <ul class="nav nav-footer" style="display: block !important;">
                        <?php 
                          foreach ($related as $relate) {
                        ?>
                        <li class="nav-item">
                          <a href="<?=BASE_URL?>article-details/<?=$relate->id?>/<?=$this->GenerateUrl($relate->title)?>/" class="nav-link text-uppercase"><?=$relate->title?></a>
                        </li>
                        <?php 
                          }
                        ?>
                      </ul>
                          </div>
                      </div>
                    </div>
              <!--div class="card-footer text-center">
                <small class="text-uppercase text-muted font-weight-bold">Danger text</small>
                <ul class="nav nav-footer" style="display: block !important;">
                  <li class="nav-item">
                    <a href="" class="nav-link" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link" target="_blank">License</a>
                  </li>
                </ul>
              </div-->
          </div>
      </div>
    </div>
</div>
