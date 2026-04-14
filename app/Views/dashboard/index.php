<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<div class="col-lg-12 mb-4 order-0">
  <div class="card">
    <div class="d-flex align-items-end row">
      <div class="col-sm-7">
        <div class="card-body">
          <h5 class="card-title text-primary">Welcome to HMS</h5>
          <p class="mb-4">
            Hotel management system that helps you manage your hotel bookings, guests,
            and assets.
          </p>
          <a href="javascript:;" class="btn btn-sm btn-outline-primary">New Booking</a>
        </div>
      </div>
      <div class="col-sm-5 text-center text-sm-left">
        <div class="card-body pb-0 px-0 px-md-4">
          <img
            src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png') ?>"
            height="140"
            alt="View Badge User"
            data-app-dark-img="illustrations/man-with-laptop-dark.png"
            data-app-light-img="illustrations/man-with-laptop-light.png" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12 col-md-12">
  <div class="row">
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Total Bookings</span>
          <h3 class="card-title mb-2">40</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Available Rooms</span>
          <h3 class="card-title mb-2">14</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Today's Booking</span>
          <h3 class="card-title mb-2">6</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Today's Cancellation</span>
          <h3 class="card-title mb-2">0</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Today's Check-In</span>
          <h3 class="card-title mb-2">6</h3>
        </div>
      </div>
    </div> 
    <div class="col-lg-2 col-md-6 mb-4">
      <div class="card">
        <div class="card-body">
          <span class="fw-semibold d-block mb-3">Today's Check-Out</span>
          <h3 class="card-title mb-2">0</h3>
        </div>
      </div>
    </div> 
  </div>
</div>

<?= $this->endSection() ?>