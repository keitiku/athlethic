var now = new Date();
var point = new Date(2021,6-1,5);
var countdown = Math.ceil( ( point.getTime() - now.getTime() ) / (1000*60*60*24) );
var countup = 0 - countdown;

if(countdown >= 1) {
document.write('緂まであと', countdown , '日！');
}
else if(countdown == 0) {
document.write('緂開催中！');
}
else {
document.write('緂から', countup ,'日経ちました');
}
