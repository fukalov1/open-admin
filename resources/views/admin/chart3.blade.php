<div class="card">
    <div class="card-header">
        <h4>{{ $title }}</h4>
    </div>
    <div class="card-body">
        <canvas id="pie-chart"  width="400" height="400" style="max-height:400px;"></canvas>
    </div>
</div>

<script>
    (function () {
        var ctx = document.getElementById("pie-chart").getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь"],
                datasets: [{
                    label: '# of Votes',
                    data: [100, 120, 170, 167, 180, 177, 160],
                    backgroundColor: ['rgb(75, 192, 192, 0.5)', 'rgb(15, 200, 12, 0.6)', 'rgb(22, 144, 52, 0.5)', 'rgb(125, 12, 12, 0.5)', 'rgb(75, 12, 12, 0.5)', 'rgb(45, 24, 56, 0.5)', 'rgb(145, 84, 16, 0.5)' ],
                    // borderColor: ['rgb(75, 192, 192, 0.5)', 'rgb(15, 200, 12, 0.6)', 'rgb(22, 144, 52, 0.5)', 'rgb(125, 12, 12, 0.5)', 'rgb(75, 12, 12, 0.5)', 'rgb(45, 24, 56, 0.5)', 'rgb(145, 84, 16, 0.5)' ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }());
</script>

<style>
    #events-chart {
        height: 200px;
    }
</style>


