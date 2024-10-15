var orderList = [];
var btn = document.querySelectorAll(".submit");

const res = async (j) => {
    // Captura o token CSRF
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    const req = await fetch("http://127.0.0.1:8000/menu", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Adiciona o token CSRF aqui
        },
        body: j, // O corpo ainda será o JSON
    });

    const text = await req.text(); // Pega a resposta como texto para debugar
    console.log(text); // Loga o texto para checar

    try {
        return JSON.parse(text); // Tenta fazer o parse se for JSON válido
    } catch (error) {
        console.error("Erro ao fazer parse do JSON:", error);
        return null;
    }
};

btn.forEach((element) => {
    element.addEventListener("click", async function (e) {
        e.preventDefault();
        var form = e.target.parentNode;
        var inputs = form.children;
        var name = inputs[1].innerText;
        var price = inputs[2].innerText;
        var qtd = inputs[3].value;
        const json = JSON.stringify({ name, price, qtd });
        var result = await res(json);
        console.log(result);
    });
});