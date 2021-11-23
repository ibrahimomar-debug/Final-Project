$(function(){

	// Getting the data from the input variable
	$('#myForm').submit(function(event){

		var formdata ={
		'famName' : $('input[name=famName]').val(),
		'fName' : $('input[name=fName]').val(),
		'mName' : $('input[name=mName]').val(),
		'alias' : $('input[name=alias]').val(),
		'fmark' : $('input[name=fmark]').val(),
		'bdate' : $('input[name=bdate]').val(),
		'bplace' : $('input[name=bplace]').val(),
		'sexOption' : $('select[name=sexOption]').val(),
		'nation' : $('input[name=nation]').val(),
		'relbel' : $('input[name=relbel]').val(),
		'occupation' : $('select[name=occupation]').val(),
		'spname' : $('input[name=spname]').val(),
		'spOccu' : $('input[name=spOccu]').val(),
		'voterOption' : $('select[name=voterOption]').val(),
		'cityAdd' : $('input[name=cityAdd]').val(),
		'provinceAdd' : $('input[name=provinceAdd]').val(),
		'purok' : $('input[name=purok]').val(),
		'emailAdd' : $('input[name=emailAdd]').val(),
		'hNumberOne' : $('input[name=hNumberOne]').val(),
		'hNumberTwo' : $('input[name=hNumberTwo]').val(),
		'mNumberOne' : $('input[name=mNumberOne]').val(),
		'mNumberTwo' : $('input[name=mNumberTwo]').val(),
		'resType' : $('input[name=resType]').val(),
		'resStatus' : $('input[name=resStatus]').val()
	}

	// Call Ajax and isnert data to database

	$.ajax({
		method : 'POST',
		url : 'residentReg.php',
		data: {
			form : formdata
		}
	}).done(function(response){
		alert(response);
	});

		event.preventDefault();
	});	
});
	
