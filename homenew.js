document.querySelector("img").addEventListener("click", result);

function result() {
    let toggleAble = document.querySelector('.toggleable');
    toggleAble.classList.toggle('closed-box');
    toggleAble.classList.toggle('opened-box');
}