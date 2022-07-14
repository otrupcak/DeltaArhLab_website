require('./bootstrap');

import Alpine from 'alpinejs';
import { map, toInteger } from 'lodash';

window.Alpine = Alpine;

Alpine.start();


if(window.location.pathname =="/"){

var myCanvas = document.getElementById('canvas'),
    el_main = document.getElementById('main');
var pad_x = parseInt(window.getComputedStyle(document.getElementById('main')).paddingLeft) + parseInt(window.getComputedStyle(document.getElementById('main')).paddingRight);
var pad_y = parseInt(window.getComputedStyle(document.getElementById('main')).paddingBottom) + parseInt(window.getComputedStyle(document.getElementById('main')).paddingTop);
var ctx = myCanvas.getContext("2d");

var distance = 30;
var size = el_main.getBoundingClientRect().width/17;
var font_size = size + "px";

function tekstDAL(font_size_v){
    ctx.font = 'bold '+ font_size_v +' Roboto';
    ctx.textAlign = "center";
    ctx.textBaseline = "middle";
    ctx.fillStyle = '#f3f4f6';
    ctx.fillText('', myCanvas.width/2, myCanvas.height/2);
}

function draw_circ(radius){

    for (var i=distance; i<myCanvas.width-distance; i+=distance){

        for (var j=distance; j<myCanvas.height-distance; j+=distance){
            ctx.beginPath();
            ctx.fillStyle = '#cfcfcf';
            ctx.arc(i+1,j+1,radius,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = '#eee';
            ctx.arc(i-1,j-1,radius,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = 'rgb(229,231,235)';
            ctx.arc(i,j,radius,0,6.28);
            ctx.fill();
        }
    }
}

window.onload = function() {
    myCanvas.height = el_main.getBoundingClientRect().height-pad_y;
    myCanvas.width = el_main.getBoundingClientRect().width-pad_x;

    var radius = (i/myCanvas.width)*distance/2.3;

    tekstDAL(font_size);

    for (var i=distance; i<myCanvas.width-distance; i+=distance){

        for (var j=distance; j<myCanvas.height-distance; j+=distance){
            ctx.beginPath();
            ctx.fillStyle = '#cfcfcf';
            ctx.arc(i+1,j+1,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = '#eee';
            ctx.arc(i-1,j-1,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = 'rgb(229,231,235)';
            ctx.arc(i,j,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
        }
    }


  };

window.onresize = function() {
    myCanvas.height = el_main.getBoundingClientRect().height-pad_y;
    myCanvas.width = el_main.getBoundingClientRect().width-pad_x;

    pad_x = parseInt(window.getComputedStyle(document.getElementById('main')).paddingLeft) + parseInt(window.getComputedStyle(document.getElementById('main')).paddingRight);
    pad_y = parseInt(window.getComputedStyle(document.getElementById('main')).paddingBottom) + parseInt(window.getComputedStyle(document.getElementById('main')).paddingTop);

    var radius = (i/myCanvas.width)*distance/2.3;

    tekstDAL(font_size);

    for (var i=distance; i<myCanvas.width-distance; i+=distance){

        for (var j=distance; j<myCanvas.height-distance; j+=distance){
            ctx.beginPath();
            ctx.fillStyle = '#cfcfcf';
            ctx.arc(i+1,j+1,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = '#eee';
            ctx.arc(i-1,j-1,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = 'rgb(229,231,235)';
            ctx.arc(i,j,(i/myCanvas.width)*distance/2.3,0,6.28);
            ctx.fill();
        }
    }

    size = el_main.getBoundingClientRect().width/13;
    font_size = size + "px";
  };

window.onmousemove = function(event){

    event = event;

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    var radius = 0;

    tekstDAL(font_size);

    for (var i=distance; i<myCanvas.width-distance; i+=distance){

        for (var j=distance; j<myCanvas.height-distance; j+=distance){
            ctx.beginPath();
            ctx.fillStyle = '#cfcfcf';
            ctx.arc(i+1,j+1,Math.min(Math.max(Math.abs(i-event.pageX+pad_x/2)/myCanvas.width , Math.abs(j-event.pageY+pad_y*2)/myCanvas.height)*distance, distance/2.3),0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = '#eee';
            ctx.arc(i-1,j-1,Math.min(Math.max(Math.abs(i-event.pageX+pad_x/2)/myCanvas.width , Math.abs(j-event.pageY+pad_y*2)/myCanvas.height)*distance, distance/2.3),0,6.28);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.fillStyle = 'rgb(229,231,235)';
            ctx.arc(i,j,Math.min(Math.max(Math.abs(i-event.pageX+pad_x/2)/myCanvas.width , Math.abs(j-event.pageY+pad_y*2)/myCanvas.height)*distance, distance/2.3),0,6.28);
            ctx.fill();
        }
    }



    }

}
