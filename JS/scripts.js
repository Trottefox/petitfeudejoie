<!-- Titre glissant -->
var ic = 0; 
var str = document.title;
var tilen = str.length;
var go;
var c = 0;
function ts() { 
til(); 
if(c < tilen) { 
clearTimeout(go); } 
c++; 
go = setTimeout("ts();",10) } 
function til() { 
var dti = str.substring((tilen - ic - 1),tilen); 
document.title = dti; 
ic++; } 
ts(); 



<!-- Horloge -->
c1=new Image(); c1.src="IMG/horloge/c1.gif"
c2=new Image(); c2.src="IMG/horloge/c2.gif"
c3=new Image(); c3.src="IMG/horloge/c3.gif"
c4=new Image(); c4.src="IMG/horloge/c4.gif"
c5=new Image(); c5.src="IMG/horloge/c5.gif"
c6=new Image(); c6.src="IMG/horloge/c6.gif"
c7=new Image(); c7.src="IMG/horloge/c7.gif"
c8=new Image(); c8.src="IMG/horloge/c8.gif"
c9=new Image(); c9.src="IMG/horloge/c9.gif"
c0=new Image(); c0.src="IMG/horloge/c0.gif"

function affiche(h,m,s){

if (h<=9){
document.images.a.src=c0.src
document.images.b.src=eval("c"+h+".src")
}
else {
document.images.a.src=eval("c"+Math.floor(h/10)+".src")
document.images.b.src=eval("c"+(h%10)+".src")
}

if (m<=9){
document.images.d.src=c0.src
document.images.e.src=eval("c"+m+".src")
}
else {
document.images.d.src=eval("c"+Math.floor(m/10)+".src")
document.images.e.src=eval("c"+(m%10)+".src")
}

if (s<=9){
document.images.g.src=c0.src
document.images.h.src=eval("c"+s+".src")
}
else {
document.images.g.src=eval("c"+Math.floor(s/10)+".src")
document.images.h.src=eval("c"+(s%10)+".src")
}
}

function tictac(){

var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
affiche(hours,minutes,seconds)

setTimeout("tictac()",1000)

}



<!-- jquery animations -->
					
$(document).ready(function(){
	$('#scroll').cycle(
					{fx:'custom',next:'#scroll',speed: 1000,timeout:10000,cssBefore:{left:100,top:0,width:850,height:90,opacity:0,display:'block'}
						,animOut:{opacity:0}
						,animIn:{left:0,top:0,width:850,height: 90,opacity:1}
						,cssAfter:{left:0,zIndex: 0,opacity: 0},delay:-10 , pause: 1, random: 1}
					);
	
	
	$('.lslideshow').cycle({
		fx: 'fade',
		speed:3000,
		delay:-3000,
		pause: 1,
		timeout: 10,
		random: 1
	});


	var anchoractuelle=0;
	$('#Divmasque').height($('#onglet' + anchoractuelle).height());
	$('#Bkground').height($('#onglet' + anchoractuelle).height() +10 );
	$('#Divmasque').scrollTo($("#onglet0"), 0);	
	
	$('#href0').click(function(event){
	
		switch(anchoractuelle){
		case 0:
		   break;
		 
		 default:
			$('#Divmasque').height($('#onglet0').height());
			$('#Bkground').animate({'height':$('#onglet0').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet0"), 600);	
			
		   	var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a0');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href0');
			ongletactive.className='ongletliactif';
			break;
		}
		anchoractuelle=0;
		
	});

	$('#href1').click(function(event){
	
		switch(anchoractuelle){
		case 1:
		break;
		 
		 default:
			$('#Divmasque').height($('#onglet1').height());
			$('#Bkground').animate({'height':$('#onglet1').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet1"), 600);	

		   	var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a1');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href1');
			ongletactive.className='ongletliactif';
			  break;
		}
		anchoractuelle=1;
		
	});
	
	$('#href2').click(function(event){

		
		switch(anchoractuelle){
		case 2:
		   break;
		 
		 default:
			$('#Divmasque').height($('#onglet2').height());
			$('#Bkground').animate({'height':$('#onglet2').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet2"), 600);	
			
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a2');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href2');
			ongletactive.className='ongletliactif';
			break;
		}
		anchoractuelle=2;
	});

	
	$('#href3').click(function(event){
		
		switch(anchoractuelle){
		case 3:
		   break;
		 
		 default:			
			$('#Divmasque').height($('#onglet3').height());
			$('#Bkground').animate({'height':$('#onglet3').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet3"), 600);	
			
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a3');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href3');
			ongletactive.className='ongletliactif';		 
			 break;
		}
		anchoractuelle=3;
	});

	
	$('#href4').click(function(event){

		switch(anchoractuelle){
		case 4:
		   break;
		 
		 default:
			$('#Divmasque').height($('#onglet4').height());
			$('#Bkground').animate({'height':$('#onglet4').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet4"), 600);	
		   
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a4');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href4');
			ongletactive.className='ongletliactif';
			break;
		}
		anchoractuelle=4;
	});

	
	$('#href5').click(function(event){

		switch(anchoractuelle){
		case 5:
		   break;
		 
		 default:

			$('#Divmasque').height($('#onglet5').height());
			$('#Bkground').animate({'height':$('#onglet5').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet5"), 600);	
		
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a5');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href5');
			ongletactive.className='ongletliactif';		   
		   break;
		}
		anchoractuelle=5;
	});
	
	$('#href6').click(function(event){

		switch(anchoractuelle){
		case 6:
		   break;
		 
		 default:

			$('#Divmasque').height($('#onglet6').height());
			$('#Bkground').animate({'height':$('#onglet6').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet6"), 600);	
		
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a6');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href6');
			ongletactive.className='ongletliactif';		   
		   break;
		}
		anchoractuelle=6;
	});		
	$('#href7').click(function(event){
		
		switch(anchoractuelle){
		case 7:
		   break;
		 
		 default:			
			$('#Divmasque').height($('#onglet7').height());
			$('#Bkground').animate({'height':$('#onglet7').height()+10},{queue:false, duration:500});
			$('#Divmasque').scrollTo($("#onglet7"), 600);	
			
			var ongletdesactive = document.getElementById('a' + anchoractuelle);
			ongletdesactive.className='ongleta';
			var ongletactive = document.getElementById('a7');
			ongletactive.className='ongletaactif';
			var ongletdesactive = document.getElementById('href' + anchoractuelle);
			ongletdesactive.className='ongletli';
			var ongletactive = document.getElementById('href7');
			ongletactive.className='ongletliactif';		 
			 break;
		}
		anchoractuelle=7;
	});
 });