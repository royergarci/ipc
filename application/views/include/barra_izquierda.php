					<div class="widget">
						<div class="fb-page" data-href="https://www.facebook.com/Isidro.Pedraza/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Isidro.Pedraza/"><a href="https://www.facebook.com/Isidro.Pedraza/">Isidro Pedraza Chávez</a></blockquote></div></div>
					</div><!-- widget metro social -->

					<div class="widget">
						<h3 class="col-title"> Categorias </h3><span class="liner"></span>
						<ul class="list">
							<?php 
							foreach ($categorias as $categoria) {
							?>
								<li><a href="#"><i class="icon-caret-right"></i> <?php echo $categoria->nombre.' ('.$categoria->num.')';?></a></li>
							<?php 
							} 
							?>
						</ul><!-- end list -->
					</div><!-- widget list -->