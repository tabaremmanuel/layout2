initILF();
document.querySelector('.btn-arr-down').addEventListener('click',() => {
  scrollIt(document.querySelector('.section-2'),900,'linear','');
});
function updateElemClass(a,b){
  for(var i = 0; i < a.length; i++) {
    var as = a[i];
    if(b==0){
      as.classList.remove('d-none');
      if(as.hasChildNodes())
        updateElemClass(as.children,0);
    }else{
      as.classList.add('d-none');
      if(as.hasChildNodes())
        updateElemClass(as.children,1);
    }
  }
}
function openNav() {
  setTimeout(()=>{updateElemClass(document.getElementById('mySidenav').children,0)},400);
  document.getElementById('main').classList.add('open');
  document.getElementById("mySidenav").style.width = "320px";
}
function closeNav() {
  initILF();
  document.getElementById('main').classList.remove('open');
  document.getElementById("mySidenav").style.width = "0";
}
function initILF(){
  updateElemClass(document.getElementById('mySidenav').children,1);
}
function scrollIt(e,n=200,t="linear",o){const i={linear:e=>e},m=window.pageYOffset,c="now"in window.performance?performance.now():(new Date).getTime(),d=Math.max(document.body.scrollHeight,document.body.offsetHeight,document.documentElement.clientHeight,document.documentElement.scrollHeight,document.documentElement.offsetHeight),r=window.innerHeight||document.documentElement.clientHeight||document.getElementsByTagName("body")[0].clientHeight,w="number"==typeof e?e:e.offsetTop,a=Math.round(d-w<r?d-r:w);if("requestAnimationFrame"in window==!1)return window.scroll(0,a),void(o&&o());!function e(){const d="now"in window.performance?performance.now():(new Date).getTime(),r=Math.min(1,(d-c)/n),w=i[t](r);window.scroll(0,Math.ceil(w*(a-m)+m)),window.pageYOffset!==a?requestAnimationFrame(e):o&&o()}()}
