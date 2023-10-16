        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; perpusku <?= date('Y') ?></span>
                </div>
            </div>
        </footer>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="h3 text-gray-800">See you next time&#x1F44B&#x1F44B </p>             
                   <?php if (isset($_SESSION['auth']['admin'])): ?>
                        <p class="h4 text-gray-800">Admin</p>
                    <?php elseif (isset($_SESSION['auth']['anggota'])): ?>
                       <p class="h4 text-gray-800" > <?= $_SESSION['auth']['user']['nama'] ?? false ?></p>
                    <?php endif ?>                
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= BASEURL ?>/logout">Logout</a>
            </div>
        </div>
    </div>
</div>