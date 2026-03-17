<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>


<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
    <div class="row g-0">
        <div class="col-md-8">
            <h5 class="card-header" style="padding-top: unset; padding-left: unset;">Room List</h5>
        </div>
        <?php if (session('role') === 'user'): ?>
            <div class="col-md-4">
                <a href="#" class="btn btn-primary btn-sm float-end">Create New Room</a>
            </div>
        <?php endif; ?>
    </div>


</div>

<div class="table-responsive text-nowrap">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Floor</th>
                <th>Status</th>
                <th>Clean Status</th>
                <th width="120">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if (count($rooms) > 0): ?>
                <?php foreach ($rooms as $room): ?>
                    <tr>
                        <td><?= esc($room['room_number']) ?></td>
                        <td><?= esc($room['room_type_name'] ?? '-') ?></td>
                        <td><?= esc($room['floor']) ?></td>
                        <td>
                            <?php if ($room['status'] == 'available'): ?>
                                <span class="badge bg-success">Available</span>
                            <?php elseif ($room['status'] == 'occupied'): ?>
                                <span class="badge bg-danger">Occupied</span>
                            <?php else: ?>
                                <span class="badge bg-secondary"><?= esc($room['status']) ?></span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($room['clean_status'] == 'clean'): ?>
                                <span class="badge bg-success">Clean</span>
                            <?php else: ?>
                                <span class="badge bg-warning text-dark">
                                    <?= esc($room['clean_status']) ?>
                                </span>
                            <?php endif; ?>
                        </td>
                        <td>
                            
                            <a href="<?= base_url('rooms/' . $room['id'] . '/detail') ?>">Detail</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center">No rooms found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>