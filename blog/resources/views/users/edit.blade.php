
  <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <form id="form-edit">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        {{-- <input type="text" class="form-control" id="name1" class="name1" placeholder="name"> --}}
                        <h1 id="name1"></h1>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" id="email1" class="email1" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" id="password1" class="password1" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label>course</label>
                        <input type="text" class="form-control" id="course1" class="course1"  placeholder="course">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary update">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

