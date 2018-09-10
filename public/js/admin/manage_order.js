new Vue({
	el:'#manage_order',
	data: {
		order_details:{},
		order_sl: '',
		url : '../img/',
		id :'',
		status :'',
	},
	computed: {

	},
	mounted : function()
	{

	},
	methods : {
		show_detail_order : function(order_id){
			$('#show_detail_order').modal('show');
			var authOptions = {
                method: 'get',
                url: '/api/v1/order_detail/' + order_id,
                json: true,
            };
            axios(authOptions).then(response => {
            	this.order_details = response.data;
            	this.id = this.order_details[0].order_id;
            	this.status = this.order_details[0].status;
            	console.log(this.status);
			});
       	}
	}
})