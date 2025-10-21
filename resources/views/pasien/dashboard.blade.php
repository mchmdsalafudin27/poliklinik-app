<x-layouts.app title="Dashboard Pasien">
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>5</h3>
                    <p>Kunjungan Bulan Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>12</h3>
                    <p>Total Kunjungan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-history"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>1</h3>
                    <p>Janji Mendatang</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Kunjungan Terbaru</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Poli</th>
                                <th>Dokter</th>
                                <th>Diagnosa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20 Okt 2024</td>
                                <td>Poli Umum</td>
                                <td>Dr. Ahmad</td>
                                <td>Demam Tinggi</td>
                                <td><span class="badge badge-success">Selesai</span></td>
                            </tr>
                            <tr>
                                <td>15 Okt 2024</td>
                                <td>Poli Gigi</td>
                                <td>Dr. Siti</td>
                                <td>Gigi Berlubang</td>
                                <td><span class="badge badge-success">Selesai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Informasi Kesehatan</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        <h5><i class="icon fas fa-info"></i> Tips Sehat!</h5>
                        Minum air putih 8 gelas per hari untuk menjaga kesehatan tubuh.
                    </div>
                    <div class="alert alert-warning">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Peringatan!</h5>
                        Jangan lupa kontrol rutin bulan depan.
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Janji Mendatang</h3>
                </div>
                <div class="card-body">
                    <div class="callout callout-info">
                        <h5>Poli Umum</h5>
                        <p><strong>Dokter:</strong> Dr. Ahmad<br>
                        <strong>Tanggal:</strong> 25 Okt 2024<br>
                        <strong>Jam:</strong> 10:00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>