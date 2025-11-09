<footer id="footer" class="footer light-background">
  <div class="container footer-top">
    <div class="row gy-4">

      <!-- Kolom 1: Tentang Aplikasi -->
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          <span class="sitename">{{ config('app.name', 'Medilab') }}</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Jl. Melati No. 23</p>
          <p>Bandung, Jawa Barat, Indonesia</p>
          <p class="mt-3"><strong>Telepon:</strong> <span>+62 812 3456 7890</span></p>
          <p><strong>Email:</strong> <span>info@medilab.id</span></p>
        </div>
        <div class="social-links d-flex mt-4">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <!-- Kolom 2: Tautan Cepat -->
      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Tautan Cepat</h4>
        <ul>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#posyandu">Posyandu</a></li>
          <li><a href="#warga">Warga</a></li>
          <li><a href="#warga">User</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Bantuan -->
      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Bantuan</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Syarat & Ketentuan</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">Kontak Kami</a></li>
        </ul>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span>
      <strong class="px-1 sitename">{{ config('app.name', 'Medilab') }}</strong>
      <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      Dikembangkan oleh <a href="#">Tim IT Posyandu</a> — Template by
      <a href="https://bootstrapmade.com/">BootstrapMade</a>,
      Didistribusikan oleh <a href="https://themewagon.com/">ThemeWagon</a>
    </div>
  </div>
</footer>
