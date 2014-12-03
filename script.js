// This will bold and change the color of the first letter of every word in the "Japanese Online Self-Help Utility"

window.onload = function(){
  var element = document.getElementById("main-header")
  element.innerHTML = element.innerHTML.replace(/\b([a-z])([a-z]+)?\b/gim, "<span class='first-letter'>$1</span>$2")
}