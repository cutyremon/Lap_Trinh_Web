var manage_food = new Vue	({
    el:'#manage_food',
    data : {
        foods:[],
        image:'',
        item_food:{'name':'','price':'','description':'',},
        new_food:{'name':'','price':'','description':'','category':'','image':''},
    },
    computed: {
    },
    mounted :function(){
        this.show_food();
    },
    methods: {
        show_food :function(){
            var authOptions = {
                method: 'get',
                url: '/api/v1/all_foods',
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data);
            console.log(this.foods);
        });
        },
        confirm_delete: function(food){
            $('#delete_food_confirm').modal('show');
            this.item_food = food;
        },
        delete_food:function(id){
            console.log(id);
            var authOptions = {
                method: 'get',
                url: '/api/v1/delete_food/' + id,
                json: true,
            }
            axios(authOptions).then(response => {
                toastr.success('Delete food success', 'Success', {timeOut: 1000});
        }).catch((error) => {
                toastr.error('Delete food error', 'Error', {timeOut: 1000});
        });
            this.show_food();
        },
        edit_food : function(food) {
            $('#show_edit_food').modal('show');
            this.item_food = food;
        },
        edit : function(id){
            var authOptions = {
                method: 'post',
                url: '../api/v1/update_food/' + id,
                params: this.item_food,
                json: true,
            }
            axios(authOptions).then(response => {
                toastr.success('Edit food success', 'Success', {timeOut: 1000});
        }).catch((error) => {
                toastr.error('Edit food error', 'Error', {timeOut: 1000});
        });
            this.show_food
        },
        show_create : function(){
            $('#show_create').modal('show');
        },
        create_food : function(){
            var input = this.new_food;
            this.new_food['image'] = this.image;
            this.new_food['category'] = 'Food';
            console.log(input);
            var authOptions = {
                method: 'post',
                url: '/api/v1/create_food',
                params: input,
                json: true
            }
            axios(authOptions).then((response) => {
                this.new_food ={'name':'','price':'','describle':''};
            toastr.success('Add food success', 'Success', {timeOut: 1000});
        }).catch((error) => {
                toastr.error('Add food error', 'Error', {timeOut: 1000});
        });
            // console.log('hihi')
        },
        onChange: function(e) {
            e.preventDefault()
            this.image = e.target.files[0].name;
            
        }


    }

})
