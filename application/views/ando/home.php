		
		<div class="section" id="home-slider">

            <div id="slider" class="sl-slider-wrapper">

            		<div class="sl-slider"> 


            		<?php

            		$banner_hitung=0;
            		foreach ($banner_depan as $key => $value) {
            			echo "<div class='sl-slide' data-orientation='horizontal' data-slice1-rotation='-25' data-slice2-rotation='-25' data-slice1-scale='2' data-slice2-scale='2'>";
            				echo "<div class='bg-img  bg-img-$banner_hitung' style='background-attachment: fixed;background-image: url($value[gambar])'> </div>";


            				echo"<div class='slide-caption'>";
            				 echo"<div class='caption-content'>";
            				  echo "<h2 class='wow animated fadeInRight'>$value[header]</h2>";
            				  echo "<span class='wow animated fadeInDown'>$value[caption]</span>";
            				 echo"</div>";

            				echo"</div>";

            			echo "</div>";
            			$banner_hitung++;
            		}

            		 ?>




            		</div>


                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                  <span class="nav-arrow-prev">
                    <a href="javascript:;">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                  </span>
                  <span  class="nav-arrow-next">
                    <a href="javascript:;">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                  </span>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">



					<?php for ($i=1; $i <= $banner_hitung ; $i++) { 
						$curent=$i==1?"nav-dot-current":"";
						echo "<span class='$curent'></span>";
					} ?>
				</nav>


            </div>

         </div>


         <div class="section" id="about">
                <div class="video-background-container">
                 <video preload="auto" autoplay="" loop="" muted="" class="video-background">
                    <source type="video/mp4" src="<?php echo assets_url('videos/cloud.mp4') ?>">
                 </video>
                </div>

                <div class="parallax-overlay"></div>

            <div class="container">
              <div class="row">


                <div class="col-md-12 wow bounceInUp">
                    <div class="welcome-block " style="text-align: center">
                        <img src="<?php echo $biodata['foto'] ?>"  alt="Sandro Poluan"/>
                        <h3 style="margin:30px 0 30px 0"><?php echo $biodata['nama']; ?></h3>
                        <div class="message-body">
                            
                            <p><?php echo nl2br($biodata['deskripsi_singkat']) ?></p>
                                <a href="<?php echo baseURL('tentang-kami'); ?>" class="btn btn-border btn-effect" style="margin-top:30px">Tentang Kami</a>
                        </div>
                    </div>
                </div>

              </div>
            </div>
         </div>


         <div class="section" id="headline-artikel">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="sec-title text-center artikel-hot-title wow animated fadeInDown">
                           <h3>Berita Terkini</h3>
                        </div>

                    <div id="headline-konten" class="owl-carousel">
                        <?php

                        foreach ($artikel_headline as  $value) {
                            echo "<div class='owl-item wow animated fadeInLeft'>
                                    <div class='wrap-headline'>

                                <div class='overlay-effect'>
                               <h4> $value[judul] </h4>
                               <P>".potong_text(reversequote($value['isi'],'all'),120)."</P>
                               <a class='btn btn-border btn-effect' href='".artikel_url($value['id'],$value['slug'])."'>Baca</a>
                                </div>

                                     ";
                            echo "<img class='headImg' src='".img_artikel_url($value['foto'],true)."' alt='$value[judul]' />";
                            echo     "
                             <div class='caption-area'>
                               <a href='".artikel_url($value['id'],$value['slug'])."'><h4> ".potong_text($value['judul'],40)."</h4></a>";
                           echo "<span class='angka tanggal-artikel'><i class='fa fa-calendar'></i>&nbsp; ".format_tanggal($value['tanggal'])."</span>";
                           echo" 
                           <span class='author-artikel'>
                           <i class='fa fa-user'></i>&nbsp; $value[nama_admin]
                           </span>
                            </div>
                                    </div>
                                 </div>";
                        }

                         ?>
                    </div>
                </div>
                </div>
            </div>
         </div>