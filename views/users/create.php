<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container my-4">

    <h1 class="mb-4">Add New User</h1>

    <div class="card shadow-sm" style="max-width: 500px;">
        <div class="card-body">

            <form method="POST" action="/users/create">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        name="email" 
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-success">Create User</button>
                <a href="/users" class="btn btn-secondary ms-2">Cancel</a>

            </form>

        </div>
    </div>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
