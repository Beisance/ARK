<?php
/**
 * @package WordPress
 * @subpackage Beisance|Intelix Custom Theme For Beisance|ARK
 * Subnav selector code
 */
?>

<div id="custom-content class="sitemap">
	<div id="custom-content-content">
		<div id="sitemap">
			<div id="sitemap-content">
				<div id="sitemap-stack-1" class="smp smp-d smp-m">
					<div id="sitemap-stack-header-1" class="smp-ssh smp-ssh-d smp-ssh-m">
						ARK
					</div>   
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						<?php wp_nav_menu( array(
							'menu' => 'topnav-ark',
							'class' => 'menu',
							'container' => 'sitemap-stack-content'
							)
						);
						?>
					</div>
				</div>
				<div id="sitemap-stack-2" class="smp smp-d smp-m">
					<div id="sitemap-stack-header-2" class="smp-ssh smp-ssh-d smp-ssh-m">
						Media
					</div>
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-media',
							'class' => 'menu',
							'container' => 'sitemap-stack-content'
							)
						);
						?>
					</div>
					<div id="sitemap-stack-header-2" class="smp-ssh smp-ssh-d smp-ssh-m">
						Layout
					</div>
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-layout',
							'class' => 'menu',
							'container' => 'sitemap-stack-content'
							)
						);
						?>
					</div>
				</div>
				<div id="sitemap-stack-3" class="smp smp-d smp-m">
					<div id="sitemap-stack-header-3" class="smp-ssh smp-ssh-d smp-ssh-m">
						Policies
					</div>
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						<?php wp_nav_menu( array(
							'menu' => 'sitemap-policies',
							'class' => 'menu',
							'container' => 'sitemap-stack-content'
							)
						);
						?>
					</div>
				</div>
				<div id="sitemap-stack-4" class="smp smp-d smp-m smp-hidden">
					<div id="sitemap-stack-header-4" class="smp-ssh smp-ssh-d smp-ssh-m">
						Project X
					</div>
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						
					</div>
				</div>
				<div id="sitemap-stack-5" class="smp smp-d smp-m smp-hidden">
					<div id="sitemap-stack-header-5" class="smp-ssh smp-ssh-d smp-ssh-m">
						Project X
					</div>
					<div id="sitemap-stack-content" class="smp-ssc smp-ssc-d smp-ssc-m">
						
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>

