<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>


<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
    <div class="row g-0">
        <div class="col-md-8">
            <h5 class="card-header" style="padding-top: unset; padding-left: unset;">Room Types List</h5>
        </div>
        <?php if (session('role') === 'user'): ?>
            <div class="col-md-4">
                <a href="#" class="btn btn-primary btn-sm float-end">Create New Room Types</a>
            </div>
        <?php endif; ?>
    </div>


</div>

<div class="table-responsive text-nowrap">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th class="text-end">Base Price</th>
                <th class="text-center">Max Guest</th>
                <th class="text-center">Room Size (m²)</th>
                <th width="120">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php if (count($roomTypes) > 0): ?>
                <?php foreach ($roomTypes as $type): ?>
                    <tr>
                        <td><strong><?= esc($type['room_type_name']) ?></strong></td>
                        <td><?= esc($type['description']) ?></td>
                        <td class="text-end">
                            Rp <?= number_format($type['base_price'], 0, ',', '.') ?>
                        </td>
                        <td class="text-center">
                            <?= esc($type['max_guest']) ?> pax
                        </td>
                        <td class="text-center">
                            <?= esc($type['room_size']) ?>
                        </td>
                        <td>

                            <a href="<?= base_url('room-types/' . $type['id'] . '/detail') ?>">Detail</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center">No types found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>