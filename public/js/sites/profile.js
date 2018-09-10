new Vue({
	el:'#content_menu',
	data: {
		chang_password:'',
	},
	computed: {

	},
	mounted : function()
	{

	},
	methods : {
		change_password : function(){
			var authOptions = {
                method: 'get',
                url: 'user/changePassword',
                json: true,
            };
             axios(authOptions).then(response => {
             	console.log(response);
                toastr.success('Change Password Success', 'Success', {timeOut: 1000});
        }).catch((error) => {
                toastr.error('Changes Password Error', 'Error', {timeOut: 1000});
        	});
    	}
	}
})