<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2em;">
    <h2 class="font-title">Service Management</h2>
    <a href="#" class="vs-btn">+ Add New Service</a>
</div>
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($services as $service): ?>
        <tr>
            <td><?= esc($service['name']) ?></td>
            <td><?= esc($service['category']) ?></td>
            <td>
                <span class="<?= $service['status']==='Active' ? 'vs-btn' : '' ?>">
                    <?= esc($service['status']) ?>
                </span>
            </td>
            <td>
                <a href="#" class="text-theme" style="margin-right:18px;">Edit</a>
                <a href="#" style="color:#dc3545;">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?> 