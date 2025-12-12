<h1><i class="bi bi-chevron-right"></i> Dashboard Chef</h1>
<p class="lead">Quième Platon</p>

<!-- Statistiques -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="card-body text-center">
                <h5 class="text-muted">En attente</h5>
                <h2 class="text-warning">2</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="card-body text-center">
                <h5 class="text-muted">En préparation</h5>
                <h2 class="text-primary">1</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="card-body text-center">
                <h5 class="text-muted">Prêtes</h5>
                <h2 class="text-success">1</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card stat-card">
            <div class="card-body text-center">
                <h5 class="text-muted">Total</h5>
                <h2>4</h2>
            </div>
        </div>
    </div>
</div>

<!-- Commandes en attente -->
<div class="card mb-4">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="bi bi-clock"></i> En attente (2)</h5>
    </div>
    <div class="card-body">
        <div class="mb-3 p-3 border-start border-4 border-warning">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h6 class="mb-1"><i class="bi bi-table"></i> Table 5 - 18:30 <span class="badge bg-danger">Urgent</span></h6>
                    <ul class="mb-2">
                        <li>2x Filet de Bœuf Rossini (Cuisson saignante)</li>
                        <li>1x Bar de Ligne Rôti</li>
                    </ul>
                </div>
                <form action="<?php echo BASE_URL; ?>/chef/update" method="POST" class="ms-3">
                    <input type="hidden" name="order_id" value="1">
                    <input type="hidden" name="action" value="start">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="bi bi-play-circle"></i> Commencer
                    </button>
                </form>
            </div>
        </div>
        
        <div class="p-3 border-start border-4 border-warning">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h6 class="mb-1"><i class="bi bi-table"></i> Table 3 - 18:40</h6>
                    <ul class="mb-2">
                        <li>2x Tartare de Saumon</li>
                        <li>1x Carpaccio de Bœuf</li>
                    </ul>
                </div>
                <form action="<?php echo BASE_URL; ?>/chef/update" method="POST" class="ms-3">
                    <input type="hidden" name="order_id" value="2">
                    <input type="hidden" name="action" value="start">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="bi bi-play-circle"></i> Commencer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Commandes en préparation -->
<div class="card mb-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-gear"></i> En préparation (1)</h5>
    </div>
    <div class="card-body">
        <div class="p-3 border-start border-4 border-primary">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h6 class="mb-1"><i class="bi bi-table"></i> Table 12 - 18:35</h6>
                    <ul class="mb-2">
                        <li>1x Foie Gras de Canard</li>
                        <li>2x Saint-Jacques Snackées</li>
                    </ul>
                </div>
                <form action="<?php echo BASE_URL; ?>/chef/update" method="POST" class="ms-3">
                    <input type="hidden" name="order_id" value="3">
                    <input type="hidden" name="action" value="ready">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="bi bi-check-circle"></i> Prêt
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Commandes prêtes -->
<div class="card mb-4">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0"><i class="bi bi-check-circle"></i> Prêtes (1)</h5>
    </div>
    <div class="card-body">
        <div class="p-3 border-start border-4 border-success">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h6 class="mb-1"><i class="bi bi-table"></i> Table 8 - 18:25</h6>
                    <ul class="mb-2">
                        <li>1x Suprême de Volaille</li>
                        <li>1x Homard Breton</li>
                    </ul>
                </div>
                <form action="<?php echo BASE_URL; ?>/chef/update" method="POST" class="ms-3">
                    <input type="hidden" name="order_id" value="4">
                    <input type="hidden" name="action" value="served">
                    <button type="submit" class="btn btn-secondary btn-sm">
                        <i class="bi bi-truck"></i> Servi
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Inventaire -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-0"><i class="bi bi-box-seam"></i> Inventaire</h5>
    </div>
    <div class="card-body">
        <div class="row text-center">
            <div class="col">
                <h6>Bœuf</h6>
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width: 80%"></div>
                </div>
                <small>12 portions</small>
            </div>
            <div class="col">
                <h6>Poisson</h6>
                <div class="progress mb-2">
                    <div class="progress-bar bg-info" style="width: 60%"></div>
                </div>
                <small>8 portions</small>
            </div>
            <div class="col">
                <h6>Homard</h6>
                <div class="progress mb-2">
                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                </div>
                <small>3 unités</small>
            </div>
            <div class="col">
                <h6>Légumes</h6>
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary" style="width: 90%"></div>
                </div>
                <small>25 portions</small>
            </div>
        </div>
    </div>
</div>