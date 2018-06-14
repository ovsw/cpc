<div class="singleColumn">
	<section role="main">
	<div class="hpTopRowWrapper">
		
		<div class="hpTopRow woodenFrame">
			<div class="borderTop">
				<div class="borderRight">
					<div class="borderBottom">
						<div class="borderLeft">
							<div class="corner_top_left"></div>
							<div class="corner_top_right"></div>
							<div class="corner_bottom_right"></div>
							<div class="corner_bottom_left"></div>
							<div class="hpIntroSection">
								<!-- <div class="hpVideoWrapper"> -->
									<!-- <div class="videoContainer">
										<?php echo str_replace('" frameborder=0','&rel=0" frameborder=0',$page->hp_youtube_video); ?>
									</div> -->
									<!-- /.videoContainer -->
									
								<!-- </div> -->
								<!-- /.hpVideoWrapper -->
								<div class="smallScreenAnchor">
									
									<a href="<?= $page->hp_youtube_video ?>" class="videoLink"><img src="/site/templates/images/homepage_main.jpg" alt="placeholder" /></a>
									<a href="<?= $page->hp_youtube_video ?>" class="videoLinkOverlay"><strong>Tour &amp; Etiquette Video</strong><span>(Click to Play)</span></a>
								
								</div>
								<!-- /.smallScreenAnchor -->
								<div class="hpIntroRightColumn">
									<h1>
										<span class="firstLine">Welcome to</span>
										<span class="secondLine">Cypress Cove</span> <span class="thirdLine"> Nudist Resort</span>
									</h1>
									<div class="hpIntroTextWrapper">
										<div class="hpIntroText">
											<?= $page->body ?>
											<a href="https://irm.cypresscoveresort.net/IRMNet/(S(gaoazpb1aoq54jyptvzfrjjb))/login.aspx?Resort=01" class="button" target="_blank">Book Now</a>
										</div>
										<!-- /.hpIntro -->
									</div>
									<!-- /.hpIntroWrapper -->
								</div>
								<!-- /.hpIntroRightColumn -->
							</div>
							<!-- /.hpIntroText -->
							<div class="clear"></div>
						</div>
						<!-- /.borderLeft -->
					</div>
					<!-- /.borderBottom -->
				</div>
				<!-- /.borderRight -->
			</div>
			<!-- /.topRowTopBorder -->
		
		</div>
		<!-- /.hpTopRow -->

		</div>
		<!-- /.hpTopRowWrapper -->
	
		<div class="hpDivider"></div>
		

		<div class="hpFirstRow">
			
			<div class="hpNewsWrapper">
				<h2>Latest News</h2>
				<?php foreach ($pages->find("template=news-item,limit=3,sort=-event_date") as $i => $newsItem): ?>
				<div class="hpNewsItemWrapper<?= $i== 2 ? ' last' : '' ?>">
					<article>
						<?php if ($newsItem->news_cover_photo) : ?>
					    <img src="<?= $newsItem->news_cover_photo->getCrop("homepage_thumbnail")->url; ?>" 
					    alt="<?= $newsItem->news_cover_photo->description ?>" />
					    <?php else: ?>
					    <img class="coverThumbnailEventPage" src="http://placehold.it/107x116&text=Missing+Cover+Image" alt="placeholder" />
					    <?php endif ?>
						
						<div class="hpNewsContentWrapper">
						
							<h3><a href="<?= $newsItem->url ?>">
									<div class="newsItemDate">
							 			<div class="day"><?= date("d", $newsItem->getUnformatted("event_date")); ?></div>
							 			<div class="month"><?= date("M", $newsItem->getUnformatted("event_date")); ?></div>
							 		</div>
							 		<!-- /.newsItemDate -->
							 		<?= $newsItem->title ?>
							 	</a>
							 </h3>
							 

							<?php if ($newsItem->summary == ""): ?>
						      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed rhoncus dui. Sed lacinia bibendum lacus nec bibendum. Nullam ante neque, dapibus ac mattis non, iaculis et augue. Fusce egestas nec magna eget bibendum. Aliquam faucibus tincidunt tempus. Ut sit amet est a diam vulputate pharetra.</p>
	    
						    <?php else :?>
						      <p><a href="<?= $newsItem->url ?>"><?= $newsItem->summary ?></a></p>
						    <?php endif ?>

						</div>
						<!-- /.hpNewsContentWrapper -->
					</article>
				</div>
				<!-- /.hpNewsItemWrapper -->
				<?php endforeach ?>

			</div>
			<!-- /.hpNewsWrapper -->

			<div class="hpEventsWrapper">
				<div class="top"></div>
				<div class="mid">
					
					<div  class="cycle-slideshow" data-cycle-fx="fade"  data-cycle-timeout="4000" data-cycle-slides="> div" data-cycle-caption="#hpEventsCaption" data-cycle-caption-template="{{cycleTitle}}" data-cycle-pager=".eventsPager" data-cycle-pager-template="<span>+</span>">
					  <?php foreach ($pages->get("template=events")->children as $event): ?>
	    
	      				<div class="slide" data-cycle-title="<?= $event->title ?>">  
							<a href="<?= $event->url ?>">
						        <?php if ($event->event_cover_photo) : ?>
						        <img src="<?= $event->event_cover_photo->getCrop("homepage_slideshow_size")->url; ?>" alt="<?= $event->event_cover_photo->description ?>" />
						        <?php else: ?>
						        <img src="http://placehold.it/250x200&text=Missing+Cover+Image" alt="placeholder" />
						        <?php endif ?>
						      
						      	
							</a>
				      </div>
				      <!-- /.slide -->

				    <?php endforeach ?>
						
					</div>
					<!-- /.cycle-slideshow -->

				</div>
				<!-- /.slideshowWrapper -->
				<div class="bottom">
					<div id="hpEventsCaption"></div>
					<div class="eventsPager"></div>
				</div>
				<!-- /.bottom -->
			</div>
			<!-- /.hpEventsWrapper -->

		</div>
		<!-- /.hpFirstRow -->
		<div class="clear"></div>
		<div class="hpSecondRow">
			
			<div class="hpTestimonialsWrapper">
				<div class="testimonialsHead"><h2>Testimonials</h2></div>
				<div class="testimonialsScroller">
					<?php 
					// $i=0;
					foreach ($pages->get("1041")->testimonials as $testimonial): ?>
					
				    <div class="hpTestimonial">
				    	<div class="testimonialContentWrapper">
				    		
							<h3><?= $testimonial->title ?></h3>
							<div class="hpTestimonialContent">
					            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
					            <div class="viewport">
					                 <div class="overview">
					                    <p><em>"<?= $testimonial->summary ?>"</em></p>
					                </div>
					                <!-- /.overview -->
					            </div>
					            <!-- /.viewport -->
					        </div>
					        <!-- /.hpTestimonialContent -->
					        <div class="mototoi"></div>
				    	</div>
				    	<!-- /.testimonialContentWrapper -->
						<p class="hpTestimonialSig">~ <?= $testimonial->author_name ?></p>
					</div>


					<!-- /.hpTestimonial -->

					<?php 
					// $i++;
					// if ($i == 3) {
					// 	break;
					// }
					endforeach ?>
				</div>
				<!-- /.testimonialsScroller -->
				<div class="hpTestimonialsControls">
					<a href="#" class="btn prev">Previous</a>
					<a href="#" class="btn next">Next</a>
				</div>
				<!-- /.hpTestimonialsControls -->
			</div>
			<!-- /.hpTestimonialsWrapper -->
			<div class="hpSeoTextWrapper">
				<h2>Family-friendly nudist resort</h2>
				<div class="hpSeoText"><?= $page->body_continued ?></div>
			</div>
			<!-- /.hpSeoText -->
		</div>
		<!-- /.hpSecondRow -->
	</section>
</div>
