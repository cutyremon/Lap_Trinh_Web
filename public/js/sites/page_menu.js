new Vue	({
	el:'#content_menu',
	data : {
		foods:[],
		drinks:[],
		last_page_food:0,
		last_page_drink:0,
		current_page_food:1,
		current_page_drink:1,
		url:"../img/",
		search:[],

	},
	mounted :function(){
		this.show_food();
		this.show_drink();
		this.search_product();
	},
	methods: {
		show_food :function($pageNo){
			var authOptions = {
                method: 'get',
                url: '/api/v1/foods?page='+$pageNo,
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'foods', response.data.data);
                this.current_page_food = response.data.current_page;
                this.last_page_food = response.data.last_page;
                // console.log(this.foods);
            });
		},
		show_drink :function($pageNo){
			var authOptions = {
                method: 'get',
                url: '/api/v1/drinks?page='+$pageNo,
                json: true,
            }
            axios(authOptions).then(response => {
                this.$set(this, 'drinks', response.data.data);
                this.current_page_drink = response.data.current_page;
                this.last_page_drink = response.data.last_page;
                // console.log(this.drinks);
            });
		},

		search_product : function(){
			var x = Array();
			var authOptions = {
                method: 'get',
                url: '/api/v1/products',
                json: true,
            }
            axios(authOptions).then(response => {
            	var mang_food = Array();
                this.$set(this, 'search', response.data);
                for (var i = this.search.length - 1; i >= 0; i--) {
                	mang_food[i]=this.search[i].name;
                }
                $( "#search_product" ).autocomplete({
      			source: mang_food
    			});
            }); 
		}
	}
})