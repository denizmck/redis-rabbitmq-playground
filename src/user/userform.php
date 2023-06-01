<form action="handler/new_user_handler.php" method="post" class="mb-3">
    <h4>Create new User</h4>
    <div class="row mb-3">
        <div class="col">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-6">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>
        </div>
        <div class="col-6">
            <label for="lasttname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lasttname" name="lastname" required>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Create User</button>
</form>

<form action="handler/delete_user_handler.php" method="post" class="border-top pt-3">
    <h4>Delete User by ID</h4>
    <label for="del_id" class="form-label">ID</label>
    <div class="row mb-3">
        <div class="col">
            <input type="text" class="form-control" id="del_id" name="del_id" required>
        </div>
        <div class="col-3">
            <button class="btn btn-primary w-100" type="submit">Delete User</button>
        </div>
    </div>
</form>