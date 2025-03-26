/**
 * Arquivo JavaScript principal
 * Contém funções e comportamentos globais do site
 */

// Aguarda o DOM estar completamente carregado
document.addEventListener("DOMContentLoaded", function () {
  // Inicializa tooltips do Bootstrap
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  // Adiciona classe fade-in aos elementos principais
  document.querySelectorAll("main > *").forEach(function (element) {
    element.classList.add("fade-in");
  });

  // Validação do formulário de contato
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      const email = document.getElementById("email").value;
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailRegex.test(email)) {
        e.preventDefault();
        alert("Por favor, insira um e-mail válido.");
        return false;
      }
    });
  }

  // Exibe mensagens de status do formulário
  const urlParams = new URLSearchParams(window.location.search);
  const status = urlParams.get("status");
  if (status) {
    const statusMessages = {
      success: "Mensagem enviada com sucesso!",
      error: "Erro ao enviar mensagem. Tente novamente.",
      invalid_email: "E-mail inválido. Verifique e tente novamente.",
      empty_fields: "Por favor, preencha todos os campos.",
    };

    const message = statusMessages[status] || "Erro desconhecido.";
    const alertDiv = document.createElement("div");
    alertDiv.className = `alert alert-${
      status === "success" ? "success" : "danger"
    } alert-dismissible fade show`;
    alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
    contactForm.insertBefore(alertDiv, contactForm.firstChild);
  }
});

// Função para scroll suave
function smoothScroll(target, duration = 800) {
  const targetElement = document.querySelector(target);
  if (!targetElement) return;

  const targetPosition = targetElement.getBoundingClientRect().top;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  let startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

// Função para debounce
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Exemplo de uso do debounce para eventos de scroll
const handleScroll = debounce(() => {
  // Adicione aqui o código que deve ser executado no scroll
  console.log("Scroll event debounced");
}, 250);

window.addEventListener("scroll", handleScroll);
