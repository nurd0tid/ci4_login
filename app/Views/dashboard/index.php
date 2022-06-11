<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="col-12">
        <div class="card author-box">
          <div class="card-body">
            <div class="author-box-center">
              <img alt="image" src="uploads/img/<?= user()->photo; ?>" class="rounded-circle author-box-picture">
              <div class="clearfix"></div>
              <div class="author-box-name">
                <a href="#"><?= user()->firstname; ?> <?= user()->lastname; ?></a>
              </div>
              <div class="author-box-job">Web Developer</div>
            </div>
            <div class="text-center">
              <div class="author-box-description">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias
                  minus quod dignissimos.
                </p>
                <p>Email : <b><?= user()->email; ?></b></p>
                <p>Created at : <b><?= user()->created_at; ?></b></p>
                <p>Updated at : <b><?= user()->updated_at; ?></b></p>
              </div>
              <div class="mb-2 mt-3">
                <div class="text-small font-weight-bold">Follow <?= user()->username; ?> On</div>
              </div>
              <a href="https://github.com/nurd0tid" class="btn btn-social-icon mr-1 btn-github">
                <i class="fab fa-github"></i>
              </a>
              <div class="w-100 d-sm-none"></div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?= $this->endSection(); ?>