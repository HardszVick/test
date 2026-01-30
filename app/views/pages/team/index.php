<h1 class="mb-4">Times</h1>

<div class="row" id="teamsContainer">
    <?php foreach ($teams as $team): ?>
        <div class="col-md-4 mb-4 team-card team-<?= $team['id'] ?>">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <?= htmlspecialchars($team['name']) ?>
                </div>

                <div class="card-body">
                    <?php foreach ($team['users'] as $user): ?>
                        <div class="d-flex justify-content-between border-bottom py-1">
                            <span><?= htmlspecialchars($user['name']) ?></span>
                              <a
                          href="/user/delete/<?= $user['id'] ?>"
                          class="text-danger"
                          title="Excluir"
                          onclick="return confirm('Deseja realmente excluir?')"
                        >
                            🗑
                        </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
$('#teamFilter').on('change', function () {
    const value = $(this).val();

    $('.team-card').each(function () {
        if (value === 'all' || $(this).hasClass(value)) {
            $(this).show();
            return;
        } 
        $(this).hide();
    });
});
</script>
