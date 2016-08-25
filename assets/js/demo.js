function inputController() {
	for(var i = 0; i < providers.length; i++) {
		providers[i].onclick = function() {
			setInputsDisabled();
			setProviderDataHide();
			setInputsEnabled(this.value);
			setProviderDataShow(this.value);
		};
	}			
}

function setProviderDataHide() {
	for(var i = 0; i < providerData.length; i++) {
		providerData[i].style.display = 'none';
	}	
}

function setProviderDataShow(providerName) {
	var elem = document.getElementsByClassName('providerData ' + providerName);
	for(var i = 0; i < elem.length; i++) {
		elem[i].style.display = 'block';
	}			
}

function setInputsDisabled() {
	for(var i = 0; i < inputs.length; i++) {
		inputs[i].disabled = true;
	}
}

function setInputsEnabled(providerName) {
	var elem = document.getElementsByClassName('input ' + providerName);
	for(var i = 0; i < elem.length; i++) {
		elem[i].disabled = false;
	}			
}

function showPayPalReference(data) {
	var display = 'block',
		disabled = false,
		elemDiv = document.getElementsByClassName('PayPal-Reference'),
		elemInput = document.getElementsByClassName('input PayPal-Reference');
	if (typeof data != 'undefined' && data === false) {
		display = 'none';
		disabled = true;
	}
	for(var i = 0; i < elemDiv.length; i++) {
		elemDiv[i].style.display = display;
	}
	for(var i = 0; i < elemInput.length; i++) {
		elemInput[i].disabled = disabled;
	}
}