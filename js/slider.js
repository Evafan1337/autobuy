
function autoSliderMove(){
	//triggerAutomatic = 1;
	//console.log('autoSliderMove----------------');
	previousSlide =  document.getElementsByClassName('active-slide');
	//console.log(previousSlide);
	sliderCounter = sliderElementsArray.indexOf(previousSlide[0]);
	//sliderElementsArray.indexOf(previousSlide[0]);
	//console.log(sliderCounter);
	if(sliderCounter === arrayLength && triggerAutomatic === 1){
		//console.log('end-slider');
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter = 0;
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide');
		//console.log('end-slider-end');
	}else if(triggerAutomatic === 1){
		//console.log('usual-sliding');
		//console.log(sliderCounter);
		//console.log(sliderElementsArray[sliderCounter]);
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter++;
		//sliderMoveDelay(sliderCounter);
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide');
		//console.log('usual-sliding-end');
	}
	//return sliderCounter;
}

// function myLoop () {           //  create a loop function
//    setTimeout(function () {    //  call a 3s setTimeout when the loop is called
//       alert('hello');          //  your code here
//       i++;                     //  increment the counter
//       if (i < 10) {            //  if the counter < 10, call the loop function
//          myLoop();             //  ..  again which will trigger another 
//       }                        //  ..  setTimeout()
//    }, 3000)
// }
j=0;
function sliderMoveDelay(status){
	console.log('sliderMoveDelay');
	console.log(status);
	//for(i = 0; i<10; i++){
		//setTimeout(autoSliderMove,1500,sliderCounter,sliderElementsArray,sliderControlsArray,arrayLength);
		//console.log('after-sliderMoveDelay');

		setTimeout(function(){
			//console.log('time');
			//console.log(sliderElementsArray);
			//console.log(sliderCounter);
			sliderCounter = autoSliderMove();
			j++;
			if(j>-1){
				sliderMoveDelay('recursive');
				triggerAutomatic = 1;
			}
			else if(rightClick.onclick = function(){
				//sliderCounter--;
				//console.log('rightClick while automatic is on');
				//break;
			});
		},5000)
	//}
}
triggerAutomatic = 1;
sliderElementsArray = Array.from(document.querySelectorAll('.slider-elem'));
var leftClick = document.getElementById('leftClick');
var rightClick = document.getElementById('rightClick');
sliderControlsArray = Array.from(document.getElementsByClassName('controls__elem'));
var arrayLength = sliderElementsArray.length;
arrayLength--;
var sliderCounter=0;
console.log(sliderControlsArray);
console.log(sliderElementsArray);
console.log(leftClick);
console.log(rightClick);
console.log(arrayLength);

setTimeout(sliderMoveDelay,5000,'begin');

rightClick.addEventListener("click",function(evt)
{
	console.log(triggerAutomatic);
	evt.preventDefault();
	// triggerAutomatic = 0;
	previousSlide =  document.getElementsByClassName('active-slide');
	//console.log(previousSlide);
	sliderCounter = sliderElementsArray.indexOf(previousSlide[0]);
	if(sliderCounter === arrayLength){
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter = 0;
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide');
	}else{
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter++;
		//sliderMoveDelay(sliderCounter);
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide');
		//triggerAutomatic = 1;
		//setTimeout(sliderMoveDelay,5000);
	//	sliderCounter,sliderElementsArray,sliderControlsArray,arrayLength
	}
	if(triggerAutomatic === 0){
		triggerAutomatic = 1;
		console.log('automatic now stop!');
		setTimeout(sliderMoveDelay,5000,'rightClick-0');
	}
	else{
		console.log('alternate');
		triggerAutomatic = 0;
		//setTimeout(sliderMoveDelay,5000);
		//triggerAutomatic = 1;
		setTimeout(sliderMoveDelay,5000,'rightClick-1');
		//triggerAutomatic = 1;
	}
	console.log('right');
});

leftClick.addEventListener("click",function(evt)
{
	evt.preventDefault();
	//console.log('left');
	previousSlide =  document.getElementsByClassName('active-slide');
	//console.log(previousSlide);
	sliderCounter = sliderElementsArray.indexOf(previousSlide[0]);
	if(sliderCounter === 0){
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter = arrayLength;
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide')
	}else{
		sliderElementsArray[sliderCounter].classList.remove('active-slide');
		sliderControlsArray[sliderCounter].classList.remove('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('hidden');
		sliderCounter--;
		sliderElementsArray[sliderCounter].classList.remove('hidden');
		sliderControlsArray[sliderCounter].classList.add('controls__elem--active');
		sliderElementsArray[sliderCounter].classList.add('active-slide');
	}
	if(triggerAutomatic === 0){
		triggerAutomatic = 1;
		console.log('automatic now stop!');
		setTimeout(sliderMoveDelay,5000,'leftClick-0');
	}
	else{
		triggerAutomatic = 1;
		setTimeout(sliderMoveDelay,5000,'leftClick-1');
	}
});

sliderControlsArray.forEach(function(element,i){
	if(element.onclick = function(evt){
		//console.log(i);
		previousSlide =  document.getElementsByClassName('active-slide');
		//console.log(previousSlide);
		previousSlideIndex = sliderElementsArray.indexOf(previousSlide[0]);
		//previousSlideIndex = sliderElementsArray.findIndex(previousSlide);
		//console.log(previousSlideIndex);
		sliderElementsArray[previousSlideIndex].classList.remove('active-slide');
		sliderControlsArray[previousSlideIndex].classList.remove('controls__elem--active');
		sliderElementsArray[previousSlideIndex].classList.add('hidden');

		sliderElementsArray[i].classList.remove('hidden');
		sliderControlsArray[i].classList.add('controls__elem--active');
		sliderElementsArray[i].classList.add('active-slide');
		sliderCounter = i;

		if(triggerAutomatic === 0){
			triggerAutomatic = 1;
			console.log('automatic now stop!');
			setTimeout(sliderMoveDelay,5000,'controlsClick-0');
		}
		else{
			triggerAutomatic = 1;
			setTimeout(sliderMoveDelay,5000,'controlsClick-1');
		}
	});
});