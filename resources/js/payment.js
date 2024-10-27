var btn = document.querySelectorAll(".submit");
btn.forEach((element) => {
    element.addEventListener("click", async function (e) {
        e.preventDefault();
        var form = e.target.parentNode;
        var inputs = form.children;
        var name = inputs[1].innerText;
        var price = inputs[2].innerText;
        var qtd = inputs[3].value;
        const json = JSON.stringify({ name, price, qtd });
        localStorage.setItem("", json);
    });
});
