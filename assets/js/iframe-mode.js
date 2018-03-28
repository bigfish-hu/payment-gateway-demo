function bfpmgwStartPayInLayer()
{
	console.log($("#startForm").attr("action"));
	console.log($("#startForm").serialize());

	$.ajax({
		method: "POST",
		url: $("#startForm").attr("action") + '&xhr',
		data: $("#startForm").serialize(),
		success: function(data) {
			console.log(data);
			var options = {
				name:'bfpmgw-payment-layer', 
				url:data
			};
			bfpmgwShowPayInLayer(options);
		}
	});/*
	.done(function(result) {
		console.log(result);
	});*/
}

function bfpmgwShowPayInLayer(options)
{
	if (typeof options !== 'object') {
        options = {
			name:'bfpmgw-payment-layer', 
			url:'https://www.paymentgateway.hu/'
		};
	}

    var bfpmgwPaymentLayer = '<div class="bfpmgw-payment-layer" id="'+options.name+'"><div><div><iframe src="'+options.url+'"></iframe></div></div></div>';

	if ($("#"+options.name).length) {
        $("#"+options.name+" > iframe").attr("src", options.url);
	} else {
        $("body").append(bfpmgwPaymentLayer);
    }

	$("#" + options.name).css({"display":"block"});
}
