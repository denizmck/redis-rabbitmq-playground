<form action="index.php" method="post">
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