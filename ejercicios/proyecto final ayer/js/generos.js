function grande(element) {
    document.getElementById("galeria").src = element.src;
    document.getElementById("pie").firstElementChild.innerHTML = element.alt;
    console.log(element, element.getAttribute('data-property'))
}