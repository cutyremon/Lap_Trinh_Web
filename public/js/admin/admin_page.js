new Vue({
	el:'#home',
	data: {
		complete_sl:'',
		waiting_sl: '',
		inprogress_sl:'',
		drink_sl:'',
		food_sl : '',
	},
	computed: {

	},
	mounted : function()
	{
		this.complete();
		this.waiting();
		this.inprogress();
		this.drink();
		this.food();

	},
	methods : {
		complete: function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/complete',
                json: true,
            };
            axios(authOptions).then(response => {
            	this.complete_sl = response.data[0].so_luong;
            	// console.log(this.complete_sl );
			});
		},
		waiting: function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/waiting',
                json: true,
            };
            axios(authOptions).then(response => {
            	this.waiting_sl = response.data[0].so_luong;
            	// console.log(this.waiting_sl );
			});
		},
		inprogress: function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/inprogress',
                json: true,
            };
            axios(authOptions).then(response => {
            	this.inprogress_sl = response.data[0].so_luong;
            	// console.log(this.inprogress_sl );
			});
			
		},
		drink: function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/drink_sl',
                json: true,
            };
            axios(authOptions).then(response => {
            	this.drink_sl = response.data[0].so_luong;
            	// console.log(this.drink_sl );
			});
			
		},
		food: function(){
			var authOptions = {
                method: 'get',
                url: '/api/v1/food_sl',
                json: true,
            };
            axios(authOptions).then(response => {
            	this.food_sl = response.data[0].so_luong;
            	// console.log(this.food_sl );
			});
			
		},

	}
})