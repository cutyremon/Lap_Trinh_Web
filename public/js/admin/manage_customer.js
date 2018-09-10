new Vue({
	el:'#manage_user',
	data: {
		user:{},
		order_sl: '',
	},
	computed: {

	},
	mounted : function()
	{

	},
	methods : {
		show_info_user : function(user){
			$('#show_info_user').modal('show');
			this.user = user;
			console.log(this.user);
			var authOptions = {
                method: 'get',
                url: '/api/v1/user_oder/' + user['id'],
                json: true,
            };
            axios(authOptions).then(response => {
            this.order_sl = response.data;
			});
       	}
	}
})
