<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2em;">
    <h2 class="font-title">Portfolio Management</h2>
    <a href="#" class="vs-btn">+ Add New Item</a>
</div>
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Type</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($portfolio as $item): ?>
        <tr>
            <td><?= esc($item['title']) ?></td>
            <td><?= esc($item['type']) ?></td>
            <td>
                <span class="<?= $item['status']==='Visible' ? 'vs-btn' : '' ?>">
                    <?= esc($item['status']) ?>
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