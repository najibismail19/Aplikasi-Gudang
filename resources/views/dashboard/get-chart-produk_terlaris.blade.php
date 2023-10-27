<link rel="stylesheet" href="{{ url("/assets/plugins/chart.js/Chart.min.css") }}">
<script src="{{ url("/assets/plugins/chart.js/Chart.bundle.min.js") }}"></script>

<canvas id="ProdukTerlarisChart" style="height: 50vh; width: 80vh"></canvas>

<script>

    var tanggal =  {{ Js::from($sumbu_x) }};
    var total =  {{ Js::from($sumbu_y) }};

    var ctx = document.getElementById("ProdukTerlarisChart").getContext("2d");


    var chart = new Chart(ctx, {
        type : "bar",
        responsive : true,
        data : {
            labels : tanggal,
            datasets : [{
                label : "Jumlah Produk Terjual",
                backgroundColor : ['rgb(255,234,132, .8)', 'rgb(255,134,132, .8)'],
                borderColor : ['rgb(255,99,132, .6)', 'rgb(90,190,132, .6)'],
                data : total,
                borderWidth: 1
            }]
        },
        duration : 1000
    })


</script>
