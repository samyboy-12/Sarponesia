<?php
session_start();

// Initialize user session
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'name' => 'Jacob',
        'role' => 'Admin 2'
    ];
}

// Initialize data arrays if they don't exist
if (!isset($_SESSION['programs'])) {
    $_SESSION['programs'] = [];
}

if (!isset($_SESSION['team_members'])) {
    $_SESSION['team_members'] = [];
}

if (!isset($_SESSION['contacts'])) {
    $_SESSION['contacts'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_program'])) {
        // Process program addition
        $program = [
            'name' => $_POST['program_name'] ?? '',
            'description' => $_POST['program_desc'] ?? ''
        ];
        $_SESSION['programs'][] = $program;
        $success_message = "Program added successfully!";
    }
    
    if (isset($_POST['add_team'])) {
        // Process team addition
        $team_member = [
            'name' => $_POST['team_name'] ?? '',
            'role' => $_POST['team_role'] ?? ''
        ];
        $_SESSION['team_members'][] = $team_member;
        $success_message = "Team member added successfully!";
    }
    
    if (isset($_POST['add_contact'])) {
        // Process contact addition
        $contact = [
            'name' => $_POST['contact_name'] ?? '',
            'info' => $_POST['contact_info'] ?? '',
            'type' => $_POST['contact_type'] ?? ''
        ];
        $_SESSION['contacts'][] = $contact;
        $success_message = "Contact added successfully!";
    }
    
    // Handle deletions
    if (isset($_POST['delete_program'])) {
        $index = $_POST['program_index'];
        if (isset($_SESSION['programs'][$index])) {
            array_splice($_SESSION['programs'], $index, 1);
            $success_message = "Program deleted successfully!";
        }
    }
    
    if (isset($_POST['delete_team'])) {
        $index = $_POST['team_index'];
        if (isset($_SESSION['team_members'][$index])) {
            array_splice($_SESSION['team_members'], $index, 1);
            $success_message = "Team member deleted successfully!";
        }
    }
    
    if (isset($_POST['delete_contact'])) {
        $index = $_POST['contact_index'];
        if (isset($_SESSION['contacts'][$index])) {
            array_splice($_SESSION['contacts'], $index, 1);
            $success_message = "Contact deleted successfully!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kerjasama - Sarponesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      display: flex;
      min-height: 100vh;
      background-color: #f4f4f4;
    }

    aside {
      width: 230px;
      background-color: #1c1c1c;
      color: white;
      padding: 2rem 1rem;
    }

    aside h2 {
      font-size: 1.2rem;
      margin-bottom: 3rem;
      text-align: center;
    }

    aside nav ul {
      list-style: none;
    }

    aside nav ul li {
      margin: 1.2rem 0;
      font-size: 0.95rem;
    }

    aside nav ul li a {
      text-decoration: none;
      color: white;
    }

    main {
      flex: 1;
      padding: 2rem;
      background-color: #f4f4f4;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-bar .user-info {
      background: #eee;
      padding: 0.5rem 1rem;
      border-radius: 8px;
    }

    .content {
      margin-top: 2rem;
      background: white;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .kerjasama-section {
      margin-bottom: 1.5rem;
    }

    .kerjasama-section h3 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .kerjasama-section button {
      background: #a37a40;
      color: white;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      margin-right: 0.5rem;
    }

    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      width: 500px;
      max-width: 90%;
    }

    .modal h4 {
      margin-bottom: 1rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .form-group input, .form-group textarea, .form-group select {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .form-actions {
      display: flex;
      justify-content: flex-end;
      gap: 1rem;
      margin-top: 1rem;
    }

    .form-actions button {
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-actions .cancel {
      background: #eee;
    }

    .form-actions .submit {
      background: #a37a40;
      color: white;
    }

    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }

    .data-table th, .data-table td {
      padding: 0.75rem;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .data-table th {
      background-color: #f4f4f4;
      font-weight: 600;
    }

    .success-message {
      background-color: #d4edda;
      color: #155724;
      padding: 0.75rem 1.25rem;
      border-radius: 4px;
      margin-bottom: 1rem;
    }
    
    .danger-button {
      background: #dc3545;
      color: white;
    }
  </style>
</head>

<body>
  <aside>
    <h2>SARPONESIA<br><small style="font-weight: 400; font-size: 0.8rem;">INDONESIAN COFFEE</small></h2>
    <nav>
      <ul>
  <li><a href="{{ route('manajemen-produk') }}">Manajemen Produk</a></li>
  <li><a href="{{ route('manajemen-layanan') }}">Manajemen Layanan & Jasa</a></li>
  <li><a href="{{ route('order') }}">Order</a></li>
  <li><a href="{{ route('manajemen-artikel') }}">Manajemen Artikel</a></li>
  <li><a href="{{ route('home') }}">Manajemen Kerjasama</a></li>
  <li><a href="{{ route('home') }}">Keluar</a></li>
</ul>

    </nav>
  </aside>

  <main>
    <div class="top-bar">
      <h1>Manajemen Kerjasama</h1>
      <div class="user-info">
        <strong><?php echo htmlspecialchars($_SESSION['user']['name']); ?></strong><br><small><?php echo htmlspecialchars($_SESSION['user']['role']); ?></small>
      </div>
    </div>

    <div class="content">
      <?php if (!empty($success_message)): ?>
        <div class="success-message">
          <?php echo htmlspecialchars($success_message); ?>
        </div>
      <?php endif; ?>

      <div class="kerjasama-section">
        <h3>Program Kami</h3>
        <button onclick="openModal('programModal')">Tambah Program</button>
        
        <?php if (!empty($_SESSION['programs'])): ?>
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Program</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['programs'] as $index => $program): ?>
                <tr>
                  <td><?php echo htmlspecialchars($program['name']); ?></td>
                  <td><?php echo htmlspecialchars($program['description']); ?></td>
                  <td>
                    <form method="POST" style="display: inline;">
                      <input type="hidden" name="program_index" value="<?php echo $index; ?>">
                      <button type="submit" name="delete_program" class="danger-button">Hapus</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>Belum ada program yang ditambahkan.</p>
        <?php endif; ?>
      </div>

      <div class="kerjasama-section">
        <h3>Tim Kami</h3>
        <button onclick="openModal('teamModal')">Tambah Tim</button>
        
        <?php if (!empty($_SESSION['team_members'])): ?>
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Peran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['team_members'] as $index => $member): ?>
                <tr>
                  <td><?php echo htmlspecialchars($member['name']); ?></td>
                  <td><?php echo htmlspecialchars($member['role']); ?></td>
                  <td>
                    <form method="POST" style="display: inline;">
                      <input type="hidden" name="team_index" value="<?php echo $index; ?>">
                      <button type="submit" name="delete_team" class="danger-button">Hapus</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>Belum ada anggota tim yang ditambahkan.</p>
        <?php endif; ?>
      </div>

      <div class="kerjasama-section">
        <h3>Kontak Kami</h3>
        <button onclick="openModal('contactModal')">Tambah Kontak</button>
        
        <?php if (!empty($_SESSION['contacts'])): ?>
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Info Kontak</th>
                <th>Tipe</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['contacts'] as $index => $contact): ?>
                <tr>
                  <td><?php echo htmlspecialchars($contact['name']); ?></td>
                  <td><?php echo htmlspecialchars($contact['info']); ?></td>
                  <td><?php echo htmlspecialchars($contact['type']); ?></td>
                  <td>
                    <form method="POST" style="display: inline;">
                      <input type="hidden" name="contact_index" value="<?php echo $index; ?>">
                      <button type="submit" name="delete_contact" class="danger-button">Hapus</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>Belum ada kontak yang ditambahkan.</p>
        <?php endif; ?>
      </div>
    </div>

    <!-- Program Modal -->
    <div id="programModal" class="modal">
      <div class="modal-content">
        <h4>Tambah Program Baru</h4>
        <form method="POST" action="">
          <div class="form-group">
            <label for="program_name">Nama Program</label>
            <input type="text" id="program_name" name="program_name" required>
          </div>
          <div class="form-group">
            <label for="program_desc">Deskripsi</label>
            <textarea id="program_desc" name="program_desc" rows="4" required></textarea>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('programModal')">Batal</button>
            <button type="submit" class="submit" name="add_program">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Team Modal -->
    <div id="teamModal" class="modal">
      <div class="modal-content">
        <h4>Tambah Anggota Tim Baru</h4>
        <form method="POST" action="">
          <div class="form-group">
            <label for="team_name">Nama Anggota</label>
            <input type="text" id="team_name" name="team_name" required>
          </div>
          <div class="form-group">
            <label for="team_role">Peran</label>
            <input type="text" id="team_role" name="team_role" required>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('teamModal')">Batal</button>
            <button type="submit" class="submit" name="add_team">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Contact Modal -->
    <div id="contactModal" class="modal">
      <div class="modal-content">
        <h4>Tambah Kontak Baru</h4>
        <form method="POST" action="">
          <div class="form-group">
            <label for="contact_name">Nama Kontak</label>
            <input type="text" id="contact_name" name="contact_name" required>
          </div>
          <div class="form-group">
            <label for="contact_info">Info Kontak</label>
            <input type="text" id="contact_info" name="contact_info" required>
          </div>
          <div class="form-group">
            <label for="contact_type">Tipe Kontak</label>
            <select id="contact_type" name="contact_type" required>
              <option value="email">Email</option>
              <option value="phone">Telepon</option>
              <option value="whatsapp">WhatsApp</option>
              <option value="other">Lainnya</option>
            </select>
          </div>
          <div class="form-actions">
            <button type="button" class="cancel" onclick="closeModal('contactModal')">Batal</button>
            <button type="submit" class="submit" name="add_contact">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
      }

      function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
      }

      // Close modal when clicking outside of it
      window.onclick = function(event) {
        if (event.target.className === 'modal') {
          event.target.style.display = 'none';
        }
      }
    </script>
  </main>
</body>

</html>