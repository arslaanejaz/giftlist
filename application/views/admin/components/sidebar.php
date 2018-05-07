
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="<?php echo base_url(); ?>assets/admin/images/logo.png" alt="Integral" title="Integral"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="navigation-header">Main</li>
			<li class="active"><a href="<?php echo base_url(); ?>index.php/admin/dashboard"><i class="icon-gauge"></i><span class="title">Dashboard</span></a></li>
			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Category</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/category"><span class="title">Add Category</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/category/manage_category"><span class="title">Manage Category</span></a></li>
				</ul>
			</li>
			<!-- Add /Manage Product -->
			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Products</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/product"><span class="title">Add Product</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/product/manage_product"><span class="title">Manage Product</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Slides</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/slide"><span class="title">Add Slide</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/slide/manage_slide"><span class="title">Manage Slide</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">FAQ</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/faq"><span class="title">Add FAQ</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/faq/manage_faq"><span class="title">Manage FAQ</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Users</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/user"><span class="title">Add User</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/user/manage_user"><span class="title">Manage User</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Registry</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/registry"><span class="title">Add Registry</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/registry/manage_registry"><span class="title">Manage Registry</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Pages</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/page"><span class="title">Add Page</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/page/manage_page"><span class="title">Manage Pages</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="icon-layout"></i><span class="title">Partners</span></a>
				<ul class="nav collapse">
					<li><a href="<?php echo base_url(); ?>index.php/admin/partner"><span class="title">Add Partner</span></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/admin/partner/manage_partner"><span class="title">Manage Partners</span></a></li>
				</ul>
			</li>
			
			
		</ul>
		<!-- /main navigation -->