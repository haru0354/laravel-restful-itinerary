function toggleContent(id) {
    const content = document.getElementById(id);
    const button = document.querySelector(`button[onclick="toggleContent('${id}')"]`);

    content.classList.toggle('hidden');

    if (content.classList.contains('hidden')) {
        button.innerText = '🔽 補足情報を表示 🔽';
    } else {
        button.innerText = '🔼 補足情報を隠す 🔼';
    }
}

window.toggleContent = toggleContent;