<!-- Modal -->
<!-- todo: check use one modal -->
<!-- Modal Delete -->
<div class="modal modal-default fade" id="modal-delete">
    <div class="modal-dialog">
        <form action="" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete Product</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to delete this product</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Modal Delete -->

<!-- Modal Restore -->
<div class="modal modal-default fade" id="modal-restore">
    <div class="modal-dialog">
        <form action="" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Restore Product</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to restore this product</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Restore</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Modal Restore -->

<!-- Modal Ban -->
<div class="modal modal-default fade" id="modal-ban">
    <div class="modal-dialog">
        <form action="" method="POST">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Remove Product</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to remove this product</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Remove</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Modal Ban -->

<!-- Modal Show/Hide -->
<div class="modal modal-default fade" id="modal-show">
    <div class="modal-dialog">
        <form action="" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="is_show" id="show">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Show Product</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to continue</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Modal Show/Hide -->

<!-- Modal Lock/Unlock -->
<div class="modal modal-default fade" id="modal-lock">
    <div class="modal-dialog">
        <form action="" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="is_lock" id="lock">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Lock Product</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to continue</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">OK</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /Modal Lock/Unlock -->
<!-- /Modal -->