<div class="mt-10 mb-10">
	<?php 
	//debug(json_encode( sizeof($results), JSON_PRETTY_PRINT)); exit;
		if((int)sizeof($results) > 0){
	?>
	<?php 
		foreach ($results as $result) {
	?>
		<div class="card shadow mb-10">
		    <div class="card-body">
		      <h6 class="mb-0"><a href="<?=BASE_URL?>articles/view/<?=$result->id?>/<?=$this->GenerateUrl($result->title)?>/"><?=$result->title?></a></h6>
		      <div class="tab-content" id="myTabContent">
		        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
		          <p>
		          	<?=preg_replace('/\\s\\s*$/', '', substr($result->description, 0, 200));?>
		          </p>
		        </div>
		      </div>
		    </div>
		</div>
	<?php 
		}
	?>
	<?php }else{?>
	<div class="text-center">
		<img src="<?=BASE_URL?>img/noresult.png" />
	</div>
	<hr/>
	<?php }?>
</div>