$(document).ready(function(){
  // # Alpha Version Logger
  // localStorage.setItem('app_version_owa', parseInt(localStorage.getItem("app_version_owa"))+1)

  // # Image slideshow
  // const siema = new Siema({
  //   selector: '.siema',
  //   duration: 800,
  //   easing: 'ease-out',
  //   perPage: 1,
  //   startIndex: 0,
  //   draggable: true,
  //   multipleDrag: true,
  //   threshold: 20,
  //   loop: true,
  //   rtl: false,
  //   // onInit: () => {},
  //   // onChange: () => {},
  // });
});

document.onreadystatechange = function () {
  var state = document.readyState;

  if (state == 'complete') {
      setTimeout(function(){
        // $("#loading").addClass("hidden");
        if ($("#loader_").length == 1 ) {
          document.getElementById("loader_").setAttribute("hidden", "");
        }
        if ($("#main_").length == 1 ) {
          document.getElementById("main_").removeAttribute("hidden");
        }
      }, 1700);
      document.getElementById("footer").removeAttribute("hidden", "");
  }
};

// document.onreadystatechange = function () {
//   var state = document.readyState;
//   if (state == 'complete') {
//       setTimeout(function(){
//         // $("#loading").addClass("hidden");
//
//       },1700);
//   }
// };
