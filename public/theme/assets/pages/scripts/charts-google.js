// GOOGLE CHARTS INIT
google.load('visualization', '1', {
    packages: ['corechart', 'bar', 'line']
});
google.load("visualization", "1.1", {
    packages: ["gantt"]
});

google.setOnLoadCallback(drawChart);

// GOOGLE COLUMN CHART 1
function drawChart() {

    // PIE CHART
    var gender = google.visualization.arrayToDataTable([
        ['جنسیت', 'تعداد مجموع در تست'],
        ['مرد', 51],
        ['زن', 37],
        ['نامشخص', 2]
    ]);

    var platform = google.visualization.arrayToDataTable([
        ['پلتفرم', 'دستگاه در مجموه آزمون'],
        ['اندروید', 45],
        ['اپل', 37],
        ['مرورگر کامپیوتر', 14],
        ['مرورگر موبایل', 37]
    ]);

    var bugs = google.visualization.arrayToDataTable([
        ['ایرادات', 'تعداد مجموع در تست'],
        ['پر اهمیت', 27],
        ['معمولی', 82],
        ['کم اهمیت', 24]
    ]);

    var options = {

    };

    var chart = new google.visualization.PieChart(document.getElementById('gchart_pie_1'));
    chart.draw(gender, options);

    var chart = new google.visualization.PieChart(document.getElementById('gchart_pie_2'));
    chart.draw(platform, options);


    var chart = new google.visualization.PieChart(document.getElementById('gchart_pie_3'));
    chart.draw(bugs, options);

}