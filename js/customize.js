$(document).ready(function() {
	get_options('cpu');
	get_options('ram');
	get_options('gpu');
	get_options('sound');
	get_options('drive1');
	get_options('drive2');
	get_options('drive3');
	get_options('drive4');
	get_options('optic');
	get_options('os');
	get_total();
});

function get_options(id) {
	if(id == 'drive1' || id == 'drive2' || id == 'drive3' || id == 'drive4') {
		var parts_list = parts['hdd'].concat(parts['ssd']).concat(parts['none']);
	}
	else var parts_list = parts[id].concat(parts['none']);
	var selected_value = document.getElementById(id).value;
	if(selected_value == '') {
		selected_value = parts_list[0].id;
	}
	for(i = 0; i < parts_list.length; i++) {
		if(parts_list[i].id == selected_value) {
			var selected_price = parts_list[i].price;
			break;
		}
	}

	$('#'+id).children('optgroup').children('option').each(function() {
		var i;
		for(i = 0; i < parts_list.length; i++) {
			if(parts_list[i].id == this.value) {
				var difference = parts_list[i].price - selected_price;
				if(selected_value == parts_list[i].id) {
					price_text = '';
				}
				else if(difference < 0) {
					difference *= -1;
					price_text = ' [subtract €' + (difference/100).toFixed(2) + ']';
				}
				else {
					price_text = ' [add €' + (difference/100).toFixed(2) + ']';
				}
				this.text = parts_list[i].name + price_text;
			}
		}
	});
}

function get_total() {
	var total = get_price('mobo') + get_price('cpu') + get_price('ram') + get_price('gpu') + get_price('sound') + get_price('net') + get_price('drive1') + get_price('drive2') + get_price('drive3') + get_price('drive4') + get_price('optic') + get_price('chassis') + get_price('cooler') + get_price('os') + get_price('psu');
	$('#total-price').empty().append('€'+(total/100).toFixed(2));
}

function get_price(id) {
	var val = document.getElementById(id).value;
	if(val == 0) return 0;
	var parts_list;
	if(id == 'drive1' || id == 'drive2' || id == 'drive3' || id == 'drive4') parts_list = parts['hdd'].concat(parts['ssd']);
	else parts_list = parts[id];
	var price = 0;
	var i;
	for(i = 0; i < parts_list.length; i++) {
		if(val == parts_list[i].id) {
			price = parts_list[i].price;
			break;
		}
	}
	return parseInt(price);
}