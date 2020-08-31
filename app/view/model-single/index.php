<?php
      require_once VIEW . "layout\header.php";
      
?>

<div class="page">
   
<?php

    require_once VIEW . 'layout\nav.php';
    // require_once VIEW . 'layout\background-page.php';
    // require_once VIEW . 'home\model-hot.php';
?>

<?php
    $data = $this->view_data['data'];
    $albums = $this->view_data['albums'];

    // var_dump($albums[0]->images);
    // die();

?>
<section class="ftco-section">
      	<div class="container">
      		<div class="row justify-content-center">
      			<div class="col-md-10">
      				<div class="row model-detail d-mf-flex align-items-center">
      					<div class="col-md-6 ftco-animate">
      						<div class="carousel-model owl-carousel">
      							<div class="items">
		      						<img src="/images/<?=$data[0] ->image?>" class="img-fluid" alt="Colorlib Template">
	      						</div>
	      						<div class="items">
		      						<img src="/images/<?=$albums[2]->images?>" class="img-fluid" alt="Colorlib Template">
	      						</div>
      						</div>
      					</div>
      					<div class="col-md-1"></div>
      					<div class="col-md-5 model-info ftco-animate">
      						<h3 class="mb-4"><?=$data[0]->name?></h3>
      						    <p><span>Age</span> <span>18 years</span></p>
							    <p><span>Height</span> <span>   <?=$data[0]->height?>
                                                                                        </span></p>
								<p><span>Bust</span> <span>     <?=$data[0]->bust?>
                                                                                        </span></p>
								<p><span>Waist</span> <span>    <?=$data[0]->waist?>
                                                                                        </span></p>
								<p><span>Hips</span> <span><?=$data[0]->hips?></span></p>
								<p><span>Dress</span> <span>8 / 36</span></p>
								<p><span>Shoe W</span> <span><?=$data[0]->shoe?></span></p>
									<p class="mt-4"><a href="#" class="btn btn-primary py-3 px-4">Book this model</a></p>
      					</div>
      				</div>
      				<div class="row no-gutters mt-5">
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="javascript:;"><img src="/images/<?=$albums[1]->images?>" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="javascript:;"><img src="/images/<?=$albums[3]->images?>" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="javascript:;"><img src="/images/<?=$albums[0]->images?>" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      					<div class="col-md-6 col-lg-3 fto-animate">
      						<a href="javascript:;"><img src="/images/<?=$albums[2]->images?>" class="img-fluid" alt="Colorlib Template"></a>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      

<?php

    require_once VIEW . 'layout\footer.php';

?>