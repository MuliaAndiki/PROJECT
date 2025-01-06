//Notif untuk Reload Website
alert('RELOAD ANJAYY');

let searchicon = document.getElementById('search-icon');
let searchinput = document.querySelector('.search input');

//membuka placeholder icon search
searchicon.addEventListener('click', function(){
  if (searchinput.style.display === 'none' || searchinput.style.display === ''){
    searchinput.style.display = 'block';
  } else {
    searchinput.style.display = 'none';
  }
}); 

//menutup input jika klik di luar icon
window.addEventListener('click', function(event){
  if (event.target !== searchicon && !searchinput.contains(event.target)){
    searchinput.style.display = 'none';
  }
});