var photoArray = Array.from(document.querySelectorAll('div.application-photo'));
var buttonsArray = Array.from(document.querySelectorAll('button.application-text__showing-photo'));
buttonsArray.forEach(function(element,index){
	if(element.onclick = function(evt){
		evt.preventDefault();
		if(photoArray[index].classList.contains('hidden')){
			photoArray[index].classList.remove('hidden');
		}
		else{
			photoArray[index].classList.add('hidden');
		}
	});
});