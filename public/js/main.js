/* eslint-disable object-shorthand */
/* global Chart, coreui, coreui.Utils.getStyle, coreui.Utils.hexToRgba */

/**
 * --------------------------------------------------------------------------
 * CoreUI Boostrap Admin Template (v3.0.0): main.js
 * Licensed under MIT (https://coreui.io/license)
 * --------------------------------------------------------------------------
 */

/* eslint-disable no-magic-numbers */
// Disable the on-canvas tooltip
Chart.defaults.global.pointHitDetectionRadius = 1;
Chart.defaults.global.tooltips.enabled = false;
Chart.defaults.global.tooltips.mode = "index";
Chart.defaults.global.tooltips.position = "nearest";
Chart.defaults.global.tooltips.custom = coreui.ChartJS.customTooltips;
Chart.defaults.global.defaultFontColor = "#646470";
Chart.defaults.global.responsiveAnimationDuration = 1;

document.body.addEventListener("classtoggle", event => {
    if (event.detail.className === "c-dark-theme") {
        if (document.body.classList.contains("c-dark-theme")) {
            cardChart1.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle(
                "--primary-dark-theme"
            );
            cardChart2.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle(
                "--info-dark-theme"
            );
            Chart.defaults.global.defaultFontColor = "#fff";
        } else {
            cardChart1.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle(
                "--primary"
            );
            cardChart2.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle(
                "--info"
            );
            Chart.defaults.global.defaultFontColor = "#646470";
        }

        cardChart1.update();
        cardChart2.update();
        mainChart.update();
    }
});

// eslint-disable-next-line no-unused-vars
const cardChart1 = new Chart(document.getElementById("card-chart1"), {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "transparent",
                borderColor: "rgba(255,255,255,.55)",
                pointBackgroundColor: coreui.Utils.getStyle("--primary"),
                data: [65, 59, 84, 84, 51, 55, 40]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        color: "transparent",
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: "transparent"
                    }
                }
            ],
            yAxes: [
                {
                    display: false,
                    ticks: {
                        display: false,
                        min: 35,
                        max: 89
                    }
                }
            ]
        },
        elements: {
            line: {
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});

// eslint-disable-next-line no-unused-vars
const cardChart2 = new Chart(document.getElementById("card-chart2"), {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "transparent",
                borderColor: "rgba(255,255,255,.55)",
                pointBackgroundColor: coreui.Utils.getStyle("--info"),
                data: [1, 18, 9, 17, 34, 22, 11]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        color: "transparent",
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: "transparent"
                    }
                }
            ],
            yAxes: [
                {
                    display: false,
                    ticks: {
                        display: false,
                        min: -4,
                        max: 39
                    }
                }
            ]
        },
        elements: {
            line: {
                tension: 0.00001,
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});

// eslint-disable-next-line no-unused-vars
const cardChart3 = new Chart(document.getElementById("card-chart3"), {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "transparent",
                borderColor: "rgba(255,255,255,.55)",
                pointBackgroundColor: coreui.Utils.getStyle("--warning"),
                data: [1, 18, 9, 17, 34, 22, 11]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        color: "transparent",
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: "transparent"
                    }
                }
            ],
            yAxes: [
                {
                    display: false,
                    ticks: {
                        display: false,
                        min: -4,
                        max: 39
                    }
                }
            ]
        },
        elements: {
            line: {
                tension: 0.00001,
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});

// eslint-disable-next-line no-unused-vars
const cardChart4 = new Chart(document.getElementById("card-chart4"), {
    type: "line",
    data: {
        labels: [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July"
        ],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "transparent",
                borderColor: "rgba(255,255,255,.55)",
                pointBackgroundColor: coreui.Utils.getStyle("--success"),
                data: [1, 18, 9, 17, 34, 22, 11]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        color: "transparent",
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: "transparent"
                    }
                }
            ],
            yAxes: [
                {
                    display: false,
                    ticks: {
                        display: false,
                        min: -4,
                        max: 39
                    }
                }
            ]
        },
        elements: {
            line: {
                tension: 0.00001,
                borderWidth: 1
            },
            point: {
                radius: 4,
                hitRadius: 10,
                hoverRadius: 4
            }
        }
    }
});

// eslint-disable-next-line no-unused-vars
const mainChart = new Chart(document.getElementById("main-chart"), {
    type: "line",
    data: {
        labels: [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ],
        datasets: [
            {
                label: "Total User",
                backgroundColor: coreui.Utils.hexToRgba(
                    coreui.Utils.getStyle("--info"),
                    10
                ),
                borderColor: coreui.Utils.getStyle("--primary"),
                pointHoverBackgroundColor: "#fff",
                borderWidth: 2,
                data: [
                    165,
                    180,
                    122,
                    133,
                    123,
                    143,
                    112,
                    100,
                    172,
                    150,
                    173,
                    138,
                    155,
                    89,
                    50,
                    161,
                    65,
                    163,
                    160,
                    103,
                    114,
                    185,
                    125,
                    196,
                    183,
                    64,
                    137,
                    95,
                    112,
                    175
                ]
            },
            {
                label: "User SinghaJaya 1",
                backgroundColor: "transparent",
                borderColor: coreui.Utils.getStyle("--info"),
                pointHoverBackgroundColor: "#fff",
                borderWidth: 2,
                data: [
                    92,
                    97,
                    80,
                    100,
                    86,
                    97,
                    83,
                    98,
                    87,
                    98,
                    93,
                    83,
                    87,
                    98,
                    96,
                    84,
                    91,
                    97,
                    88,
                    86,
                    94,
                    86,
                    95,
                    91,
                    98,
                    91,
                    92,
                    80,
                    83,
                    82
                ]
            },
            {
                label: "User SinghaJaya 2",
                backgroundColor: "transparent",
                borderColor: coreui.Utils.getStyle("--warning"),
                pointHoverBackgroundColor: "#fff",
                borderWidth: 2,
                data: [
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65,
                    65
                ]
            },
            {
                label: "User Kavling Boro",
                backgroundColor: "transparent",
                borderColor: coreui.Utils.getStyle("--success"),
                pointHoverBackgroundColor: "#fff",
                borderWidth: 2,
                data: [11, 21, 12, 15, 16, 17, 13, 14, 15, 12, 17, 22, 8]
            }
        ]
    },
    options: {
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
            xAxes: [
                {
                    gridLines: {
                        drawOnChartArea: false
                    }
                }
            ],
            yAxes: [
                {
                    ticks: {
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        stepSize: Math.ceil(250 / 5),
                        max: 250
                    }
                }
            ]
        },
        elements: {
            point: {
                radius: 0,
                hitRadius: 10,
                hoverRadius: 4,
                hoverBorderWidth: 3
            }
        },
        tooltips: {
            intersect: true,
            callbacks: {
                labelColor: function(tooltipItem, chart) {
                    return {
                        backgroundColor:
                            chart.data.datasets[tooltipItem.datasetIndex]
                                .borderColor
                    };
                }
            }
        }
    }
});
