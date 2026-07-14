<?php
$current_page = basename($_SERVER['PHP_SELF']);
$is_conditions_active = in_array($current_page, ['conditions.php', 'tmj-disorders.php']);
$is_treatments_active = in_array($current_page, ['treatments.php', 'tmj-treatment.php', 'tmj-arthroscopy.php', 'jaw-surgery.php', 'advanced-jaw-surgery.php', 'skin-grafts-and-flaps.php']);
$is_blog_active = strpos($_SERVER['PHP_SELF'], '/blogs/') !== false || strpos($_SERVER['PHP_SELF'], '/blog/') !== false;
?>

<!-- ── 1. Emergency strip (sticky top, click-to-call) ──────────── -->
<div id="gna-emergency-strip"
  class="gna-emergency w-full text-[12px] md:text-[13px] py-2 px-4 md:px-8 flex items-center justify-between gap-3 sticky top-0 z-[60]">
  <div class="flex items-center gap-2 md:gap-3 min-w-0">
    <span class="inline-block w-2 h-2 rounded-full bg-white animate-pulse shrink-0" aria-hidden="true"></span>
    <span class="hidden sm:inline font-semibold uppercase tracking-[0.18em] truncate">24/7 Facial Trauma Care</span>
    <span class="sm:hidden font-semibold uppercase tracking-wider truncate">Trauma · 24/7</span>
  </div>
  <div class="flex items-center gap-3 md:gap-5 shrink-0">
    <a href="tel:+919000666476" class="font-semibold underline-offset-2 hover:underline whitespace-nowrap">
      <span class="hidden sm:inline">📞 </span>+91 90006 66476
    </a>
    <a href="https://wa.me/919000666476?text=Hello%20Gnathos%20team%2C%20I%20need%20facial%20trauma%20care."
      class="hidden md:inline-flex items-center gap-1.5 whitespace-nowrap hover:underline">
      WhatsApp
    </a>
  </div>
</div>

