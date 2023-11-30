<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive"
                        src="<?php echo e(asset('admin/images/logo/logo_icon.png')); ?>" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="<?php echo e(asset('svg/tooth-fairy.png')); ?>"
                        alt="#" />
                </div>
                <div class="user_info">
                    <h6><?php echo e(auth()->user()->name); ?></h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li>
                <a href="<?php echo e(route('dashboard')); ?>">
                    <i class="fa fa-dashboard yellow_color"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-diamond purple_color"></i> <span>Edukasi</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="<?php echo e(route('edukasi')); ?>">> <span>List Edukasi</span></a></li>
                    <li><a href="<?php echo e(route('create.edukasi')); ?>">> <span>Tambah Baru</span></a></li>
                </ul>
            </li>
            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-object-group red_color"></i>

                    <span>Penilaian</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="<?php echo e(route('penilaian.index')); ?>">> <span>List Penilain</span></a></li>
                    <li><a href="<?php echo e(route('penilaian.create')); ?>">> <span>Tambah Baru</span></a></li>

                    <li><a href="<?php echo e(route('hasil')); ?>">> <span>Hasil Penilaian</span></a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('artikel.data')); ?>">
                    <i class="fa fa-paper-plane red_color"></i>
                    <span>Artikel</span>
                </a>
            </li>

            <li>
                <a href="<?php echo e(route('testimoni.index')); ?>">
                    <i class="fa fa-comment red_color"></i>
                    <span>Testimoni</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('siswa')); ?>">
                    <i class="fa fa-users red_color"></i>
                    <span>Siswa</span>
                </a>
            </li>


            <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-cog yellow_color"></i> <span>Pengaturan</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="<?php echo e(route('team.index')); ?>"># <span>Teams</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('tentang')); ?>"># <span>Tentang</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('pengaturan.index')); ?>"># <span>Setting</span></a>
                    </li>
                </ul>
            </li>


            <li class="active">
                <a href="#usermg" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-clone yellow_color"></i> <span>User Management</span></a>
                <ul class="collapse list-unstyled" id="usermg">
                    <li>
                        <a href="<?php echo e(route('users.index')); ?>">> <span>Users</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('profile')); ?>">> <span>My Profile</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>">> <span>Log out</span></a>
                    </li>
                </ul>
            </li>
        </ul>
        
    </div>
</nav>
<?php /**PATH C:\laragon\www\doknurung\resources\views/layouts/app/sidebar.blade.php ENDPATH**/ ?>