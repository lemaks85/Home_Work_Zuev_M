function hello() {
    let name = prompt("Введите ваше имя");
    if(name == null || name == ""){
        alert("Как невежливо не представляться!");
    } else {
        alert(`Привет, ${name}! Приятно познакомится!`);
    }
}

window.addEventListener('load', function(event) {
    hello();
});