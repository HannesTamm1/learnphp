<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container my-4">

    <h1 class="mb-4">Edit User</h1>

    <div class="card shadow-sm" style="max-width: 500px;">
        <div class="card-body">

            <form method="POST" action="/users/update">
                <input type="hidden" name="id" value="<?= $user->id ?>">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        value="<?= htmlspecialchars($user->email) ?>" 
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        name="password"
                        placeholder="Leave empty to keep current password"
                    >
                </div>

                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="/users" class="btn btn-secondary ms-2">Back</a>

            </form>
        </div>
    </div>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
