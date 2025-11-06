// ============================
// Controle de Login LocalStorage (usando "usuarioLogado")
// ============================

document.addEventListener("DOMContentLoaded", function () {
  const nomeUsuario = localStorage.getItem("usuarioLogado");
  const loginLink = document.getElementById("loginLink");

  if (loginLink && nomeUsuario) {
    // Se o usuário estiver logado
    loginLink.textContent = `Bem-vindo, ${nomeUsuario}`;
    loginLink.href = "#";
    loginLink.style.cursor = "default";

    // Cria o botão "Sair"
    const botaoSair = document.createElement("a");
    botaoSair.textContent = "Sair";
    botaoSair.href = "#";
    botaoSair.id = "logoutBtn";
    botaoSair.style.marginLeft = "10px";
    botaoSair.style.color = "#c9a646";
    botaoSair.style.textDecoration = "none";

    botaoSair.addEventListener("click", function (e) {
      e.preventDefault();
      localStorage.removeItem("usuarioLogado");
      window.location.reload();
    });

    loginLink.insertAdjacentElement("afterend", botaoSair);
  }
});
