google.load("visualization", "1", {packages:["corechart"]});
var x = new Vue	({
    el:'#thongke1',
    data : {
        day:[],
        month:[],
        year:[],
    },
    computed: {
    },
    mounted :function(){
        this.chart();
        this.chart1();
        this.chart2();
    },
    methods: {
        chart:function()
        { 
            var authOptions = {
                method: 'get',
                url: '/api/v1/day',
                json: true,
            }
            axios(authOptions).then(
                response => {
                this.day = response.data;
                google.setOnLoadCallback(drawCharts);
                var  dataArray= [
                ['Day', 'COST Total', 'ORDER Total'],
                ];
                
                for (var n = 0; n < this.day.length; n++)
                {
                    var data_1 = 'Ngay'+ ' ' + this.day[n]['days'];
                    var data_2 = this.day[n]['tong_so'];
                    var data_3 = this.day[n]['so_luong']*100;
                    console.log(data_1);
                    console.log(data_2);
                    console.log(data_3);
                    dataArray.push ([data_1,data_2,data_3]);
                };
                function drawCharts() {
                    var barData = google.visualization.arrayToDataTable(dataArray);
                    var barOptions = {
                        focusTarget: 'category',
                        backgroundColor: 'transparent',
                        colors: ['cornflowerblue', 'tomato'],
                        fontName: 'Open Sans',
                        chartArea: {
                            left: 50,
                            top: 10,
                            width: '100%',
                            height: '70%'
                        },
                        bar: {
                            groupWidth: '80%'
                        },
                        hAxis: {
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        vAxis: {
                            minValue: 0,
                            maxValue: 1500,
                            baselineColor: '#DDD',
                            gridlines: {
                                color: '#DDD',
                                count: 4
                            },
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        legend: {
                            position: 'bottom',
                            textStyle: {
                                fontSize: 12
                            }
                        },
                        animation: {
                            duration: 1200,
                            easing: 'out',
                            startup: true
                        }

                    };
                    var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
                    barChart.draw(barData, barOptions);
                }
                    }
                );
             // console.log(this.data1[1][0]);
        },
        chart1:function()
        { 
            var authOptions1 = {
                method: 'get',
                url: '/api/v1/month',
                json: true,
            }
            axios(authOptions1).then(
                response => {
                this.month = response.data;
                google.setOnLoadCallback(drawCharts);
                var  dataArray= [
                ['month', 'COST Total', 'ORDER Total'],
                ];
                
                for (var n = 0; n < this.month.length; n++)
                {
                    var data_1 = 'thang'+ ' ' + this.month[n]['month'];
                    var data_2 = this.month[n]['tong_so'];
                    var data_3 = this.month[n]['so_luong']*100;
                    console.log(data_1);
                    console.log(data_2);
                    console.log(data_3);
                    dataArray.push ([data_1,data_2,data_3]);
                };
                function drawCharts() {
                    var barData = google.visualization.arrayToDataTable(dataArray);
                    var barOptions = {
                        focusTarget: 'category',
                        backgroundColor: 'transparent',
                        colors: ['cornflowerblue', 'tomato'],
                        fontName: 'Open Sans',
                        chartArea: {
                            left: 50,
                            top: 10,
                            width: '100%',
                            height: '70%'
                        },
                        bar: {
                            groupWidth: '80%'
                        },
                        hAxis: {
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        vAxis: {
                            minValue: 0,
                            maxValue: 1500,
                            baselineColor: '#DDD',
                            gridlines: {
                                color: '#DDD',
                                count: 4
                            },
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        legend: {
                            position: 'bottom',
                            textStyle: {
                                fontSize: 12
                            }
                        },
                        animation: {
                            duration: 1200,
                            easing: 'out',
                            startup: true
                        }

                    };
                    var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart1'));
                    barChart.draw(barData, barOptions);
                }
                    }
                );
             // console.log(this.data1[1][0]);
        },
        chart2:function()
        { 
            var authOptions1 = {
                method: 'get',
                url: '/api/v1/year',
                json: true,
            }
            axios(authOptions1).then(
                response => {
                this.year = response.data;
                google.setOnLoadCallback(drawCharts);
                var  dataArray= [
                ['year', 'COST Total', 'ORDER Total'],
                ];
                
                for (var n = 0; n < this.year.length; n++)
                {
                    var data_1 = 'Nam'+ ' ' + this.year[n]['years'];
                    var data_2 = this.year[n]['tong_so'];
                    var data_3 = this.year[n]['so_luong']*100;
                    console.log(data_1);
                    console.log(data_2);
                    console.log(data_3);
                    dataArray.push ([data_1,data_2,data_3]);
                };
                function drawCharts() {
                    var barData = google.visualization.arrayToDataTable(dataArray);
                    var barOptions = {
                        focusTarget: 'category',
                        backgroundColor: 'transparent',
                        colors: ['cornflowerblue', 'tomato'],
                        fontName: 'Open Sans',
                        chartArea: {
                            left: 50,
                            top: 10,
                            width: '100%',
                            height: '70%'
                        },
                        bar: {
                            groupWidth: '80%'
                        },
                        hAxis: {
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        vAxis: {
                            minValue: 0,
                            maxValue: 1500,
                            baselineColor: '#DDD',
                            gridlines: {
                                color: '#DDD',
                                count: 4
                            },
                            textStyle: {
                                fontSize: 11
                            }
                        },
                        legend: {
                            position: 'bottom',
                            textStyle: {
                                fontSize: 12
                            }
                        },
                        animation: {
                            duration: 1200,
                            easing: 'out',
                            startup: true
                        }

                    };
                    var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart2'));
                    barChart.draw(barData, barOptions);
                }
                    }
                );
        },
    }

})
