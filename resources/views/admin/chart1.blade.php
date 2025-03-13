{{--<div>--}}
{{--        test start chart--}}
{{--    <chart/>--}}
{{--</div>--}}

<div class="card" id="myapp">
    <div class="card-header">
        <h4>{{ $title }}</h4>
    </div>
    <div class="card-body">
        <canvas id="events-chart"></canvas>
    </div>
</div>

<script>
    (function () {
        var ctx = document.getElementById("events-chart").getContext('2d');
        var eventsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255,99,132,1)',
                    borderWidth: 1
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
