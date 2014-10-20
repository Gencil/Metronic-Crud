<? ?>
<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<?php
					$page = (empty($this->uri->segment(1)) ? 'dashboard' : $this->uri->segment(1));
					$menu = menu();
					foreach ($menu as $key => $value) {
						$sub_menu = (is_array($value['link']) ? in_array_r($page, $value['link']) : false);
						echo "<li ".($value['link'] == $page || $sub_menu == true ? "class='active'" : '').">
							<a ".(!is_array($value['link']) ? "href='".base_url().$value['link']."'" : ' href="javascript:;"').">
								<i class='fa fa-{$value['icon']}'></i>
								<span class='title'>{$value['nama']}</span>
								<span ".($value['link'] == $page || $sub_menu == true ? 'class="selected"' : (is_array($value['link']) ? 'class="arrow"' : ''))."></span>
								".($sub_menu == true && is_array($value['link']) ? '<span class="arrow open"></span>' : '')."
							</a>";

							if(is_array($value['link'])){
								echo '<ul class="sub-menu">';
								foreach ($value['link'] as $key => $value) {
									echo "<li ".($page == $value['link'] ? 'class="active"' : '').">
										<a href='".base_url()."{$value['link']}'>
											<i class='fa fa-{$value['icon']}'></i>
											{$value['nama']}
										</a>
									</li>";
								}
								echo "</ul>";
							}
							
						echo "</li>";
					}
				?>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->