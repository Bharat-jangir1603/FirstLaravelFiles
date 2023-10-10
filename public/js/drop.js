/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById('myDropdown').classList.toggle('show')
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName('dropdown-content')
    var i
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i]
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show')
      }
    }
  }
}

let search = document.querySelector('#search_inp')
search.onkeyup = () => {
  let xml = new XMLHttpRequest()
  xml.open('get', 'search/' + search.value, true)
  xml.onload = () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status == 200) {
        let data = xml.response
        if(data == 'empty'){
          let warn = 'warn';
          location.href = '/login/'+warn;
        }else{
          document.querySelector('.filee').innerHTML = data;
          location.href = '#filee';
          search.focus();
        }
      }
    }
  }
  xml.send()
}
setTimeout(() => {
  document.querySelector('#alertBox').style.display = 'none';
  
}, 2000);;