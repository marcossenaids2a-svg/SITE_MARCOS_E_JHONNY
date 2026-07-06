<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $pending_orders_count }}</h3>

          <p>Pedidos Pendentes</p>
        </div>
        <div class="icon">
          <i class="ion ion-help-circled"></i>
        </div>
        <a href="{{ route('admin.orders.index', ['filter' => 'pending']) }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $online_orders_count }}</h3>

          <p>Pedidos Online</p>
        </div>
        <div class="icon">
          <i class="ion ion-android-globe"></i>
        </div>
        <a href="{{ route('admin.orders.index', ['filter' => 'online']) }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $instore_orders_count }}</h3>

          <p>Pedidos em Loja</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('admin.orders.index', ['filter' => 'instore']) }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ $all_orders_count }}</h3>

          <p>Todos os Pedidos</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('admin.orders.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
 