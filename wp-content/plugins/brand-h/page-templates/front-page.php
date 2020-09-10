
<?php
get_header();
?>
<style>
.custom-container{
min-width:320px;
max-width:620px;
}
.container-fluid {
min-width: 320px;
}
.fixed-top{
position: fixed;
right: 0;
left: 0;
z-index: 1030;
top:0;
}
.main-navbar{
display:flex;
align-items: center;
}
.header{
min-height: 56px;
padding: 0 16px;
position: relative;
}
#customnavbar{
display:none;
}
.custom-navbar-collapse{
background:#ffffff;
color:green;
}
.mobileMenu{
width: 300px;
position: fixed;
top: 0;
bottom: 0;
margin:auto;
transition: all .25s ease;
z-index: 1030;
}
.mobileMenu.onright {
left: auto;
right: 0;
}
.mobileMenu.open {
-webkit-transform: translateX(0);
transform: translateX(0);
}
.overlay {
position: fixed;
-ms-touch-action: pan-x;
touch-action: pan-x;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
background-color: rgba(0,0,0,.6);
display: none;
z-index: 999;
min-width: 100vw!important;
}
/* begin slider*/
/* Slider */
.item{
background: #333;
text-align: center;
height: auto !important;
}
.control-buttons{
text-align:center;
}
.transition-timer-carousel-progress-bar {
height: 3px;
background-color: #5cb85c;
width: 0%;
margin: 0px 0px 0px 0px;
border: none;
z-index: 11;
position: relative;
}
/* end slider */
/* begin Graph */
[x-cloak] {
display: none;
}
.line {
background: repeating-linear-gradient(
to bottom,
#eee,
#eee 1px,
#fff 1px,
#fff 8%
);
}
.tick {
background: repeating-linear-gradient(
to right,
#eee,
#eee 1px,
#fff 1px,
#fff 5%
);
}
/* end Graph */
.navbar-nav {
overflow-y: auto;
}
</style>
<div class="container-fluid p-0">
<Header class="fixed-top flex justify-center ">
<nav class="main-navbar justify-center header flex-grow" style="max-width:
632px;">
<div class="logo "><img
src="/medi-hi/wp-content/uploads/2020/08/download.png" /></div>
<button onclick="menuopen()" id="button" class="navbar-toggler
absolute p-0" style="right:16px;"> <img
src="http://127.0.0.1/medi-hi/wp-content/uploads/2020/08/icons8-menu-26.png" /> </button>
<div id="customnavbar" class="custom-navbar-collapse mobileMenu
flex flex-col onright open">
<ul class="navbar-nav self-stretch flex-grow">
<div id="closesidebar" class="flex justify-between"
style="margin: 0px 20px; min-height: 28px;">
<img onclick="menuclose()"
src="/medi-hi/wp-content/uploads/2020/08/download-2.png"/>
</div>
<div>
<button data-v-526db336="" class="btn
btn-height-44 btn-normal btn-all-rounded font-semi-bold font-size-16 btn-block"
style="margin-top: 20px;"> Get started </button>
</div>
<div>
<h3>text1</h3>
<h3>text2</h3>
<h3>text3</h3>
<h3>text4</h3>
</div>
</ul>
<div class="side-bar-footer"></div>
</div>
</nav>
<!-- -->
<div class="overlay "></div>
</Header>
</div>
<div class="sm:container mx-auto custom-container ">
<div class="grid grid-cols-1 lg:grid-cols-1 section1">
<div style="background-image:
url('/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg');
height:300px;background-repeat:no-repeat;">
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-1 section2">
<!-- START SLIDER -->
<div id="myCarousel" class="carousel slide" data-interval="false" data-ride="carousel">
<!-- Carousel items -->
<div class="carousel-inner">
<div class="active item">
<div class="container">
<img
src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
</div>
</div>
<div class="item">
<div class="container">
<img
src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
</div>
</div>
<div class="item">
<div class="container">
<img
src="/medi-hi/wp-content/uploads/2020/08/main-beauty-1@2x.jpg" />
</div>
</div>
</div>
</div>
<hr class="transition-timer-carousel-progress-bar" />
<center>
</center>
<!-- END SLIDER -->
</div>
<div class="grid grid-cols-1 lg:grid-cols-1 section3">
<!-- begin Graph -->
<div x-data="app()" x-cloak class="px-4">
<div class="max-w-lg mx-auto py-10">
<div class="shadow p-6 rounded-lg bg-white">
<div class="md:flex md:justify-between md:items-center">
<div>
<h2 class="text-xl text-gray-800 font-bold leading-tight">Product Sales</h2>
<p class="mb-2 text-gray-600 text-sm">Monthly Average</p>
</div>
<!-- Legends -->
<div class="mb-4">
<div class="flex items-center">
<div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
<div class="text-sm text-gray-700">Sales</div>
</div>
</div>
</div>
<div class="line my-8 relative">
<!-- Tooltip -->
<template x-if="tooltipOpen == true">
<div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute
h-auto block"
:style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
>
<div class="shadow-xs rounded-lg bg-white p-2">
<div class="flex items-center justify-between text-sm">
<div>Sales:</div>
<div class="font-bold ml-2">
<span x-html="tooltipContent"></span>
</div>
</div>
</div>
</div>
</template>
<!-- Bar Chart -->
<div class="flex -mx-2 items-end mb-2">
<template x-for="data in chartData">
<div class="px-2 w-1/6">
<div :style="`height: ${data}px`"
class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
@mouseenter="showTooltip($event); tooltipOpen = true"
@mouseleave="hideTooltip($event)"
>
<div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6
text-gray-800 text-sm"></div>
</div>
</div>
</template>
</div>
<!-- Labels -->
<div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 -
1/chartData.length*100 + 3}%`"></div>
<div class="flex -mx-2 items-end">
<template x-for="data in labels">
<div class="px-2 w-1/6">
<div class="bg-red-600 relative">
<div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400
mx-auto" style="width: 1px"></div>
<div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3
text-gray-700 text-sm"></div>
</div>
</div>
</template>
</div>
</div>
</div>
</div>
</div>
<!-- end Graph -->
</div>
<h1 ><?php _e('Page is Home','brand-h-domain'); ?></h1>
<p><?php _e('Flushed Homepage as Blank','brand-h-domain'); ?></p>
<Footer>
<?php _e('Powered by Techroad','brand-h-domain'); ?>
</Fotter>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
defer></script>
<script type="text/javascript">
function menuopen()
{
$("#customnavbar").css("display", "block");
$(".overlay").css("display", "block");
}
function menuclose()
{
$("#customnavbar").css("display", "none");
$(".overlay").css("display", "none");
}
$(document).ready(function(){
var percent = 0, bar = $('.transition-timer-carousel-progress-bar'), crsl =
$('#myCarousel');
function progressBarCarousel() {
bar.css({width:percent+'%'});
percent = percent +0.5;
if (percent>100) {
percent=0;
crsl.carousel('next');
}
}
crsl.carousel({
interval: false,
pause: true
}).on('slid.bs.carousel', function () {});var barInterval =
setInterval(progressBarCarousel, 30);
crsl.hover(
function(){
clearInterval(barInterval);
},
function(){
barInterval = setInterval(progressBarCarousel, 30);
})
});
</script>
<script>
function app() {
return {
chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
tooltipContent: '',
tooltipOpen: false,
tooltipX: 0,
tooltipY: 0,
showTooltip(e) {
console.log(e);
this.tooltipContent = e.target.textContent
this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
this.tooltipY = e.target.clientHeight + e.target.clientWidth;
},
hideTooltip(e) {
this.tooltipContent = '';
this.tooltipOpen = false;
this.tooltipX = 0;
this.tooltipY = 0;
}
}
}
</script>
<?php
get_footer();?>
 