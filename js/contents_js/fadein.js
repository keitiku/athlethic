/* 到達したら要素を表示させる */
function showElementAnimation() {

  var box_gen = document.getElementsByClassName('js-fadein');
  if(!box_gen) return; // 要素がなかったら処理をキャンセル

  var showTiming = window.innerHeight > 768 ? 200 : 80; // 要素が出てくるタイミングはここで調整
  var scrollY = window.pageYOffset; //スクロール量を取得
  var windowH = window.innerHeight; //ブラウザウィンドウのビューポート(viewport)の高さを取得

  for(var i=0;i<box_gen.length;i++) {
    var elemClientRect = box_gen[i].getBoundingClientRect();
    var elemY = scrollY + elemClientRect.top;
    if(scrollY + windowH - showTiming > elemY) {
      box_gen[i].classList.add('is-show');
    } else if(scrollY + windowH < elemY) {
    // 上にスクロールして再度非表示にする場合はこちらを記述
      box_gen[i].classList.remove('is-show');
    }
  }
}
showElementAnimation();
window.addEventListener('scroll', showElementAnimation);
