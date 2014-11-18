// The root URL for the RESTful services
//BE SURE TO UPDATE, MAYBE SWITCH BASED ON URL
var rootURL = "http://localhost:8888/api";
findAll();
//EXAMPLE AJAX
function findAll() {
	$.ajax({
		type: 'GET',
		url: rootURL+'/users/all',
		dataType: "json",
		success: function(r){
			console.log(r);
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