<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container-fluid px-4">
	    		<div class="row d-flex">
	    			<div class="col-md-6 col-lg-3 d-flex align-items-center ftco-animate">
	    				<div class="heading-section text-center">
		    				<h2 class="">Our Tops Model's</h2>
	                        <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
                        </div>
	    		    </div>

                <?php

                    $data = $this->view_data['model'];
                    foreach ($data as $value) {
        
                ?>
	    			<div class="col-md-6 col-lg-3 ftco-animate">
	    				<div class="model-entry">
			    			<div class="model-img" style="background-image: url(images/<?=$value->image?>);">
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
		                		<span><?=$value->bust?></span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span><?=$value->waist?></span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span><?=$value->hips?></span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span><?=$value->shoe?></span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
		    			</div>
		    		</div>

            <?php }?>
	    			<div class="col-md-6 col-lg-3 ftco-animate">
	    				<div class="model-entry">
			    			<div class="model-img" style="background-image: url(images/image_9.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Ozawa</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Ozawa<br><span>Smith</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
		    			</div>
	    			</div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
	    				<div class="model-entry">
			    			<div class="model-img" style="background-image: url(images/image_9.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Ozawa</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Ozawa<br><span>Smith</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
		    			</div>
	    			</div>
	    			<div class="col-md-6 col-lg-3 ftco-animate">
	    				<div class="model-entry">
			    			<div class="model-img" style="background-image: url(images/image_10.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Maine</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Maine<br><span>Mendoza</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
		    			</div>
	    			</div>
	    			<div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center ftco-animate">
		    			<div class="btn-view">
		    				<p><a href="model.html" class="btn btn-white py-3 px-5">View more</a></p>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>