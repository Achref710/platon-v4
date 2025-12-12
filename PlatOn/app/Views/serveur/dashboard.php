<h1><i class="bi bi-chevron-right"></i> Dashboard Serveur</h1>
<p class="lead">Service Platon</p>

<div class="row">
    <!-- Plan des tables -->
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-grid-3x3"></i> Plan des tables</h5>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-center">
                    <?php
                    $tables = [
                        ['num' => 1, 'places' => 2, 'status' => 'free'],
                        ['num' => 2, 'places' => 2, 'status' => 'busy', 'time' => '19:00'],
                        ['num' => 3, 'places' => 2, 'status' => 'busy', 'time' => '18:45', 'persons' => 3],
                        ['num' => 4, 'places' => 4, 'status' => 'busy'],
                        ['num' => 5, 'places' => 4, 'status' => 'busy'],
                        ['num' => 6, 'places' => 2, 'status' => 'free'],
                        ['num' => 7, 'places' => 4, 'status' => 'busy', 'time' => '19:00'],
                        ['num' => 8, 'places' => 8, 'status' => 'busy', 'time' => '18:15', 'persons' => 7],
                        ['num' => 9, 'places' => 2, 'status' => 'reserved', 'time' => '19:30'],
                        ['num' => 10, 'places' => 4, 'status' => 'reserved', 'time' => '19:30'],
                        ['num' => 11, 'places' => 2, 'status' => 'busy', 'time' => '18:00', 'persons' => 2],
                        ['num' => 12, 'places' => 6, 'status' => 'busy']
                    ];
                    
                    foreach ($tables as $table):
                        $statusClass = 'table-' . $table['status'];
                        $statusText = [
                            'free' => 'Libre',
                            'busy' => 'Occupée', 
                            'reserved' => 'Réservée'
                        ][$table['status']];
                    ?>
                    <div class="table-card <?php echo $statusClass; ?> m-2" 
                         data-bs-toggle="tooltip" 
                         title="Table <?php echo $table['num']; ?> - <?php echo $table['places']; ?> places - <?php echo $statusText; ?>">
                        <?php echo $table['num']; ?>
                        <?php if (isset($table['persons'])): ?>
                            <small class="position-absolute top-0 start-100 translate-middle badge bg-dark">
                                <?php echo $table['persons']; ?>
                            </small>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="mt-3 text-center">
                    <span class="badge bg-success me-2"><i class="bi bi-circle-fill"></i> Libre</span>
                    <span class="badge bg-danger me-2"><i class="bi bi-circle-fill"></i> Occupée</span>
                    <span class="badge bg-warning"><i class="bi bi-circle-fill"></i> Réservée</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Réservations -->
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-calendar-check"></i> Réservations du jour</h5>
            </div>
            <div class="card-body">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Dupont</h6>
                            <small>Table 2</small>
                        </div>
                        <small class="text-muted">2 personnes</small>
                    </div>
                    
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Martin</h6>
                            <small>Table 9</small>
                        </div>
                        <small class="text-muted">2 personnes - 19:30</small>
                    </div>
                    
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Bernard</h6>
                            <small class="text-danger">À assigner</small>
                        </div>
                        <small class="text-muted">4 personnes - 20:00</small>
                    </div>
                    
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">Dubois</h6>
                            <small class="text-danger">À assigner</small>
                        </div>
                        <small class="text-muted">6 personnes - 20:30</small>
                    </div>
                </div>
                
                <div class="mt-3">
                    <button class="btn btn-outline-primary btn-sm w-100">
                        <i class="bi bi-plus-circle"></i> Assigner une table
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Tables libres -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-check-circle"></i> Tables libres</h5>
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <?php foreach ($tables as $table): ?>
                        <?php if ($table['status'] === 'free'): ?>
                            <span class="badge bg-success m-1 p-2">Table <?php echo $table['num']; ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Activer les tooltips Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>