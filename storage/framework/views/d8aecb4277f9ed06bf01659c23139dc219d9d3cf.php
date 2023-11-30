<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="logo_section">
                <a href="/">
                    
                    <span class="text-white mt-3 ml-3" style="font-size: 15pt">NAIRA DENTAL CARE</span>
                </a>
            </div>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle"
                                    src="<?php echo e(asset('svg/tooth.png')); ?>" alt="#" /><span
                                    class="name_user"><?php echo e(auth()->user()->name); ?></span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                <a class="dropdown-item" href="settings.html">Settings</a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><span>Log Out</span> <i
                                        class="fa fa-sign-out"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/layouts/app/topbar.blade.php ENDPATH**/ ?>