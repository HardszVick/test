<?php
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

<div class="container-fluid py-4">
    <div class="row flex-nowrap overflow-auto pb-3">
        <?php foreach ($columns as $column): ?>
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch" style="min-width: 300px;">
                <div class="card bg-light w-100 shadow-sm border-0">
                    
                    <div class="card-header bg-white border-bottom-0 pt-3">
                        <h5 class="card-title fw-bold text-secondary text-uppercase mb-0">
                            <?= $column['title'] ?>
                            <span class="badge bg-secondary rounded-pill ms-2 fs-6">
                                <?= count($column['tasks']) ?>
                            </span>
                        </h5>
                    </div>

                    <div class="card-body">
                        <?php if (empty($column['tasks'])): ?>
                            <div class="text-center py-4 border border-2 border-dashed rounded text-muted">
                                <i class="bi bi-tray fs-4 d-block"></i>
                                <small>Sem tasks</small>
                            </div>
                        <?php endif; ?>

                        <?php foreach ($column['tasks'] as $task): ?>
                            <div class="card mb-3 shadow-sm border-0">
                                <div class="card-body p-3">
                                    <h6 class="card-title fw-bold mb-2">
                                        <?= htmlspecialchars($task['title']) ?>
                                    </h6>
                                    <p class="card-text text-muted small mb-3">
                                        <?= htmlspecialchars($task['description']) ?>
                                    </p>
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="small text-secondary">
                                            <i class="bi bi-person-circle me-1"></i>
                                            <?= !empty($task['user_name']) 
                                                ? htmlspecialchars($task['user_name']) 
                                                : 'Sem responsável' ?>
                                        </div>
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill" style="font-size: 0.7rem;">Task</span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>