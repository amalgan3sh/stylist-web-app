<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header">
    <h2 class="font-title">Settings</h2>
</div>
<div class="row" style="max-width:600px;">
    <form method="post" action="" class="mb-4">
        <h4 class="font-title" style="margin-bottom:1em;">Change Password</h4>
        <div class="mb-3">
            <label for="current_password">Current Password</label>
            <input type="password" id="current_password" name="current_password" required>
        </div>
        <div class="mb-3">
            <label for="new_password">New Password</label>
            <input type="password" id="new_password" name="new_password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password">Confirm New Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="vs-btn">Update Password</button>
    </form>
    <form method="post" action="" class="mb-4">
        <h4 class="font-title" style="margin-bottom:1em;">Site Settings</h4>
        <div class="mb-3">
            <label for="site_title">Site Title</label>
            <input type="text" id="site_title" name="site_title" value="<?= esc($site_title) ?>">
        </div>
        <div class="mb-3">
            <label for="site_email">Contact Email</label>
            <input type="email" id="site_email" name="site_email" value="<?= esc($site_email) ?>">
        </div>
        <button type="submit" class="vs-btn">Save Settings</button>
    </form>
</div>
<?= $this->endSection() ?> 