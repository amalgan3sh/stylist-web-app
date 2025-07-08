<?= $this->extend('admin_layout') ?>
<?= $this->section('content') ?>
<div class="admin-page-header" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2em;">
    <h2 class="font-title">Enquiries</h2>
</div>
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($enquiries as $enquiry): ?>
        <tr>
            <td><?= esc($enquiry['name']) ?></td>
            <td><?= esc($enquiry['email']) ?></td>
            <td><?= esc($enquiry['subject']) ?></td>
            <td><?= esc($enquiry['date']) ?></td>
            <td>
                <span class="<?= $enquiry['status']==='New' ? 'vs-btn' : '' ?>">
                    <?= esc($enquiry['status']) ?>
                </span>
            </td>
            <td>
                <a href="#" class="text-theme" style="margin-right:18px;">View</a>
                <a href="#" style="color:#dc3545;">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
<?= $this->endSection() ?> 