<!-- ── 2. Main masthead ────────────────────────────────────────── -->
<header class="w-full bg-[#F8F5EF] border-b gna-rule sticky z-50" style="top: var(--gna-strip-h, 36px);">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8">
    <div class="flex items-center justify-between py-3 md:py-4 gap-4">
      <!-- Logo -->
      <a class="flex items-center gap-3 shrink-0" href="<?php echo $path_prefix; ?>index.php"
        aria-label="Gnathos Facial — home">
        <img alt="Gnathos Facial" class="h-9 md:h-11 w-auto" src="/asset/gna-logop.png" />
        <span class="hidden lg:inline gna-eyebrow text-[var(--slate)]">Maxillofacial Surgery · Hyderabad</span>
      </a>

      <!-- Primary nav (desktop) -->
      <nav class="hidden lg:flex items-center gap-7" aria-label="Primary">

        <!-- Conditions -->
        <div class="gna-nav-item relative">
          <button
            class="gna-eyebrow <?php echo $is_conditions_active ? 'text-[var(--steel)]' : 'text-[var(--navy)] hover:text-[var(--steel)]'; ?> flex items-center gap-1 transition-colors"
            aria-expanded="false" aria-haspopup="true" aria-controls="nav-conditions">
            Conditions <span class="text-[9px] transition-transform" aria-hidden="true">▾</span>
          </button>
          <div id="nav-conditions"
            class="gna-nav-menu absolute top-full left-0 mt-3 w-72 bg-white border gna-rule rounded-md shadow-lg shadow-black/5 z-50"
            role="menu">
            <div class="py-2">
              <a href="<?php echo $path_prefix; ?>conditions.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">All Conditions</a>
              <div class="border-t gna-rule-soft mx-3 my-1"></div>
              <a href="<?php echo $path_prefix; ?>tmj-disorders.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">TMJ Disorders</a>
              <a href="<?php echo $path_prefix; ?>facial-injuries.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Facial Injuries &amp; Trauma</a>
              <a href="<?php echo $path_prefix; ?>obstructive-sleep-apnea.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Sleep Apnea (OSA)</a>
              <a href="<?php echo $path_prefix; ?>oral-cancer.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Oral Cancer</a>
              <a href="<?php echo $path_prefix; ?>rhinoplasty.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Nasal Deformities</a>
              <a href="<?php echo $path_prefix; ?>orthognathic-surgery.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Jaw Misalignment</a>
            </div>
          </div>
        </div>

        <!-- Treatments -->
        <div class="gna-nav-item relative">
          <button
            class="gna-eyebrow <?php echo $is_treatments_active ? 'text-[var(--steel)]' : 'text-[var(--navy)] hover:text-[var(--steel)]'; ?> flex items-center gap-1 transition-colors"
            aria-expanded="false" aria-haspopup="true" aria-controls="nav-treatments">
            Treatments <span class="text-[9px] transition-transform" aria-hidden="true">▾</span>
          </button>
          <div id="nav-treatments"
            class="gna-nav-menu absolute top-full left-0 mt-3 w-72 bg-white border gna-rule rounded-md shadow-lg shadow-black/5 z-50"
            role="menu">
            <div class="py-2">
              <a href="<?php echo $path_prefix; ?>treatments.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">All Treatments</a>
              <div class="border-t gna-rule-soft mx-3 my-1"></div>
              <a href="<?php echo $path_prefix; ?>tmj-treatment.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">TMJ Treatment</a>
              <a href="<?php echo $path_prefix; ?>tmj-arthroscopy.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">TMJ Arthroscopy</a>
              <a href="<?php echo $path_prefix; ?>jaw-surgery.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Orthognathic Surgery</a>
              <a href="<?php echo $path_prefix; ?>advanced-jaw-surgery.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Advanced Jaw Reconstruction</a>
              <a href="<?php echo $path_prefix; ?>rhinoplasty-treatment.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Rhinoplasty</a>
              <a href="<?php echo $path_prefix; ?>skin-grafts-and-flaps.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Skin Grafts &amp; Flaps</a>
              <a href="<?php echo $path_prefix; ?>oral-cancer-treatment.php"
                class="block px-5 py-2.5 text-[13px] text-[var(--navy)] hover:bg-[var(--warm-deep)] hover:text-[var(--steel)] transition-colors"
                role="menuitem">Oral Cancer Surgery</a>
            </div>
          </div>
        </div>

        <a href="<?php echo $path_prefix; ?>index.php#doctors"
          class="gna-eyebrow text-[var(--navy)] hover:text-[var(--steel)] transition-colors">Our Doctors</a>
        <a href="<?php echo $path_prefix; ?>index.php#stories"
          class="gna-eyebrow text-[var(--navy)] hover:text-[var(--steel)] transition-colors">Patients</a>
        <a href="<?php echo $path_prefix; ?>blogs/"
          class="gna-eyebrow <?php echo $is_blog_active ? 'text-[var(--steel)]' : 'text-[var(--navy)] hover:text-[var(--steel)]'; ?> transition-colors">Journal</a>
        <a href="<?php echo $path_prefix; ?>index.php#contact"
          class="gna-eyebrow text-[var(--navy)] hover:text-[var(--steel)] transition-colors">Contact</a>
      </nav>

      <!-- Right cluster (desktop) -->
      <div class="hidden lg:flex items-center gap-4">
        <div class="flex items-center gap-1.5 text-[11px] text-[var(--slate)]"
          aria-label="Rated 4.8 out of 5 on Practo">
          <span class="text-[var(--trauma)] text-[14px]" aria-hidden="true">★</span>
          <span class="font-semibold text-[var(--navy)]">4.8</span>
          <span>· Practo</span>
        </div>
        <a href="https://wa.me/919000666476?text=Hello%20Gnathos%20team%2C%20I%27d%20like%20to%20book%20a%20consultation."
          target="_blank" rel="noopener" class="gna-btn gna-btn-whatsapp !py-2 !px-3 !text-[11px]"
          aria-label="Chat on WhatsApp">
          WhatsApp
        </a>
        <a href="<?php echo $path_prefix; ?>index.php#contact"
          class="gna-btn gna-btn-primary !py-2 !px-4 !text-[11px]">Book Appointment</a>
      </div>

      <!-- Mobile menu toggle -->
      <button id="gna-mobile-toggle" type="button"
        class="lg:hidden flex items-center gap-2 text-[var(--navy)] p-2 min-h-[44px] min-w-[44px]"
        aria-label="Open menu" aria-expanded="false" aria-controls="gna-mobile-menu">
        <span class="text-2xl leading-none" aria-hidden="true">≡</span>
        <span class="hidden sm:inline gna-eyebrow">Menu</span>
      </button>
    </div>
  </div>
</header>

