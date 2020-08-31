<section class="ftco-section ftco-no-pt ftco-featured-model">
    <div class="container-fluid">
    <div class="row">
<?php
    $data = $this->view_data['data'];
    foreach ($data as $value) {
?>
        <div class="col-md-6 col-lg-3">
            <div class="model-entry">
                <div class="model-img" style="background-image: url(/images/<?= $value->image?>);">
                    <div class="name text-center">
                        <h3><a href="/home/modelSingle/<?=$value->id?>"><?=$value->name?></a></h3>
                    </div>
                    <div class="text text-center">
                        <?php $name = explode(" ",$value->name)?>
                        <h3><a href="/home/modelSingle/<?=$value->id?>"><?php if(isset($name[0])){ echo $name[0];}?><br><span><?php if(isset($name[1])){ echo $name[1];}?></span></a></h3>
                        <div class="d-flex models-info">
                            <div class="box">
                                <p>Height</p>
                                <span><?=$value->height?></span>
                            </div>
                            <div class="box">
                                <p>Bust</p>
                                <span><?= $value->bust ?></span>
                            </div>
                            <div class="box">
                                <p>Waist</p>
                                <span><?= $value->waist?></span>
                            </div>
                            <div class="box">
                                <p>Hips</p>
                                <span><?= $value->hips ?></span>
                            </div>
                            <div class="box">
                                <p>Shoe</p>
                                <span><?= $value->shoe?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }?>
        </div>
    </div>
</section>