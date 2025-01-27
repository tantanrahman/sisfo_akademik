<div class="container-fluid">
  <div class="alert alert-success" role="alert">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <b>Dashboard</b>
  </div>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang</h4>
    <p>Selamat Datang <strong><?=$username;?></strong> di Sistem Informasi Akademik Universitas Tony Stark, Anda login sebagai <strong><?=$level;?></strong></p>
    <hr>
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-cogs"></i><b> Control Panel</b>
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i><b> Control Panel</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>MAHASISWA</b></p></a>
              <i class="fas fa-3x fa-user-graduate"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>TAHUN AKADEMIK</b></p></a>
              <i class="fas fa-3x fa-calendar-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>KRS</b></p></a>
              <i class="fas fa-3x fa-edit"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>KHS</b></p></a>
              <i class="fas fa-3x fa-file-alt"></i>
            </div>
          </div><hr>

          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>INPUT NILAI</b></p></a>
              <i class="fas fa-3x fa-sort-numeric-down"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>CETAK TRANSKIP</b></p></a>
              <i class="fas fa-3x fa-print"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>KATEGORI</b></p></a>
              <i class="fas fa-3x fa-list-ul"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>INFO KAMPUS</b></p></a>
              <i class="fas fa-3x fa-bullhorn"></i>
            </div>
          </div><hr>

          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>IDENTITAS</b></p></a>
              <i class="fas fa-3x fa-id-card-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>TENTANG KAMPUS</b></p></a>
              <i class="fas fa-3x fa-info-circle"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>FASILITAS</b></p></a>
              <i class="fas fa-3x fa-laptop"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?=base_url()?>"><p class="nav-link small text-info"><b>GALERI</b></p></a>
              <i class="fas fa-3x fa-image"></i>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Close</b></button>
        </div>
      </div>
    </div>
  </div>

</div>