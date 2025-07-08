<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2em;">
    <h2 class="font-title">Team Management</h2>
    <a href="#" class="vs-btn">+ Add New Member</a>
</div>
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($team as $member): ?>
        <tr>
            <td><?= esc($member['name']) ?></td>
            <td><?= esc($member['role']) ?></td>
            <td>
                <span class="<?= $member['status']==='Active' ? 'vs-btn' : '' ?>" style="padding:4px 12px;border-radius:12px;font-size:0.95em;font-weight:500;<?= $member['status']==='Active' ? '' : 'background:#fde5d8;color:#9a563a;' ?>">
                    <?= esc($member['status']) ?>
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