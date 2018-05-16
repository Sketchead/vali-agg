@extends('layouts.app')

@section('content')
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Bienvenido a Llaosin</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <h3 class="display-5">Estadisticas mensuales</h3>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-truck"></i>
            <div class="info">
              <h4>Viajes</h4>
              <p><b>10008000</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-wrench"></i>
            <div class="info">
              <h4>Reparos</h4>
              <p><b>999</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-money"></i>
            <div class="info">
              <h4>Gastos</h4>
              <p><b>1000000</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Dias sin accidentes</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-component">
              <div class="jumbotron">
                <h1 class="display-3">Reporte mensual disponible</h1>
                <p>El mes anterior justo ha terminado. Para más información sobre los consumibles y gastos mensuales puede pulsar el siguiente botón</p>
                <p><a class="btn btn-primary btn-lg" href="#">Ver Reporte</a></p>
              </div>
            </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Ventas mensuales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Comparativa mensual</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Mantenimientos preventivos | progreso</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="tile">
            <h3 class="tile-title">Alertas</h3>
            <ul>
              <li>Reincidencia detectada en unidad 3344b (La pulgosa)</li>
              <li>Niveles criticos de Carbono</li>
             
            </ul>
            
          </div>
        </div>
      </div>
      <div class="row">
        
         <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Mapamundi</h3>
            <div class="tile-body">
              <div id="demo-map" style="height: 400px;"></div>
            </div>
          </div>
        </div>
           <div class="col-lg-4">
            <div class="bs-component">
              <div class="card">
                <h4 class="card-header">Accidente</h4>
                <div class="card-body">
                  <h5 class="card-title">Carretera Tepic-Mazatlán</h5>
                  <h6 class="card-subtitle text-muted"></h6>
                </div><img style="height: 200px; width: 100%; display: block;" src="https://i.gyazo.com/f183370131b7f9080a084be2529dc191.png" alt="Card image">
                <div class="card-body">
                  <p class="card-text">El conductor iba a exceso de velocidad</p><a class="card-link" href="#">Card link</a><a class="card-link" href="#">Another link</a>
                </div>
                <div class="card-footer text-muted">2 days ago</div>
              </div>
            </div>
          </div>
      </div>
@stop