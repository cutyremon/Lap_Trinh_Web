new Vue	({
    el:'#thongke',
    data : {
        product : {'name':'','so_luong':'',},
        sum :'',
        tongtien :'',
        tien_ngay:'',
        day:[],
        month:[],
        year:[],
    },
    computed: {
    },
    mounted :function(){
        this.product_hot();
        this.tong_tien();
        this.tong_tien_ngay_ht();
        this.chart();
    },
    methods: {
        product_hot:function() {
            var authOptions = {
                method: 'get',
                url: '/api/v1/product_hot',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'product', response.data);
                this.sum = this.product['sum'][0].so_luong;
                // console.log(this.sum);

        });
        },
        tong_tien:function() {
            var authOptions = {
                method: 'get',
                url: '/api/v1/totalamount',
                json: true,
            }
            axios(authOptions).then(response => {
                this.tongtien = response.data[0]['tong_tien'];
                // console.log(this.tongtien);

        });
        },
        tong_tien_ngay_ht:function() {
            var authOptions = {
                method: 'get',
                url: '/api/v1/day_total',
                json: true,
            }
            axios(authOptions).then(response => {
                this.tien_ngay = response.data[0]['tong_tien'];
                // console.log(this.tien_ngay);

        });
        },

        chart:function()
        {
            var authOptions = {
                method: 'get',
                url: '/api/v1/day',
                json: true,
            }
            axios(authOptions).then(response => {
                this.day = response.data;

            });
             console.log(this.day);
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawCharts);
            function drawCharts() {
                var barData = google.visualization.arrayToDataTable([
                    ['Day', 'COST Total', 'ORDER Total'],
                    ['Sun',  50,      600],
                    ['Mon',  1200,      910],
                    ['Tue',  660,       400],
                    ['Wed',  1030,      540],
                    ['Thu',  1000,      480],
                    ['Fri',  1170,      960],
                    ['Sat',  660,       320]
                    ]);
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
            };
        }




    }

})
