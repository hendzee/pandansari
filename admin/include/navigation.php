<section class="sidebar">

    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">HOME</li>
        <!-- Optionally, you can add icons to the links -->
        <li <? if ($page=="menu") echo "class='active'" ?>><a href="index.php"><i class="fa fa-list"></i> <span>Menu</span></a></li>
        <li <? if ($page=="admin") echo "class='active'" ?> <?php if($_SESSION['role'] != 'admin'){ echo "style='display:none'"; }?>><a href="admin.php"><i class="fa fa-user"></i> <span>Admin</span></a></li>
        <li <? if ($page=="slider") echo "class='active'" ?>><a href="slider.php"><i class="fa fa-file-image-o"></i> <span>Slider</span></a></li>
        <li class="treeview <? if ($page=="info" || $page=="no-telp") echo "active" ?>">
            <a href="#"><i class="fa fa-phone"></i> <span>Contact</span> <i
                    class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li <? if ($page=="info") echo "class='active'" ?>><a href="info.php">Info</a></li>
                <li <? if ($page=="no-telp") echo "class='active'" ?>><a href="no-telp.php">Nomor Telepon</a></li>
            </ul>
        </li>
        <li <? if ($page=="galeri") echo "class='active'" ?>><a href="galeri.php"><i class="fa fa-camera"></i> <span>Galeri</span></a></li>
        <li><a href="#" id="logout-right"><i class="fa fa-sign-out"></i> <span>logout</span></a></li>
    </ul><!-- /.sidebar-menu -->
</section>
