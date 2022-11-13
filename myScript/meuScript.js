const btn = document.querySelector("button");
const divMessage = document.querySelector(".alert");

var msg =
  "O Docente poderá alterar dados do calendário\n, já o Discente não terá tal permissão.";

function ativar(msg) {
  const message = document.createElement("p");
  message.classList.add("message");
  message.innerText = msg;

  divMessage.appendChild(message);

  setTimeout(() => {
    message.style.display = "none";
  }, 5000);
}

btn.addEventListener("click", () => {
  ativar(msg);
});
