{{--<div id="app">--}}
{{--    <hello-vue></hello-vue>--}}
{{--    test start chart--}}
{{--    <chart/>--}}
{{--</div>--}}

<div class="card">
    <div class="card-header">
        <h4>{{ $title }}</h4>
    </div>
    <div class="card-body">
        <canvas id="company-chart"></canvas>
    </div>
</div>

<script>
    (function () {
        var ctx = document.getElementById("company-chart").getContext('2d');
        var companyChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь"],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: '#cf0900',
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
