<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? esc($title) : 'Admin Panel' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Marcellus&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/admin.css">
</head>
<body class="admin">
    <nav class="admin-navbar">
        <div class="navbar-left">
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Open sidebar" tabindex="0" style="display:none;">
                <i class="fas fa-bars"></i>
            </button>
            <span class="navbar-logo">Style With J</span>
        </div>
        <div class="navbar-center">
            <span class="navbar-title">
                <?= isset($header) ? esc($header) : 'Admin Panel' ?>
            </span>
        </div>
        <div class="navbar-right">
            <div class="navbar-user-dropdown">
                <span class="navbar-user">Admin <i class="fas fa-caret-down"></i></span>
                <div class="navbar-dropdown-content">
                    <form method="post" action="<?= base_url('/admin/logout') ?>">
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="admin-layout">
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="logo">Style With J</div>
            <nav>
                <ul>
                    <li><a href="<?= base_url('/admin/dashboard') ?>" class="<?= (uri_string() == 'admin/dashboard') ? 'active' : '' ?>">Dashboard</a></li>
                    <li><a href="<?= base_url('/admin/blog') ?>" class="<?= (uri_string() == 'admin/blog') ? 'active' : '' ?>">Blog</a></li>
                    <li><a href="<?= base_url('/admin/services') ?>" class="<?= (uri_string() == 'admin/services') ? 'active' : '' ?>">Services</a></li>
                    <li><a href="<?= base_url('/admin/portfolio') ?>" class="<?= (uri_string() == 'admin/portfolio') ? 'active' : '' ?>">Portfolio</a></li>
                    <li><a href="<?= base_url('/admin/enquiries') ?>" class="<?= (uri_string() == 'admin/enquiries') ? 'active' : '' ?>">Enquiries</a></li>
                    <li><a href="<?= base_url('/admin/team') ?>" class="<?= (uri_string() == 'admin/team') ? 'active' : '' ?>">Team</a></li>
                    <li><a href="<?= base_url('/admin/settings') ?>" class="<?= (uri_string() == 'admin/settings') ? 'active' : '' ?>">Settings</a></li>
                    <li>
                        <form method="post" action="<?= base_url('/admin/logout') ?>" class="logout-form">
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="admin-sidebar-overlay" id="sidebarOverlay"></div>
        <main class="admin-main-wrapper with-navbar">
            <div class="admin-main">
                <?= $this->renderSection('content') ?>
            </div>
        </main>
    </div>
<script>
// Sidebar toggle for mobile/tablet
const sidebar = document.getElementById('adminSidebar');
const toggleBtn = document.getElementById('sidebarToggle');
const overlay = document.getElementById('sidebarOverlay');
function updateSidebarToggle() {
    if (window.innerWidth <= 900) {
        toggleBtn.style.display = 'inline-flex';
        sidebar.classList.remove('open');
    } else {
        toggleBtn.style.display = 'none';
        sidebar.classList.remove('open');
    }
}
toggleBtn.addEventListener('click', function() {
    sidebar.classList.toggle('open');
    overlay.style.display = sidebar.classList.contains('open') ? 'block' : 'none';
});
overlay.addEventListener('click', function() {
    sidebar.classList.remove('open');
    overlay.style.display = 'none';
});
window.addEventListener('resize', updateSidebarToggle);
document.addEventListener('DOMContentLoaded', updateSidebarToggle);
</script>
</body>
</html> 