// The root URL for the RESTful services
//be sure to update, mayeb a switch case based on environment
var rootURL = "http://localhost:8888/api";


//EXAMPLES
findById();

function findAll() {
	$.ajax({
		type: 'GET',
		url: rootURL+'/users/all',
		dataType: "json",
		success: function(r){
			
			for (var i = r.length - 1; i >= 0; i--) {
				console.log(r[i]);
				var userholder = '<span>';
				userholder += '<p>ID: '+ r[i].id + '</p>';
				userholder += '<p>Name: '+ r[i].name + '</p>';
				userholder += '<p>Category: ' + r[i].category + '</p>'
				$('.userlist').append(userholder);
			};
		}
	});
}

function findAllByCategory() {
	$.ajax({
		type: 'GET',
		url: rootURL+'/users/all/1',
		dataType: "json",
		success: function(r){
			console.log(r);
		}
	});
}

function findById() {
	$.ajax({
		type: 'GET',
		url: rootURL+'/user/1',
		dataType: "json",
		success: function(r){
			console.log(r);
		}
	});
}


//DEMO CODE

