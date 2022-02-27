var ctx1 = document.getElementById("myChartFront");
var myChart1 = new Chart(ctx1, {
    type: 'radar',
    data: {
        labels: ["HTML/CSS", "JavaScript", "jQuery", "Vue.js", "React.js"],
        datasets: [
            {
            label: 'Front-end',
            data: [4, 4, 4, 3, 2],
            backgroundColor: 'rgba(225,95,150, 0.5)',
            borderColor: 'rgba(225,95,150, 1)',
            borderWidth: 1,
        }
    ]
    },
    options: {
    scales: {
        r: {
            min: 0,
            max: 5
        }
    }
    }
});
var ctx2 = document.getElementById("myChartBack");
var myChart2 = new Chart(ctx2, {
    type: 'radar',
    data: {
        labels: ["PHP", "Laravel", "MySQL", "Fuel.php", "Ruby"],
        datasets: [
            {
            label: 'Back-end',
            data: [4, 4, 3, 2, 1],
            backgroundColor: 'rgba(107, 220, 224, 0.5)',
            borderColor: 'rgba(107, 220, 224, 1)',
            borderWidth: 1,
        }
    ]
    },
    options: {
    scales: {
        r: {
            min: 0,
            max: 5
        }
    }
    }
});
var ctx3 = document.getElementById("myChartTools");
var myChart3 = new Chart(ctx3, {
    type: 'radar',
    data: {
        labels: ["ビジネス", "AWS", "Git/Github", "CSS設計", "SASS"],
        datasets: [
            {
            label: 'Others',
            data: [3, 1, 3, 3, 4],
            backgroundColor: 'rgba(248, 251, 36, 0.5)',
            borderColor: 'rgba(251, 186, 36, 1)',
            borderWidth: 1,
        }
    ]
    },
    options: {
    scales: {
        r: {
            min: 0,
            max: 5
        }
    }
    }
});