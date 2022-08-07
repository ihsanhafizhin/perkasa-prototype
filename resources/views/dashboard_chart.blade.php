@extends('layouts.layout-dashboard')

@section('content')

<div class="container-fluid container-content">
    <canvas id="bar-chart" width="800" height="450"></canvas>
    <canvas id="pie-chart" width="800" height="450"></canvas>
</div>



@push('chart-js')
<script>
     new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
        labels: ["KPU Kabupaten Bandung", "KPU Kabupaten Ngawi", "KPU Kota Jakarta Barat", "KPU Kota Jakarta Selatan", "KPU Kota Jakarta Timur"],
        datasets: [
            {
            label: "RAB",
            backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
            data: [2478,5267,734,784,433]
            }
        ]
        },
        options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'RAB By Unit Kerja'
        }
        }
    });
</script>

<script>
    new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Disetujui", "Revisi"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2"],
        data: [2478,5267]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'RAB By Status'
      }
    }
});

</script>
@endpush
@endsection