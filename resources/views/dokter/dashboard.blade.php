<x-layouts.app title="Dashboard Dokter">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>25</h3>
                    <p>Pasien Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-injured"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>8</h3>
                    <p>Menunggu Periksa</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>150</h3>
                    <p>Total Pasien Bulan Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>5</h3>
                    <p>Jadwal Praktik</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pasien Menunggu</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Keluhan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Budi Santoso</td>
                                <td>Demam dan Batuk</td>
                                <td><button class="btn btn-sm btn-primary">Periksa</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sari Indah</td>
                                <td>Sakit Kepala</td>
                                <td><button class="btn btn-sm btn-primary">Periksa</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jadwal Praktik</h3>
                </div>
                <div class="card-body">
                    <div class="schedule-list">
                        <div class="alert alert-info">
                            <strong>Senin:</strong> 08:00 - 12:00 (Poli Umum)
                        </div>
                        <div class="alert alert-success">
                            <strong>Rabu:</strong> 13:00 - 17:00 (Poli Umum)
                        </div>
                        <div class="alert alert-warning">
                            <strong>Jumat:</strong> 09:00 - 15:00 (Poli Umum)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>