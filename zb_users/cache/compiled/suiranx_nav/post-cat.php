<?php  include $this->GetTemplate('header');  ?><div class="container">    <!-- 广告位AD4  -->    <?php if (suiranx_nav_is_mobile()) { ?>        <?php if ($zbp->Config('suiranx_nav')->ad4_switch=="1" && strlen ( $zbp->Config('suiranx_nav')->m_ad4 ) > 5) { ?>            <div style="margin-bottom:24px;"><?php  echo $zbp->Config('suiranx_nav')->m_ad4;  ?></div>        <?php } ?>    <?php }else{  ?>        <?php if ($zbp->Config('suiranx_nav')->ad4_switch=="1" && strlen ( $zbp->Config('suiranx_nav')->ad4 ) > 5) { ?>            <div style="margin-bottom:24px;"><?php  echo $zbp->Config('suiranx_nav')->ad4;  ?></div>        <?php } ?>    <?php } ?>        <div class="part">        <div class="items">        	<div class="row">        	            		<?php  foreach ( $articles as $keyd=>$article) { ?>                    <?php if ($article->IsTop) { ?>                        <?php  include $this->GetTemplate('post-istop');  ?>                    <?php }else{  ?>                        <?php  include $this->GetTemplate('post-multi');  ?>                    <?php } ?>        		<?php }   ?>           	</div>        	        	<?php  include $this->GetTemplate('pagebar');  ?>    	</div>	</div>    </div><?php  include $this->GetTemplate('footer');  ?>