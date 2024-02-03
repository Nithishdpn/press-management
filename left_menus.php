<div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
<ul class="nav flex-column pl-1">			
<?php if($user->isAdmin()) { ?>		
<li class="nav-item"><a class="nav-link" href="dashboard.php"><strong>Dashboard</strong></a></li>
 
 
<li class="nav-item"><a class="nav-link" href="logout.php"><strong>Logout</strong></a></li>
<?php } else { ?>

<?php } ?>
</ul>
</div>




