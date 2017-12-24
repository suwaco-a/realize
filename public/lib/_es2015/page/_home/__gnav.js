export default function () {

  //監視対象のセレクター
  const targets = document.querySelectorAll('.main__conts');
  const gnav__link = document.querySelectorAll('.gnav__link');


  //セレクターの数だけ実行
  for (let el of targets){
    observerFn(el);
  }

  //実行内容
  function observerFn(el){

    // オプションを指定
    const options = {
      rootMargin: '20%',　//root（通常はviewpoert）のmargin
      //root: document.querySelector('#all'), // 判定要素(通常はviewpoert)指定
      //threshold: [0, 0.5, 1] //発火のタイミング(通常は、0=bttom/1=top)
    }

    // IntersectionObserverオブジェクトを作成
    const observer = new IntersectionObserver((entry) => {

      let e = entry[0];

      if(e.isIntersecting == true){
        for (let linkitem of gnav__link){
          linkitem.classList.remove('js-inview');
        }
      }else{
        e.target.classList.remove('js-inview')
        for (let linkitem of gnav__link){
          linkitem.classList.add('js-inview');
        }
      }
    }, options);

    // 監視したい要素をobserve
    observer.observe(el);
  };


};
