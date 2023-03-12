@include("Dashboard.base")
        <div class="container">
        @include("Dashboard.sidebar")
        <!-- main -->
        <div id="main">
            <!-- header -->
            @include('Dashboard.header')
            <!-- End header -->
            <div class="mt-[60px]">
<div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">

            <div class="create-button text-right">
                <a href="{{ URL('/create-template') }}" class="p-2 bg-[#032738] rounded text-white">CREATE TEMPLATE</a>
            </div>
            <div class="w-full mt-12">

                <div class="bg-white overflow-auto p-4">
                    <form action="{{ URL('/save-number') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="phone number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-[#032738]">Enter Number</label>
                            <input type="number" name="number" class="shadow-sm bg-gray-50 border border-gray-300
                             text-gray-900 text-sm rounded-lg focus:ring-blue-200 focus:border-blue-500 block w-full
                              p-2.5 dark:bg-[#fff] dark:border-[#248991] dark:placeholder-gray-400 dark:text-gray-900
                               dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Enter Number..." required>
                        </div>
                        <div class="mb-6 text-center">
                            <button type="submit" class="bg-[#248991] p-2 w-[100%] rounded hover:bg-[#00C1C6] shadow-lg">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
</div>
</div>
</div>

    </div>

</div>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

<script>
    var chartOne = document.getElementById('chartOne');
    var myChart = new Chart(chartOne, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
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

    var chartTwo = document.getElementById('chartTwo');
    var myLineChart = new Chart(chartTwo, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
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
</script>
</body>
</html>
