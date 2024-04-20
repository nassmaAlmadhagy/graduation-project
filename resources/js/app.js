import './bootstrap';
import jQuery from 'jquery';
import 'rater-js/index'
import 'rater-js'
import 'bootstrap-star-rating';
import '../css/app.css'; 
window.$ = jQuery;




const d = document.getElementById('test-paragraph');
console.log(d)

$("button").click(function(){
    console.log('clcik')
            alert("Thanks");
        });