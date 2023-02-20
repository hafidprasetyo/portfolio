let baslik = document.title;
window.onblur = () =>
    document.title = "Hai";
window.onfocus = () =>
    document.title = baslik;