$(document).ready(function() {
	// Enable the Submit button since javascript is enabled.
	$('#submit').prop('disabled', false);
	$('#command').change(function () {
		switch($(this).val()) {
			case 'GetDnsSec':
				$('.disable').prop('disabled', true).hide();
				$('.hide').hide();
			break;
			default:
				$('.disable').prop('disabled', false).show();
				$('.hide').show();
			break;
		}
	});
	$('#digesttype').change(function () {
		var str;
		switch($(this).val()) {
			case '1':
				str = 'SHA-1 (Algorithm 1)';
			break;
			case '2':
				str = 'SHA-256 (Algorithm 2)';
			break;
		}
		$('#digest').attr('placeholder', str);
	});
	$('#resetfields').click(function (event) {
		event.preventDefault();
		$('.reset').val('');
		$('#results').attr('src', '');
		$('#sld').focus();
	});
	$('#mainform').submit(function (event) {
		event.preventDefault();
		var command = $('#command').val(), url = 'https://reseller.enom.com/interface.asp?command=' + command + '&uid=' + $('#uid').val() + '&pw=' + $('#pw').val() + '&SLD=' + $('#sld').val() + '&TLD=' + $('#tld').val();
		switch(command) {
			case 'AddDnsSec':
			case 'DeleteDnsSec':
				url += '&Alg=' + $('#alg').val() + '&Digest=' + $('#digest').val() + '&DigestType=' + $('#digesttype').val() + '&KeyTag=' + $('#keytag').val();
			break;
		}
		$('#results').attr('src', url);
	});
});
