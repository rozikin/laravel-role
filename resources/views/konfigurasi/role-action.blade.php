<div class="modal-content">
    <form id="formAction" action="{{ $role->id ? route('roles.update', $role->id) : route('roles.store') }}"
        method="post">
        @csrf
        @if($role->id)
        @method('put')
        @endif

        <div class="modal-header">
            <h5 class="modal-title" id="largeModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="roleName" class="form-label">Name</label>
                        <input type="text" placeholder="Role Name" class="form-control" id="roleName" name="name"
                            value="{{ $role->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="basicInput" class="form-label">Guard Name</label>
                        <input type="text" placeholder="Guard Name" class="form-control" id="guardName"
                            name="guard_name" value="{{ $role->guard_name }}">
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>