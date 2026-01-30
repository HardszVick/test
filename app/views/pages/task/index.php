<?php
// Organiza tasks por status
$columns = [
    1 => ['title' => 'To Do', 'tasks' => []],
    2 => ['title' => 'In Progress', 'tasks' => []],
    3 => ['title' => 'Testing', 'tasks' => []],
    4 => ['title' => 'Done', 'tasks' => []],
];

foreach ($tasks as $task) {
    $columns[$task['status']]['tasks'][] = $task;
}
?>

<style>
    .board {
        display: flex;
        gap: 16px;
        padding: 20px;
    }

    .column {
        flex: 1;
        background: #f4f4f4;
        border-radius: 8px;
        padding: 12px;
    }

    .column h2 {
        text-align: center;
        margin-bottom: 12px;
    }

    .card {
        background: #fff;
        border-radius: 6px;
        padding: 10px;
        margin-bottom: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .card h3 {
        margin: 0 0 6px 0;
        font-size: 16px;
    }

    .card p {
        font-size: 14px;
        margin: 4px 0;
    }

    .user {
        font-size: 13px;
        color: #555;
        margin-top: 8px;
    }

    .empty {
        text-align: center;
        color: #888;
        font-size: 14px;
        padding: 10px;
    }
</style>

<div class="board">
    <?php foreach ($columns as $column): ?>
        <div class="column">
            <h2><?= $column['title'] ?></h2>

            <?php if (empty($column['tasks'])): ?>
                <div class="empty">Sem tasks</div>
            <?php endif; ?>

            <?php foreach ($column['tasks'] as $task): ?>
                <div class="card">
                    <h3><?= htmlspecialchars($task['title']) ?></h3>
                    <p><?= htmlspecialchars($task['description']) ?></p>

                <div class="user">
                    👤 
                    <?= !empty($task['user_name'])
                        ? htmlspecialchars($task['user_name'])
                        : 'Sem responsável' ?>
                </div>
                 </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
