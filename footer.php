<!-- ── Map plate (continues from page above) ───────────────────────── -->
<div class="w-full h-[350px] md:h-[400px] overflow-hidden relative bg-[var(--navy)]">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6119556239087!2d78.3722385!3d17.430400400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9377bfbc844d%3A0x89619bc38eaa02ca!2sGnathos!5e0!3m2!1sen!2sin!4v1779796141375!5m2!1sen!2sin"
    width="100%" height="100%" style="border:0; filter: grayscale(60%) contrast(1.02) brightness(0.95);" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade" class="w-full h-full hover:!filter-none transition-all duration-500">
  </iframe>
</div>

<!-- ── Footer ──────────────────────────────────────────────────────── -->
<footer class="bg-[var(--navy)] text-[#F8F5EF]">
  <div class="max-w-[1280px] mx-auto px-4 md:px-8 pt-16 md:pt-20 pb-8">

    <!-- Top band: emergency + book -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 pb-8 border-b gna-rule-light">
      <div class="flex items-center gap-3">
        <span class="inline-block w-2.5 h-2.5 rounded-full bg-[var(--trauma)] animate-pulse" aria-hidden="true"></span>
        <p class="text-[14px]">
          <strong class="font-semibold uppercase tracking-[0.15em] text-white">24/7 Facial Trauma Care</strong>
          <span class="text-white/80 ml-2">— For emergencies, call now.</span>
        </p>
      </div>
      <div class="flex items-center gap-3">
        <a href="tel:+919000666476" class="gna-btn gna-btn-emergency !py-2.5 !px-5 !text-[11px]" aria-label="Call trauma line">📞 +91 90006 66476</a>
        <a href="<?php echo $path_prefix; ?>index.php#contact" class="gna-btn gna-btn-whatsapp !py-2.5 !px-5 !text-[11px]">Book Appointment</a>
      </div>
    </div>

    <!-- 4-column grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12 py-12 md:py-14 border-b gna-rule-light">

      <!-- 1. Practice -->
      <div>
        <div class="flex items-center gap-3 mb-5">
          <img alt="Gnathos Facial" class="h-8 w-auto brightness-0 invert" src="/asset/gna-logop.png"/>
        </div>
        <p class="text-[14px] leading-[1.65] text-white/85 mb-6">
          Advanced oral and maxillofacial surgical care in Hyderabad. Led by Dr. Suresh and Dr. Navatha Mortha.
        </p>
        <address class="not-italic space-y-3 text-[13px] text-white/80">
          <div>
            <div class="gna-eyebrow text-white/50 mb-1.5">Practice</div>
            <p class="leading-[1.55]">Cabin No. 214, Regency Prime<br/>Jayabheri Pine Valley, Gachibowli<br/>Hyderabad 500032</p>
          </div>
        </address>
      </div>

      <!-- 2. By Symptom -->
      <div>
        <h4 class="gna-eyebrow text-white/50 mb-6">By Symptom</h4>
        <ul class="space-y-2.5 text-[14px]">
          <li><a href="<?php echo $path_prefix; ?>tmj-disorders.php" class="text-white/85 gna-link hover:text-white">Jaw pain &amp; clicking (TMJ)</a></li>
          <li><a href="<?php echo $path_prefix; ?>facial-injuries.php" class="text-white/85 gna-link hover:text-white">Facial injury / fracture</a></li>
          <li><a href="<?php echo $path_prefix; ?>orthognathic-surgery.php" class="text-white/85 gna-link hover:text-white">Misaligned jaws</a></li>
          <li><a href="<?php echo $path_prefix; ?>oral-cancer.php" class="text-white/85 gna-link hover:text-white">Oral lesion / growth</a></li>
          <li><a href="<?php echo $path_prefix; ?>obstructive-sleep-apnea.php" class="text-white/85 gna-link hover:text-white">Snoring / sleep apnea</a></li>
          <li><a href="<?php echo $path_prefix; ?>rhinoplasty.php" class="text-white/85 gna-link hover:text-white">Nasal shape / breathing</a></li>
        </ul>
      </div>

      <!-- 3. Our Doctors -->
      <div>
        <h4 class="gna-eyebrow text-white/50 mb-6">Our Doctors</h4>
        <ul class="space-y-2.5 text-[14px]">
          <li><a class="text-white/85 gna-link hover:text-white" href="<?php echo $path_prefix; ?>index.php#doctors">Dr. Suresh, MDS</a></li>
          <li><a class="text-white/85 gna-link hover:text-white" href="<?php echo $path_prefix; ?>index.php#doctors">Dr. Navatha Mortha, MDS</a></li>
          <li class="pt-3 mt-3 border-t gna-rule-light">
            <a class="text-white/85 gna-link hover:text-white" href="<?php echo $path_prefix; ?>index.php#about">About the Practice</a>
          </li>
          <li><a class="text-white/85 gna-link hover:text-white" href="#">Hospital Affiliations</a></li>
          <li><a class="text-white/85 gna-link hover:text-white" href="#">Academic &amp; Publications</a></li>
        </ul>
      </div>

      <!-- 4. Patient Resources -->
      <div>
        <h4 class="gna-eyebrow text-white/50 mb-6">Patient Resources</h4>
        <ul class="space-y-2.5 text-[14px]">
          <li><a href="<?php echo $path_prefix; ?>index.php#stories" class="text-white/85 gna-link hover:text-white">Patient Stories</a></li>
          <li><a href="<?php echo $path_prefix; ?>index.php#faq" class="text-white/85 gna-link hover:text-white">FAQ &amp; Recovery</a></li>
          <li><a href="<?php echo $path_prefix; ?>blogs/" class="text-white/85 gna-link hover:text-white">Journal</a></li>
          <li class="pt-3 mt-3 border-t gna-rule-light">
            <a class="text-white/85 gna-link hover:text-white" href="#">Insurance &amp; EMI</a>
          </li>
          <li><a class="text-white/85 gna-link hover:text-white" href="#">Consultation Fee</a></li>
          <li><a class="text-white/85 gna-link hover:text-white" href="#">Privacy Policy</a></li>
        </ul>
        <div class="mt-6 pt-6 border-t gna-rule-light">
          <h4 class="gna-eyebrow text-white/50 mb-3">Get in touch</h4>
          <address class="not-italic space-y-1.5">
            <a class="block text-white gna-link text-[15px] font-medium" href="tel:+919000666476">+91 90006 66476</a>
            <a class="block text-white/85 gna-link text-[13px]" href="mailto:gnathosface@gmail.com">gnathosface@gmail.com</a>
          </address>
        </div>
      </div>

    </div>

    <!-- Hospital affiliations + payment rail -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 py-8 border-b gna-rule-light">
      <div>
        <div class="gna-eyebrow text-white/50 mb-3">Operating Privileges</div>
        <p class="text-[13px] text-white/85 leading-[1.6]">CARE Hospitals · KIMS Hospitals · Apollo Spectra · Yashoda Hospitals — all NABH-accredited facilities across Hyderabad.</p>
      </div>
      <div>
        <div class="gna-eyebrow text-white/50 mb-3">Payment &amp; Insurance</div>
        <p class="text-[13px] text-white/85 leading-[1.6]">Cashless with Star Health, ICICI Lombard, HDFC ERGO. No-cost EMI available via Bajaj Finserv for surgical procedures above ₹50,000.</p>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="pt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-[12px] text-white/50">
      <p>© 2026 Gnathos Maxillofacial Surgery · All rights reserved</p>
      <div class="flex flex-wrap gap-x-5 gap-y-2">
        <a href="#" class="hover:text-white transition-colors">Privacy</a>
        <a href="#" class="hover:text-white transition-colors">Terms</a>
        <a href="#" class="hover:text-white transition-colors">Clinical Governance</a>
        <a href="#" class="hover:text-white transition-colors">Accessibility</a>
      </div>
    </div>

  </div>
</footer>

</main>
</body>
</html>