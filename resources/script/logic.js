//Notif untuk Reload Website

console.log("Debugging");

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

//masi belum fix
function playFungsion(){
  alert('Here We Go!');
}

//masi belum fix
function addFungsion(){
  alert('jangan lupa di tonton yaw :3');
}
