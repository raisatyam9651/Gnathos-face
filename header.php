<?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_conditions_active = in_array($current_page, ['conditions.php', 'tmj-disorders.php']);
$is_treatments_active = in_array($current_page, ['treatments.php', 'tmj-treatment.php', 'tmj-arthroscopy.php', 'jaw-surgery.php', 'advanced-jaw-surgery.php', 'skin-grafts-and-flaps.php']);
$is_blog_active = (strpos($_SERVER['PHP_SELF'], '/blogs/') !== false || strpos($_SERVER['PHP_SELF'], '/blog/') !== false);
?>
<!-- TopAppBar Shared Component -->
<header class="w-full top-0 sticky z-50 bg-surface/95 backdrop-blur-md shadow-sm dark:shadow-none shadow-[0_20px_40px_rgba(26,43,72,0.05)] bg-surface dark:bg-surface-container-highest">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex items-center justify-between h-20">
<a class="flex items-center gap-4" href="<?php echo $path_prefix; ?>index.php">
<img alt="Gnathos Facial Logo" class="h-10 md:h-14 w-auto" src="/asset/gna-logop.png"/>
</a>
<nav class="hidden md:flex items-center gap-8 font-label-md text-label-md tracking-wider uppercase">
<a class="<?php echo (($current_page == 'index.php' || $current_page == '') && !$is_blog_active) ? 'text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200'; ?>" href="<?php echo $path_prefix; ?>index.php">Home</a>
<div class="relative group">
<a class="<?php echo $is_conditions_active ? 'text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200'; ?> flex items-center gap-1 cursor-pointer">
<span>Conditions</span>
<span class="material-symbols-outlined text-[16px] group-hover:rotate-180 transition-transform duration-200" style="font-size:16px;">expand_more</span>
</a>
<div class="absolute top-full left-0 mt-4 w-56 bg-surface-container-lowest border border-surface-container-high rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-1 group-hover:translate-y-0 z-50">
<div class="p-2">
<a href="<?php echo $path_prefix; ?>conditions.php" class="block px-4 py-3 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors">All Conditions</a>
<hr class="my-2 border-surface-container-high"/>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>tmj-disorders.php">TMJ Disorders</a></li>
</div>
</div>
</div>
<div class="relative group">
<a class="<?php echo $is_treatments_active ? 'text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200'; ?> flex items-center gap-1 cursor-pointer">
<span>Treatments</span>
<span class="material-symbols-outlined text-[16px] group-hover:rotate-180 transition-transform duration-200" style="font-size:16px;">expand_more</span>
</a>
<div class="absolute top-full left-0 mt-4 w-56 bg-surface-container-lowest border border-surface-container-high rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 translate-y-1 group-hover:translate-y-0 z-50">
<div class="p-2">
<a href="<?php echo $path_prefix; ?>treatments.php" class="block px-4 py-3 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors">All Treatments</a>
<hr class="my-2 border-surface-container-high"/>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>tmj-treatment.php">TMJ Treatment</a></li>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>tmj-arthroscopy.php">TMJ Arthroscopy</a></li>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>jaw-surgery.php">Jaw Surgery</a></li>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>advanced-jaw-surgery.php">Advanced Jaw Surgery</a></li>
<li><a class="block px-4 py-2 text-sm text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-lg transition-colors" href="<?php echo $path_prefix; ?>skin-grafts-and-flaps.php">Skin Grafts & Flaps</a></li>
</div>
</div>
</div>
<a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200" href="<?php echo $path_prefix; ?>index.php#about">About Us</a>
<a class="<?php echo $is_blog_active ? 'text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1' : 'text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200'; ?>" href="<?php echo $path_prefix; ?>blogs/">Blog</a>
<a class="text-on-surface-variant dark:text-on-tertiary-container hover:text-primary transition-colors hover:opacity-90 duration-200" href="<?php echo $path_prefix; ?>index.php#contact">Contact</a>
</nav>
<button onclick="window.location.href='<?php echo $path_prefix; ?>index.php#contact'" class="hidden md:flex items-center justify-center px-6 py-3 bg-primary-container text-on-primary font-label-md text-label-md tracking-wider uppercase rounded hover:opacity-90 transition-opacity">
                Schedule Consultation
            </button>
<button class="md:hidden text-primary">
<span class="material-symbols-outlined icon-fill-0">menu</span>
</button>
</div>
</header>
<main>
