<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container my-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="m-0">Users</h1>

        <a href="/users/create" class="btn btn-success">
            + Add Account
        </a>
    </div>

    <table class="table table-bordered table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($users as $u): ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= htmlspecialchars($u->email) ?></td>
                    <td>
                        <a href="/users/edit?id=<?= $u->id ?>" class="btn btn-sm btn-primary">Edit</a>

                        <form action="/users/delete" method="POST" class="d-inline">
                            <input type="hidden" name="id" value="<?= $u->id ?>">
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete this user?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>
