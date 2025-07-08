<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="dashboard-header">
  <h2 class="font-title">Welcome, Admin!</h2>
  <p class="mb-0">Here’s a quick overview of your site’s activity.</p>
</div>
<div class="row" style="display: flex; gap: 2em; flex-wrap: wrap;">
  <div class="card">
    <h4 class="text-theme" style="color:#9a563a; font-size:2em; margin:0;">12</h4>
    <p>Blog Posts</p>
  </div>
  <div class="card">
    <h4 class="text-theme" style="color:#9a563a; font-size:2em; margin:0;">7</h4>
    <p>Services</p>
  </div>
  <div class="card">
    <h4 class="text-theme" style="color:#9a563a; font-size:2em; margin:0;">5</h4>
    <p>Portfolio Items</p>
  </div>
  <div class="card">
    <h4 class="text-theme" style="color:#9a563a; font-size:2em; margin:0;">3</h4>
    <p>New Enquiries</p>
  </div>
</div>
<?= $this->endSection() ?> 