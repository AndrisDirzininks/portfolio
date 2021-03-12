if (screen.width>992){
  var s1 = document.
  getElementsByClassName('column-custom')[0];
  var s2 = document.
  getElementsByClassName('column-custom')[1];
  var s3 = document.
  getElementsByClassName('row-custom')[0];

  function select_scroll(e) {
      if (window.scrollY >
        s1.offsetHeight-window.innerHeight) {
          s1.style.position = 'fixed';
          if (window.innerHeight<=s1.offsetHeight)
            s1.style.top=-s1.offsetHeight
            +window.innerHeight+"px";
          else
            s1.style.top="0px";
        } else if (window.scrollY <
        s1.offsetHeight-window.innerHeight) {
          s1.style.position = 'absolute';
          s1.style.top="0px";
        }
  }

  window.onresize = select_scroll;
  document.addEventListener('scroll', select_scroll, false);
}
