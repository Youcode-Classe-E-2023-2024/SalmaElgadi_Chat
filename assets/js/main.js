const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', filterOptions);
function filterOptions() {
    const searchTerm = searchInput.value.toLowerCase();

    Array.from(dropdownContent.children).forEach(option => {
        const optionText = option.textContent.toLowerCase();
        option.style.display = optionText.includes(searchTerm) ? 'block' : 'none';
    });
}