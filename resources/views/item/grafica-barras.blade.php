@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>GRAFICAS</h1>
@stop

@section('content')

<div class="row">
    <div class="col-sm-6">
        <canvas id="grafica"></canvas>
    </div>

    <div class="col-sm-6">
        <canvas id="grafica1"></canvas>
    </div>
</div>




@stop

@section('css')
   
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var ctx = document.getElementById('grafica1').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($categorias); ?>,
            datasets: [{                label: 'Cantidad ',                data: <?php echo json_encode($totales); ?>,                backgroundColor: [                    'rgba(255, 99, 132, 0.2)',                    'rgba(54, 162, 235, 0.2)',                    'rgba(255, 206, 86, 0.2)',                    'rgba(75, 192, 192, 0.2)',                    'rgba(153, 102, 255, 0.2)',                    'rgba(255, 159, 64, 0.2)'                ],
                borderColor: [                    'rgba(255, 99, 132, 1)',                    'rgba(54, 162, 235, 1)',                    'rgba(255, 206, 86, 1)',                    'rgba(75, 192, 192, 1)',                    'rgba(153, 102, 255, 1)',                    'rgba(255, 159, 64, 1)'                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: true,
                text: 'Gráfico de Torta'
            }
        }
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('grafica').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($categorias); ?>,
                datasets: [{
                    label: 'Cantidad ',
                    data: <?php echo json_encode($totales); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });
</script>
@stop
