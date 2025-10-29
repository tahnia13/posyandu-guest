<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSYANDU SEHAT - Sistem Informasi Posyandu Terpadu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f9fc;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: #2c7fb8;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            margin-left: 10px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            align-items: center;
        }
        
        nav ul li {
            margin-left: 20px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        nav ul li a:hover, nav ul li a.active {
            background-color: rgba(255,255,255,0.2);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .logout-btn:hover {
            background-color: #c82333;
        }
        
        .tagline {
            font-style: italic;
            font-size: 0.9rem;
            text-align: center;
            margin-top: 5px;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #2c7fb8 0%, #7cafd6 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: white;
            color: #2c7fb8;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #f0f8ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        /* Main Content */
        .main-content {
            display: flex;
            gap: 30px;
            margin-bottom: 3rem;
        }
        
        .content {
            flex: 3;
        }
        
        .sidebar {
            flex: 1;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        /* CRUD Section */
        .crud-section {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .section-title {
            color: #2c7fb8;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eaeaea;
        }
        
        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            border-color: #2c7fb8;
            outline: none;
            box-shadow: 0 0 0 2px rgba(44, 127, 184, 0.2);
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .btn-primary {
            background-color: #2c7fb8;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #236a9e;
        }
        
        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-danger:hover {
            background-color: #c82333;
        }
        
        .btn-edit {
            background-color: #ffc107;
            color: #212529;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-edit:hover {
            background-color: #e0a800;
        }
        
        /* Table Styles */
        .table-container {
            overflow-x: auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eaeaea;
        }
        
        table th {
            background-color: #f8f9fa;
            font-weight: 600;
            color: #555;
        }
        
        table tr:hover {
            background-color: #f8f9fa;
        }
        
        .actions {
            display: flex;
            gap: 8px;
        }
        
        /* Services Section */
        .services {
            margin-top: 3rem;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .service-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: #2c7fb8;
            margin-bottom: 15px;
        }
        
        .service-card h3 {
            margin-bottom: 10px;
            color: #2c7fb8;
        }
        
        /* Footer */
        footer {
            background-color: #2c7fb8;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .modal-title {
            font-size: 1.5rem;
            color: #2c7fb8;
        }
        
        .close {
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
        }
        
        .close:hover {
            color: #333;
        }
        
        /* Login Form */
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .login-title {
            text-align: center;
            color: #2c7fb8;
            margin-bottom: 30px;
        }
        
        .alert {
            padding: 12px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        /* Protected Content */
        .protected-content {
            display: none;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 15px;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .main-content {
                flex-direction: column;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .user-info {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <h1>POSYANDU SEHAT</h1>
                </div>
                <nav>
                    <ul id="navMenu">
                        <!-- Menu akan diisi oleh JavaScript berdasarkan status login -->
                    </ul>
                </nav>
            </div>
            <div class="tagline">
                Informasi Tentang Posyandu Terpadu
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="heroSection">
        <div class="container">
            <h2>Informasi Posyandu Terpadu</h2>
            <p>Mendukung kesehatan ibu dan anak melalui pelayanan posyandu yang terintegrasi dan modern.</p>
            <div class="hero-buttons" id="heroButtons">
                <!-- Tombol akan diisi oleh JavaScript berdasarkan status login -->
            </div>
        </div>
    </section>

    <!-- Login Form -->
    <div class="container" id="loginSection">
        <div class="login-container">
            <h2 class="login-title">Login</h2>
            <div id="loginMessage"></div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary" style="width: 100%;">Login</button>
                </div>
            </form>
            
        </div>
    </div>

    <!-- Main Content (Protected) -->
    <div class="container protected-content" id="mainContent">
        <div class="main-content">
            <div class="content">
                <!-- CRUD Section -->
                <section class="crud-section">
                    <h2 class="section-title">Kelola Data Posyandu</h2>
                    
                    <!-- Form Tambah/Edit Posyandu -->
                    <form id="posyanduForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama">Nama Posyandu</label>
                                <input type="text" id="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kode">Kode Posyandu</label>
                                <input type="text" id="kode" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan">Kelurahan</label>
                                <input type="text" id="kelurahan" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" id="kecamatan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" id="kota" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" id="telepon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea id="keterangan" class="form-control" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-primary" id="submitBtn">Tambah Posyandu</button>
                            <button type="button" class="btn-secondary" id="cancelBtn" style="display: none;">Batal</button>
                        </div>
                    </form>
                    
                    <!-- Tabel Data Posyandu -->
                    <div class="table-container">
                        <h3 style="margin-top: 30px;">Daftar Posyandu</h3>
                        <table id="posyanduTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posyandu</th>
                                    <th>Kode</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="posyanduTableBody">
                                <!-- Data akan diisi oleh JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            
            <div class="sidebar">
                <h3 class="section-title">Layanan yang Tersedia</h3>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon"></div>
                        <h3>Pemeriksaan Bayi</h3>
                        <p>Pemeriksaan kesehatan dan tumbuh kembang bayi secara berkala</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"></div>
                        <h3>Kesehatan Ibu</h3>
                        <p>Pemeriksaan dan konsultasi kesehatan ibu hamil dan menyusui</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"></div>
                        <h3>Imunisasi</h3>
                        <p>Pelayanan imunisasi lengkap untuk bayi dan balita</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon"></div>
                        <h3>Pemantauan Gizi</h3>
                        <p>Pemantauan status gizi dan pemberian makanan tambahan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Konfirmasi Hapus</h3>
                <span class="close">&times;</span>
            </div>
            <p>Apakah Anda yakin ingin menghapus data posyandu ini?</p>
            <div style="margin-top: 20px; text-align: right;">
                <button class="btn-secondary" id="cancelDelete">Batal</button>
                <button class="btn-danger" id="confirmDelete">Hapus</button>
            </div>
        </div>
    </div>

    <script>
        // Data user untuk demo
        const users = [
            { username: 'Tahnia', password: 'Tahnia123', name: 'Guest' },
            { username: 'posyandu', password: 'posyandu123', name: 'Operator Posyandu' }
        ];

        // Data contoh untuk demo
        let posyanduData = [
            { id: 1, nama: "Posyandu Mawar", kode: "PSY001", alamat: "Jl. Melati No. 10", kelurahan: "Melati", kecamatan: "Sukajadi", kota: "Bandung", telepon: "022-123456", email: "posyandumawar@example.com", keterangan: "Posyandu aktif dengan layanan lengkap" },
            { id: 2, nama: "Posyandu Melati", kode: "PSY002", alamat: "Jl. Anggrek No. 5", kelurahan: "Cipedes", kecamatan: "Sukajadi", kota: "Bandung", telepon: "022-654321", email: "posyandumelati@example.com", keterangan: "Fokus pada kesehatan ibu dan anak" }
        ];

        let currentEditId = null;
        let currentDeleteId = null;
        let currentUser = null;

        // DOM Elements
        const navMenu = document.getElementById('navMenu');
        const heroSection = document.getElementById('heroSection');
        const heroButtons = document.getElementById('heroButtons');
        const loginSection = document.getElementById('loginSection');
        const mainContent = document.getElementById('mainContent');
        const loginForm = document.getElementById('loginForm');
        const loginMessage = document.getElementById('loginMessage');
        const posyanduForm = document.getElementById('posyanduForm');
        const posyanduTableBody = document.getElementById('posyanduTableBody');
        const submitBtn = document.getElementById('submitBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const deleteModal = document.getElementById('deleteModal');
        const cancelDeleteBtn = document.getElementById('cancelDelete');
        const confirmDeleteBtn = document.getElementById('confirmDelete');
        const closeModalBtn = document.querySelector('.close');

        // Fungsi untuk mengecek status login
        function checkLoginStatus() {
            const loggedInUser = localStorage.getItem('loggedInUser');
            if (loggedInUser) {
                currentUser = JSON.parse(loggedInUser);
                showProtectedContent();
            } else {
                showLoginForm();
            }
        }

        // Fungsi untuk menampilkan form login
        function showLoginForm() {
            loginSection.style.display = 'block';
            mainContent.style.display = 'none';
            heroSection.style.display = 'block';
            
            // Update navigation menu
            navMenu.innerHTML = `
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="#" onclick="showLoginForm()">Data Posyandu</a></li>
                <li><a href="#" onclick="showLoginForm()" class="active">Login</a></li>
            `;
            
            // Update hero buttons
            heroButtons.innerHTML = `
                <a href="#" class="btn" onclick="showLoginForm()"><i>👥</i> Lihat Data Posyandu</a>
                <a href="#" class="btn" onclick="showLoginForm()"><i>🔍</i> Login</a>
            `;
        }

        // Fungsi untuk menampilkan konten yang diproteksi
        function showProtectedContent() {
            loginSection.style.display = 'none';
            mainContent.style.display = 'block';
            heroSection.style.display = 'none';
            
            // Update navigation menu
            navMenu.innerHTML = `
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="#">Data Posyandu</a></li>
                <li>
                    <div class="user-info">
                        <span>Halo, ${currentUser.name}</span>
                        <button class="logout-btn" onclick="logout()">Logout</button>
                    </div>
                </li>
            `;
            
            renderTable();
        }

        // Fungsi untuk login
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Cek kredensial
            const user = users.find(u => u.username === username && u.password === password);
            
            if (user) {
                // Login berhasil
                currentUser = user;
                localStorage.setItem('loggedInUser', JSON.stringify(user));
                showProtectedContent();
                showMessage('Login berhasil!', 'success');
            } else {
                // Login gagal
                showMessage('Username atau password salah!', 'error');
            }
        });

        // Fungsi untuk logout
        function logout() {
            currentUser = null;
            localStorage.removeItem('loggedInUser');
            showLoginForm();
            showMessage('Anda telah logout.', 'success');
            loginForm.reset();
        }

        // Fungsi untuk menampilkan pesan
        function showMessage(message, type) {
            loginMessage.innerHTML = `
                <div class="alert alert-${type}">
                    ${message}
                </div>
            `;
            
            // Hapus pesan setelah 3 detik
            setTimeout(() => {
                loginMessage.innerHTML = '';
            }, 3000);
        }

        // Fungsi untuk menampilkan data di tabel
        function renderTable() {
            posyanduTableBody.innerHTML = '';
            
            posyanduData.forEach((posyandu, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${posyandu.nama}</td>
                    <td>${posyandu.kode}</td>
                    <td>${posyandu.alamat}</td>
                    <td>${posyandu.telepon}</td>
                    <td class="actions">
                        <button class="btn-edit" onclick="editPosyandu(${posyandu.id})">Edit</button>
                        <button class="btn-danger" onclick="showDeleteModal(${posyandu.id})">Hapus</button>
                    </td>
                `;
                posyanduTableBody.appendChild(row);
            });
        }

        // Fungsi untuk mengosongkan form
        function resetForm() {
            posyanduForm.reset();
            currentEditId = null;
            submitBtn.textContent = 'Tambah Posyandu';
            cancelBtn.style.display = 'none';
        }

        // Fungsi untuk menambah atau mengedit posyandu
        posyanduForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                id: currentEditId || (posyanduData.length > 0 ? Math.max(...posyanduData.map(p => p.id)) + 1 : 1),
                nama: document.getElementById('nama').value,
                kode: document.getElementById('kode').value,
                alamat: document.getElementById('alamat').value,
                kelurahan: document.getElementById('kelurahan').value,
                kecamatan: document.getElementById('kecamatan').value,
                kota: document.getElementById('kota').value,
                telepon: document.getElementById('telepon').value,
                email: document.getElementById('email').value,
                keterangan: document.getElementById('keterangan').value
            };
            
            if (currentEditId) {
                // Edit data yang sudah ada
                const index = posyanduData.findIndex(p => p.id === currentEditId);
                if (index !== -1) {
                    posyanduData[index] = formData;
                }
            } else {
                // Tambah data baru
                posyanduData.push(formData);
            }
            
            renderTable();
            resetForm();
            
            // Tampilkan pesan sukses
            alert(currentEditId ? 'Data posyandu berhasil diperbarui!' : 'Data posyandu berhasil ditambahkan!');
        });

        // Fungsi untuk mengedit posyandu
        window.editPosyandu = function(id) {
            const posyandu = posyanduData.find(p => p.id === id);
            if (posyandu) {
                document.getElementById('nama').value = posyandu.nama;
                document.getElementById('kode').value = posyandu.kode;
                document.getElementById('alamat').value = posyandu.alamat;
                document.getElementById('kelurahan').value = posyandu.kelurahan;
                document.getElementById('kecamatan').value = posyandu.kecamatan;
                document.getElementById('kota').value = posyandu.kota;
                document.getElementById('telepon').value = posyandu.telepon;
                document.getElementById('email').value = posyandu.email;
                document.getElementById('keterangan').value = posyandu.keterangan;
                
                currentEditId = id;
                submitBtn.textContent = 'Update Posyandu';
                cancelBtn.style.display = 'inline-block';
                
                // Scroll ke form
                document.getElementById('nama').scrollIntoView({ behavior: 'smooth' });
            }
        };

        // Fungsi untuk menampilkan modal konfirmasi hapus
        window.showDeleteModal = function(id) {
            currentDeleteId = id;
            deleteModal.style.display = 'flex';
        };

        // Fungsi untuk menghapus posyandu
        confirmDeleteBtn.addEventListener('click', function() {
            if (currentDeleteId) {
                posyanduData = posyanduData.filter(p => p.id !== currentDeleteId);
                renderTable();
                deleteModal.style.display = 'none';
                alert('Data posyandu berhasil dihapus!');
            }
        });

        // Event listener untuk tombol batal di form
        cancelBtn.addEventListener('click', resetForm);

        // Event listener untuk tombol batal di modal hapus
        cancelDeleteBtn.addEventListener('click', function() {
            deleteModal.style.display = 'none';
        });

        // Event listener untuk tombol close di modal
        closeModalBtn.addEventListener('click', function() {
            deleteModal.style.display = 'none';
        });

        // Tutup modal jika mengklik di luar konten modal
        window.addEventListener('click', function(e) {
            if (e.target === deleteModal) {
                deleteModal.style.display = 'none';
            }
        });

        // Inisialisasi aplikasi saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            checkLoginStatus();
        });
    </script>
</body>
</html>