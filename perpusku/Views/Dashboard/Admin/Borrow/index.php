<?php 

    use Perpus\Perpusku\Core\Flasher;
    require_once __DIR__ . '/../../Layouts/Head.php';
?>

<div class="container-fluid mt-4 px-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Borrow</h1>
    </div>
    <div class="table-responsive my-3">
            <?php Flasher::flash('admin/borrow') ?>
            <table class="table table-hover" id="BukuTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" data-priority="1" >Nama</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Qty</th>                    
                        <th scope="col">Status</th>                    
                        <th scope="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($data['borrow'] as $data): ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= htmlspecialchars($data['nama']) ?></td>
                            <td><?= htmlspecialchars($data['judul']) ?></td>
                            <td><?= htmlspecialchars($data['qty']) ?></td>
                            <td class="position-relative">
                                <span class="status text-white text-capitalize badge <?= $data['status'] == 'approved' ? 'bg-primary' : ($data['status'] == 'decline' ? 'bg-danger' : 'bg-warning') ?> py-2" data-status="<?= $data['id'] ?>"><?= htmlspecialchars($data['status']) ?> </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button data-id="<?= $data['id'] ?>" data-type="decline" type="button" class="btn btn-danger ml-1 confirm">
                                        <i class="fa-solid fa-x"></i>
                                    </button>
                                    <button  data-id="<?= $data['id'] ?>" data-type="approve" type="button" class="btn btn-primary ml-1 confirm">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</div>

<?php require_once __DIR__ . '/../../Layouts/Foot.php' ?>
<?php require_once __DIR__ . '/../../Components/Borrow.php' ?>
