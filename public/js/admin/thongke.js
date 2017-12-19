var manage_food = new Vue	({
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
                console.log(this.sum);

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
                console.log(this.tongtien);

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
                console.log(this.tien_ngay);

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
                console.log(this.day);
            });
        }




    }

})
