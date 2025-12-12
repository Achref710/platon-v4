<h1><i class="bi bi-chevron-right"></i> Dashboard Gérant</h1>
<p class="lead">Restaurant PlatOn</p>

<!-- Statistiques -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card stat-card border-top border-primary">
            <div class="card-body text-center">
                <h5 class="text-muted">Réservations</h5>
                <h2 class="text-primary">12</h2>
                <small class="text-muted">Aujourd'hui</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card border-top border-success">
            <div class="card-body text-center">
                <h5 class="text-muted">Personnel</h5>
                <h2 class="text-success">8</h2>
                <small class="text-muted">En service</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card border-top border-warning">
            <div class="card-body text-center">
                <h5 class="text-muted">Inventaire</h5>
                <h2 class="text-warning">85%</h2>
                <small class="text-muted">Niveau stock</small>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card border-top border-danger">
            <div class="card-body text-center">
                <h5 class="text-muted">Chiffre du jour</h5>
                <h2 class="text-danger">2,450€</h2>
                <small class="text-muted">Estimation</small>
            </div>
        </div>
    </div>
</div>

<!-- Gestion des réservations -->
<div class="card mb-4">
    <div class="card-header">
        <h5 class="mb-0"><i class="bi bi-calendar3"></i> Gestion des réservations</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Heure</th>
                        <th>Statut</th>
                        <th>Client</th>
                        <th>Table</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>19:00</td>
                        <td><span class="badge bg-success">Disponible</span></td>
                        <td>-</td>
                        <td>Table 3</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-check"></i> Assigner
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>19:30</td>
                        <td><span class="badge bg-warning">Réservée</span></td>
                        <td>Martin (2 pers)</td>
                        <td>Table 9</td>
                        <td>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>20:00</td>
                        <td><span class="badge bg-warning">Réservée</span></td>
                        <td>Bernard (4 pers)</td>
                        <td class="text-danger">Non assignée</td>
                        <td>
                            <select class="form-select form-select-sm d-inline w-auto">
                                <option value="">Table...</option>
                                <option value="4">Table 4</option>
                                <option value="5">Table 5</option>
                            </select>
                            <button class="btn btn-sm btn-success ms-1">
                                <i class="bi bi-check"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Réservations à assigner -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="bi bi-list-task"></i> Réservations à assigner</h5>
        <button class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Nouvelle
        </button>
    </div>
    <div class="card-body">
        <div class="row">
            <?php
            $reservations = [
                ['client' => 'Bernard', 'time' => '20:00', 'persons' => 4],
                ['client' => 'Dubois', 'time' => '20:30', 'persons' => 6],
                ['client' => 'Lefebvre', 'time' => '21:00', 'persons' => 3],
                ['client' => 'Moreau', 'time' => '21:30', 'persons' => 2]
            ];
            
            foreach ($reservations as $reservation):
            ?>
            <div class="col-md-3 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $reservation['client']; ?></h6>
                        <p class="card-text">
                            <small class="text-muted">
                                <i class="bi bi-clock"></i> <?php echo $reservation['time']; ?><br>
                                <i class="bi bi-people"></i> <?php echo $reservation['persons']; ?> personnes
                            </small>
                        </p>
                        
                        <select class="form-select form-select-sm mb-2">
                            <option value="">Choisir table...</option>
                            <option value="4">Table 4 (4 places)</option>
                            <option value="8">Table 8 (8 places)</option>
                            <option value="12">Table 12 (6 places)</option>
                        </select>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-sm">
                                <i class="bi bi-check-circle"></i> Assigner
                            </button>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-x-circle"></i> Annuler
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>