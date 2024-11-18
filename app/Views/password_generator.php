<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header bg-primary text-white">
        Password Generator
    </div>
    <div class="card-body">
        <form method="post" action="/generate">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="length" class="form-label">Password Length</label>
                <input type="number" name="length" id="length" class="form-control" min="8" max="128" value="12" required>
                <small class="form-text text-muted">Minimum length: 8 characters.</small>
            </div>
            <button type="submit" class="btn btn-success">Generate Password</button>
        </form>
        <?php if (isset($password)): ?>
            <div class="alert alert-success mt-3">
                <strong>Generated Password:</strong> <?= esc($password) ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
