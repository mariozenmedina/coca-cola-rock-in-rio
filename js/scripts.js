var svgs = document.getElementsByClassName('oneline');
function adjustEl( scroll ){
    for (var i = 0; i < svgs.length; i++) {
        var min = svgs[i].getBoundingClientRect().top + scroll - window.innerHeight;
        var max = svgs[i].getBoundingClientRect().top + svgs[i].getBoundingClientRect().height + scroll;

        if ( scroll > min && scroll < max ){
            var pct = ( scroll - min ) / ( max - min );
            svgs[i].style.strokeDasharray = pct * 600+', 1000000';
        }
        else{
            svgs[i].style.strokeDasharray = '10, 1000000';
        }
    }
}

var numEl = document.getElementById('numeros');
let numAnimate = true;
window.addEventListener("scroll", (event) => {
	let scr = this.scrollY;
	adjustEl(scr);

	var numElTop = numEl.getBoundingClientRect().top;
	if( numElTop <  window.innerHeight - 600 && numElTop > -500 && numAnimate){
		goNumbers();
		numAnimate = false;
	}
	if( numElTop >  window.innerHeight - 600 || numElTop < -500 ){
		numAnimate = true;
	}
});


function animateNumber(cnt, max, dec, sufix, dir, i){
	//console.log(max, dec, sufix, dir, i);
	setTimeout(function() {
		let part = (max / 25);
		let inner = (max - part*i).toFixed(dec) + sufix;
		cnt.innerHTML = inner.replace(".", ",");
		if(i > 0){
			animateNumber(cnt, max, dec, sufix, dir, i-1);
		}
	}, 30);
}

var counters = document.getElementsByClassName('counter');
function goNumbers(){
	for (var i = 0; i < counters.length; i++) {
		let max = counters[i].getAttribute('data-counter-value');
		let decimals = max.toString().split(".");
		let dec = typeof decimals[1] !== 'undefined' ? decimals[1].length : 0;
		max = parseFloat(max);
		let sufix = counters[i].getAttribute('data-counter-after');
		let direction = max > 0 ? true : false;

		animateNumber(counters[i], max, dec, sufix, direction, 25);
	}
}

var go = document.querySelectorAll(".go");
for (var i = 0; i < go.length; i++) {
    go[i].addEventListener("click", function(){
        var goto = this.dataset.go;
        document.getElementById(goto).scrollIntoView({ 
          behavior: 'smooth' 
        });
        document.getElementById("menu-inp").checked = false;
    });
}