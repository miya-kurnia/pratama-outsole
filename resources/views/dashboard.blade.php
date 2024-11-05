<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    {{-- <div class="gap-4 p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
        {{ __("You're logged in!")  }}
    </div> --}}

    <!-- Sales Card -->
    <div class="mb-6 bg-white rounded-lg shadow dark:bg-gray-800 md:p-6">
        <div class="flex justify-between mb-5">
          <div>
            <h5 class="pb-2 text-3xl font-bold leading-none text-gray-900 dark:text-white"> {{ $totalOutsoleOut }}</h5>
            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Orders this week</p>
          </div>
          <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-red-500 dark:text-red-500 text-center">
            {{ round($percentOutsoleComparison, 2) }}%
            <svg class="w-3 h-3 ms-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $percentOutsoleComparison >= 100 ? 'M5 13V1m0 0L1 5m4-4 4 4' : 'M5 1v12m0 0L1 9m4 4 4-4' }}" />
            </svg>
          </div>
        </div>
        <div id="data-labels-chart"></div>
        <div class="grid items-center justify-between grid-cols-1 mt-5 border-t border-gray-200 dark:border-gray-700">
          <div class="flex items-center justify-between pt-5">
            <button
              id="dropdownDefaultButton"
              data-dropdown-toggle="lastDaysdropdown"
              data-dropdown-placement="bottom"
              class="inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
              type="button">
              Last 7 days
              <svg class="w-2.5 m-2.5 ms-1.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Yesterday</a></li>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Today</a></li>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Last 7 days</a></li>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Last 30 days</a></li>
                  <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Last 90 days</a></li>
                </ul>
            </div>
          </div>
        </div>
    </div>


<div class="relative mt-6 overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Process name
                </th>
                <th scope="col" class="px-6 py-3">
                    Model name
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty prod
                </th>
                <th scope="col" class="px-6 py-3">
                    Started Work time
                </th>
                <th scope="col" class="px-6 py-3">
                    Ended Work time
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE A
                </td>
                <td class="px-6 py-4">
                    354
                </td>
                <td class="px-6 py-4">
                    11-06-2024 07:00 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 03:00 PM
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE A
                </td>
                <td class="px-6 py-4">
                    1944
                </td>
                <td class="px-6 py-4">
                    11-06-2024 07:00 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 03:00 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE D
                </td>
                <td class="px-6 py-4">
                    702
                </td>
                <td class="px-6 py-4">
                    11-06-2024 07:00 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 03:00 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE D
                </td>
                <td class="px-6 py-4">
                    80
                </td>
                <td class="px-6 py-4">
                    11-06-2024 07:00 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 03:00 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE A
                </td>
                <td class="px-6 py-4">
                    2804
                </td>
                <td class="px-6 py-4">
                    11-06-2024 06:30 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 02:30 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE A
                </td>
                <td class="px-6 py-4">
                    2698
                </td>
                <td class="px-6 py-4">
                    11-06-2024 06:30 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 02:30 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE D
                </td>
                <td class="px-6 py-4">
                    810
                </td>
                <td class="px-6 py-4">
                    11-06-2024 06:30 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 02:30 PM
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    OUTSOLE
                </th>
                <td class="px-6 py-4">
                    NIKE C
                </td>
                <td class="px-6 py-4">
                    701
                </td>
                <td class="px-6 py-4">
                    11-06-2024 06:30 AM
                </td>

                <td class="px-6 py-4">
                    11-06-2024 02:30 PM
                </td>
            </tr>
        </tbody>
    </table>
</div>


</x-app-layout>

    <!-- Chart Configuration -->
    <script>
        const options = {
            dataLabels: {
                enabled: true,
                style: {
                    cssClass: 'text-xs text-white font-medium'
                },
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: { left: 16, right: 16, top: -26 },
            },
            series: [
                { name: "Outsole In", data: @json(array_values($outsolesSizes)), color: "#1A56DB" },
                { name: "Outsole Out", data: @json(array_values($outsolesoutSizes)), color: "#7E3BF2" },
            ],
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "area",
                fontFamily: "Inter, sans-serif",
                dropShadow: { enabled: false },
                toolbar: { show: false },
            },
            tooltip: {
                enabled: true,
                x: { show: false },
            },
            legend: { show: true },
            fill: {
                type: "gradient",
                gradient: {
                    opacityFrom: 0.55,
                    opacityTo: 0,
                    shade: "#1C64F2",
                    gradientToColors: ["#1C64F2"],
                },
            },
            stroke: { width: 6 },
            xaxis: {
                categories: ['36', '37', '38', '39', '40', '41', '42'],
                labels: { show: false },
                axisBorder: { show: false },
                axisTicks: { show: false },
            },
            yaxis: {
                show: false,
                labels: { formatter: (value) => value },
            },
        };

        if (document.getElementById("data-labels-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("data-labels-chart"), options);
            chart.render();
        }
    </script>

