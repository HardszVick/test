<h1 class="mb-4">Usuários</h1>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th style="width: 80px;">ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($users)): ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['id']) ?></td>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                          <td class="text-center">
                        <a
                          href="/user/delete/<?= $user['id'] ?>"
                          class="text-danger"
                          title="Excluir"
                          onclick="return confirm('Deseja realmente excluir?')"
                        >
                            🗑
                        </a>
                    </td>
                </tr>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2" class="text-center text-muted">
                        Nenhum usuário encontrado
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
