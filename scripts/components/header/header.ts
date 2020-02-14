const Header = (() => {

  const initialize = () => {
    document.addEventListener('DOMContentLoaded', function(){ 
      addLogic();
    }, false);
  }

  const addLogic = () => {
    var test = 'test string';
    console.log(test);
  }


  return {
    initialize,
  }
})();

Header.initialize();




