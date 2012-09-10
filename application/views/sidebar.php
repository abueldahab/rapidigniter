	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $user['username']; ?> [ <?php echo anchor('/login/do_logout','Logout'); ?> ]</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
				<a href="javascript:">Website Admin</a> 
				
			</article>
		</div>
	</section><!-- end of secondary bar -->
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/><div class="ax_menus">
		<h3>Projects</h3>
		<ul class="toggle">
			<li class="icn_edit_article"><a href="#">Edit Articles</a></li>
			<li class="icn_categories"><a href="#">Categories</a></li>
			<li class="icn_new_article"><a href="#">New Project</a></li>
		</ul>
		<h3>Plugins</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="#">Add New Plugin</a></li>
			<li class="icn_view_users"><a href="#">View Plugin List</a></li>
		</ul>	
		<div>
		<footer>
			<hr />
			<p><strong>Copyright &copy; <?php echo date('Y'); ?> Zulfa Juniadi Zulkifli</strong></p>
		</footer>
	</aside><!-- end of sidebar -->