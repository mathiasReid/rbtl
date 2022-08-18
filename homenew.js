document.querySelector('closed-box').addEventListener("click", result);

function result() {
    let toggleAble = document.querySelectorAll('.toggleable');

    for (let x of toggleAble) {
        x.classList.toggle('active');
    }

}