<!-- ── 3. Mobile menu panel ─────────────────────────────────────── -->
<aside id="gna-mobile-menu" class="gna-mobile-menu lg:hidden fixed inset-0 z-[55] bg-[#F8F5EF]" data-open="false"
  aria-hidden="true" role="dialog" aria-label="Mobile menu">
  <div class="flex items-center justify-between p-4 border-b gna-rule">
    <img alt="Gnathos" class="h-9 w-auto" src="/asset/gna-logop.png" />
    <button type="button" id="gna-mobile-close" class="p-2 min-h-[44px] min-w-[44px] flex items-center justify-center"
      aria-label="Close menu">
      <span class="text-3xl leading-none" aria-hidden="true">×</span>
    </button>
  </div>
  <nav class="p-4 overflow-y-auto h-[calc(100vh-72px)]" aria-label="Mobile primary">
    <ul class="space-y-1 text-[16px] font-medium">
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>index.php">Home</a></li>
      <li class="border-t gna-rule-soft pt-2 mt-2">
        <p class="gna-eyebrow text-[var(--slate)] px-3 py-2">Conditions</p>
      </li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>conditions.php">All Conditions</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>tmj-disorders.php">TMJ Disorders</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>facial-injuries.php">Facial Injuries &amp; Trauma</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>obstructive-sleep-apnea.php">Sleep Apnea (OSA)</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>oral-cancer.php">Oral Cancer</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>rhinoplasty.php">Nasal Deformities</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>orthognathic-surgery.php">Jaw Misalignment</a></li>

      <li class="border-t gna-rule-soft pt-2 mt-2">
        <p class="gna-eyebrow text-[var(--slate)] px-3 py-2">Treatments</p>
      </li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>treatments.php">All Treatments</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>tmj-treatment.php">TMJ Treatment</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>jaw-surgery.php">Orthognathic Surgery</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>rhinoplasty-treatment.php">Rhinoplasty</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>skin-grafts-and-flaps.php">Skin Grafts &amp; Flaps</a></li>

      <li><a
          class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)] border-t gna-rule-soft pt-2 mt-2"
          href="<?php echo $path_prefix; ?>index.php#doctors">Our Doctors</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>index.php#stories">Patient Stories</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>blogs/">Journal</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>index.php#contact">Contact</a></li>
      <li><a class="block px-3 py-3 rounded text-[var(--navy)] hover:bg-[var(--warm-deep)]"
          href="<?php echo $path_prefix; ?>index.php#faq">FAQ</a></li>
    </ul>

    <div class="mt-6 pt-6 border-t gna-rule space-y-3">
      <a href="tel:+919000666476" class="block gna-btn gna-btn-emergency justify-center !w-full">📞 Call Trauma Line</a>
      <a href="https://wa.me/919000666476" target="_blank" rel="noopener"
        class="block gna-btn gna-btn-whatsapp justify-center !w-full">WhatsApp Us</a>
      <a href="<?php echo $path_prefix; ?>index.php#contact"
        class="block gna-btn gna-btn-primary justify-center !w-full">Book Appointment</a>
    </div>
  </nav>
</aside>

<script>
  // Pin masthead below the emergency strip by reading the strip's actual height.
  (function () {
    const strip = document.getElementById('gna-emergency-strip');
    const header = document.querySelector('header');
    if (!strip || !header) return;
    function pin() {
      const h = strip.getBoundingClientRect().height;
      document.documentElement.style.setProperty('--gna-strip-h', h + 'px');
    }
    pin();
    window.addEventListener('resize', pin);
    if ('ResizeObserver' in window) new ResizeObserver(pin).observe(strip);
  })();

  // Mobile menu
  (function () {
    const openBtn = document.getElementById('gna-mobile-toggle');
    const closeBtn = document.getElementById('gna-mobile-close');
    const menu = document.getElementById('gna-mobile-menu');
    if (!openBtn || !closeBtn || !menu) return;
    function setOpen(open) {
      menu.dataset.open = open ? 'true' : 'false';
      menu.setAttribute('aria-hidden', open ? 'false' : 'true');
      openBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
      if (open) closeBtn.focus();
    }
    openBtn.addEventListener('click', () => setOpen(true));
    closeBtn.addEventListener('click', () => setOpen(false));
    menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => setOpen(false)));
    document.addEventListener('keydown', e => { if (e.key === 'Escape' && menu.dataset.open === 'true') setOpen(false); });
  })();

  // Native aria-expanded for desktop dropdown buttons
  document.querySelectorAll('button[aria-haspopup="true"]').forEach(btn => {
    const id = btn.getAttribute('aria-controls');
    const menu = id && document.getElementById(id);
    if (!menu) return;
    const parent = btn.parentElement;
    parent.addEventListener('mouseenter', () => btn.setAttribute('aria-expanded', 'true'));
    parent.addEventListener('mouseleave', () => btn.setAttribute('aria-expanded', 'false'));
    btn.addEventListener('focus', () => btn.setAttribute('aria-expanded', 'true'));
    btn.addEventListener('blur', () => setTimeout(() => {
      if (!parent.contains(document.activeElement)) btn.setAttribute('aria-expanded', 'false');
    }, 0));
  });
</script>

<main>