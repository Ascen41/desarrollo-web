function grande(element) {
    document.getElementById("galeria").src = element.src;
    document.getElementById("pie").childNodes[1].innerHTML = element.alt;
    document.getElementById("pie").childNodes[2].innerHTML = element.getAttribute('data-titulo');
    document.getElementById("pie").childNodes[3].innerHTML = element.getAttribute('data-titulo');

}