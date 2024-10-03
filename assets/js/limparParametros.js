function clearUrlParameters() {
        // Limpa os parâmetros da URL
        const url = new URL(window.location.href);
        url.searchParams.delete('success'); // Remove o parâmetro 'success'
        window.history.replaceState({}, document.title, url); // Atualiza a URL no navegador
}