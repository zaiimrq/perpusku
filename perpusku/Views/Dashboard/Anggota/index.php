
<?php require_once __DIR__ . "/../Layouts/Head.php" ?>

    <div class="container-fluid mt-4 px-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 pl-3">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['data']['total'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 pl-3">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Approved</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['data']['approved'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            </div>
             <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2 pl-3">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['data']['pending'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div class="row my-3">
                <div class="col-lg-10">
                    <div class="table-responsive my-3">
                        <table class="table table-hover" id="BukuTable">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" data-priority="1" >Judul</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Status</th>
                
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($data['borrow'] as $data): ?>
                                    <tr>
                                        <th scope="row"><?= $i++ ?></th>
                                        <td ><?= htmlspecialchars($data['judul']) ?></td>
                                        <td><?= htmlspecialchars($data['qty']) ?></td>
                                        <td class="text-capitalize" >
                                            <p class="badge <?= $data['status'] == 'approved' ? 'bg-primary' : ($data['status'] == 'decline' ? 'bg-danger' : 'bg-warning') ?> py-2">
                                                <?= htmlspecialchars($data['status']) ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once __DIR__ . "/../Layouts/Foot.php" ?>
<script>let table = new DataTable('#BukuTable');</script>