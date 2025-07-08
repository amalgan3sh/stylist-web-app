<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2em;">
    <h2 class="font-title">Blog Management</h2>
    <a href="#" class="vs-btn">+ Add New Post</a>
</div>
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= esc($post['title']) ?></td>
            <td><?= esc($post['date']) ?></td>
            <td>
                <span class="<?= $post['status']==='Published' ? 'vs-btn' : '' ?>" style="padding:4px 12px;border-radius:12px;font-size:0.95em;font-weight:500;<?= $post['status']==='Published' ? '' : 'background:#fde5d8;color:#9a563a;' ?>">
                    <?= esc($post['status']) ?>
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