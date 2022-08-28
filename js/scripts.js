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

window.addEventListener("scroll", (event) => {
	let scr = this.scrollY;
	if(scr > 270){
		document.getElementById("logo-coca").classList.add('scroll');
	}
	if(scr < 250){
		document.getElementById("logo-coca").classList.remove('scroll');
	}
	adjustEl(scr);
});